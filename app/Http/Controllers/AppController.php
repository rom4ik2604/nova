<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Lavary\Menu\Menu;

class AppController extends Controller
{

    public function index()
    {
        return view('index');
    }
}
