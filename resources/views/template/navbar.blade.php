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

            <li class="@if(url('/jobseeker/dashboard') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('jobseeker/dashboard')}}"><i class="fa fa-line-chart"></i> <span class="nav-label">Dashboard</span></a>
            </li>

            <li class="@if(url('/tentangsaya') == request()->url() or url('/riwayatpekerjaan') == request()->url()) active @else '' @endif treeview">
                <a href="{{ url('tentangsaya')}}"><i class="fa fa-address-book"></i> <span class="nav-label">Profil Saya</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                  <li class="@if(url('/riwayatpekerjaan') == request()->url()) active @else '' @endif  treeview"><a href="{{ url('riwayatpekerjaan')}}">Riwayat Pekerjaan</a></li>
                  <li class="@if(url('/riwayatpendidikan') == request()->url()) active @else '' @endif  treeview"><a href="{{ url('riwayatpendidikan')}}">Riwayat Pendidikan</a></li>
                  <li class="@if(url('/sertifikatkeahlian') == request()->url()) active @else '' @endif  treeview"><a href="{{ url('sertifikatkeahlian')}}">Sertifikat Keahlian</a></li>
                  <li class="@if(url('/kemampuanbahasa') == request()->url()) active @else '' @endif  treeview"><a href="{{ url('kemampuanbahasa')}}">Kemampuan Bahasa</a></li>
                  <li class="@if(url('/curiculumvitae') == request()->url()) active @else '' @endif  treeview"><a href="{{ url('curiculumvitae')}}">Curiculum Vitae</a></li>
                  <li class="@if(url('/tentangsaya') == request()->url()) active @else '' @endif  treeview"><a href="{{ url('tentangsaya')}}">Tentang Saya</a></li>
                </ul>
            </li>

            <li class="@if(url('/notifikasi') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('notifikasi')}}"><i class="fa fa-envelope"></i> <span class="nav-label">Notifikasi</span></a>
            </li>

            <li class="@if(url('/lowonganpekerjaan') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('/lowonganpekerjaan')}}"><i class="fa fa-paper-plane-o"></i> <span class="nav-label">Lowongan Pekerjaan</span></a>
            </li>

            <li class="@if(url('/riwayattes') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('riwayattes')}}"><i class="fa fa-history"></i> <span class="nav-label">Riwayat Tes</span></a>
            </li>

        </ul>

    </div>
</nav>
