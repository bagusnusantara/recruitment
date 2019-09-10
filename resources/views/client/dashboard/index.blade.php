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
                        <i class="fa fa-exchange fa-5x"></i>
                    </div>
                    <div class="col-xs-8 text-right">
                        <span> Layanan Aktif </span>
                        <h2 class="font-bold">2</h2>
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
                        <i class="fa fa-users fa-5x"></i>
                    </div>
                    <div class="col-xs-8 text-right">
                        <span> Total Karyawan </span>
                        <h2 class="font-bold">15</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="widget style1 red-bg">
                <div class="row">
                    <div class="col-xs-4">
                        <i class="fa fa-exchange fa-5x"></i>
                    </div>
                    <div class="col-xs-8 text-right">
                        <span> Layanan Closed </span>
                        <h2 class="font-bold">2</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="ibox-content text-center">
                <h1>Welcome Client !!!</h1>
                <div class="m-b-sm">
                        <img alt="image" class="img-circle" src="{{asset('inspinia/img/zender_logo.png') }}">
                </div>
                        <p class="font-bold">PT. Zender Sejahtera</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="ibox-content">
                <div>
                    <div>
                        <h2>Tagihan Pembayaran</h2>
                        <!-- <small class="pull-right">10/200 GB</small> -->
                    </div>

                    <div>
                        <h3>Rp 3.750.000,00</h3>
                        <!-- <small class="pull-right">20 GB</small> -->
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
