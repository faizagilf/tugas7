<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card p-4">
            <h3 class="fw-bold">Ambil Mobil</h3>
            <div class="card-body">
                <form action="<?php echo e(route('customers.takeStore',['customer' => $customer->id])); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="rental_id" class="form-label">Jenis Mobil</label>
                    <div class="form-group">
                        <?php $__currentLoopData = $rentals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="rental_id" id="<?php echo e($item->id); ?>" class="form-check-input" value="<?php echo e($item->id); ?>" <?php echo e($customer->rentals()->find($item->id) ? 'checked' : ''); ?>>
                                <label for="<?php echo e($item->id); ?>" class="form-check-label"><?php echo e($item->tipe); ?></label>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-dark">Ambil</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\src\tugas7\resources\views/customer/take.blade.php ENDPATH**/ ?>