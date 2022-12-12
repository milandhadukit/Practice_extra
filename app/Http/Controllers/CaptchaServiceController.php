<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaptchaServiceController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }
    public function capthcaFormValidate(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'captcha' => 'required|captcha'
        ]);
        return "okk";
    }
    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
