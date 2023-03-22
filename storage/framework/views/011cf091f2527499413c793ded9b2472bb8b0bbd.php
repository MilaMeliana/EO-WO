
<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <center>
                <H2>EDIT USER</H2>
            </center>
        </div>
        <div class="card-body">
            <?php if($message = Session::get('success')): ?>
                <div class="alert alert-success">
                    <p><?php echo e($message); ?></p>
                </div>
            <?php endif; ?>
            <form action="<?php echo e(route('table-petugas.update', $User->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group mx-4 mt-3">
                            <strong>Nama:</strong>
                            <input type="text" name="name" value="<?php echo e($User->name); ?>" class="form-control">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group mx-4 mt-3">
                                <strong>Email :</strong>
                                <input type="text" name="email" value="<?php echo e($User->email); ?>" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group mx-4 mt-3">
                                <strong>Jenis Kelamin :</strong>
                                <select class="form-control" name="jenis_kelamin">
                                    <option value="<?php echo e($User->jenis_kelamin); ?>"><?php echo e($User->jenis_kelamin); ?></option>
                                    <option value="laki-laki">laki-laki</option>
                                    <option value="perempuan">perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group mx-4 mt-3">
                                <strong>Role :</strong>
                                <select class="form-control" name="role">
                                    <option value="<?php echo e($User->role); ?>"><?php echo e($User->role); ?></option>
                                    <option value="petugas">petugas</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group mx-4 mt-3">
                                <strong>Password :</strong>
                                <input type="text" name="password" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group mx-4 mt-3">
                                <strong>Tulis Ulang Password :</strong>
                                <input type="text" name="password_confirmation" class="form-control">
                            </div>
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

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\EO-WO\resources\views/admin/editpetugas.blade.php ENDPATH**/ ?>