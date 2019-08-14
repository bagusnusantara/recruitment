<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">				
				<li class="nav-header">
                    <div class="dropdown profile-element">
                        <img alt="image" class="img-circle" src="/storage/avatars/{{ Auth::user()->avatar }}" style="width: 75px; height: 75px"/>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">{{ Auth::user()->name }}</span>
                            <span class="text-muted text-xs block">{{ Auth::user()->roles }} <b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li>
							<a href="{{url('admin/profile')}}">
								<i class="material-icons">Setting Profile</i>
							</a>
                        </li>
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

			
			<li class="@if(url('/hrd/sdm/smi') == request()->url()
            or url('/hrd/sdm/worker') == request()->url()
            or url('/hrd/sdm/resign') == request()->url()) active @else '' @endif treeview">
				<a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Data Karyawan</span><span class="fa arrow"></span></a>
				<ul class="nav nav-second-level collapse">
						<li class="@if(url('hrd/sdm/smi') == request()->url()) active @else '' @endif"><a href="{{ url('/hrd/sdm/smi') }}">Data Karyawan SMI</a></li>
						<li class="@if(url('hrd/sdm/smi') == request()->url()) active @else '' @endif"><a href="{{ url('/hrd/sdm/worker') }}">Data Worker</a></li>
						<li class="@if(url('hrd/sdm/smi') == request()->url()) active @else '' @endif"><a href="{{ url('/hrd/sdm/resign') }}">Data Karyawan Resign</a></li>
						
						
				</ul>
			</li>
            
            
            <li class="@if(url('/hrd/presensi') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('hrd/presensi')}}"><i class="fa fa-line-chart"></i> <span class="nav-label">Presensi</span></a>
            </li>
            <li class="@if(url('/hrd/absensi') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('hrd/absensi')}}"><i class="fa fa-line-chart"></i> <span class="nav-label">Absensi</span></a>
            </li>
            <li class="@if(url('/hrd/payroll') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('hrd/payroll')}}"><i class="fa fa-money"></i> <span class="nav-label">Generate Payroll</span></a>
            </li>
            <li class="@if(url('hrd/setup/komponengaji') == request()->url() or url('hrd/setup/umk') == request()->url()) active @else '' @endif treeview">
              <a href="#"><i class="fa fa fa-cog"></i> <span class="nav-label">Setup System</span><span class="fa arrow"></span></a>
              <ul class="@if(url('hrd/setup/komponengaji') == request()->url() or url('hrd/setup/umk') == request()->url()) active @else '' @endif nav nav-second-level collapse">
                  <li>
                      <a href="#" id="damian">Payroll<span class="fa arrow"></span></a>
                      <ul class="nav nav-third-level">
                          <li class="@if(url('hrd/setup/komponengaji') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/komponengaji')}}">Komponen Gaji</a>
                          </li>
                          <li class="@if(url('hrd/setup/umk') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/umk')}}">UMK</a>
                          </li>
                          <li class="@if(url('hrd/setup/tunjanganjabatan') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/tunjanganjabatan')}}">Tunjangan Jabatan</a>
                          </li>
                          <li class="@if(url('hrd/setup/tunjangantransport') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/tunjangantransport')}}">Tunjangan Transport</a>
                          </li>
                          <li class="@if(url('hrd/setup/tunjanganmakan') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/tunjanganmakan')}}">Tunjangan Makan</a>
                          </li>
                          <li class="@if(url('hrd/setup/periodecutoffgaji') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/periodecutoffgaji')}}">Periode Cut Off Gaji</a>
                          </li>
                          <li class="@if(url('hrd/setup/jamsostekdanbpjs') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/jamsostekdanbpjs')}}">Jamsostek dan BPJS</a>
                          </li>
                          <li class="@if(url('hrd/setup/uanghadir') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/uanghadir')}}">Uang Hadir</a>
                          </li>
                          <li class="@if(url('hrd/setup/potonganterlambat') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/potonganterlambat')}}">Potongan Terlambat</a>
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
