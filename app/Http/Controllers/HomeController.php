<?php

namespace App\Http\Controllers;

use Api\Numberland;
use App\Models\NumberlandCountry;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index(){

        $getcountry = Numberland::getInstance()->getcountry();

        return view('home');
    }


    public function virtualNumber(){

        $getinfo =  Numberland::getInstance()->getinfo();

        $contry = NumberlandCountry::all();



        $getinfo = collect( json_decode($getinfo) )->map(function($item) use ($contry){
            $item->country  = $contry->where('id',$item->country)->first()->name;

            return $item;
        });

        echo $getinfo;
    }

}
