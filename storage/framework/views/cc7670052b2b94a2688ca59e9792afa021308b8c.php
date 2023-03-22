
<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <center>
                <h1>Table Paket Detail</h1>
            </center>
        </div>
        <div class="card-body">

            <div class="modal-primary me-1 mb-1 d-inline-block">
                <!-- Button trigger for primary themes modal -->
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#primary">
                    + Tambah Paket
                </button>

                <!--primary theme Modal -->
                <div class="modal fade text-left" id="primary" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel160" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered " role="document">
                        <div class="modal-content modal-dialog-scrollable">
                            <div class="modal-header bg-primary">
                                <h5 class="modal-title white" id="myModalLabel160">
                                    Tambah Detail Paket
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

                            <form action="<?php echo e(route('table-paketdetail.store')); ?>" method="POST"
                                enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group mx-4 mt-3">
                                            <strong>Nama Paket:</strong>
                                            <select class="form-control" name="id_paket">
                                                <option value="">-- Pilih paket--</option>
                                                <?php $__currentLoopData = $paket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($p->id); ?>"><?php echo e($p->nama_paket); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group mx-4 mt-3">
                                            <strong>Nama Paket Detail :</strong>
                                            <input type="text" name="nama_paketDetail" class="form-control"
                                                placeholder="Nama Paket detail">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group mx-4 mt-3">
                                            <strong>Harga :</strong>
                                            <input type="text" name="harga" class="form-control" placeholder="Harga">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group mx-4 mt-3">
                                            <strong>Deskripsi :</strong>
                                            <textarea type="textarea" name="deskripsi" class="form-control" placeholder="Deskripsi"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group mx-4 mb-3">
                                            <label for="foto" class="form-label"><strong>Post Logo:</strong></label>
                                            <input class="form-control <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " type="file"
                                                id="foto" name="foto">
                                            <?php $__errorArgs = ['logo'];
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
                        <th>Nama Paket</th>
                        <th>Nama Paket Detail</th>
                        <th>Deskripsi</th>
                        <th>harga</th>
                        <th>Foto</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td> <?php echo e($no++); ?> </td>
                            <td> <?php echo e($d->nama_paket); ?> </td>
                            <td> <?php echo e($d->nama_paketDetail); ?> </td>
                            <td style="width: 25%"> <?php echo e($d->deskripsi); ?> </td>
                            <td> Rp.<?php echo e(number_format($d->harga, 0, ',', '.')); ?> </td>
                            <td><img src="<?php echo e(asset('image/' . $d->foto)); ?>" class="img-thumbnail" alt=""
                                    style="height: 100px;"></td>
                            <td>


                                <a href="<?php echo e(route('table-paketdetail.edit', $d->id)); ?>" type="button"
                                    class="btn btn-outline-primary">
                                    Edit
                                </a>
                                <a href="/detail-delete/<?php echo e($d->id); ?>" class="btn btn-danger ml-1 delete-confirm"
                                    role="button">Delete</a>


                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\EO-WO\resources\views/admin/tabledetail.blade.php ENDPATH**/ ?>