<?php

namespace App\Models;
use App\Models\Wallet;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Http;

class Admin extends Authenticatable
{

    use HasFactory;
    use Notifiable;
    use HasProfilePhoto;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
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
     * The attributes that should be cast to native types.
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
    public function getBtcValue() {
        $address = Admin::get()->first()->bitcoin_address;
        $btc_value = Http::get('https://block.io/api/v2/get_address_balance/?api_key=9ddf-a0eb-3f90-7374&addresses='.$address);
        return $btc_value['data']['available_balance'];
    }
    public function getLcValue() {
        $address = Admin::get()->first()->litecoin_address;
        $lc_value = Http::get('https://block.io/api/v2/get_address_balance/?api_key=2d15-76c5-39d7-51c2&addresses='.$address);
        return $lc_value['data']['available_balance'];
    }

    public function getDcValue() {
        $address = Admin::get()->first()->dogecoin_address;
        $lc_value = Http::get('https://block.io/api/v2/get_address_balance/?api_key=17b5-7e2c-10f1-9eea&addresses='.$address);
        return $lc_value['data']['available_balance'];
    }


}
