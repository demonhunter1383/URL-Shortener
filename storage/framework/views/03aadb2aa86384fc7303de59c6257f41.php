<!DOCTYPE html>
<html>

<head>
    <title>Admin - Shortened URLs</title>
    <style>
        body {
            font-family: system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, sans-serif;
            margin: 40px;
            background: #f8fafc;
        }

        .card {
            max-width: 900px;
            margin: auto;
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, .06);
            padding: 24px;
        }

        .top-buttons {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 10px;
        }

        .btn-secondary {
            background: #6b7280;
            color: #fff;
            padding: 8px 12px;
            border-radius: 8px;
            text-decoration: none;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 14px;
        }

        th,
        td {
            border: 1px solid #e5e7eb;
            padding: 10px;
            text-align: center;
        }

        th {
            background: #f3f4f6;
        }

        a {
            color: #2563eb;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="card">
        <div class="top-buttons">
            <a href="<?php echo e(route('shorten.url.form')); ?>" class="btn-secondary">Back to Home</a>
        </div>
        <h1>All Shortened URLs</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Original URL</th>
                    <th>Short URL</th>
                    <th>Visits</th>
                    <th>Created</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $urls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($url->id); ?></td>
                        <td style="word-break: break-word;"><a href="<?php echo e($url->original_url); ?>"
                                target="_blank"><?php echo e($url->original_url); ?></a></td>
                        <td><a href="<?php echo e(url($url->short_code)); ?>" target="_blank"><?php echo e(url($url->short_code)); ?></a></td>
                        <td><?php echo e($url->visits); ?></td>
                        <td><?php echo e($url->created_at->format('Y-m-d H:i')); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="5">No shortened URLs yet.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
<?php /**PATH G:\New folder\url-shortener\resources\views/admin-urls.blade.php ENDPATH**/ ?>