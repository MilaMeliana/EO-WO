
<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            User
        </div>
        <div class="card-body">
            <div class="modal-primary me-1 mb-1 d-inline-block">
                <!-- Button trigger for primary themes modal -->
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#primary">
                    + Tambah User
                </button>

                <!--primary theme Modal -->
                <div class="modal fade text-left" id="primary" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel160" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h5 class="modal-title white" id="myModalLabel160">
                                    Tambah User
                                </h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <i data-feather="x"></i>
                                </button>
                            </div>

                            <?php if($errors->any()): ?>
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>

                            <form action="<?php echo e(route('table-petugas.store')); ?>" method="POST"
                                enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group mx-4 mt-3">
                                            <strong>Nama :</strong>
                                            <input type="text" name="name" class="form-control" placeholder="nama">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group mx-4 mt-3">
                                                <strong>Email :</strong>
                                                <input type="text" name="email" class="form-control"
                                                    placeholder="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group mx-4 mt-3">
                                                <strong>Password :</strong>
                                                <input type="text" name="password" class="form-control"
                                                    placeholder="password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group mx-4 mt-3">
                                                <strong>Jenis Kelamin :</strong>
                                                <select class="form-control" name="jenis_kelamin">
                                                    <option value="">-- Jenis Kelamin --</option>
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
                                                    <option value="">-- Pilih Role --</option>
                                                    <option value="petugas">petugas</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                        <i class="bx bx-x d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Close</span>
                                    </button>

                                    <button type="submit" value="tambahpaket" class="btn btn-primary ml-1">
                                        <i class="bx bx-check d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Simpan</span>
                                    </button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php
                $no = 1;
            ?>
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        
                        <th>Jenis Kelamin</th>
                        <th>Role</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $User; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>

                            <td> <?php echo e($no++); ?> </td>
                            <td> <?php echo e($d->name); ?> </td>
                            <td> <?php echo e($d->email); ?> </td>
                            
                            <td> <?php echo e($d->jenis_kelamin); ?> </td>
                            <td> <?php echo e($d->role); ?> </td>
                            <td>

                                <a href="<?php echo e(route('table-petugas.edit', $d->id)); ?>" type="button"
                                    class="btn btn-outline-primary">
                                    Edit
                                </a>

                                <a href="/petugas-delete/<?php echo e($d->id); ?>" class="btn btn-danger ml-1 delete-confirm"
                                    role="button">Delete</a>

                                <!--<div class="modal fade" id="hapus" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                                                                                                                                                                                                                                                                             </div>-->
                            </td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\EO-WO\resources\views/admin/tablepetugas.blade.php ENDPATH**/ ?>