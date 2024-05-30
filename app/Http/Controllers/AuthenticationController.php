<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthenticationController extends Controller
{
    //
    public function store(request $request){
        //dd($request->only("name","email","password"));
        $data = $request->only("name","email","password");
        //insert

        //1.Querybuilder
        //.Elequent ORM
        User::create($data);
        //with success() method will create session variable of name success
        return redirect('/register')->withSuccess("User Registered Succesfully");
    }
// public function method(class classObject)
    public function login(request $request){ //$request object is recieving data 
        //dd($request->only('email','password'));
        $credentials = $request->only('email','password');
        //$credintials is an assciation array
        //$credintials is not a classsObject co->method()

        $user = User::where('email', $credentials['email'])->first();
        //dd($user->name);
        if (Auth::attempt($credentials)) {
            //true
            $request->session()->regenerate();
            
            //i want to create session variable 
          //classObject->nethod1()->method2(arg1,arg2)  
            $request->session()->put('username',$user->name);
            return redirect()->intended('dashboard');
        }
            return back()->withErrors([
            'email' => 'Invalid Credentials',
        ])->onlyInput('email');
    }
}
