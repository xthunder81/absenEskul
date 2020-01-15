<?php

namespace App\Http\Controllers\Admin;

use App\Admins;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\Auth\LoginController as DefaultLoginController;

class LoginAdminContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $redirectTo = '/admin/home';

    public function __construct()
    {
        $this->middleware('guest:admins')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login.admins');
    }    
    
    public function username()
    {
        return 'username';
    }    
    
    protected function guard()
    {
        return Auth::guard('admins');
    }

    public function index()
    {
        //
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function show(Admins $admins)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function edit(Admins $admins)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admins $admins)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admins $admins)
    {
        //
    }
}
