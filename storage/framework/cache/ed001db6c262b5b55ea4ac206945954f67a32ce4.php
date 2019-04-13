<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo e(config('name' )); ?> - <?php echo $__env->yieldContent('title'); ?></title>
	<link rel="stylesheet" href="<?php echo e(config('url') . '/backend/'); ?>css/app.css">
	<link rel="stylesheet" href="<?php echo e(config('url') . '/'); ?>asset/css/iranyekan.css">
	<link rel="stylesheet" href="<?php echo e(config('url') . '/backend/'); ?>css/style.css">
	<script src="<?php echo e(config('url') . "/ed/ckeditor.js"); ?>" type="application/javascript"></script>
	<script src="<?php echo e(config('url') . "/ed/config.js"); ?>" type="application/javascript"></script>
	<script src="<?php echo e(config('url') . "/ed/style.js"); ?>" type="application/javascript"></script>
</head>
<body>
	<div id="wapper">
		<div id="right">
			<header id="right-header">
				<h1>کیلکا</h1>
			</header>
			<ul id="right-main">
				<li><a href="<?php echo e(config('url') . '/admin/'); ?>" class="active">داشبورد</a></li>
				<li><a href="<?php echo e(config('url') . '/admin/post/create'); ?>">افزودن پست</a></li>
				<li><a href="#">صفحات</a></li>
			</ul>
		</div>
		<div id="left">
			<header id="header">
				<div class="row">
					<div class="col-4">
						<p class="p-t-4 text-white">پنل مدیریت  روبیک</p>
					</div>
					<div class="text-white col-3 offset-5">
						<div class="profile-img">
							<span>اشکان</span>
							<img class="img-circle" src="<?php echo e(config('url') . '/backend/'); ?>img/u1.png" alt="user image" width="36">
						</div>
					</div>
				</div>
			</header>
			<div class="container-fluid">
				<div class="row p-v-10 bg-white title">
					<div class="col-4 p-t-10">
						<span><a href="#">داشبورد</a>/خانه</span>
					</div>
					<div class="col-4 text-center">
						<h4><b>داشبورد</b></h4>
					</div>
					<div class="col-4 text-left">
						<a href="<?php echo e(config('url')); ?>" class="btn">مشاهده سایت</a>
					</div>
				</div>
			</div>
			<main id="main">
				<div class="container-fluid m-t-20">
					<?php echo $__env->yieldContent('content'); ?>
				</div>
			</main>
		</div>
	</div>


	<script type="text/javascript" src="<?php echo e(config('url') . '/backend/'); ?>js/jquery-3.3.1.js"></script>

	<?php echo $__env->yieldContent('script'); ?>

</body>
</html>
<?php /* C:\Users\ashkanfekri\Desktop\kilka\views/admin/layouts/master.blade.php */ ?>