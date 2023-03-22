<!-- ======= Gallery Section ======= -->

<?php $__env->startSection('content'); ?>
    <br>
    <br>
    <br>
    <br>
    <section id="gallery" class="gallery">

        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Gallery</h2>
                <p>Some photos from Our Paket</p>
            </div>
        </div>

        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-0">
                <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="<?php echo e(asset('image/' . $g->gambar)); ?>" class="gallery-lightbox"
                            data-gall="gallery-item">
                            <img src="<?php echo e(asset('image/' . $g->gambar)); ?>" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

        </div>
    </section><!-- End Gallery Section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('landingpage.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\EO-WO\resources\views/landingpage/gallery.blade.php ENDPATH**/ ?>