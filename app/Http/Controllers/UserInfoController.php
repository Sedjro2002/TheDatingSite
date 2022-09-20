<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserInfo;
use App\Http\Requests\storeInfoRequest;
use Illuminate\Support\Facades\Session;


class UserInfoController extends Controller
{
    public function create(){
        return view('questionnary');
    }

    public function storeInfo(Request $request){

        // $request->validate([
        //     'firstname'=>'required|bail',
        //     'lastname'=>'required|bail',

        //     'description'=>'required|bail',

        // ]);

        // dd($request->all());
        $userInfo= new UserInfo();

        $userInfo->users_id = Session::get('userSession')['id'];
        $userInfo->firstname = $request->firstname;
        $userInfo->lastname = $request->lastname;
        $userInfo->sex=$request->sex;
        $userInfo -> description = $request->description;
        $userInfo -> choice1 = $request->choice1;
        $userInfo -> choice2 = $request->choice2;
        $userInfo -> choice3 = $request->choice3;
        $userInfo -> choice4 = $request->choice4;
        $userInfo -> choice5 = $request->choice5;
        $userInfo -> choice6 = $request->choice6;
        $userInfo -> choice7 = $request->choice7;
        $userInfo -> choice8 = $request->choice8;
        $userInfo -> choice9 = $request->choice9;
        $userInfo -> choice10 = $request->choice10;
        $userInfo->save();

        return view('profil', compact('userInfo'));

    }

}
