@extends('template.index')

@section('main')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Lowongan Pekerjaan</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('/dashboard')}}">Home</a>
                </li>
                <li class="">
                    <strong>Lowongan Pekerjaan</strong>
                </li>
                <li class="active">
                    <strong>Create</strong>
                </li>
            </ol>

        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">

      <div class="row">
          <div class="col-lg-12">
              <div class="ibox float-e-margins">
                  <div class="ibox-title">
                      <h5>Create Lowongan Pekerjaan</h5>
                      <div class="ibox-tools">
                          <a class="collapse-link">
                              <i class="fa fa-chevron-up"></i>
                          </a>
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                              <i class="fa fa-wrench"></i>
                          </a>
                          <ul class="dropdown-menu dropdown-user">
                              <li><a href="#">Config option 1</a>
                              </li>
                              <li><a href="#">Config option 2</a>
                              </li>
                          </ul>
                          <a class="close-link">
                              <i class="fa fa-times"></i>
                          </a>
                      </div>
                  </div>
                  <div class="ibox-content">
                    <form method="POST" id="postForm" action="{{url('/admin/lowongan/storedetailtes')}}" class="form-horizontal" enctype="multipart/form-data" onsubmit="return postForm()">
                        @csrf
                            <div class="form-group">
                                <div class="col-sm-10"><input type="hidden" value="{{$lowongan_pekerjaan->id}}" class="form-control" name="md_lowongan_pekerjaan_id"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Jenis Tes</label>
                                <div class="col-sm-8">
                                  <select class="select2_demo_3 form-control" name="st_jenis_tes_id">
                                      <option value="0">Pilih ... </option>
                                      @foreach($st_jenis_tes as $p)
                                      <option value="{{$p->id}}">{{$p->deskripsi}}</option>
                                      @endforeach
                                  </select>
                                </div>
                                <button class="btn btn-primary" type="submit">Tambah</button>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <!-- <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-white" type="submit">Cancel</button>
                                    <button class="btn btn-primary" type="submit">Save changes</button>
                                </div>
                            </div> -->
                      </form>
                    
                      <table class="table table-striped table-bordered table-hover dataTables-client" style="width: 100%">
                          <thead>
                          <tr>
                            <th><center>No</center></th>
                            <th><center>Jenis Tes</center></th>
                            <th><center>Action</center></th>
                          </tr>
                          </thead>
                          <tbody>
                            @php
                              $i=1;
                            @endphp
                            @foreach($md_lowongan_jenis_tes as $p)

                            <tr>
                                <td><center>{{$i}}</center></td>
                                <td><center>{{$p->deskripsi}}</center></td>
                                <td>
                                  <center>
                                  <button type="button" class="btn btn-danger">Hapus</button>
                                  </center>
                                </td>
                            @php
                              $i++;
                            @endphp
                            @endforeach
                              </tr>
                        </tbody>
                      </table>

                  </div>
              </div>
          </div>
      </div>


    </div>


</div>
</div>



</div>
</div>


@include('template.footer')
<!-- SUMMERNOTE -->
   <script src="{{asset('inspinia/js/plugins/summernote/summernote.min.js') }}"></script>

   <script>

      $(document).ready(function() {
      	$('#summernote').summernote({
      		height: "200px",
          width : "800px"
      	});
      });
      $(document).ready(function() {
      	$('#summernote2').summernote({
      		height: "200px",
          width : "800px"
      	});
      });
      var postForm = function() {
	    var persyaratan = $('textarea[name="persyaratan"]').html($('#summernote').code());
      var deskripsi_pekerjaan = $('textarea[name="deskripsi_pekerjaan"]').html($('#summernote2').code());
      }
      $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

   </script>
   <!-- iCheck -->
    <script src="{{ asset('inspinia/js/plugins/iCheck/icheck.min.js') }}"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
    <!-- Select2 -->
    <script src="{{ asset('inspinia/js/plugins/select2/select2.full.min.js') }}"></script>
    <script>
        $(".select2_demo_1").select2();
        $(".select2_demo_2").select2();
        $(".select2_demo_3").select2({
            placeholder: "Select a state",
            allowClear: true
        });
    </script>
    <script>
    $(document).ready(function(){
        $('.dataTables-client').DataTable({
            pageLength: 25,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                { extend: 'copy'},
                {extend: 'csv'},
                {extend: 'excel', title: 'ExampleFile'},
                {extend: 'pdf', title: 'ExampleFile'},

                {extend: 'print',
                 customize: function (win){
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                }
                }
            ]

        });

    });

</script>
@endsection


