<?php $__env->startSection('title', 'افزودن پست'); ?>

<?php $__env->startSection('content'); ?>
    <div>
        <form action="<?php echo e(config('url') . '/admin/post'); ?>" method="post" class="row" enctype="multipart/form-data">
            <div class="col-4">
                <div class="white-box">
                    <div class="form-group">
                        <label for="title"  class="form-label">عنوان</label>
                        <input type="text" name="title" id="title" class="input block">
                    </div>

                    <div class="form-group">
                        <label for="image" class="form-label">عکس</label>
                        <input type="file" name="image" id="image" class="input">
                    </div>
                </div>
            </div>

            <div class="white-box col-8">
                <div class="form-group">
                    <label for="body" class="form-label">محتوای پست</label>
                    <textarea name="body" id="body"></textarea>
                </div>
            </div>
            <div class="white-box col-12">
                <button type="submit">ارسال</button>
            </div>
        </form>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
    CKEDITOR.replace( 'body' );
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\Users\ashkanfekri\Desktop\kilka-1.2\views/admin/post/create.blade.php */ ?>