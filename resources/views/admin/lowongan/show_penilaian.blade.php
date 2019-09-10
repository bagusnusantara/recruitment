@extends('template.index')

@section('main')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Penerimaan Karyawan</h2>
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
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>Penerimaan Karyawan</h5>
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
                        <h2>
                            Seleksi Penerimaan Karyawan
                        </h2>

                        <div class="row">
                        <form id="form" action="#" class="wizard-big">
                            @foreach($lowongan as $l)
                            @if($l->st_nilai_administrasi == 1)
                            <h1 class='col'>Administrasi</h1>
                            <fieldset>
                                @include('admin.lowongan.fs1')
                            </fieldset>
                            @endif
                            @if($l->st_nilai_interview_walk == 1)
                            <h1 class="col">Walk in Interview</h1>
                            <fieldset>
                                @include('admin.lowongan.fs2')
                            </fieldset>
                            @endif
                            @if($l->st_nilai_psikotes == 1)
                            <h1 class='col'>TKD</h1>
                            <fieldset>
                                @include('admin.lowongan.fs3')
                            </fieldset>
                            @endif
                            @if($l->st_nilai_psikotes == 1)
                            <h1 class='col'>Psikotes</h1>
                            <fieldset>
                                @include('admin.lowongan.fs4')
                            </fieldset>
                            @endif
                            @if($l->st_nilai_interview_psikolog==1)
                            <h1 class='col'>Interview Psikolog</h1>
                             <fieldset>
                             @include('admin.lowongan.fs5')
                             </fieldset>
                            @endif
                            @if($l->st_nilai_interview_user==1)
                             <h1 class='col'>Interview User</h1>
                             <fieldset>
                             @include('admin.lowongan.fs6')
                             </fieldset>
                            @endif
                            <h1 class='col'>Hiring</h1>
                            <fieldset>
                            @include('admin.lowongan.fs7')
                            </fieldset>
                          @endforeach
                        </form>
                        </div>
                    </div>
                </div>
                </div>

            </div>
        </div>

@include('admin.lowongan.modal')


</div>
</div>



</div>
</div>


@include('template.footer')
@include('admin.lowongan.script')



@endsection
