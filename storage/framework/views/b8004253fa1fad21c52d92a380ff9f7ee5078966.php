<?php $__env->startSection('content'); ?>

<div class="row">

	<?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<?php echo $__env->make('layouts.mainarea', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	
	
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>