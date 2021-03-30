<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\PaymentMade;
use Illuminate\Http\Request;
use Paystack;
use Redirect;

class WalletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userWallect()
    {
        $user_wallet = Wallet::where('user_id', Auth::user()->id)->first();
        return view('user.wallets', ['user_wallet' => $user_wallet]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendCoin(Request $request) {
        $checkout_response = $request->all();
        session(['transaction_data' => $checkout_response]);

        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }
    }

    public function create()
    {
        //
    }
    public function paymentMade(Request $request) {
        $paymentDetails = Paystack::getPaymentData();
        if($paymentDetails['data']['status'] == "success") {
            $email = $paymentDetails['data']['customer']['email'];
            $user = User::where('email', $email)->first();
            $transaction_value = session('transaction_data');

            $transaction = new Transaction;
            $transaction->user_id = $user->id;
            $transaction->coin = $transaction_value['iv-amount'];
            $transaction->currency_type = $transaction_value['iv-cur'];
            $transaction->crypto_unit = $transaction_value['bs-value'];
            $transaction->amount = ($transaction_value['amount'] / 100);
            $transaction->status = 1;
            $transaction->mode = 'Buy';

            $transaction->save();

            Mail::send(new PaymentMade($user, $transaction));


            $request->session()->forget('transaction_data');
            // return view('succesful_Payment');
            return redirect()->route('order_list')->with('success_message', 'Payment Made Successfully, transaction in pending mode');

        }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    public function orderList() {
        $orders = Transaction::where('user_id', Auth::user()->id)->get();
        // dd($orders);
        return view('user.orders', ['orders' => $orders]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function show(Wallet $wallet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function edit(Wallet $wallet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wallet $wallet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wallet $wallet)
    {
        //
    }
}
