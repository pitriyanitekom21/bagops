<div class="sidebar-wrapper active bg-black">
    <style>
        .bg-black {
            background-color: black;
        }
    </style>
    <div class="sidebar-header">
        <div class="d-flex justify-content-center">
            <div class="logo">
                <img src="{{ asset('pitri') }}/assets/images/ops.png" style="width: 100px; height: auto;">
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title text-white">Menu</li>
            @if (Auth::user()->level=='1')
            <li class="sidebar-item">
                <a href="{{ url('/home', []) }}" class='sidebar-link'>
                    <i class="bi bi-grid-fill text-white"></i>
                    <span class="text-white">Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-pen-fill text-white"></i>
                    <span class="text-white">Jadwal Piket</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item text-white">
                        <a href="{{ url('/dataBagops', []) }}"><span class="text-white">Januari</span></a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{ url('/dataFeb', []) }}"><span class="text-white">Februari</span></a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{ url('/dataMar', []) }}"><span class="text-white">Maret</span></a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{ url('/dataAp', []) }}"><span class="text-white">April</span></a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{ url('/dataMei', []) }}"><span class="text-white">Mei</span></a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{ url('/dataJun', []) }}"><span class="text-white">Juni</span></a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{ url('dataJul', []) }}"><span class="text-white">Juli</span></a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{ url('dataAg', []) }}"><span class="text-white">Agustus</span></a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{ url('dataSe', []) }}"><span class="text-white">September</span></a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{ url('dataOk', []) }}"><span class="text-white">Oktober</span></a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{ url('dataNo', []) }}"><span class="text-white">November</span></a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{ url('dataDe', []) }}"><span class="text-white">Desember</span></a>
                    </li>
                </ul>
            </li>
            @endif
            @if (Auth::user()->level=='2')
            <li class="sidebar-item">
                <a href="{{ url('/home', []) }}" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span class="text-white">Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item  ">
                <a href="{{ url('/form', []) }}" class='sidebar-link'>
                    <i class="bi bi-cloud-arrow-up-fill"></i>
                    <span class="text-white">File Upload</span>
                </a>
            </li>
            @endif
        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>