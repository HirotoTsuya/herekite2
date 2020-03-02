<?php

namespace App;

//use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract;
use App\Notifications\CustomResetPassword;
use App\Notifications\VerifyEmail;
use App\Notifications\ResetPassword; 
use App\Notifications\CustomVerifyEmail;
use Illuminate\Auth\MustVerifyEmail;



class User extends Authenticatable implements MustVerifyEmailContract
{
    use MustVerifyEmail, Notifiable;
    
    
    public function sendEmailVerificationNotification()
    {
         $this->notify(new CustomVerifyEmail());
    }
    
  
    
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CustomResetPassword($token));
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
}
