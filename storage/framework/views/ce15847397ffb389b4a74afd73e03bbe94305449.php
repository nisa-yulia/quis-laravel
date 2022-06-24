
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Data Pelanggan</title>
</head>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Data Pelanggan')); ?></div>

                <div class="card-body">
                <a href="/pelanggan/create" class="btn btn-secondary mb-2">Tambah Pelanggan</a>
<table class="table table-hover">
    <tr>
        <th>Nomor Pelanggan</th>
        <th>Nama Pelanggan</th>
        <th>NIK</th>
        <th>Nomor Hp</th>
        <th>Nomor Seri</th>
        <th>Nomor Meteran</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
    <?php $__currentLoopData = $pelanggan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($p->pel_no); ?></td>
        <td><?php echo e($p->pel_nama); ?></td>
        <td><?php echo e($p->pel_ktp); ?></td>
        <td><?php echo e($p->pel_hp); ?></td>
        <td><?php echo e($p->pel_ser); ?></td>
        <td><?php echo e($p->pel_meteran); ?></td>
        <td style="text-align:center !important;"><?php echo e($p->pel_aktif); ?></td>
        <td><a href="/pelanggan/<?php echo e($p->id); ?>/edit" class="btn btn-secondary mb-2" style="width:70px !important;">Edit</a> 
            <form action="/pelanggan/<?php echo e($p->id); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('delete'); ?>
                <input type="submit" value="Hapus" class="btn btn-danger mb-2">
            </form>
        </td>
        
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quis-laravel\resources\views/pelanggan/index.blade.php ENDPATH**/ ?>