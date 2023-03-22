
<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <center><h1>Table Transaksi</h1></center>
        </div>
        <div class="card-body">
        <?php
            $no = 1;
        ?>
        <table class="table table-striped mq-5" id="datatable1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pemesan</th>
                    <th>Tanggal Booking</th>
                    <th>status</th>
                    <th>bukti_bayar</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $booking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td> <?php echo e($no++); ?> </td>
                        <td> <?php echo e($d->Pemesan->name); ?> </td>
                        <td> <?php echo e($d->tgl_booking); ?> </td>
                        <td> <?php echo e($d->status); ?> </td>
                        <td><img src="<?php echo e(asset('image/' . $d->bukti_bayar)); ?>" class="img-thumbnail" alt=""
                                style="height: 100px;"></td>
                        <td><a href="<?php echo e(route('tabel-booking.show', $d->id)); ?>" type="button"
                                    class="btn btn-outline-primary">
                                    detail
                                </a>
                            <a href="/booking-delete/<?php echo e($d->id); ?>" class="btn btn-danger ml-1 delete-confirm"
                                role="button">Batalkan Pesanan</a>
                            </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\EO-WO\resources\views/admin/booking.blade.php ENDPATH**/ ?>