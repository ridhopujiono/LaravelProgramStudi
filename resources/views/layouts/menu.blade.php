<li class="nav-item {{ Request::is('pengajars*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('pengajars.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Pengajars</span>
    </a>
</li>
<li class="nav-item {{ Request::is('fasilitas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('fasilitas.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Fasilitas</span>
    </a>
</li>
