<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Queue\SerializesModels;

class PaymentMade extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $user;
    public $transaction;
    public $full_name;


    public function __construct(User $user, Transaction $transaction)
    {
        $this->user = $user;
        $this->transaction = $transaction;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function getFullName() {
        $this->full_name = $this->user->first_name . $this->user->last_name;
    }

    public function build()
    {
        return $this->to($this->user->email, $this->full_name)
                    ->cc('cryptogiantapp@gmail.com')
                    ->bcc('legendabrahamonoja@gmail.com')
                    ->subject('Payment for Crypto Asset')
                    ->markdown('emails.transactions.paid');
    }
}
