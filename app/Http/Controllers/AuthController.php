<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    /*
    * display "top page"
    */
    public function index()
    {
        return view('index');
    }
}