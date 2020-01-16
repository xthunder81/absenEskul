<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminHomeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:admins');
    }    
    
    public function index()
    {
        return view('home.admins');
    }
}
