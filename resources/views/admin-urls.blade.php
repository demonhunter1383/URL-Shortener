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
            <a href="{{ route('shorten.url.form') }}" class="btn-secondary">Back to Home</a>
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
                @forelse($urls as $url)
                    <tr>
                        <td>{{ $url->id }}</td>
                        <td style="word-break: break-word;"><a href="{{ $url->original_url }}"
                                target="_blank">{{ $url->original_url }}</a></td>
                        <td><a href="{{ url($url->short_code) }}" target="_blank">{{ url($url->short_code) }}</a></td>
                        <td>{{ $url->visits }}</td>
                        <td>{{ $url->created_at->format('Y-m-d H:i') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No shortened URLs yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
