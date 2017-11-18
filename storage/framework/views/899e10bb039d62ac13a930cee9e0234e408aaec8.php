<?php $__env->startSection('content'); ?>

<div class="row">

	<?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	

		<?php $__currentLoopData = $book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="col-md-2"> 
			<img src="/storage/images/<?php echo e($details->book_image); ?>" class="img-responsive" width="160" height="260" />
		</div>

		<div class="col-md-10">
			<ul>
				<li class="li-no-decor"><strong>ISBN:</strong> <?php echo e($details->isbn); ?></li>
				<li class="li-no-decor"><strong>Title:</strong> <?php echo e($details->book_title); ?></li>
				<li class="li-no-decor"><strong>Author:</strong> <?php echo e($details->book_author); ?></li>
				<li class="li-no-decor"><strong>Price:</strong> <?php echo e($details->book_price); ?></li>
				<li class="li-no-decor"><strong>Description: </strong><?php echo e($details->book_description); ?></li>
			</ul>

			<script src="https://checkout.stripe.com/checkout.js"></script>
			<form id="checkout-form" action="/purchaces/<?php echo e($details->isbn); ?>" method="POST">

				<?php echo e(csrf_field()); ?>


			  <input type="hidden" name="stripeToken" id="stripeToken">
			  <input type="hidden" name="stripeEmail" id="stripeEmail">
			  

			  <button id="button" type="submit" class="btn btn-primary">Buy <?php echo e($details->book_title); ?></button>
				
			  <script>

			  	  let stripe = StripeCheckout.configure({

			        key:"<?php echo e(config('services.stripe.key')); ?>",

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
			          name: "<?php echo e($details->book_title); ?>",
			          description: '',
			          zipCode: 'false',
			          amount: <?php echo e($details->book_price); ?>00
			        });

			        e.preventDefault();

			      });

			    </script>	

			</form>
				


				
		</div>
		
		
			    
		
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	
	
</div>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>