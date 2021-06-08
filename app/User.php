<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
    public function likes() { // 👈 追加

        return $this->hasMany(\App\Like::class, 'parent_id', 'id')
            ->where('model', self::class);

    }
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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * userに所属する役目を取得
     */
    public function roles()
    {
        return $this->belongsToMany('App\Role', 'user_role');
    }

    /**
     * 従業員を取得
     */
    public function employee()
    {
        return $this->hasOne('App\Employee');
    }
}
