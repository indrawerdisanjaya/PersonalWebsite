<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortofolioPageController extends Controller
{
    public function index(){
        //
        return view('portofolio', ['page'=>3]);
    }
}
