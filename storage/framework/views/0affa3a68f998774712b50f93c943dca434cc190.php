<style>
    img{
        width: 40%;
        margin-left: 30%;
    }
</style>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('APLIKASI PLN SEDERHANA - LARAVEL')); ?> </div>

                <div class="card-body">
                   <img src="https://upload.wikimedia.org/wikipedia/commons/9/97/Logo_PLN.png" alt="https://upload.wikimedia.org/wikipedia/commons/9/97/Logo_PLN.png" srcset="https://upload.wikimedia.org/wikipedia/commons/9/97/Logo_PLN.png">
                    <marquee behavior="" direction="">Selamat Datang Di Aplikasi PLN Sederhana | &copy; Anisa Yulia</marquee>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quis-laravel\resources\views/home.blade.php ENDPATH**/ ?>
