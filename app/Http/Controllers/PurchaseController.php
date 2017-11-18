<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Stripe\{Stripe, Charge, Customer};

use DB;

class PurchaseController extends Controller
{
    public function store($isbn)
    {

    	Stripe::setApiKey(config('services.stripe.secret'));

    	$customer = Customer::create([

    			'email' => request('stripeEmail'),

    			'source' => request('stripeToken')

    		]);

        
        $book = DB::table('books')->where('isbn', $isbn)->first();

        $amount=$book->book_price*100;

    	Charge::create([

    		'customer' => $customer->id,

    		'amount' => $amount,

    		'currency' => 'usd',

            

    		]);



    	return redirect('/');
    }
}

