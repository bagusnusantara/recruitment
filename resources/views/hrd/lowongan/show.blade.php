@extends('template.index')

@section('main')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Dashboard</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('/dashboard')}}">Home</a>
                </li>
                <li class="active">
                    <strong>Dashboard</strong>
                </li>
            </ol>

        </div>
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-lg-12">

                <div class="ibox product-detail">
                    <div class="ibox-content">

                        <div class="row">
                            <div class="col-md-5">


                                <div class="product-images">

                                    <div>
                                        <div class="image-imitation">
                                            [IMAGE 1]
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="col-md-7">

                                <h2 class="font-bold m-b-xs">
                                    {{$lowongan_pekerjaan->job_tittle}} -  {{$lowongan_pekerjaan->md_client->nama_client}}
                                </h2>
                                <div class="m-t-md">
                                    <h2 class="product-main-price">$IDR 4.006.602 </h2>
                                </div>
                                <hr>

                                <h4>Persyaratan</h4>

                                <div class="small text-muted">
                                    {!!$lowongan_pekerjaan->persyaratan!!}
                                </div>
                                <hr>
                                <h4>Deskripsi Pekerjaan</h4>

                                <div class="small text-muted">
                                    {!!$lowongan_pekerjaan->deskripsi_pekerjaan!!}
                                </div>

                                <!-- <div>
                                    <div class="btn-group">
                                        <button class="btn btn-primary btn-sm"><i class="fa fa-cart-plus"></i> Add to cart</button>
                                        <button class="btn btn-white btn-sm"><i class="fa fa-star"></i> Add to wishlist </button>
                                        <button class="btn btn-white btn-sm"><i class="fa fa-envelope"></i> Contact with author </button>
                                    </div>
                                </div> -->



                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>List Pelamar</h5>

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
                      <table class="table table-striped table-bordered table-hover dataTables-client" style="width: 100%">
                          <thead>
                          <tr>
                            <th>No</th>
                            <th>ID Pendaftar</th>
                            <th>Action</th>
                          </tr>
                          </thead>
                          <tbody>
                            @php
                              $i=1;
                            @endphp
                            @foreach($pendaftar as $p)

                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$p->users_id}}</td>
                                <td>
                                  <a type="button" class="btn btn-default btn-circle" href="#" type="button"><i class="fa fa-eye"></i></a>
                                  <a type="button" class="btn btn-default btn-circle" href="lowongan/show/{{$lowongan->id}}/showpenilaian" type="button"><i class="fa fa-eye"></i></a>
                                  <!-- <button class="btn btn-default btn-circle" type="button"><i class="fa fa-pencil-square-o"></i> -->
                                  <!-- <button class="btn btn-default btn-circle" type="button"><i class="fa fa-trash"></i> -->
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
<!-- Page-Level Scripts -->
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
