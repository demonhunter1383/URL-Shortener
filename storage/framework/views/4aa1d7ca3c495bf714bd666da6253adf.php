<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>URL Shortener</title>
    <style>
        body {
            font-family: system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, sans-serif;
            margin: 40px;
            background: #f8fafc
        }

        .card {
            max-width: 720px;
            margin: auto;
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, .06);
            padding: 24px
        }

        form {
            display: flex;
            gap: 10px;
            margin-top: 10px
        }

        input[type=url] {
            flex: 1;
            padding: 12px 14px;
            border: 1px solid #d0d7de;
            border-radius: 10px
        }

        button {
            padding: 12px 16px;
            border: 0;
            background: #2563eb;
            color: #fff;
            border-radius: 10px;
            cursor: pointer
        }

        .msg {
            margin-top: 14px;
            padding: 12px;
            border-radius: 10px
        }

        .error {
            background: #fee2e2;
            color: #991b1b
        }

        .ok {
            background: #ecfdf5;
            color: #065f46;
            display: flex;
            gap: 10px;
            align-items: center;
            flex-wrap: wrap
        }

        .muted {
            color: #6b7280;
            font-size: 12px;
            margin-top: 8px
        }

        code {
            background: #f3f4f6;
            padding: 2px 6px;
            border-radius: 6px
        }
    </style>
</head>

<body>
    <div class="card">
        <h1>URL Shortener</h1>
        <p class="muted">Paste a long URL, get something like <code><?php echo e(url('abc123')); ?></code>.</p>

        <form action="/shorten" method="POST">
            <?php echo csrf_field(); ?>
            <input type="url" name="original_url" placeholder="https://www.example.com/some/very/long/path" required
                value="<?php echo e(old('original_url')); ?>">
            <button type="submit">Shorten</button>
        </form>

        <?php if($errors->any()): ?>
            <div class="msg error"><?php echo e($errors->first('original_url')); ?></div>
        <?php endif; ?>

        <?php if(session('shortened_url')): ?>
            <div class="msg ok">
                <strong>Short URL:</strong>
                <a id="shortLink" href="<?php echo e(session('shortened_url')); ?>"
                    target="_blank"><?php echo e(session('shortened_url')); ?></a>
                <button onclick="copyShort()">Copy</button>
            </div>
            <script>
                function copyShort() {
                    const txt = document.getElementById('shortLink').href;
                    navigator.clipboard?.writeText(txt).then(() => alert('Copied!'));
                }
            </script>
        <?php endif; ?>
    </div>
</body>

</html>
<?php /**PATH G:\New folder\url-shortener\resources\views/welcome.blade.php ENDPATH**/ ?>