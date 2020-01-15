<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Admins extends Authenticatable
{
    //
    use Notifiable;
    
    protected $table = 'admins';

    protected $fillable = [
        'username', 'password',
    ];

    protected $hidden = [
        'password',
    ];
}
