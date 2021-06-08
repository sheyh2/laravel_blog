<?php

namespace App\Http\Controllers\Web;

use Illuminate\Routing\Controller as BaseController;

class MainController extends BaseController
{
    public function index()
    {
        return view('home');
    }
}