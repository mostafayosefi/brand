<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name', 'email', 'password', 'username', 'tell', 'address', 'image',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];



    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
    public function wallet()
    {
        return $this->belongsTo(Wallet::class);
    }
    public function domain()
    {
        return $this->belongsTo(Wallet::class);
    }


    public function tickets()
    {
        return $this->hasMany(Ticket::class , 'user_id' );
    }


    public function discriptionorders()
    {
        return $this->hasMany(Discriptionorder::class , 'user_id' );
    }


    public function renews()
    {
        return $this->hasMany(Renew::class);
    }

    public function transfers()
    {
        return $this->hasMany(Transfer::class);
    }

    public function changenameserves()
    {
        return $this->hasMany(ChangeNameServer::class);
    }



    public function apiwebservice()
    {
        return $this->hasOne(Apiwebservice::class);
    }




    public function requestbrands()
    {
        return $this->hasMany(Requestbrand::class , 'user_id' );
    }


    public function company_requests()
    {
        return $this->hasMany(CompanyRequest::class , 'user_id' );
    }



}
