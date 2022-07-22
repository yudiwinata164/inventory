<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light h-100">
            <div class="navbar-nav w-100 d-flex flex-column justify-content-between h-100">
                <div>
                    <a href="{{ route("Home") }}" class="navbar-brand mx-4 mb-4">
                        <img src="https://www.puribunda.com/wp-content/uploads/2017/07/gif.gif" alt="">
                    </a>
                
                    <div class="mt-4">
                        <a href="/" class="nav-item nav-link p-3 text-left d-flex align-items-center gap-2 {{ request()->is("/") ? 'active' : ''}}"><span class="material-symbols-rounded ">dashboard</span>Dashboard</a>
                    {{-- <div class="nav-item dropdown"> --}}
                        {{-- <a href="#" class="nav-link dropdown-toggle p-3 text-center active" data-bs-toggle="dropdown">Data Barang</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="/databarang" class="dropdown-item active">Laptop</a>
                            <a href="/miniPC" class="dropdown-item">Mini PC</a>
                            <a href="/miniPC" class="dropdown-item">Komputer</a>
                            <a href="/server" class="dropdown-item">Server</a>
                            <a href="/printer" class="dropdown-item">Printer</a>
                            <a href="/other" class="dropdown-item">Other</a>
                        </div> --}}
                    {{-- </div> --}}
                    <a href="/databarang" class="nav-item nav-link  p-3 text-left d-flex align-items-center gap-2 {{ request()->is("databarang*") ? 'active' : ''}} "><span class="material-symbols-rounded ">inventory</span>Data Barang</a>
                    <a href="/stockbarang" class="nav-item nav-link  p-3 text-left d-flex align-items-center gap-2 {{ request()->is("stockbarang*") ? 'active' : ''}}"><span class="material-symbols-rounded ">inventory_2</span>Stock Barang</a>
                    {{-- <a href="/unit" class="nav-item nav-link  p-3 text-center {{ request()->is("unit*") ? 'active' : ''}}">Unit</a> --}}
                    </div>
                </div>
            
                <form action="{{ route('Logout') }}" class="w-100" method="POST">
                    @csrf
                    <button type="submit" onclick="return confirm('Yakin ingin keluar?')" class="nav-item nav-link p-3 text-left d-flex align-items-center gap-2 border-top-0 border-bottom-0 border-end-0 text-danger w-100">Logout</button>
                </form>
            </div>
    </nav>
</div>
<!-- Sidebar End -->