<?php

namespace App\Http\Controllers;
use App\Http\Requests\createUserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        return view('signInUp');
    }

    public function createUser(createUserRequest $request){
        dd($request->all());
        return view('questionnary');

    }


}
