<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterPost;
use App\Models\User as UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /*
    * display "registration page"
    */
    public function index()
    {
        return view('user.register');
    }

    /*
    * registration
    */
    public function register(UserRegisterPost $request)
    {
        // validate済
    
        // データの取得
        $datum = $request->validated();
        
        $datum['password'] = Hash::make($datum['password']);
        
        try {
            $r = UserModel::create($datum);
        } catch(\Throwable $e) {
            echo $e->getMessage();
            exit;
        }
        
        $request->session()->flash('front.user_register_success', true);
        
        return redirect()->intended('/');
    }
}