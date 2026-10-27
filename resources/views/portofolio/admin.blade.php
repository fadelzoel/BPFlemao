<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Manage Portofolio</title>

    <style>
        :root {
            --bg: #0e1014;
            --surface: #161920;
            --raised: #1d212a;
            --line: #2a2f3b;
            --text: #e9ebef;
            --muted: #99a1b0;
            --accent: #7aa7ff;
            --ok: #3fb950;
            --danger: #f2564f;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            background: var(--bg);
            color: var(--text);
            font: 16px/1.5 system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        }

        .page { max-width: 1040px; margin: 0 auto; padding: 40px 20px 64px; }

        .topbar {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 28px;
        }
        .topbar h1 { margin: 0; font-size: 28px; font-weight: 650; letter-spacing: -0.01em; }
        .topbar p { margin: 4px 0 0; color: var(--muted); font-size: 14px; }
        .actions { display: flex; flex-wrap: wrap; gap: 10px; }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            padding: 10px 18px;
            border: 1px solid transparent;
            border-radius: 8px;
            font: inherit;
            font-size: 14px;
            font-weight: 600;
            line-height: 1.2;
            text-decoration: none;
            color: #fff;
            cursor: pointer;
            transition: background-color .15s ease, border-color .15s ease;
        }
        .btn:focus-visible { outline: 2px solid var(--accent); outline-offset: 2px; }
        .btn-success { background: var(--ok); color: #06210c; }
        .btn-success:hover { background: #56c96a; }
        .btn-secondary { background: transparent; border-color: var(--line); color: var(--text); }
        .btn-secondary:hover { background: var(--raised); }
        .btn-primary { background: transparent; border-color: var(--accent); color: var(--accent); }
        .btn-primary:hover { background: rgba(122,167,255,.12); }
        .btn-danger { background: transparent; border-color: rgba(242,86,79,.6); color: var(--danger); }
        .btn-danger:hover { background: rgba(242,86,79,.12); }
        .btn-sm { padding: 6px 12px; font-size: 13px; }

        .alert-success {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
            padding: 12px 16px;
            background: rgba(63,185,80,.12);
            border: 1px solid rgba(63,185,80,.45);
            border-radius: 8px;
            color: #8ee69c;
            font-size: 14px;
        }

        .card {
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: 12px;
            overflow: hidden;
        }
        .table-wrap { overflow-x: auto; }
        table { width: 100%; border-collapse: collapse; min-width: 640px; }
        th, td { padding: 14px 18px; text-align: left; vertical-align: middle; }
        thead th {
            background: var(--raised);
            color: var(--muted);
            font-size: 13px;
            font-weight: 600;
            border-bottom: 1px solid var(--line);
        }
        tbody tr + tr td { border-top: 1px solid var(--line); }
        tbody tr:hover td { background: rgba(255,255,255,.02); }

        .img-thumb {
            display: block;
            width: 104px;
            height: 68px;
            object-fit: cover;
            border-radius: 6px;
            border: 1px solid var(--line);
            background: var(--raised);
        }
        .title-cell { font-weight: 600; }
        .desc-cell { color: var(--muted); font-size: 14px; max-width: 360px; }
        .row-actions { display: flex; gap: 8px; align-items: center; white-space: nowrap; }
        .row-actions form { margin: 0; }
        .empty { text-align: center; color: var(--muted); padding: 48px 18px; }

        @media (max-width: 560px) {
            .topbar h1 { font-size: 24px; }
            .actions { width: 100%; }
            .actions .btn { flex: 1; }
        }
    </style>
</head>
<body>

    <div class="page">
        <div class="topbar">
            <div>
                <h1>Manage Portofolio</h1>
                <p>{{ count($portofolios) }} project</p>
            </div>
            <div class="actions">
                <a href="{{ route('portofolio.index') }}" class="btn btn-secondary">&larr; Kembali ke Template</a>
                <a href="{{ route('portofolio.create') }}" class="btn btn-success">+ Tambah Project</a>
            </div>
        </div>

        @if(session('success'))
            <div class="alert-success" role="status">
                {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($portofolios as $item)
                        <tr>
                            <td>
                                <img src="{{ asset('storage/' . $item->image) }}" class="img-thumb" alt="{{ $item->title }}">
                            </td>
                            <td class="title-cell">{{ $item->title }}</td>
                            <td class="desc-cell">{{ Str::limit($item->description, 70) }}</td>
                            <td>
                                <div class="row-actions">
                                    <a href="{{ route('portofolio.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('portofolio.destroy', $item->id) }}" method="POST">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="empty">Belum ada data portofolio. Klik "+ Tambah Project" untuk mulai.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>