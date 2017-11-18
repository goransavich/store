<div class="col-sm-4 blog-sidebar">
	<ul>
	<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

	<li class="nav-item sidebar-links">
		<a class="nav-link" href="/books/<?php echo e($category->category_id); ?>"><?php echo e($category->category_name); ?></a>
	</li>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</ul>
</div>