<?php $__env->startSection('title'); ?>

<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="col-4">
			<div class="white-box text-center">
				<h3 class="box-tetle">تعداد پست ها</h3>
				<p class="p-t-10"><?php echo e($count_post); ?></p>
			</div>
		</div>

		<div class="col-4">
			<div class="white-box text-center">
				<h3 class="box-tetle">تعداد دسته بندی ها</h3>
				<p class="p-t-10"><?php echo e($count_category); ?></p>
			</div>
		</div>

		<div class="col-4">
			<div class="white-box text-center">
				<h3 class="box-tetle">تعداد کاربران</h3>
				<p class="p-t-10"><?php echo e($count_user); ?></p>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\Users\ashkanfekri\Desktop\kilka\views/admin/index.blade.php */ ?>