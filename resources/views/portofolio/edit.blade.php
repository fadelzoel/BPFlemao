<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Project - Admin</title>

    <style>
        :root {
            --bg: #0e1014;
            --surface: #161920;
            --raised: #1d212a;
            --line: #2a2f3b;
            --text: #e9ebef;
            --muted: #99a1b0;
            --accent: #7aa7ff;
            --danger: #f2564f;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            background: var(--bg);
            color: var(--text);
            font: 16px/1.5 system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        }

        .form-container {
            max-width: 620px;
            margin: 48px auto;
            padding: 32px;
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: 12px;
        }
        @media (max-width: 660px) {
            .form-container { margin: 0; border-radius: 0; border-left: 0; border-right: 0; padding: 24px 18px; }
        }

        h1 { margin: 0 0 24px; padding-bottom: 16px; border-bottom: 1px solid var(--line); font-size: 26px; font-weight: 650; letter-spacing: -0.01em; }

        .form-group { margin-bottom: 22px; }
        label { display: block; margin-bottom: 8px; color: var(--text); font-size: 14px; font-weight: 600; }
        .hint { margin: 6px 0 0; color: var(--muted); font-size: 13px; }

        input[type="text"], input[type="url"], textarea, input[type="file"] {
            width: 100%;
            padding: 11px 12px;
            background: var(--raised);
            border: 1px solid var(--line);
            border-radius: 8px;
            color: var(--text);
            font: inherit;
            font-size: 15px;
            transition: border-color .15s ease, box-shadow .15s ease;
        }
        input::placeholder, textarea::placeholder { color: #6d7587; }
        input:focus, textarea:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(122,167,255,.2);
        }
        textarea { height: 140px; resize: vertical; line-height: 1.5; }
        input[type="file"] { padding: 8px; cursor: pointer; }
        input[type="file"]::file-selector-button {
            margin-right: 12px;
            padding: 7px 14px;
            background: var(--line);
            border: 0;
            border-radius: 6px;
            color: var(--text);
            font: inherit;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
        }
        input[type="file"]::file-selector-button:hover { background: #363c4a; }

        .preview {
            display: block;
            width: 100%;
            max-height: 240px;
            margin-top: 12px;
            object-fit: cover;
            border: 1px solid var(--line);
            border-radius: 8px;
        }

        .error-box {
            margin-bottom: 22px;
            padding: 12px 16px;
            background: rgba(242,86,79,.1);
            border: 1px solid rgba(242,86,79,.5);
            border-radius: 8px;
            color: #ffb4b0;
            font-size: 14px;
        }
        .error-box ul { margin: 0; padding-left: 20px; }

        .form-actions { display: flex; flex-wrap: wrap; gap: 10px; margin-top: 30px; }
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 11px 20px;
            border: 1px solid transparent;
            border-radius: 8px;
            font: inherit;
            font-size: 14px;
            font-weight: 600;
            line-height: 1.2;
            text-decoration: none;
            cursor: pointer;
            transition: background-color .15s ease;
        }
        .btn:focus-visible { outline: 2px solid var(--accent); outline-offset: 2px; }
        .btn-primary { background: var(--accent); color: #0a1630; }
        .btn-primary:hover { background: #95b9ff; }
        .btn-secondary { background: transparent; border-color: var(--line); color: var(--text); }
        .btn-secondary:hover { background: var(--raised); }
    </style>
</head>
<body>

    <div class="form-container">
        <h1>Edit Project</h1>

        @if($errors->any())
            <div class="error-box" role="alert">
                <ul>
                    @foreach($errors->all() as $error) <li>{{ $error }}</li> @endforeach
                </ul>
            </div>
        @endif

        <!-- Form action goes to UPDATE, and method is PUT -->
        <form action="{{ route('portofolio.update', $portofolio->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="title">Project Title</label>
                <input type="text" id="title" name="title" value="{{ old('title', $portofolio->title) }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" required>{{ old('description', $portofolio->description) }}</textarea>
            </div>

            <div class="form-group">
                <label for="link">Project Link (Optional)</label>
                <input type="url" id="link" name="link" value="{{ old('link', $portofolio->link) }}" placeholder="https://github.com/...">
            </div>

            <div class="form-group">
                <label for="image">Image (Biarkan kosong jika tidak ingin diganti)</label>
                <input type="file" id="image" name="image" accept="image/*">
                
                <!-- Show the current image from the database -->
                <img id="preview" class="preview" src="{{ asset('storage/' . $portofolio->image) }}" alt="Current Image">
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Update Project</button>
                <a href="{{ route('portofolio.admin') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>

    <script>
        // Show a preview of the newly chosen image
        (function () {
            var input = document.getElementById('image');
            var preview = document.getElementById('preview');
            input.addEventListener('change', function () {
                var file = input.files && input.files[0];
                if (!file) return;
                preview.src = URL.createObjectURL(file);
            });
        })();
    </script>

</body>
</html>