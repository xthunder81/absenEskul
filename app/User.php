<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    //
    protected $table = 'users';

    protected $fillable = [
        'nis', 'password','nama_siswa',
    ];

    protected $hidden = [
        'password',
    ];
}
