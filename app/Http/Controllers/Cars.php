<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Car;
use Illuminate\View\View;

class Cars extends Controller
{
    public function index()
    {
       $view = view('index');
       echo $view->render();
    }
}
