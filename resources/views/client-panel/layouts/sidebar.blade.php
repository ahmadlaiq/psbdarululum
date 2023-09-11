<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-text mx-3">Darul Ulum Kenongo</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/user/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Kelola
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-file"></i>
            <span>Formulir</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Kelola Formulir:</h6>
                <a class="collapse-item" href="/user/lihat-formulir">Lihat Formulir</a>
                <a class="collapse-item" href="/user/edit-formulir">Lengkapi Formulir</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-folder"></i>
            <span>Berkas</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Kelola Berkas:</h6>
                {{-- <a class="collapse-item" href="/user/upload-berkas">Upload Berkas</a> --}}
                <a class="collapse-item" href="/user/lihat-berkas">Lihat Berkas</a>
                <a class="collapse-item" href="/user/edit-berkas">Lengkapi Berkas</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePembayaran"
            aria-expanded="true" aria-controls="collapsePembayaran">
            <i class="fas fa-fw fa-credit-card"></i>
            <span>Pembayaran</span>
        </a>
        <div id="collapsePembayaran" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Kelola Pembayaran:</h6>
                <a class="collapse-item" href="/user/upload-pembayaran">Upload Bukti Pembayaran</a>
                <a class="collapse-item" href="/user/status-pembayaran">Status Pembayaran</a>
            </div>
        </div>
    </li> --}}

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline mt-2">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
