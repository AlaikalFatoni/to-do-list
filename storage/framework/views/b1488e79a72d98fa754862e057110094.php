<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'To-Do List'); ?></title>
    <style>
        *, *::before, *::after { box-sizing: border-box; }

        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f3f4f6;
            margin: 0;
            padding: 0;
            color: #1f2937;
        }

        .container {
            max-width: 720px;
            margin: 48px auto;
            padding: 0 16px;
        }

        h1 {
            font-size: 1.8rem;
            margin-bottom: 24px;
            color: #111827;
        }

        a { color: #4f46e5; text-decoration: none; }
        a:hover { text-decoration: underline; }

        .btn {
            display: inline-block;
            padding: 8px 18px;
            border-radius: 6px;
            font-size: 0.9rem;
            cursor: pointer;
            border: none;
        }

        .btn-primary { background: #4f46e5; color: #fff; }
        .btn-primary:hover { background: #4338ca; }
        .btn-danger  { background: #ef4444; color: #fff; }
        .btn-danger:hover  { background: #dc2626; }
        .btn-secondary { background: #e5e7eb; color: #374151; }
        .btn-secondary:hover { background: #d1d5db; }

        .alert {
            padding: 12px 16px;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 0.9rem;
        }
        .alert-success { background: #d1fae5; color: #065f46; }
        .alert-error   { background: #fee2e2; color: #991b1b; }

        .card {
            background: #fff;
            border-radius: 10px;
            padding: 20px 24px;
            box-shadow: 0 1px 4px rgba(0,0,0,.08);
            margin-bottom: 14px;
            display: flex;
            align-items: flex-start;
            gap: 16px;
        }

        .card-body { flex: 1; }
        .card-title { font-weight: 600; font-size: 1rem; margin: 0 0 4px; }
        .card-desc  { color: #6b7280; font-size: 0.875rem; margin: 0; }

        .badge {
            display: inline-block;
            padding: 2px 10px;
            border-radius: 99px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        .badge-done    { background: #d1fae5; color: #065f46; }
        .badge-pending { background: #fef9c3; color: #854d0e; }

        .actions { display: flex; gap: 8px; flex-shrink: 0; }

        form.inline { display: inline; }

        label { display: block; font-size: 0.875rem; font-weight: 600; margin-bottom: 4px; }

        input[type=text], textarea {
            width: 100%;
            padding: 9px 12px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            font-size: 0.9rem;
            margin-bottom: 16px;
            transition: border-color .15s;
        }
        input[type=text]:focus, textarea:focus {
            outline: none;
            border-color: #4f46e5;
        }
        textarea { resize: vertical; min-height: 100px; }

        .checkbox-label {
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 500;
            margin-bottom: 20px;
        }
        .form-error { color: #dc2626; font-size: 0.8rem; margin: -12px 0 12px; }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        .empty {
            text-align: center;
            padding: 48px 0;
            color: #9ca3af;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html>
<?php /**PATH C:\Users\Riska\todo-app\resources\views/layouts/app.blade.php ENDPATH**/ ?>