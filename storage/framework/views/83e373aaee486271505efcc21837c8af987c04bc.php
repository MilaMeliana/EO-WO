
<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <center>
                <H2>EDIT DETAIL PAKET</H2>
            </center>
        </div>
        <div class="card-body">
            <?php if($message = Session::get('success')): ?>
                <div class="alert alert-success">
                    <p><?php echo e($message); ?></p>
                </div>
            <?php endif; ?>
            <form action="<?php echo e(route('table-paketdetail.update', $detail->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nama Paket:</strong>
                            <select class="form-control" name="id_paket">
                                <option value="">-- Pilih paket--</option>
                                <?php $__currentLoopData = $paket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($p->id == $detail->id_paket): ?>
                                        <option value="<?php echo e($p->id); ?>" selected><?php echo e($p->nama_paket); ?></option>
                                    <?php else: ?>
                                        <option value="<?php echo e($p->id); ?>"><?php echo e($p->nama_paket); ?></option>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <strong>Nama Detail Paket:</strong>
                            <input type="text" name="nama_paketDetail" value="<?php echo e($detail->nama_paketDetail); ?>"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <strong>Harga:</strong>
                            <input type="text" name="harga" value="<?php echo e($detail->harga); ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <strong>Deskripsi :</strong>
                            <input type="text" name="deskripsi" value="<?php echo e($detail->deskripsi); ?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="foto" class="form-label"><strong>Post foto:</strong></label>
                            <input class="form-control <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " type="file" id="foto"
                                name="foto">
                            <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>

            </form>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\EO-WO\resources\views/admin/editdetailpaket.blade.php ENDPATH**/ ?>