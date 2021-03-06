<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function userAuths()
    {
        return $this->hasMany(UserAuth::class);
    }

    public function wechatAuth()
    {
        return $this->hasOne(UserAuth::class)->where('type', 'wechat');
    }
}
