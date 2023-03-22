
<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <center><h1>Detail Transaksi <?php echo e($booking->Pemesan->name); ?></h1></center>
        </div>
        
        <div class="card-header mx-5">
            
        <table class="table table-striped" id="datatable1">
            <tbody>
                    <tr>
                        <td> Nama Pembooking:  </td>
                        <td> <?php echo e($booking->Pemesan->name); ?> </td>
                    </tr>
                    <tr>
                        <td> Tanggal Booking:  </td>
                        <td> <?php echo e($booking->tgl_booking); ?> </td>
                    </tr>
                    <tr>
                        <td> Status:  </td>
                        <td> <?php echo e($booking->status); ?> </td>
                    </tr>
                    <tr>
                        <td> Bukti Pembayaran:  </td>
                        <td> <img src="<?php echo e(asset('image/' . $booking->bukti_bayar)); ?>" alt="" style="height: 400px;"></td>
                    </tr>
            </tbody>
        </table>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\EO-WO\resources\views/admin/detailbooking.blade.php ENDPATH**/ ?>