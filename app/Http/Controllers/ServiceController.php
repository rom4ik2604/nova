<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends AppController
{
    public function index()
    {
        return view('services',['services' => Service::all()]);
    }
}
