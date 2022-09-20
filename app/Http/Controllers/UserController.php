<?php

namespace App\Http\Controllers;
use App\Http\Requests\createUserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create(){
        return view('signInUp');
    }

    public function createUser(createUserRequest $request){
        // dd($request->all());
        $user = new User();
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        Session::put('userSession', [
            'id' => $user->id,	
            'email' => $user->email,
        ]);

        // return redirect()->route('welcome')->with('success', 'User created successfully');

        return view('questionnary')->with('success', 'User created successfully');

    }

    // public function logout(){
    //     Session::forget('userSession');
    //     return redirect()->route('welcome');
    // }

    // public function loginUser(Request $request){
    //     $request->validate([
    //         'email'=>'required|bail|email',
    //         'password'=>'required|bail|min:8',
    //     ]);
    //     if  (User::where('email', $request->email)->first()){
    //         $user = User::where('email', $request->email)->first();
    //         if ($user->password == $request->password){
    //             Session::put('userSession', [
    //                 'id' => $user->id,	
    //                 'email' => $user->email,
    //             ]);
    //             return redirect()->route('profil');
    //         }else{
    //             return redirect()->route('welcome')->with('error', 'Wrong password');
    //         }
    //     };

    //     return view('login');
    // }


}
