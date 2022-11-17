<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use App\Models\esp32data;
use Illuminate\Support\Carbon;

class usageController extends Controller
{
    public function store(){

        try{

            $esp32data = new esp32data;

            $esp32data->reading_time = time();

            $esp32data->date = date('Y-m-d H:i:s');
            $esp32data->save();
            return Response()->json([
                'message'=>'all is good',
                'status'=>200
            ]);


        }catch(\Exception $e){

            return Response()->json([
                'message'=>'all is not good',
                'status'=>200,
                '4'=>$e
            ]);
        }

    }
    public function getData (){


    }


}

