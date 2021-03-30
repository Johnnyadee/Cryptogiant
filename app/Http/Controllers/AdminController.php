<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderConfirmed;
use App\Models\Admin;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Wallet;
use App\Models\Price;

class AdminController extends Controller
{
    public function dashboard() {
        $btc_address = Admin::get()->first()->bitcoin_address;
        $btc_value = Http::get('https://block.io/api/v2/get_address_balance/?api_key=9ddf-a0eb-3f90-7374&addresses='.$btc_address);
        $btc_balance = $btc_value['data']['available_balance'];
        // dd($btc_balance);
        $lc_address = Admin::get()->first()->litecoin_address;
        $lc_value = Http::get('https://block.io/api/v2/get_address_balance/?api_key=2d15-76c5-39d7-51c2&addresses='.$lc_address);
        $lc_balance = $lc_value['data']['available_balance'];
        $dgc_address = Admin::get()->first()->dogecoin_address;
        $dgc_value = Http::get('https://block.io/api/v2/get_address_balance/?api_key=17b5-7e2c-10f1-9eea&addresses='.$dgc_address);
        $dgc_balance = $dgc_value['data']['available_balance'];
        $total_sales_ngn = Transaction::where('currency_type', 'NGN')->get()->sum('amount');
        $total_sales_usd = Transaction::where('currency_type', 'USD')->get()->sum('amount');
        $orders = Transaction::orderBy('id', 'DESC')->skip(0)->take(5)->get();


        return view('admin.dashboard', ['btc_balance' => $btc_balance, 'lc_balance' => $lc_balance, 'dgc_balance' => $dgc_balance, 'orders' => $orders, 'total_sales_ngn' => $total_sales_ngn, 'total_sales_usd' => $total_sales_usd]);
    }
    public function wallets() {
        $user_wallet = Admin::get()->first();
        return view('admin.wallets', ['user_wallet' => $user_wallet]);
    }
    public function orders() {
        $orders = Transaction::where('status', 1)->orderBy('created_at', 'desc')->get();
        return view('admin.orders', ['orders' => $orders]);
    }
    // api/v2/withdraw/?api_key=API KEY&priority=custom&custom_network_fee=CUSTOM_NETWORK_FEE&amounts=AMOUNT1,AMOUNT2,...&&amounts=AMOUNT1,ADDRESS2
    public function approveTransaction($id) {

        $trans = Transaction::where('id', $id)->first();

        $admin = Admin::get()->first();
        $wallet = Wallet::where('user_id', $trans->user_id)->first();
        $user = User::where('id', $trans->user_id)->first();
        if($trans->coin == 'BTC'){
            $from_address = $admin->bitcoin_address;
            $api_key = '9ddf-a0eb-3f90-7374';
            $send_btc = Http::get('https://block.io/api/v2/withdraw_from_addresses/?api_key='.$api_key.'&priority=medium&from_addresses='.$from_address.'&to_addresses='.$wallet->bitcoin_address.'&amounts='.$trans->crypto_unit);
            if($send_btc['status'] == 'success') {
                $trans->status = 2;
                $trans->save();
                Mail::send(new OrderConfirmed($user, $trans));
                return redirect()->route('admin.orders')->with('success_message', 'Order Completed Successfully. User Wallet Balance balance has been updated accordingly. Do not repeat approval process');
            } else {
                return redirect()->route('admin.orders')->with('success_message', $send_btc['data']['error_message']);
            }
        }
        else if($trans->coin == 'LTC'){
            $from_address = $admin->litecoin_address;
            $api_key = '2d15-76c5-39d7-51c2';
            $send_ltc = Http::get('https://block.io/api/v2/withdraw_from_addresses/?api_key='.$api_key.'&priority=medium&from_addresses='.$from_address.'&to_addresses='.$wallet->bitcoin_address.'&amounts='.$trans->crypto_unit);
            if($send_ltc['status'] == 'success') {
                $trans->status = 2;
                $trans->save();
                Mail::send(new OrderConfirmed($user, $trans));
                return redirect()->route('admin.orders')->with('success_message', 'Order Completed Successfully. User Wallet Balance balance has been updated accordingly. Do not repeat approval process');
            } else {
                return redirect()->route('admin.orders')->with('success_message', $send_ltc['data']['error_message']);
            }


        }
        else if($trans->coin == 'DGC'){
            $api_key = '17b5-7e2c-10f1-9eea';
            $from_address = $admin->dogecoin_address;
            $send_dgc = Http::get('https://block.io/api/v2/withdraw_from_addresses/?api_key='.$api_key.'&priority=medium&from_addresses='.$from_address.'&to_addresses='.$wallet->bitcoin_address.'&amounts='.$trans->crypto_unit);
            if($send_dgc['status'] == 'success') {
                $trans->status = 2;
                $trans->save();
                Mail::send(new OrderConfirmed($user, $trans));
                return redirect()->route('admin.orders')->with('success_message', 'Order Completed Successfully. User Wallet Balance balance has been updated accordingly. Do not repeat approval process');
            } else {
                return redirect()->route('admin.orders')->with('success_message', $send_dgc['data']['error_message']);
            }
        }


    }
    public function usersList() {
        $users = User::orderBy('id', 'DESC')->get();
        return view('admin.users', ['users' => $users]);
    }
    public function prices() {
        $price = Price::all()->first();
        return view('admin.prices', ['price' => $price]);
    }
    public function updatePrices(Request $request) {
        $price = Price::all()->first();
        $price->btcngn = $request->btcngn;
        $price->btcusd = $request->btcusd;
        $price->ltcngn = $request->ltcngn;
        $price->ltcusd = $request->ltcusd;
        $price->dgcngn = $request->dgcngn;
        $price->dgcusd = $request->dgcusd;
        $price->save();

        return redirect()->route('admin.prices')->with('success_message', 'Prices Updated Successfully');






    }
}
