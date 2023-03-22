
<?php $__env->startSection('content'); ?>
    <br>
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="row mt-5">


                <div class="col-lg-8" data-aos="zoom-in" data-aos-delay="100">
                    <div class="about-img">
                        <img src="<?php echo e(asset('assets_landingpage/img/login.jpg')); ?>" width="100%" alt="">
                    </div>
                </div>
                <div class="col-lg-4 mt-5 mt-lg-0">

                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                        <center>
                            <h1>BlackSweet</h1>
                        </center>
                        <br>

                        <div class="form-group mt-3">
                            <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus
                                placeholder="example@email.com...">
                        </div>
                        <div class="form-group mt-3">
                            <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                name="password" required autocomplete="current-password" placeholder="password...">
                        </div>
                        <div class="text-center mt-3"><button type="submit" class="btn btn-warning btn-block">Login</button>
                        </div><br>
                        <div class="text-center">Not Registered? <a href="<?php echo e(url('/regis')); ?>">Create Your
                                Account?</a>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('landingpage.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\EO-WO\resources\views/login/login.blade.php ENDPATH**/ ?>