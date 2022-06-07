<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function print_data(){
        echo "1";
        echo "1";
        echo "1";
        echo "1";
        echo "1";
        echo "1";
        echo "1";
    }

    public function printData($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        //exit();
    }
}
