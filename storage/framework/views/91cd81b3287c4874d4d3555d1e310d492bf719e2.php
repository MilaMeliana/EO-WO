
<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <center>
                <h1>Table Data Gallery</h1>
            </center>
        </div>
        <div class="card-body">

            <div class="modal-primary me-1 mb-1 d-inline-block">
                <!-- Button trigger for primary themes modal -->
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#primary">
                    + Tambah Gallery
                </button>

                <!--primary theme Modal -->
                <div class="modal fade text-left" id="primary" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel160" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h5 class="modal-title white " id="myModalLabel160">
                                    Tambah Data Gallery
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

                            <form action="<?php echo e(route('table-gallery.store')); ?>" method="POST"
                                enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group mx-4 mt-3">
                                            <strong>Keterangan :</strong>
                                            <input type="text" name="ket" class="form-control"
                                                placeholder="Keterangan">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group mx-4 mb-4">
                                            <label for="gambar" class="form-label"><strong>Post gambar:</strong></label>
                                            <input class="form-control <?php $__errorArgs = ['gambar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> "
                                                type="file" id="gambar" name="gambar">
                                            <?php $__errorArgs = ['gambar'];
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

                                    <button type="submit" value="tambahgallery" class="btn btn-primary ml-1">
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
                        <th>Keterangan</th>
                        <th>File</th>
                        <th>Foto</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $Gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td> <?php echo e($no++); ?> </td>
                            <td> <?php echo e($g->ket); ?> </td>
                            <td> <?php echo e($g->gambar); ?> </td>
                            <td><img src="<?php echo e(asset('image/' . $g->gambar)); ?>" class="img-thumbnail" alt=""
                                    style="height: 100px;"></td>
                            <td>



                                <a href="<?php echo e(route('table-gallery.edit', $g->id)); ?>" class="btn btn-outline-primary">
                                    Edit
                                </a>
                                <!--button class="btn btn-danger ml-1" type="submit"
                                                                onclick="return confirm('Anda Yakin Data diHapus???')">
                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Hapus</span>
                                                    </button-->
                                <a href="/gallery-delete/<?php echo e($g->id); ?>" class="btn btn-danger ml-1 delete-confirm"
                                    role="button">Delete</a>
                                <!-- <div class="modal fade" id="hapus" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                            <div class="modal-body">
                                                                Apakah anda ingin menghapus data ini?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" value="hapusgallery" class="btn btn-danger">Hapus</button>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>-->
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\EO-WO\resources\views/admin/gallery.blade.php ENDPATH**/ ?>