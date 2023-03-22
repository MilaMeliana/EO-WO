<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <?php echo $__env->make('admin.adminlayout.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <div id="app">
        <div id="main">
            <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="page-content">
                <?php echo $__env->yieldContent('content'); ?>
            </div>

            <footer>
                <?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </footer>
        </div>
    </div>
    <?php echo $__env->make('admin.adminlayout.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH D:\xampp\htdocs\Kelompok5_EO-WO\resources\views/admin/index.blade.php ENDPATH**/ ?>