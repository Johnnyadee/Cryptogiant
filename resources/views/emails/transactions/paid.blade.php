@component('mail::message')
# Order Received

Thank you for your order.



**Email:** {{ $user->email }}
**Phone Number:** {{ $user->phone_number }}

**Buyer Name:** {{ $user->first_name }} {{ $user->last_name }}

**Order Amount:** {{ $transaction->amount }} | {{ $transaction->currency_type }}

**Crypto Data**


Crypto Type: {{ $transaction->coin }} <br>
Unit: {{ $transaction->crypto_unit }} <br>


You can get further details about your order by tracking your order on our website livechat contacting info@cryptogaint.com.

@component('mail::button', ['url' => 'https://crypto-giant.herokuapp.com', 'color' => 'blue'])
Go to Website
@endcomponent

Thank you again for choosing us.

Regards,<br>
Crypto Giant
@endcomponent
