<!-- File: /app/Views/hola/index.php -->



<?php $__env->startSection('title'); ?> <?php echo e($title); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div>
        <h1>Hello world!!</h1>
        <p>Welcome <?php echo e($name); ?></p>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_js'); ?>
<script type="text/javascript">
    alert('works!');
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64_3.2.2\www\php-instant-framework\app\views/home.blade.php ENDPATH**/ ?>