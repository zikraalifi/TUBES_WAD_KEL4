<?php $__env->startSection('content'); ?>
    <h1>Tambah Post Baru</h1>

    <?php if($errors->any()): ?>
        <div style="color: red;">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('posts.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label>Judul:</label><br>
        <input type="text" name="title" value="<?php echo e(old('title')); ?>"><br><br>

        <label>Konten:</label><br>
        <textarea name="content"><?php echo e(old('content')); ?></textarea><br><br>

        <button type="submit">Simpan</button>
        <a href="<?php echo e(route('posts.index')); ?>">Batal</a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/alvaritzymaulidan/Documents/GitHub/TUBES_WAD_KEL4/crud-template/resources/views/posts/create.blade.php ENDPATH**/ ?>