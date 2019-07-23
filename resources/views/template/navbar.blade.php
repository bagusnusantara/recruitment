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
            @can('isHRD')
            <li class="@if(url('/hrd/dashboard') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('hrd/dashboard')}}"><i class="fa fa-line-chart"></i> <span class="nav-label">Dashboard</span></a>
            </li>
            <li class="@if(url('/hrd/profil/tentangsaya') == request()->url() or url('jobseeker/profil/riwayatpekerjaan') == request()->url()) active @else '' @endif treeview">
                <a href="{{ url('hrd/profil/tentangsaya')}}"><i class="fa fa-address-book"></i> <span class="nav-label">Master Data Karyawan</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                  <li class="@if(url('hrd/profil/riwayatpekerjaan') == request()->url()) active @else '' @endif  treeview"><a href="{{ url('jobseeker/profil/riwayatpekerjaan')}}">Data Karyawan SMI</a></li>
                  <li class="@if(url('hrd/profil/riwayatpendidikan') == request()->url()) active @else '' @endif  treeview"><a href="{{ url('jobseeker/profil/riwayatpendidikan')}}">Data Worker</a></li>
                  <li class="@if(url('hrd/profil/sertifikatkeahlian') == request()->url()) active @else '' @endif  treeview"><a href="{{ url('jobseeker/profil/sertifikatkeahlian')}}">Data Karyawan Resign</a></li>
                </ul>
            </li>
            <li class="@if(url('/hrd/dashboard') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('hrd/dashboard')}}"><i class="fa fa-line-chart"></i> <span class="nav-label">Presensi</span></a>
            </li>
            <li class="@if(url('/hrd/dashboard') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('hrd/dashboard')}}"><i class="fa fa-line-chart"></i> <span class="nav-label">Absensi</span></a>
            </li>
            <li class="@if(url('/hrd/payroll') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('hrd/payroll')}}"><i class="fa fa-money"></i> <span class="nav-label">Generate Payroll</span></a>
            </li>
            <li class="@if(url('/hrd/profil/tentangsaya') == request()->url() or url('jobseeker/profil/riwayatpekerjaan') == request()->url()) active @else '' @endif treeview">
              <a href="{{ url('hrd/profil/tentangsaya')}}"><i class="fa fa fa-cog"></i> <span class="nav-label">Setup System</span><span class="fa arrow"></span></a>
              <ul class="nav nav-second-level collapse">
                  <li>
                      <a href="#" id="damian">Payroll<span class="fa arrow"></span></a>
                      <ul class="nav nav-third-level">
                          <li class="@if(url('hrd/setup/gajiperlokasi') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/gajiperlokasi')}}">Gaji per Lokasi</a>
                          </li>
                          <li class="@if(url('hrd/setup/gajiperlokasi') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/gajiperlokasi')}}">Bonus</a>
                          </li>
                          <li class="@if(url('hrd/setup/gajiperlokasi') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/gajiperlokasi')}}">THR</a>
                          </li>
                          <li class="@if(url('hrd/setup/komponengaji') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/komponengaji')}}">Komponen Gaji</a>
                          </li>

                      </ul>
                  </li>

              </ul>
            </li>
            @endcan

            @can('isAdmin')

            <li class="@if(url('/admin/dashboard') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('admin/dashboard')}}"><i class="fa fa-line-chart"></i> <span class="nav-label">Dashboard</span></a>
            </li>

            <!-- <li class="@if(url('admin/notifikasi') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('admin/notifikasi')}}"><i class="fa fa-envelope"></i> <span class="nav-label">Notifikasi</span></a>
            </li> -->

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

            <li class="@if(url('admin/manajemenuser') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('admin/manajemenuser')}}"><i class="fa fa-users"></i> <span class="nav-label">Manajemen User</span></a>
            </li>
            @endcan

            @can('isClient')
            <li class="@if(url('/client/dashboard') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('client/dashboard')}}"><i class="fa fa-line-chart"></i> <span class="nav-label">Dashboard</span></a>
            </li>

            <li class="@if(url('client/notifikasi') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('client/notifikasi')}}"><i class="fa fa-envelope"></i> <span class="nav-label">Notifikasi</span></a>
            </li>

            <li class="@if(url('client/orderlayanan') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('client/orderlayanan')}}"><i class="fa fa-exchange"></i> <span class="nav-label">Order Layanan</span></a>
            </li>

            <li class="@if(url('client/datakaryawan') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('client/datakaryawan')}}"><i class="fa fa-address-card"></i> <span class="nav-label">Data Karyawan</span></a>
            </li>

            @endcan

        </ul>

    </div>
</nav>
