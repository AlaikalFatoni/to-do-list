<?php $__env->startSection('title', 'My To-Do List'); ?>

<?php $__env->startSection('content'); ?>
    <div class="top-bar">
        <h1>My To-Do List</h1>
        <a href="<?php echo e(route('todos.create')); ?>" class="btn btn-primary">+ New To-Do</a>
    </div>

    <?php if($todos->isEmpty()): ?>
        <div class="empty">
            <p>No to-dos yet. Click <strong>+ New To-Do</strong> to get started.</p>
        </div>
    <?php else: ?>
        <?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card">
                <div class="card-body">
                    <p class="card-title" style="<?php echo e($todo->completed ? 'text-decoration:line-through;color:#9ca3af;' : ''); ?>">
                        <?php echo e($todo->title); ?>

                    </p>
                    <?php if($todo->description): ?>
                        <p class="card-desc"><?php echo e($todo->description); ?></p>
                    <?php endif; ?>
                    <span class="badge <?php echo e($todo->completed ? 'badge-done' : 'badge-pending'); ?>" style="margin-top:8px;">
                        <?php echo e($todo->completed ? 'Completed' : 'Pending'); ?>

                    </span>
                </div>
                <div class="actions">
                    <a href="<?php echo e(route('todos.edit', $todo)); ?>" class="btn btn-secondary">Edit</a>

                    <form class="inline" action="<?php echo e(route('todos.destroy', $todo)); ?>" method="POST"
                          onsubmit="return confirm('Delete this to-do?')">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Riska\todo-app\resources\views/todos/index.blade.php ENDPATH**/ ?>