<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/{{auth()->user()->level}}/dashboard">Kangen POS</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="">KP</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown">
                <a href="/{{auth()->user()->level}}/dashboard" class="nav-link"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Menu</li>
            @if(auth()->user()->level=='admin')
            <li class="dropdown">
                <a href="/{{auth()->user()->level}}/kategori" class="nav-link"><i class="fas fa-list"></i><span>Kategori</span></a>
            </li>
            <li class="dropdown">
                <a href="/{{auth()->user()->level}}/satuan" class="nav-link"><i class="fas fa-box"></i><span>Satuan</span></a>
            </li>
            <li class="dropdown">
                <a href="/{{auth()->user()->level}}/barang" class="nav-link"><i class="fas fa-cubes"></i><span>Barang</span></a>
            </li>
            @endif
            @if(auth()->user()->level == 'kasir')
            <li class="dropdown">
                <a href="/{{auth()->user()->level}}/penjualan" class="nav-link"><i class="fa fa-shopping-cart fa-lg"></i><span>Transaksi</span></a>
            </li>
            <li class="dropdown">
                <a href="/{{auth()->user()->level}}/laporan" class="nav-link"><i class="fa fa-file fa-lg"></i><span>Laporan</span></a>
            </li>
            @endif
            @if(auth()->user()->level == 'admin')
            <li class="dropdown">
                <a href="/{{auth()->user()->level}}/laporan" class="nav-link"><i class="fas fa-file"></i><span>Laporan</span></a>
            </li>
            <li class="dropdown">
                <a href="/{{auth()->user()->level}}/user" class="nav-link"><i class="fas fa-users"></i><span>User</span></a>
            </li>
            @endif
        </ul>
    </aside>
</div>
