<?php

namespace App\Http\Controllers\Siswa;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiswaLoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    // protected $redirectTo = 'siswa/LoginSiswa';
    
    public function login(Request $request)
    {
        $user = User::where(['nis' => $request->nis,
                            'password' => $request->password
                            ])->first();

        if($user) {
            session(['login_nis' => $user->nis,
                    'login_id' => $user->id,
                    'login_password' => $user->password,
                    'login_name' => $user->nama_siswa,
                    'login_kelas' => $user->kelas,
            ]);
            $request->session()->flash('status', 'Login Sukses');
            return redirect('/test');
        }
        else {
            $request->session()->flash('status', 'Masukkan Password dengan Benar!!');
			return redirect('/siswa');
        }
    }

    function logout(Request $request){
        $request->session()->flush();
        return redirect();
   }
}
