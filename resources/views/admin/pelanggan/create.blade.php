<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="utf-8">
    <title>Tambah Pelanggan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link type="text/css" href="{{asset('assets-admin/css/volt.css') }}" rel="stylesheet">
</head>
<body class="bg-light">
    <main class="content py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card border-0 shadow">
                        <div class="card-body p-4">
                            <h3 class="mb-4">Tambah Pelanggan</h3>
                            
                            <form action="{{ route('pelanggan.store') }}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label">First name</label>
                                        <input type="text" name="first_name" class="form-control" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Last name</label>
                                        <input type="text" name="last_name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Birthday</label>
                                        <input type="date" name="birthday" class="form-control" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Gender</label>
                                        <select name="gender" class="form-select" required>
                                            <option value="">-- Pilih --</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Phone</label>
                                        <input type="text" name="phone" class="form-control" required>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="{{ route('pelanggan.index') }}" class="btn btn-outline-secondary ms-2">Batal</a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>