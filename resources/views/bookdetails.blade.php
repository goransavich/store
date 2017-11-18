@extends('layouts.master')

@section('content')

<div class="row">

	@include('layouts.sidebar')
	

		@foreach($book as $details)
		<div class="col-md-2"> 
			<img src="/storage/images/{{$details->book_image}}" class="img-responsive" width="160" height="260" />
		</div>

		<div class="col-md-10">
			<ul>
				<li class="li-no-decor"><strong>ISBN:</strong> {{$details->isbn}}</li>
				<li class="li-no-decor"><strong>Title:</strong> {{$details->book_title}}</li>
				<li class="li-no-decor"><strong>Author:</strong> {{$details->book_author}}</li>
				<li class="li-no-decor"><strong>Price:</strong> {{$details->book_price}}</li>
				<li class="li-no-decor"><strong>Description: </strong>{{$details->book_description}}</li>
			</ul>

			<script src="https://checkout.stripe.com/checkout.js"></script>
			<form id="checkout-form" action="/purchaces/{{$details->isbn}}" method="POST">

				{{csrf_field()}}

			  <input type="hidden" name="stripeToken" id="stripeToken">
			  <input type="hidden" name="stripeEmail" id="stripeEmail">
			  

			  <button id="button" type="submit" class="btn btn-primary">Buy {{$details->book_title}}</button>
				
			  <script>

			  	  let stripe = StripeCheckout.configure({

			        key:"{{config('services.stripe.key')}}",

			        image:"https://stripe.com/img/documentation/checkout/marketplace.png",

			        locale:"auto",

			        panelLabel: "Pay with card",

			        token: function(token){
			          document.querySelector('#stripeEmail').value = token.email;
			          document.querySelector('#stripeToken').value = token.id;
			          
			          document.querySelector('#checkout-form').submit();
			        }


			      });

			      document.querySelector('#button').addEventListener('click', function(e){
			        stripe.open({
			          name: "{{$details->book_title}}",
			          description: '',
			          zipCode: 'false',
			          amount: {{$details->book_price}}00
			        });

			        e.preventDefault();

			      });

			    </script>	

			</form>
				


				
		</div>
		
		
			    
		
		@endforeach

	
	
</div>



@endsection

