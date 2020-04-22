<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class captchaController extends Controller
{
    //

   function myCaptcha(){

    	return view('myCaptcha');
    }

    function myCaptchaPost(Request $request){

    	        $request->validate([
    	        	'captcha'=>'required|captcha'
    	        ],['captcha.captcha'=>'Invalid captcha code.']);

    	    	return view('index');

    }

    function myCaptchaRefresh(){

    	    	return response()->json(['captcha'=>captcha_img()]);

    }
}
