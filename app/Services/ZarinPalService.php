<?php

namespace App\Services;

//require('../../vendor/zarinpal/zarinpal/src/Zarinpal.php');

use App\Traits\ConsumesExternalServiceTrait;
use App\Events\PaymentReferrerBonus;
use Spatie\Backup\Listeners\Listener;
use Illuminate\Http\Request;
use App\Services\Statistics\UserService;
use App\Events\PaymentProcessed;
use App\Models\Payment;
use App\Models\PrepaidPlan;
use App\Models\SubscriptionPlan;
use App\Models\User;

class ZarinPalService
{
    use ConsumesExternalServiceTrait;

    protected $baseURI;
    protected $clientID;
    protected $clientSecret;
    private $api;

    private $merchantID;
    private $sandbox;

    public function __construct()
    {

        $this->merchantID = config('services.zarinpal.merchantID');
        $this->sandbox = config('services.zarinpal.sandbox');


    }



    public function handlePaymentSubscription(Request $request, SubscriptionPlan $id)
    {

        if (!$id->zarinpal_gateway_plan_id) {
            toastr()->error(__('Zarinpal plan id is not set. Please contact the support team'));
            return redirect()->back();
        }


        if ($this->sandbox == 'on') {
            $url = 'https://sandbox.zarinpal.com/pg/rest/WebGate/PaymentRequest.json';
            $header = 'Location: https://sandbox.zarinpal.com/pg/StartPay/';
        } else {
            $url = 'https://www.zarinpal.com/pg/rest/WebGate/PaymentRequest.json';
            $header = 'Location: https://www.zarinpal.com/pg/StartPay/';
        }

        $price = $id->price;
        $data = array(
            'MerchantID' => $this->merchantID,
            'Amount' => (int) $price,
            'CallbackURL' => route('user.payments.subscription.zarinpal', ['plan_id' => $id->id, 'price' => $id->price]),
            'Description' => $id->plan_name
        );


        $jsonData = json_encode($data);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_USERAGENT, 'ZarinPal Rest Api v1');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($jsonData)
            )
        );


        $result = curl_exec($ch);
        $err = curl_error($ch);
        $result = json_decode($result, true);
        curl_close($ch);


        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            if (empty($result['errors'])) {
                if ($result['Status'] == 100) {
                    header($header . $result["Authority"]);
                }
            } else {
                toastr()->error($result["Status"]);
            }
        }

    }


    public function handlePaymentPrePaid(Request $request, PrepaidPlan $id)
    {
        $tax_value = (config('payment.payment_tax') > 0) ? $tax = $id->price * config('payment.payment_tax') / 100 : 0;
        $total_value = $tax_value + $id->price;

        if ($this->sandbox == 'on') {
            $url = 'https://sandbox.zarinpal.com/pg/rest/WebGate/PaymentRequest.json';
            $header = 'Location: https://sandbox.zarinpal.com/pg/StartPay/';
        } else {
            $url = 'https://www.zarinpal.com/pg/rest/WebGate/PaymentRequest.json';
            $header = 'Location: https://www.zarinpal.com/pg/StartPay/';
        }

        $price = $id->price;
        $data = array(
            'MerchantID' => $this->merchantID,
            'Amount' => (int) $price,
            'CallbackURL' => route('user.payments.approved.zarinpal', ['plan_id' => $id->id, 'price' => $id->price]),
            'Description' => $id->plan_name
        );


        $jsonData = json_encode($data);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_USERAGENT, 'ZarinPal Rest Api v1');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($jsonData)
            )
        );


        $result = curl_exec($ch);
        $err = curl_error($ch);
        $result = json_decode($result, true);
        curl_close($ch);


        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            if (empty($result['errors'])) {
                if ($result['Status'] == 100) {
                    header($header . $result["Authority"]);
                }
            } else {
                toastr()->error($result["Status"]);
            }
        }
    }


    public function handleApproval(Request $request)
    {

        
        if ($this->sandbox == 'on') {
            $url = 'https://sandbox.zarinpal.com/pg/rest/WebGate/PaymentVerification.json';
        } else {
            $url = 'https://api.zarinpal.com/pg/v4/payment/verify.json';
        }

        $MerchantID = $this->merchantID;
        $Authority = $request->Authority;
        $price = $request->price;


        $data = array("MerchantID" => $MerchantID, "Authority" => $Authority, "Amount" => (int) $price);
        $jsonData = json_encode($data);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_USERAGENT, 'ZarinPal Rest Api v1');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($jsonData)
            )
        );

        $result = curl_exec($ch);
        $err = curl_error($ch);
        curl_close($ch);
        $result = json_decode($result, true);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            if ($result['Status'] == 100 || $result['Status'] == 101) {
                //
                    $approvalID = $result['RefID'];
                    $plan = PrepaidPlan::where('id', $request->plan_id)->firstOrFail();

                    $record_payment = new Payment();
                    $record_payment->user_id = auth()->user()->id;
                    $record_payment->order_id = $approvalID;
                    $record_payment->plan_id = $plan->id;
                    $record_payment->plan_name = $plan->plan_name;
                    $record_payment->price = $request->price;
                    $record_payment->currency = 'Toman';
                    $record_payment->gateway = 'ZarinPal';
                    $record_payment->frequency = 'prepaid';
                    $record_payment->status = 'completed';
                    $record_payment->words = $plan->words;
                    $record_payment->images = $plan->images;
                    $record_payment->save();

                    //$group = (auth()->user()->hasRole('admin'))? 'admin' : 'subscriber';

                    $user = User::where('id', auth()->user()->id)->first();
                    //$user->syncRoles($group);    
                    //$user->group = $group;
                    //$user->plan_id = $plan->id;
                    $user->available_words_prepaid = $user->available_words_prepaid + $plan->words;
                    $user->available_images_prepaid = $user->available_images_prepaid + $plan->images;
                    $user->save();

                    event(new PaymentProcessed(auth()->user()));
                    $order_id = $approvalID;

                    return view('user.plans.success', compact('plan', 'order_id'));
                
                //
            } else {
                toastr()->error(__('Payment was not successful, please try again' . $result['Status']));
                return redirect(route('user.prepaid.checkout', ['id' => $request->plan_id]));
            }
        }
    }


    public function createOrder($value, $currency)
    {
        return $this->makeRequest(
            'POST',
            '/v2/checkout/orders',
            [],
            [
                'intent' => 'CAPTURE',
                'purchase_units' => [
                    0 => [
                        'amount' => [
                            'currency_code' => strtoupper($currency),
                            'value' => round($value * $factor = $this->resolveFactor($currency)) / $factor,
                        ]
                    ]
                ],
                'application_context' => [
                    'brand_name' => config('app.name'),
                    'shipping_preference' => 'NO_SHIPPING',
                    'user_action' => 'PAY_NOW',
                    'return_url' => route('user.payments.approved'),
                    'cancel_url' => route('user.payments.cancelled'),
                ]
            ],
            [],
            $isJSONRequest = true,
        );
    }


    public function capturePayment($approvalID)
    {
        return $this->makeRequest(
            'POST',
            "/v2/checkout/orders/{$approvalID}/capture",
            [],
            [],
            [
                'Content-Type' => 'application/json'
            ]
        );
    }


    public function resolveFactor($currency)
    {
        $zeroDecimanCurrency = ['JPY'];

        if (in_array(strtoupper($currency), $zeroDecimanCurrency)) {
            return 1;
        }

        return 100;
    }


    public function createSubscription(SubscriptionPlan $id, $name, $email)
    {

        return $this->makeRequest(
            'POST',
            '/v1/billing/subscriptions',
            [],
            [
                'plan_id' => $id->paypal_gateway_plan_id,
                'subscriber' => [
                    'name' => [
                        'given_name' => $name,
                    ],
                    'email_address' => $email,
                ],
                'application_context' => [
                    'brand_name' => config('app.name'),
                    'shipping_preference' => 'NO_SHIPPING',
                    'user_action' => 'SUBSCRIBE_NOW',
                    'return_url' => route('user.payments.subscription.approved', ['plan_id' => $id->id]),
                    'cancel_url' => route('user.payments.subscription.cancelled'),
                ]
            ],
            [],
            $isJSONRequest = true,
        );
    }


    public function stopSubscription($subscriptionID)
    {
        return $this->makeRequest(
            'POST',
            '/v1/billing/subscriptions/' . $subscriptionID . '/cancel',
            [],
            [
                'reason' => 'Just want to unsubscribe'
            ],
            [],
            $isJSONRequest = true,
        );
    }


    public function validateSubscriptions(Request $request)
    {

        if (session()->has('subscriptionPlatformID')) {
            $subscriptionID = session()->get('subscriptionPlatformID');

            session()->forget('subscriptionPlatformID');

            return 9 == $subscriptionID;
        }

        return false;
    }

}