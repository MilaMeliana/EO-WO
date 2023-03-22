
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('landingpage.hero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ======= Menu Section ======= -->
    <section id="goto" class="menu bg-section chefs">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Catalog</h2>
                <p>Our Catalog</p>
            </div>

            <div class="row">
                <?php $__currentLoopData = $dataPaket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                            <img src="<?php echo e(asset('image/' . $d->logo)); ?>" alt="" height="200px">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4><?php echo e($d->nama_paket); ?></h4>
                                    <span>-----------</span>
                                </div>
                            </div>
                        </div>
                        <center><a href="<?php echo e(route('paketDetail', $d->id)); ?>" class="book-a-table-btn scrollto">View Detail</a>
                        </center>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section><!-- End Menu Section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('landingpage.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\EO-WO\resources\views/landingpage/catalogpaket.blade.php ENDPATH**/ ?>