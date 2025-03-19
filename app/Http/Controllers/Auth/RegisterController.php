<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        dd($request->all());
        // TO DO: Sesuain variabel validasi sama backend    
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'fullName' => 'required|string|max:255',
            'birthDate' => 'required|date',
            'phoneNumber' => 'required|string|max:15',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
            'privacy_policy' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput($request->except('password', 'password_confirmation'));
        }

        try {
            // TO DO: Buat logic bikin user 


            return redirect()->route('login')->with('success', 'Account created successfully!');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Something went wrong. Please try again.')
                ->withInput($request->except('password', 'password_confirmation'));
        }
    }
}