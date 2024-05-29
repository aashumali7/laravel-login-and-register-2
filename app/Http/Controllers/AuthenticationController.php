<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return back()->withInput();
    }
}
