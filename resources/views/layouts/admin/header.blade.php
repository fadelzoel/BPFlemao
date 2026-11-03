<div class="py-4">
    <!-- START: Breadcrumb -->
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
                <a href="#">
                    <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('pelanggan.index') }}">Pelanggan</a></li>
        </ol>
    </nav>
    <!-- END: Breadcrumb -->

    <!-- START: Title + Add button -->
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Data Pelanggan</h1>
            <p class="mb-0">List data seluruh pelanggan</p>
        </div>
        <div>
            <!-- Link to create-new-customer form -->
            <a href="{{ route('pelanggan.create') }}" class="btn btn-success text-white">
                <i class="fas fa-plus me-1"></i> Tambah Pelanggan
            </a>
        </div>
    </div>
    <!-- END: Title + Add button -->
</div>