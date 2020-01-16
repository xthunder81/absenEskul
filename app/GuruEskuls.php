<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuruEskuls extends Model
{
    //
    protected $table = 'guru_eskuls';

    protected $fillable = [
        'nip', 'password', 'nama_guru',
    ];

    protected $hidden = [
        'password',
    ];
}
