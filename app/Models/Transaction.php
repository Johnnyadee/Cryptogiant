<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Wallet;
class Transaction extends Model
{
    use HasFactory;

    public function getAddress() {
        $wallet = Wallet::where('user_id', $this->user_id)->first();
        if($this->coin == 'BTC') {
            return $wallet->bitcoin_address;
        }
        else if($this->coin == 'LTC') {
            return $wallet->litecoin_address;
        }
        else if($this->coin == 'DGC') {
            return $wallet->dogecoin_address;
        }

    }
}
