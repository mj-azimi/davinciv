<?php
namespace Api;

use Illuminate\Support\Facades\Http;

class Numberland{

    private static $instance = null;


    private $baseUrl;


    public function __construct(){

        $NUMBERLAND_API = env('NUMBERLAND_API');
        $this->baseUrl = "https://api.numberland.ir/v2.php/?apikey={$NUMBERLAND_API}";
    }




    public function getinfo(){
        $response = Http::get($this->baseUrl.'&method=getinfo&service=72');
        return $response->body();
    }

    public function getcountry(){
        $response = Http::get($this->baseUrl.'&method=getcountry');
        return $response->body();
    }



    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Numberland();
        }
        return self::$instance;
    }


}
