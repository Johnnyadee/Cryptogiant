<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use App\Models\Wallet;
use App\Models\Transaction;
use App\Models\Price;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard() {
        $orders = Transaction::where('user_id', Auth::user()->id)->get();
        return view('user.dashboard', ['orders' => $orders]);
    }

    public function kycProfile() {

        return view('user.kyc-profile');
    }

    public function userAccountSetup(Request $request) {
        $user = Auth::user();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->dob = $request->dob;
        $user->address_one = $request->address_one;
        $user->address_two = $request->address_two;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->nationality = $request->nationality;
        $user->zip_code = $request->zip_code;
        $user->zip_code = $request->zip_code;
        $user->user_status = 2;

        $user->save();
        $check_wallet = Wallet::where('user_id', $user->id)->first();
        if($check_wallet) {

        }
        else {
            $btc_response = Http::get('https://block.io/api/v2/get_new_address/?api_key=9ddf-a0eb-3f90-7374');
            $lc_response = Http::get('https://block.io/api/v2/get_new_address/?api_key=2d15-76c5-39d7-51c2');
            $dc_response = Http::get('https://block.io/api/v2/get_new_address/?api_key=17b5-7e2c-10f1-9eea');
            $wallet = new Wallet;
            $wallet->user_id = $user->id;
            $wallet->bitcoin_address = $btc_response['data']['address'];
            $wallet->litecoin_address = $lc_response['data']['address'];
            $wallet->dogecoin_address = $dc_response['data']['address'];
            $wallet->save();
        }


        return redirect()->route('dashboard');

    }
    public function userAccountSetupOne(Request $request) {
        $user = Auth::user();
        $user->name = $request->name;
        $user->phone_number = $request->phone_number;
        $user->dob = $request->dob;
        $user->nationality = $request->nationality;


        $user->save();

        return redirect()->route('user_cg_profile')->with('success_message', 'Your Profile was updated successfully');

    }
    public function userAccountSetupTwo(Request $request) {
        $user = Auth::user();

        $user->address_one = $request->address_one;
        $user->address_two = $request->address_two;
        $user->city = $request->city;
        $user->state = $request->state;

        $user->save();

        return redirect()->route('user_cg_profile')->with('success_message', 'Your Profile was updated successfully');

    }
    public function tradeNow() {
        $price = Price::all()->first();
        return view('user.buy-sell', ['price' => $price]);
    }
    public function testBlockApi() {

        $btc_response = Http::get('https://block.io/api/v2/get_new_address/?api_key=9ddf-a0eb-3f90-7374');
        $lc_response = Http::get('https://block.io/api/v2/get_new_address/?api_key=2d15-76c5-39d7-51c2');
        $dc_response = Http::get('https://block.io/api/v2/get_new_address/?api_key=17b5-7e2c-10f1-9eea');
        $wallet = Admin::get()->first();
        $wallet->bitcoin_address = $btc_response['data']['address'];
        $wallet->litecoin_address = $lc_response['data']['address'];
        $wallet->dogecoin_address = $dc_response['data']['address'];
        $wallet->save();
        dd('done');

    }
}
