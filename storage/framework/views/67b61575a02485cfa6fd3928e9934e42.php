<?php $__env->startSection('title', 'Edit To-Do'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Edit To-Do</h1>

    <div class="card" style="display:block;">
        <form action="<?php echo e(route('todos.update', $todo)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <label for="title">Title <span style="color:#ef4444">*</span></label>
            <input type="text" id="title" name="title"
                   value="<?php echo e(old('title', $todo->title)); ?>"
                   placeholder="What needs to be done?">
            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="form-error"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <label for="description">Description</label>
            <textarea id="description" name="description"
                      placeholder="Optional details..."><?php echo e(old('description', $todo->description)); ?></textarea>
            <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="form-error"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <label class="checkbox-label">
                <input type="checkbox" name="completed" value="1"
                       <?php echo e(old('completed', $todo->completed) ? 'checked' : ''); ?>>
                Mark as completed
            </label>

            <div style="display:flex; gap:12px;">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="<?php echo e(route('todos.index')); ?>" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Riska\todo-app\resources\views/todos/edit.blade.php ENDPATH**/ ?>