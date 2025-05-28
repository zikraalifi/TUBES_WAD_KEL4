<?php $__env->startSection('content'); ?>
    <h1>Daftar Post</h1>

    <?php if(session('success')): ?>
        <div style="color: green;"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <a href="<?php echo e(route('posts.create')); ?>">+ Tambah Post Baru</a>

    <ul>
        <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <li>
                <strong><?php echo e($post->title); ?></strong><br>
                <?php echo e(Str::limit($post->content, 100)); ?><br>
                <a href="<?php echo e(route('posts.edit', $post->id)); ?>">Edit</a>
                <form action="<?php echo e(route('posts.destroy', $post->id)); ?>" method="POST" style="display: inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button onclick="return confirm('Yakin ingin menghapus?')" type="submit">Hapus</button>
                </form>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <li>Tidak ada post.</li>
        <?php endif; ?>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/alvaritzymaulidan/Documents/GitHub/TUBES_WAD_KEL4/crud-template/resources/views/posts/index.blade.php ENDPATH**/ ?>