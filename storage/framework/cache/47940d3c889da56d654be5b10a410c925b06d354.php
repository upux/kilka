<?php $__env->startSection('title'); ?>

<?php $__env->startSection('content'); ?>




		<div class="container">
			<div class="row">
				
				<div class="card-container mt++ col-s-10 off-s-0 col-xl-6 off-xl-2">
					<div class="row">
					<h2 class="title col-10 mb+">
						مقالات
					</h2>
					<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

						<?php
							$categorys = db()->select('post_to_category' , 'category_id',['post_id[=]' => $post['id']]);
							$categorys = db()->select('categorys' ,'*',['id[=]' => $categorys]);
						?>

					<div class="col-5 col-m-10">
						<div class="card-box">
							<?php if($post['image'] != ''): ?>
								<a href="<?php echo e(config('url') . '/blog/post/' . $post['slug']); ?>">
								<img src="<?php echo e(config('url') . '/img/' . $post['image']); ?>" alt="" class="card-top-img">
							</a>
							<?php endif; ?>
							<div class="card-body">
								<div class="card-meta">
									<?php $__currentLoopData = $categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<a href="<?php echo e($category['slug']); ?>">
										<span class="card-tag"><?php echo e($category['name']); ?></span>
									</a>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</div>
							<a href="<?php echo e(config('url') . '/blog/post/' . $post['slug']); ?>">

								<p class="card-content"><?php echo e($post['title']); ?></p>
						</a>
							</div>
						</div>
					</div>	
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
				</div>
			</div>
		</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('blog.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\Users\ashkanfekri\Desktop\kilka\views/blog/index.blade.php */ ?>