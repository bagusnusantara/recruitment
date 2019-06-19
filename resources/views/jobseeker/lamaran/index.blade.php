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
      <div class="col-lg-3 col-md-4 col-xs-12">
        <div class="right-sideabr">
          <h4>Data Lamaran</h4>
          <ul id="tab" class="list-item">
              <li class="active"><a   class="list-group-item-action" href="#identitas">Identitas</a></li>
              <li><a   class="tab-active list-group-item-action" href="#pendidikan">Pendidikan</a></li>
              <li><a   class="list-group-item-action" href="#keluarga">Keluarga</a></li>
              <li><a   class="list-group-item-action" href="#pekerjaan">Pekerjaan</a></li>
              <li><a   class="list-group-item-action" href="#minat">Minat</a></li>
              <li><a   class="list-group-item-action" href="#aktifitas">Aktifitas</a></li>
              <li><a   class="list-group-item-action" href="#lainnya">Lainnya</a></li>
              <li><a   class="list-group-item-action" href="#lampiran">Lampiran</a></li>
            </ul>
        </div>
      </div>
          <div class="col-lg-9 col-md-8 col-xs-12 tabs-stage">
              <form>        
            <!--Identitas-->
            @include('jobseeker.lamaran.identitas')
            <!--Identitas end-->
            <!--Pendidikan-->
            @include('jobseeker.lamaran.pendidikan')
            <!--Pendidikan end-->
            <!--Keluarga -->
            <!--Keluarga end-->
            <!--Pekerjaan -->
            @include('jobseeker.lamaran.pekerjaan')
            <!--Pekerjaan end-->
            <!--Minat-->
            @include('jobseeker.lamaran.minat')
            <!--Minat end-->
            <!--Aktifitas-->
            <!--Aktifitas end-->
            <!--Lain-lain-->
            <!--Lain-lain end-->
            <!--Lampiran-->
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
    $('#tab li a').on('click', function (event) {
    event.preventDefault();
    
    $('.tab-active').removeClass('tab-active');
    $(this).parent().addClass('tab-active');
    $('.tabs-stage .tab-content').hide();
    $($(this).attr('href')).show();
    });
    $('#tab li a:first').trigger('click'); // Default
</script>     
@endsection
    
