
<?php $__env->startSection('content'); ?>
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-body py-4 px-5">
                    <div class="d-flex align-items-center">
                        <div class="ms-3 name">
                            
                            
                            <h6 class="text-muted mb-0"><?php echo e(Auth::user()->role); ?></h6>
                        </div>
                        <div class="ms-3 name">
                            <h2>Welcome To Dashboard "<?php echo e(Auth::user()->name); ?>"</h2>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\EO-WO\resources\views/admin/home.blade.php ENDPATH**/ ?>