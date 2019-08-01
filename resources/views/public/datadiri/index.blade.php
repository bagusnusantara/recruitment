@extends('jobseeker.template.index_content')
@section('css')
<style>
  .thead-smi{
    background-color: aliceblue;
  }
  .th-center th{
    text-align: center;
    vertical-align: middle;
  }
  .th-button
  {
    text-align: right;
    vertical-align: middle;
    margin-left:3%;
  }

  .menu-badge
  {
    z-index: 0;
    position: relative;
    top:0;
    right:0;
  }
  
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('header-title')
<h3>Data Diri</h3>
@endsection
@section('content')
<!--Alert -->
<div class="row mt-5">
    
    <div class="alert alert-primary col-md-11 col-lg-11 ml-auto mr-auto" role="alert">
        <i class="fa fa-info-circle fa-2x">&nbsp;</i>
        <strong>Lengkapi Data Diri untuk melamar pekerjaan (wajib untuk identitas,pendidikan,dan minat kerja')</strong>
    </div>
    @if($dataUserSt['Status']['identitas']==0)
    <div class="alert alert-danger col-md-11 col-lg-11 ml-auto mr-auto" role="alert">
        <i class="fa fa-exclamation-circle fa-2x">&nbsp;</i>
        <strong>Data Identitas Belum Lengkap !</strong>
        <span class="menu-badge badge badge-pill badge-danger" id="btn-pendidikan" href="#">
          <i class="fa fa-edit fa-1x">&nbsp;</i>Selsaikan 
         </span>
   </div>
   @endif
   @if($dataUserSt['Status']['pendidikan']==0)
    <div class="alert alert-danger col-md-11 col-lg-11 ml-auto mr-auto" role="alert">
         <i class="fa fa-exclamation-circle fa-2x">&nbsp;</i>
         <strong>Data Pendidikan Belum Lengkap !</strong>
         <span class="menu-badge badge badge-pill badge-danger" id="btn-pendidikan" href="#">
           <i class="fa fa-edit fa-1x">&nbsp;</i>Selsaikan 
          </span>
    </div>
    @endif
    @if($dataUserSt['Status']['minatkerja']==0)
    <div class="alert alert-danger col-md-11 col-lg-11 ml-auto mr-auto" role="alert">
        <i class="fa fa-exclamation-circle fa-2x">&nbsp;</i>
        <strong>Data Minat Belum Lengkap !</strong>
        <span class="menu-badge badge badge-pill badge-danger" id="btn-pendidikan" href="#">
          <i class="fa fa-edit fa-1x">&nbsp;</i>Selsaikan 
         </span>
   </div>
   @endif
    
 </div>
</div>

<!-- Job Browse Section Start -->
<div class="section">
  <div class="mr-auto">
    <div class="row">
      <div class="ml-5 mr-5 col-lg-2 col-md-4 col-xs-12">
        <div class="right-sideabr">
          <h4>Data Diri</h4>
          <ul id="tab" class="list-item">
              <li class="active">
                <a class="list-group-item-action" href="#identitas">Identitas</a>
                @if($dataUserSt['Status']['identitas']==0)
                <span class="menu-badge badge badge-pill badge-danger mt-0">Belum Lengkap</span>
                @endif
              </li>
              <li>
                <a  class="tab-active list-group-item-action" href="#pendidikan">Pendidikan&nbsp;&nbsp;</a>
                @if($dataUserSt['Status']['pendidikan']==0)
                <span class="menu-badge badge badge-pill badge-danger mt-0">Belum Lengkap</span>
                @endif
              </li>
              <li>
                <a  class="list-group-item-action" href="#keluarga">Keluarga</a>
                @if(!$dataUser->exists('status_keluarga') && !$dataUser->exists('tanggal_keluarga'))
                <span class="menu-badge badge badge-pill badge-danger mt-0">Belum Lengkap</span>
                @endif
              </li>
              <li>
                <a  class="list-group-item-action" href="#pekerjaan">Pekerjaan</a>
                @if($dataUserSt['Status']['pengalamankerja']==0)
                <span class="menu-badge badge badge-pill badge-danger mt-0">Belum Lengkap</span>
                @endif
              </li>
              <li>
                <a  class="list-group-item-action" href="#minat">Minat</a>
                @if($dataUserSt['Status']['minatkerja']==0)
                <span class="menu-badge badge badge-pill badge-danger mt-0">Belum Lengkap</span>
                @endif
              </li>
              <li>
                <a  class="list-group-item-action" href="#aktifitas">Aktifitas</a>
                @if($dataUserSt['Status']['aktivitas']==0 && !$dataUser->exists('olahraga') && !$dataUser->exists('hobi'))
                <span class="menu-badge badge badge-pill badge-danger mt-0">Belum Lengkap</span>
                @endif
              </li>
              <li>
                <a  class="list-group-item-action" href="#lainnya">Lainnya</a>
                @if($dataUserSt['Status']['riwayatpenyakit']==0 && !$dataUser->exists('referensi_dari') && !$dataUser->exists('hobi'))
                <span class="menu-badge badge badge-pill badge-danger mt-0">Belum Lengkap</span>
                @endif
              </li>
              <li>
                <a  class="list-group-item-action" href="#lampiran">Lampiran</a>
                <span class="menu-badge badge badge-pill badge-danger mt-0">Belum Lengkap</span>
              </li>
            </ul>
        </div>
      </div>
          <script src="{{asset('js/smi_onevents.js')}}"></script>
          <div class="col-lg-9 col-md-7 col-xs-12 tabs-stage">
            <!--Detail Identitas-->
            @include('jobseeker.datadiri.identitas')
            <!--Identitas end-->
            <!--Detail Pendidikan-->
            @include('jobseeker.datadiri.pendidikan')
            <!--Pendidikan end-->
            <!--Detail Keluarga -->
            @include('jobseeker.datadiri.keluarga')
            <!--Keluarga end-->
            <!--Detail Pekerjaan -->
            @include('jobseeker.datadiri.pekerjaan')
            <!--Pekerjaan end-->
            <!--Detail  Minat-->
            @include('jobseeker.datadiri.minat')
            <!--Minat end-->
            <!--Detail Aktifitas-->
            @include('jobseeker.datadiri.aktifitas')
            <!--Aktifitas end-->
            <!--Detail Lain-lain-->
            @include('jobseeker.datadiri.lainnya')
            <!--Lain-lain end-->
            <!--Detail Lampiran-->
            @include('jobseeker.datadiri.lampiran')
            <!--Lampiran end-->
        </div>
    </div>
  </div>      
</div>

<!-- Job Browse Section End -->
@endsection
@section('script')
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>

  $('#btn-pendidikan').on('click',function(event){
    event.preventDefault();
  	$('#tab li [href=#pendidikan]').trigger('click');
  });

    $('#tab li').on('click', function (event) {
      $('#tab li').css('background-color','');
      $(this).css('background-color','#f2f7fb');
      event.preventDefault();    
      $('.tab-active').removeClass('tab-active');
      $(this).parent().addClass('tab-active');
      $('.tabs-stage .tab-content').hide();
      $($(this).find("a").attr('href') ).fadeIn(300);
    });
    
    $('#tab li a:first').trigger('click'); // First 
</script>  
<script src="{{asset('js/smi_lib.js') }}"></script>   
@endsection