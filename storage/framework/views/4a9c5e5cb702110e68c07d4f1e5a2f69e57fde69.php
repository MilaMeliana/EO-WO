<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>EO/WO Booking web</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <?php echo $__env->make('landingpage.layoutlanding.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('style-custom'); ?>
</head>

<body>

    <!-- ======= navbar ======= -->
    <?php echo $__env->make('landingpage.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End navbar -->
    <!-- ======= main konten ======= -->
    <main id="main">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <!-- End konten -->
    <!-- ======= Footer ======= -->
    <?php echo $__env->make('landingpage.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- End Footer -->
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>





    <?php echo $__env->make('landingpage.layoutlanding.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('script-custom'); ?>
</body>

</html>

<body>
<?php /**PATH D:\xampp\htdocs\EO-WO\resources\views/landingpage/index.blade.php ENDPATH**/ ?>