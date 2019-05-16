<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="image" class="img-circle" src="{{ asset('inspinia/img/admin.jpg') }}" />
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ Auth::user()->name }}</strong></span>
                        <span class="text-muted text-xs block">{{ Auth::user()->user_type }}<b class="caret"></b></span> </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li>
                          <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="material-icons">Logout</i>
                          </a>
                          <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none">
                            @csrf
                          </form>
                        </li>
                    </ul>
                </div>
                <div class="logo-element">
                    SMI
                </div>
            </li>
            @can('isJobseeker')
            <li class="@if(url('/jobseeker/dashboard') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('jobseeker/dashboard')}}"><i class="fa fa-line-chart"></i> <span class="nav-label">Dashboard</span></a>
            </li>

            <li class="@if(url('/jobseeker/profil/tentangsaya') == request()->url() or url('jobseeker/profil/riwayatpekerjaan') == request()->url()) active @else '' @endif treeview">
                <a href="{{ url('jobseeker/profil/tentangsaya')}}"><i class="fa fa-address-book"></i> <span class="nav-label">Profil Saya</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                  <li class="@if(url('jobseeker/profil/riwayatpekerjaan') == request()->url()) active @else '' @endif  treeview"><a href="{{ url('jobseeker/profil/riwayatpekerjaan')}}">Riwayat Pekerjaan</a></li>
                  <li class="@if(url('jobseeker/profil/riwayatpendidikan') == request()->url()) active @else '' @endif  treeview"><a href="{{ url('jobseeker/profil/riwayatpendidikan')}}">Riwayat Pendidikan</a></li>
                  <li class="@if(url('jobseeker/profil/sertifikatkeahlian') == request()->url()) active @else '' @endif  treeview"><a href="{{ url('jobseeker/profil/sertifikatkeahlian')}}">Sertifikat Keahlian</a></li>
                  <li class="@if(url('jobseeker/profil/kemampuanbahasa') == request()->url()) active @else '' @endif  treeview"><a href="{{ url('jobseeker/profil/kemampuanbahasa')}}">Kemampuan Bahasa</a></li>
                  <li class="@if(url('jobseeker/profil/curiculumvitae') == request()->url()) active @else '' @endif  treeview"><a href="{{ url('jobseeker/profil/curiculumvitae')}}">Curiculum Vitae</a></li>
                  <li class="@if(url('jobseeker/profil/tentangsaya') == request()->url()) active @else '' @endif  treeview"><a href="{{ url('jobseeker/profil/tentangsaya')}}">Tentang Saya</a></li>
                </ul>
            </li>

            <li class="@if(url('jobseeker/notifikasi') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('jobseeker/notifikasi')}}"><i class="fa fa-envelope"></i> <span class="nav-label">Notifikasi</span></a>
            </li>

            <li class="@if(url('jobseeker/lowonganpekerjaan') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('jobseeker/lowonganpekerjaan')}}"><i class="fa fa-paper-plane-o"></i> <span class="nav-label">Lowongan Pekerjaan</span></a>
            </li>

            <li class="@if(url('jobseeker/riwayattes') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('jobseeker/riwayattes')}}"><i class="fa fa-history"></i> <span class="nav-label">Riwayat Tes</span></a>
            </li>
            @endcan
            @can('isAdmin')

            <li class="@if(url('/admin/dashboard') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('admin/dashboard')}}"><i class="fa fa-line-chart"></i> <span class="nav-label">Dashboard</span></a>
            </li>

            <li class="@if(url('admin/notifikasi') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('admin/notifikasi')}}"><i class="fa fa-envelope"></i> <span class="nav-label">Notifikasi</span></a>
            </li>

            <li class="@if(url('admin/sdm') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('admin/sdm')}}"><i class="fa fa-address-card"></i> <span class="nav-label">SDM</span></a>
            </li>

            <li class="@if(url('admin/klien') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('admin/klien')}}"><i class="fa fa-handshake-o"></i> <span class="nav-label">Klien</span></a>
            </li>

            <li class="@if(url('admin/lowongan') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('admin/lowongan')}}"><i class="fa fa-paper-plane-o"></i> <span class="nav-label">Lowongan Pekerjaan</span></a>
            </li>

            <li class="@if(url('admin/manajementes') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('admin/manajementes')}}"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Manajemen Tes</span></a>
            </li>

            <li class="@if(url('admin/manajemenuser') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('admin/manajemenuser')}}"><i class="fa fa-users"></i> <span class="nav-label">Manajemen User</span></a>
            </li>
            @endcan

        </ul>

    </div>
</nav>
