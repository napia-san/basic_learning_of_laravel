<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    /*
    * display "task list"
    */
    public function list()
    {
        return view('task.list');
    }
}