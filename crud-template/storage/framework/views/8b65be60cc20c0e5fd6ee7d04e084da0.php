<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My App - <?php echo $__env->yieldContent('title'); ?></title>

    <!-- Bootstrap CDN (opsional tapi disarankan untuk tampilan bagus) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">MyApp</a>
        </div>
    </nav>

    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Bootstrap JS (optional, hanya jika pakai komponen JS Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH /Users/alvaritzymaulidan/Documents/GitHub/TUBES_WAD_KEL4/crud-template/resources/views/layout.blade.php ENDPATH**/ ?>