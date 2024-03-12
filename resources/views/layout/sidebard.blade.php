<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">

        <div class="sidebar-brand-text mx-3">Wellcome<sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>


    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Data</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                @if (Auth::user()->role == 'admin')
                <a class="collapse-item" href="{{ route('buku-admin.index') }}">Buku</a>
                <a class="collapse-item" href="{{ route('user.index') }}">User</a>
                <a class="collapse-item" href="{{ route('kategori.index') }}">Kategori</a>
                <a class="collapse-item" href="{{ route('peminjaman.index') }}">Peminjaman</a>
                @endif
                @if (Auth::user()->role == 'petugas')
                    <a class="collapse-item" href="{{ route('data-peminjaman.index') }}">Peminjaman</a>
                @endif
                @if (Auth::user()->role == 'peminjam')
                <a class="collapse-item" href="{{ route('buku.index') }}">Buku</a>
                <a class="collapse-item" href="{{ route('user.pinjam.index') }}">Peminjaman</a>
                @endif
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

</ul>
<!-- End of Sidebar -->
