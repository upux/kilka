<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo e(config('name')); ?>  <?php echo $__env->yieldContent('title'); ?></title>
	<link rel="stylesheet" href="<?php echo e(config('url')); ?>/asset/css/kilka.css">
	<link rel="stylesheet" href="<?php echo e(config('url')); ?>/asset/css/blog.css">
</head>
<body>
	<header id="header">
		<nav class="navbar container">
		<a href="<?php echo e(config('url')); ?>" class="logo-header"><h1>upux</h1></a>
			<ul class="navbar right">
				<li class="nav-item"><a href="/">بلاگ</a></li>
			</ul>
		</nav>
	</header>


	<!-- main -->
	
	<main id="main">
		<?php echo $__env->yieldContent('content'); ?>
	</main>

	<!-- main -->
</body>
</html>
<?php /* C:\Users\ashkanfekri\Desktop\kilka-1.2\views/blog/layouts/master.blade.php */ ?>