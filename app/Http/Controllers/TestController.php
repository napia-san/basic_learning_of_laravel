<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TestPostRequest;

class TestController extends Controller
{
    /*
    * display "top page"
    */
    public function index()
    {
        return view('test.index');
    }
    
    public function input(TestPostRequest $request)
    {
        // validate済

        // データの取得
        $validatedData = $request->validated();
        
        //
        //var_dump($validatedData); exit;
        
        return view('test.input', ['datum' => $validatedData]);
    }
}