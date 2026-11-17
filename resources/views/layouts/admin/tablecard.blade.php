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
                            <form method="GET" action="{{ route('pelanggan.index') }}"  class="mb-3">
                                <div class="row">
                                    <div class="col-md-2">
                                        <select name="gender" class="form-select" onchange="this.form.submit()">
                                            <option value="">All</option>
                                            <option value="Male" {{ request('gender')=='Male' ? 'selected' : '' }}>Male</option>
                                            <option value="Female" {{ request('gender')=='Female' ? 'selected' : '' }}>Female</option>
                                            <option value="Other" {{ request('gender')=='Other' ? 'selected' : '' }}>Other</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <input type="text" name="search" class="form-control" id="exampleInputIconRight" value="{{request('search')}}" placeholder="Search" aria-label="Search">
                                            <button type="submit" class="input-group-text" id="basic-addon2">
                                            <svg class="icon icon-xxs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                            </button>
                                            @if(request('search'))
                                                    <a href="{{ request()->fullUrlWithQuery(['search'=> null]) }}" class="btn btn-outline-secondary ml-3" id="clear-search"> Clear</a>
                                            @endif
                                        </div>
                                     </div>
                                </div>
                            </form>

                            
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
                            <div class="mt-3">
                                    {{ $dataPelanggan->links('pagination::bootstrap-5') }}
                                </div>
                        </div>
                        <!-- END: Responsive table wrapper -->
                    </div>
                </div>
            </div>
        </div>