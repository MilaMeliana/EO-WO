
<?php $__env->startSection('content'); ?>
    <br>
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="row mt-5">


                <div class="col-lg-8" data-aos="zoom-in" data-aos-delay="100">
                    <div class="about-img">
                        <img src="<?php echo e(url('assets_landingpage/img/login.jpg')); ?>" width="100%" alt="">
                    </div>
                </div>
                <div class="col-lg-4 mt-5 mt-lg-0">

                    <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>
                        <center>
                            <h1>BlackSweet</h1>
                        </center>
                        <br>

                        <div class="form-group mt-3">
                            <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name"
                                value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus placeholder="nama...">
                        </div>
                        <div class="form-group mt-3">
                            <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email"
                                placeholder="example@gmail.com">

                        </div>
                        <div class="form-group mt-3">
                            <input id="password" type="password"
                                class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required
                                autocomplete="new-password" placeholder="password...">

                        </div>
                        <div class="form-group mt-3">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                required autocomplete="new-password" placeholder="re-password...">

                        </div>
                         <div class="text-center mt-3"><button type="submit" class="btn btn-warning btn-block">Registrasi</button>
                    </form>

                </div>
            </div>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('landingpage.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\EO-WO\resources\views/login/regis.blade.php ENDPATH**/ ?>