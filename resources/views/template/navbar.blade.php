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
                          <li class="@if(url('hrd/setup/tunjanganprestasi') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/tunjanganprestasi')}}">Tunjangan Prestasi</a>
                          </li>
                          <li class="@if(url('hrd/setup/penandatanganangaji') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/penandatanganangaji')}}">Penandatanganan Gaji</a>
                          </li>
                          <li class="@if(url('hrd/setup/gpjabatansite') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/gpjabatansite')}}">Gaji Pokok Per Jabatan (Site)</a>
                          </li>
                          <li class="@if(url('hrd/setup/jkslain') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/jkslain')}}">JKS Lain</a>
                          </li>
                          <li class="@if(url('hrd/setup/bpjs') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/bpjs')}}">BPJS</a>
                          </li>
                          <li class="@if(url('hrd/setup/tunjangankjk') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/tunjangankjk')}}">Tunjangan KJK</a>
                          </li>
                          <li class="@if(url('hrd/setup/tunjanganotn') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/tunjanganotn')}}">Tunjangan OTN</a>
                          </li>
                          <li class="@if(url('hrd/setup/tunjanganotr') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/tunjanganotr')}}">Tunjangan OTR</a>
                          </li>
                          <li class="@if(url('hrd/setup/tunjanganshiftmalam') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/tunjanganshiftmalam')}}">Tunjangan SHIFT MALAM</a>
                          </li>
                          <li class="@if(url('hrd/setup/kjkperjabatansite') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/kjkperjabatansite')}}">Tunj KJK Per jabatan (site)</a>
                          </li>
                          <li class="@if(url('hrd/setup/otnperjabatansite') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/otnperjabatansite')}}">Tunj OTN Perjabatan (Site)</a>
                          </li>
                          <li class="@if(url('hrd/setup/masakerjatahunansite') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/masakerjatahunansite')}}">Tunj Masa Kerja Tahunan (site)</a>
                          </li>
                          <li class="@if(url('hrd/setup/kelompoktanggalpenggajian') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/kelompoktanggalpenggajian')}}">Kelompok Tanggal Penggajian</a>
                          </li>
                          <li class="@if(url('hrd/setup/creatorpaymentrequisition') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/creatorpaymentrequisition')}}">Creator Payment Requisition</a>
                          </li>
                          <li class="@if(url('hrd/setup/ttpaymentrequisition') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/ttpaymentrequisition')}}">TT Payment Requisition</a>
                          </li>
                          <!--<li class="@if(url('hrd/setup/jamsostekdanbpjs') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/jamsostekdanbpjs')}}">Jamsostek dan BPJS</a>
                          </li>
                          <li class="@if(url('hrd/setup/uanghadir') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/uanghadir')}}">Uang Hadir</a>
                          </li>
                          <li class="@if(url('hrd/setup/potonganterlambat') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/potonganterlambat')}}">Potongan Terlambat</a>
                          </li>-->


                      </ul>
                  </li>
                    <li>
                      <a href="#" id="attendance">Attendance<span class="fa arrow"></span></a>
                      <ul class="nav nav-third-level">
                          <li class="@if(url('hrd/setup/harilibur') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/harilibur')}}">Hari libur</a>
                          </li>
                          <li class="@if(url('hrd/setup/kalenderlibur') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/kalenderlibur')}}">Kalender Libur</a>
                          </li>
                          <li class="@if(url('hrd/setup/harilembur') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/harilembur')}}">Hari lembur</a>
                          </li>
                          <li class="@if(url('hrd/setup/waktulembur') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/waktulembur')}}">Waktu Lembur</a>
                          </li>
                          <li class="@if(url('hrd/setup/sanksi') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/sanksi')}}">Sanksi</a>
                          </li>
                          <li class="@if(url('hrd/setup/alasanabsen') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/alasanabsen')}}">Alasan Absen</a>
                          </li>
                          <li class="@if(url('hrd/setup/schclass') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/schclass')}}">Schedule Class</a>
                          </li>
                          <li class="@if(url('hrd/setup/schpola') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/schpola')}}">Schedule Pola</a>
                          </li>
                          <li class="@if(url('hrd/setup/jadwalgroup') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/jadwalgroup')}}">Jadwal Group</a>
                          </li>
                          <li class="@if(url('hrd/setup/jadwalpersonal') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/jadwalpersonal')}}">Jadwal Personal</a>
                          </li>
                          <li class="@if(url('hrd/setup/periode') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/periode')}}">Periode (default)</a>
                          </li>
                          <li class="@if(url('hrd/setup/sisacuti') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/sisacuti')}}">Sisa Cuti (periode sebelumnya)</a>
                          </li>

                      </ul>
                  </li>
                    <li>
                      <a href="#" id="pekerjaan">Pekerjaan<span class="fa arrow"></span></a>
                      <ul class="nav nav-third-level">
                          <li class="@if(url('hrd/setup/departemen') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/departemen')}}">Departemen</a>
                          </li>
                          <li class="@if(url('hrd/setup/group') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/group')}}">Group</a>
                          </li>
                          <li class="@if(url('hrd/setup/shift') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/shift')}}">Shift</a>
                          </li>
                          <li class="@if(url('hrd/setup/staff') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/staff')}}">Staff</a>
                          </li>
                          <li class="@if(url('hrd/setup/golongan') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/golongan')}}">Golongan</a>
                          </li>
                          <li class="@if(url('hrd/setup/jabatan') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/jabatan')}}">Jabatan</a>
                          </li>
                          <li class="@if(url('hrd/setup/leveljabatan') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/leveljabatan')}}">Level Jabatan</a>
                          </li>
                          <li class="@if(url('hrd/setup/statuskaryawan') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/statuskaryawan')}}">Status Karyawan</a>
                          </li>
                          <li class="@if(url('hrd/setup/alasanresign') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/alasanresign')}}">Alasan Resign</a>
                          </li>
                          <li class="@if(url('hrd/setup/spesialisasipekerjaan') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/spesialisasipekerjaan')}}">Spesialisasi Pekerjaan</a>
                          </li>
                          <li class="@if(url('hrd/setup/lokasipekerjaan') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/lokasipekerjaan')}}">Lokasi Pekerjaan (md_client)</a>
                          </li>
                          <li class="@if(url('hrd/setup/jenispekerjaan') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/jenispekerjaan')}}">Jenis Pekerjaan</a>
                          </li>
                          <li class="@if(url('hrd/setup/pelatihan') == request()->url()) active @else '' @endif  treeview">
                              <a href="{{ url('hrd/setup/pelatihan')}}">Pelatihan</a>
                          </li>

                      </ul>
                  </li>

              </ul>
            </li>
            @endcan

            @can('isAdmin')

            <li class="@if(url('/admin/dashboard') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('admin/dashboard')}}"><i class="fa fa-chart-line"></i> <span class="nav-label">Dashboard</span></a>
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
                <a href="{{ url('admin/klien')}}"><i class="fa fa-handshake"></i> <span class="nav-label">Klien</span></a>
            </li>

            <li class="@if(url('admin/lowongan') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('admin/lowongan')}}"><i class="fa fa-newspaper"></i> <span class="nav-label">Lowongan Pekerjaan</span></a>
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
