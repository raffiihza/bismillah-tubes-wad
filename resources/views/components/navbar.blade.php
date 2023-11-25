<div class="navbar {{ request()->routeIs('home') ? 'bg-slate-300' : 'bg-base'}}">
    <div class="navbar-start">
        <div class="dropdown">
            <label tabindex="0" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </label>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                <li><a>Antrian</a></li>
                <li><a>Total</a></li>
                <li><a>Informasi</a></li>
            </ul>
        </div>
        <a class="btn btn-ghost text-xl">
            <div class="object-fit w-20">
                <img src="/logo.jpg" alt="">
            </div>
        </a>
        <ul class="menu menu-horizontal hidden lg:flex px-1">
            <li>
                <a class="{{ request()->routeIs('antrian') ? 'link-active' : ''}}" href="{{ route('antrian') }}">Antrian</a>
            </li>
            <li>
                <a class="{{ request()->routeIs('total-pasien') ? 'link-active' : ''}}" href="{{ route('total-pasien') }}">Total</a>
            </li>
            <li>
                <a class="{{ request()->routeIs('informasi') ? 'link-active' : ''}}" href="{{ route('informasi') }}">Informasi</a>
            </li>
        </ul>
    </div>
    <div class="navbar-end">
        <button class="btn btn-error text-white" id="logout-button">
            Logout
        </button>
    </div>
</div>
