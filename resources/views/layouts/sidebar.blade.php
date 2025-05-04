<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('AdminLTE-2/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="header">MASTER</li>
            <li class="{{ request()->routeIs('kategori.index') ? 'active' : '' }}">
                <a href="{{ route('kategori.index') }}">
                    <i class="fa fa-list"></i> <span>Kategori</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('produk.index') ? 'active' : '' }}">
                <a href="{{ route('produk.index') }}">
                    <i class="fa fa-cubes"></i> <span>Produk</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('member.index') ? 'active' : '' }}">
                <a href="{{ route('member.index') }}">
                    <i class="fa fa-id-card"></i> <span>Member</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('supplier.index') ? 'active' : '' }}">
                <a href="{{ route('supplier.index') }}">
                    <i class="fa fa-truck"></i> <span>Supplier</span>
                </a>
            </li>

            <li class="header">TRANSAKSI</li>
            <li class="{{ request()->routeIs('pengeluaran.index') ? 'active' : '' }}">
                <a href="{{ route('pengeluaran.index') }}">
                    <i class="fa fa-money"></i> <span>Pengeluaran</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('pembelian.index') ? 'active' : '' }}">
                <a href="{{ route('pembelian.index') }}">
                    <i class="fa fa-shopping-bag"></i> <span>Pembelian</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('penjualan.index') ? 'active' : '' }}">
                <a href="{{ route('penjualan.index') }}">
                    <i class="fa fa-upload"></i> <span>Penjualan</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('transaksi.index') ? 'active' : '' }}">
                <a href="{{ route('transaksi.index') }}">
                    <i class="fa fa-cart-arrow-down"></i> <span>Transaksi Aktif</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('transaksi.baru') ? 'active' : '' }}">
                <a href="{{ route('transaksi.baru') }}">
                    <i class="fa fa-shopping-cart"></i> <span>Transaksi Baru</span>
                </a>
            </li>

            <li class="header">REPORT</li>
            <li class="{{ request()->routeIs('laporan.index') ? 'active' : '' }}">
                <a href="{{ route('laporan.index') }}">
                    <i class="fa fa-file"></i> <span>Laporan</span>
                </a>
            </li>

            <li class="header">SYSTEM</li>
            <li class="{{ request()->routeIs('user.index') ? 'active' : '' }}">
                <a href="{{ route('user.index') }}">
                    <i class="fa fa-users"></i> <span>User</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('setting.index') ? 'active' : '' }}">
                <a href="{{ route('setting.index') }}">
                    <i class="fa fa-cog"></i> <span>Pengaturan</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
