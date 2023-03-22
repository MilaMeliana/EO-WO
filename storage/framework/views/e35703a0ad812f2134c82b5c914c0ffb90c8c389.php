
<?php $__env->startSection('content'); ?>
    <section id="menu" class="menu section-bg">
        <div class="container" data-aos="fade-up">
            <br>
            <div class="section-title mt-5">
                <h2>Booking</h2>
                <p>Check Our Booking </p>
            </div>

            <?php $__currentLoopData = $Booking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-6 menu-item filter-starters">
                        <div class="menu-content">
                            <a href="#"><?php echo e($d->DetailPaket->nama_paketDetail); ?> &nbsp;
                                <?php echo e($d->DetailPaket->Paket->nama_paket); ?></a><span>
                                Rp.<?php echo e(number_format($d->DetailPaket->harga, 0, ',', '.')); ?></span>

                        </div>
                        <div class="menu-ingredients">
                            Tanggal Booking: <?php echo e($d->tgl_booking); ?><br>
                            Status: <?php echo e($d->status); ?>

                        </div>
                    </div>

                    <?php if($d->bukti_bayar == null): ?>
                        <div class="col-lg-6">
                            <form action="<?php echo e(route('booking-update', $d->id)); ?>" method="POST"
                                enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>

                                

                                <div class="row">
                                    <div class="col-xs col-sm col-md">
                                        <input type="hidden" name="id">
                                        <div class="form-group">
                                            <label for="bukti_bayar" class="form-label"><strong>Post
                                                    bukti_bayar:</strong></label>
                                            <input class="form-control <?php $__errorArgs = ['bukti_bayar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> "
                                                type="file" id="bukti_bayar" name="bukti_bayar">
                                            <?php $__errorArgs = ['bukti_bayar'];
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
                                    <div class="col-xs col-sm col-md">
                                        <br>
                                        <button class="btn1 scrollto" type="submit">Save</button>
                                    </div>
                                </div>

                            </form>
                            <p> Tranfer BRI. Rek. 1234567891011 a/n EOWO </p>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section><!-- End Menu Section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('landingpage.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\EO-WO\resources\views/landingpage/booking.blade.php ENDPATH**/ ?>