<?php

namespace App\Http\Middleware;
use App\User;
use Closure;

class CheckUser
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
        if($request->session()->has('login_name')) {
            $session = $request->session->all();
            $user = User::where(['nis' => $session['login_nis'],
                                'password' => $session['login_password']
                                ])->first();
            
            if(!$user){
                $request->session()->flash('status', 'Silahkan Login Terlebih Dahulu!!');
                return redirect('/');
            }
        }
        else{  
            $request->session()->flash('status', 'Silahkan Login Terlebih Dahulu!!');
            return redirect('');
        }
        return $next($request);
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect ('/');
    }
}
