<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    /*
    * display "top page"
    */
    public function index()
    {
        return view('welcome');
    }
    
    /*
    * display "second_page"
    */
    public function second()
    {
        return view('welcome_second');
    }
}