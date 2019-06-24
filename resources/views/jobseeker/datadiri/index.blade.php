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
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('content')

<!-- Job Browse Section Start -->
<div class="section">
  <div class="ml-auto mr-auto"style="width:80vw;">
    <div class="row">
      <div class="col-lg-2 col-md-4 col-xs-12">
        <div class="right-sideabr">
          <h4>Data Diri</h4>
          <ul id="tab" class="list-item">
              <li class="active"><a   class="list-group-item-action" href="#identitas">Identitas</a></li>
              <li><a  class="tab-active list-group-item-action" href="#pendidikan">Pendidikan</a></li>
              <li><a  class="list-group-item-action" href="#keluarga">Keluarga</a></li>
              <li><a  class="list-group-item-action" href="#pekerjaan">Pekerjaan</a></li>
              <li><a  class="list-group-item-action" href="#minat">Minat</a></li>
              <li><a  class="list-group-item-action" href="#aktifitas">Aktifitas</a></li>
              <li><a  class="list-group-item-action" href="#lainnya">Lainnya</a></li>
              <li><a  class="list-group-item-action" href="#lampiran">Lampiran</a></li>

            </ul>
        </div>
      </div>
          <div class="col-lg-10 col-md-8 col-xs-12 tabs-stage">
              <form>        
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
          </form>
        </div>
    </div>
  </div>      
</div>

<!-- Job Browse Section End -->
@endsection
@section('script')
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
    $('#tab li').on('click', function (event) {
      event.preventDefault();    
      $('.tab-active').removeClass('tab-active');
      $(this).parent().addClass('tab-active');
      $('.tabs-stage .tab-content').hide();
      $($(this).find("a").attr('href') ).fadeIn(300);
    });
    
    $('#tab li a:first').trigger('click'); // Default
</script>     
@endsection
    
