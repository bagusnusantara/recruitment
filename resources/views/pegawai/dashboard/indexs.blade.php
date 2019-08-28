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
        <div class="col-lg-3">
            <div class="widget style1 navy-bg">
                <div class="row">
                    <div class="col-xs-4">
                        <i class="fa fa-pied-piper-alt fa-5x"></i>
                    </div>
                    <div class="col-xs-8 text-right">
                        <span> Lowongan Pekerjaan Aktif </span>
                        <h2 class="font-bold">62</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="widget style1 lazur-bg">
                <div class="row">
                    <div class="col-xs-4">
                        <i class="fa fa-envelope-o fa-5x"></i>
                    </div>
                    <div class="col-xs-8 text-right">
                        <span> Pesan Baru </span>
                        <h2 class="font-bold">1</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="widget style1 yellow-bg">
                <div class="row">
                    <div class="col-xs-4">
                        <i class="fa fa-briefcase fa-5x"></i>
                    </div>
                    <div class="col-xs-8 text-right">
                        <span> Pekerjaan Sekarang </span>
                        <h5 class="font-bold">PT. Sosialta Solusindo</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="widget style1 red-bg">
                <div class="row">
                    <div class="col-xs-4">
                        <i class="fa fa-clock-o fa-5x"></i>
                    </div>
                    <div class="col-xs-8 text-right">
                        <span> Periode Pekerjaan </span>
                        <h5 class="font-bold">12 Mei 2018 - Sekarang</h5>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="ibox-content text-center">
                <h1>Welcome Admin !!!</h1>
                <div class="m-b-sm">
                        <img alt="image" class="img-circle" src="{{asset('inspinia/img/a1.jpg') }}">
                </div>
                        <p class="font-bold">Jack Separo</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="ibox-content">
                <div>
                    <div>
                        <span>HTML/CSS</span>
                        <!-- <small class="pull-right">10/200 GB</small> -->
                    </div>
                    <div class="progress progress-small">
                        <div style="width: 60%;" class="progress-bar"></div>
                    </div>

                    <div>
                        <span>PHP</span>
                        <!-- <small class="pull-right">20 GB</small> -->
                    </div>
                    <div class="progress progress-small">
                        <div style="width: 50%;" class="progress-bar"></div>
                    </div>

                    <div>
                        <span>Javascript</span>
                        <!-- <small class="pull-right">73%</small> -->
                    </div>
                    <div class="progress progress-small">
                        <div style="width: 40%;" class="progress-bar"></div>
                    </div>

                    <div>
                        <span>Front End Framewok</span>
                        <!-- <small class="pull-right">400 GB</small> -->
                    </div>
                    <div class="progress progress-small">
                        <div style="width: 20%;" class="progress-bar progress-bar-danger"></div>
                    </div>
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

@endsection
