<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NopaymentController extends Controller
{
    public function index(){
        return view('front-end.nopayment');
    }
}
