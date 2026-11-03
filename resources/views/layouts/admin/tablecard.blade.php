<div class="row">
            <div class="col-12 mb-4">
                <div class="card border-0 shadow mb-4">
                    <div class="card-body">

                        <!-- START: Success flash message -->
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <!-- END: Success flash message -->

                        <!-- START: Responsive table wrapper -->
                        <div class="table-responsive">
                            <table id="table-pelanggan" class="table table-centered table-nowrap mb-0 rounded">
                                <!-- Table header -->
                                <thead class="thead-light">
                                    <tr>
                                        <th class="border-0">First Name</th>
                                        <th class="border-0">Last Name</th>
                                        <th class="border-0">Birthday</th>
                                        <th class="border-0">Gender</th>
                                        <th class="border-0">Email</th>
                                        <th class="border-0">Phone</th>
                                        <th class="border-0 rounded-end">Action</th>
                                    </tr>
                                </thead>
                                <!-- Table body: loop through $dataPelanggan -->
                                <tbody>
                                    @foreach($dataPelanggan as $pelanggan)
                                    <tr>
                                        <td><a href="#" class="text-primary fw-bold">{{ $pelanggan->first_name }}</a>
                                        </td>
                                        <td>{{ $pelanggan->last_name }}</td>
                                        <td>{{ $pelanggan->birthday }}</td>
                                        <td>{{ $pelanggan->gender }}</td>
                                        <td>{{ $pelanggan->email }}</td>
                                        <td>{{ $pelanggan->phone }}</td>
                                        <td>
                                            <!-- Edit button (uses pelanggan_id as route param) -->
                                            <a href="{{ route('pelanggan.edit', $pelanggan->pelanggan_id) }}"
                                                class="btn btn-sm btn-primary">Edit</a>

                                            <!-- Delete form (uses POST + @method('DELETE') for Laravel RESTful) -->
                                            <form action="{{ route('pelanggan.destroy', $pelanggan->pelanggan_id) }}"
                                                method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- END: Responsive table wrapper -->
                    </div>
                </div>
            </div>
        </div>