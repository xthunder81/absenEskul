<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->session()->has('login_name')){
            $session = $request->session()->all();
            $admin = Admins::where(['username' => $session['login_username'],
                                 'password' => $session['login_password']
                                ])->first();
            if(!$admin){
                $request->session()->flash('status', 'Silahkan Login Terlebih Dahulu!!');
                return redirect('/');
            }
        }
        else{  
            $request->session()->flash('status', 'Silahkan Login Terlebih Dahulu!!');
            return redirect('/');
        }
        return $next($request);
    }
}
