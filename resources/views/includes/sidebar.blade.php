<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-shopping-basket"></i>
        </div>
        <div class="sidebar-brand-text mx-3">GLOW BEAUTY</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- Divider -->
    
    {{-- jika menu ini di tampilkan untuk khusus login sebagai admin --}}
    @if($showmenu)

    <hr class="sidebar-divider">
    <li class="nav-item active">
        <a class="nav-link" href="/gejala">
            <i class="fas fa-fw fa-users"></i>
            <span>Gejala</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
        
    @endif
    <!-- Nav Item - Dashboard -->
    
    
</ul>