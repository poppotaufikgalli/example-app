<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
//use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller;

use App\Models\Kursi;
use App\Models\Meja;

class IbuController extends Controller
{
    //use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /*
    public function index(){
        $data = [
            "tempat" => "Senggarang",
            "pukul"  => "08",
            "tanggal" => Date('Y-m-d H:i:s')
        ];

        //$this->printData($data);
        //$this->print_data();
        return view('ibu');
    }*/

    public function index()
    {
        $result = Meja::get();
        $result = Meja::first();
        $this->printData($result);
        //return view('main', $result);
    }

    public function index2()
    {
        $result = Kursi::get();
        return view('main2', $result);
    }
}
