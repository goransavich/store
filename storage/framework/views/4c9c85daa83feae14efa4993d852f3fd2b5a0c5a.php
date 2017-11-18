<?php $__env->startSection('content'); ?>

<div class="row">

	<?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="col-sm-8 blog-main">


		<div class="row">
		  <?php $__currentLoopData = $bookdetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <?php if($book->book_image): ?>
			  <a href="/bookdetails/<?php echo e($book->isbn); ?>"><img src="/storage/images/<?php echo e($book->book_image); ?>" class="img-responsive" width="160" height="260" /></a>
			  <?php endif; ?>
		      <div class="caption">
		        <h3><?php echo e($book->book_title); ?></h3>
		        <h5><?php echo e($book->book_author); ?></h5>
		        
		      </div>
		    </div>
		  </div>
		  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>	

	</div>

	
	
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>