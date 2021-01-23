<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\fundation\Auth\User as Authenticatable;//use for gard
use Illuminate\Database\Eloquent\Model;////use for gard

class admin extends Authenticatable
{
    use Notifiable;
    protected $guard = 'admin';
    protected $fillable= [
        'name','email','password',
    ];
    protected $hidden=[
        'password','remember_token',
    ];

}
