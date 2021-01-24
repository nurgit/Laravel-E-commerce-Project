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
        'name','type','mobile','email','password','image','status','created_at','updated_at',
    ];
    protected $hidden=[
        'password','remember_token',
    ];

}
