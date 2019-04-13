<?php $__env->startSection('title', '- ' .  $post['title']); ?>

<?php $__env->startSection('content'); ?>
		<div class="container">
			<div class="row">

				<article class="post-container col-8 off-1 col-m-10 off-m-0 mv++">
					<h2 class="post-title mb++"><?php echo e($post['title']); ?></h2>
					<div class="meta-post">
						<?php
							$date = jdate($post['create_date']);
							$author = db()->get('users','*',['id[=]'=>$post['userid']]);
						 ?>
							<span><?php echo e($author['username']); ?></span>
							/
							<span><?php echo e($date->format('y,m,d')); ?></span>
					</div>
					<?php if($post['image'] != ''): ?>
						<img src="<?php echo e(config('url') . '/img/' . $post['image']); ?>" alt="" class="post-image mb++">
					<?php endif; ?>	
					<div class="post-body">
						<?php echo $post['body']; ?>

					</div>
				</article>
			</div>
		</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('blog.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\Users\ashkanfekri\Desktop\kilka\views/blog/show.blade.php */ ?>