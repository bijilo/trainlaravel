<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaksiModel;

class transaksiController extends Controller
{
    //
    public function store(){
        $data = new transaksiModel;
        return \Response::json($data->getData(), 200);
    }
}
