<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;

class ControllerPerusahaan extends Controller
{
    function getAllPerusahaan(){
        $data=Perusahaan::all();
        return view ("perusahaan",[
            "dataPerusahaan" => $data
        ]);
    }
}
