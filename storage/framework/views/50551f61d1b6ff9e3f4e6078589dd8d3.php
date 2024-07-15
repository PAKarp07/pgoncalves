

<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="min-h-screen bg-dBlue mx-auto">

        <?php echo $__env->yieldContent('content_section'); ?>


    </div>

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH E:\laragon\www\pgoncalves\resources\views/master.blade.php ENDPATH**/ ?>