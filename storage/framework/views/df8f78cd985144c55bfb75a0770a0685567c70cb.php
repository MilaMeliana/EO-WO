
<?php $__env->startSection('content'); ?>
    <div class="container mt-5" data-aos="fade-up">
    <br><br>
        <div class="section-title mt-5">
            <p>Detail Paket <?php echo e($desk->nama_paketDetail); ?></p>
        </div>
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="container" data-aos="fade-up">
                <div class="logo">
                    <a href="<?php echo e(url('/paket-detail/43')); ?>">Back</a>
                </div>
                <br>
                    <div class="section-title">
                        <h2>Deskripsi <?php echo e($desk->nama_paketDetail); ?></h2>
                    </div>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <br><br>
                        <p><?php echo e($desk->deskripsi); ?></p>
                </div>
                <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                    <div class="about-img">
                        <img src="<?php echo e(asset('image/' . $desk->foto)); ?>" alt="" height="400px"> 
                        
                        <center><h4>Rp. &nbsp; <?php echo e(number_format($desk->harga, 0, ',', '.')); ?></h4></center>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('landingpage.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\EO-WO\resources\views/landingpage/deskripsidetailpaket.blade.php ENDPATH**/ ?>