<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaptchaVerify extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

     public function store(Request $request) {

        // validating re-captcha
        $this->validate($request, [
            'g-recaptcha-response' => 'required|captcha'
        ]);

        return $request->all();
    }

}