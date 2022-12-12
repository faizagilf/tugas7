<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card p-4">
            <h3 class="fw-bold">Data Customer</h3>
            <?php if(session()->has('message')): ?>
                <div class="alert alert-success"><?php echo e(session()->get('message')); ?></div>
            <?php endif; ?>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>No HP</th>
                                <th>Nama</th>
                                <th>Mobil Yang Diambil</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($customer->no_hp); ?></td>
                                    <td><?php echo e($customer->nama); ?></td>
                                    <td>
                                        <?php $__empty_1 = true; $__currentLoopData = $customer->rentals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <ul>
                                                <li><?php echo e($rt->tipe); ?></li>
                                            </ul>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            Tidak ada mobil yang diambil
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo e(route('customers.take',['customer' => $customer->id])); ?>" class="btn btn-info">Ambil Mobil</a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\src\tugas7\resources\views/customer/index.blade.php ENDPATH**/ ?>