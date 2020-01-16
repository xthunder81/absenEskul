<?php

namespace App\Http\Controllers\Guru;

use App\GuruEskuls;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginGuruController extends Controller
{
    public function login(Request $request)
    {
        $guru = GuruEskuls::where(['nip' => $request->nip,
                            'password' => $request->password
                            ])->first();

        if($guru) {
            session(['login_nip' => $guru->nip,
                    'login_id' => $guru->id,
                    'login_password' => $guru->password,
                    'login_name' => $guru->nama_guru,
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
        return redirect('/');
   }
}
