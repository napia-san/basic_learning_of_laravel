<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginPostRequest;

class AuthController extends Controller
{
    /*
    * display "top page"
    */
    public function index()
    {
        return view('index');
    }
    
    /*
    * login
    */
    public function login(LoginPostRequest $request)
    {
        // validate済

        // データの取得
        $datum = $request->validated();

        //
        var_dump($datum); exit;
    }
}