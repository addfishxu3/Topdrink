<!-- resources/views/child.blade.php -->
 

 
<?php $__env->startSection('title', 'Test Page'); ?>
 
<?php $__env->startSection('sidebar'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('sidebar'); ?>
 
    <p>Test</p>
<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('content'); ?>
    <p>Test</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\a0920\OneDrive\桌面\website class\B10909022\resources\views/test.blade.php ENDPATH**/ ?>