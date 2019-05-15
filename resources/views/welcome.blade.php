<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>SMI Recruitment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Recruit Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="{{ asset('web/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet" media="all">
    <link href="{{ asset('web/css/style.css') }}" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="{{ asset('web/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i"
        rel="stylesheet">
</head>

<body>
    <!-- Slider -->
    <div class="w3-banner-info-w3ltd position-relative">
        <!-- header -->
        <header>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <h1><a class="navbar-brand" href="index.html">SMI

                        </a></h1>
                    <button class="navbar-toggler ml-lg-auto ml-sm-5 bg-light" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="ml-lg-5 navbar-nav mr-lg-auto">
                            <li class="nav-item active  mr-lg-4 mt-lg-0 mt-sm-4 mt-3">
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            <li class="nav-item  mr-lg-4 mt-lg-0 mt-sm-4 mt-3">
                                <a href="{{url('joblist')}}">Job List</a>
                            </li>

                        </ul>
                        <button type="button" class="btn w3ls-btn text-uppercase font-weight-bold d-block" data-toggle="modal"
                            aria-pressed="false" data-target="#exampleModal1">
                            Register
                        </button>
                        <button type="button" class="btn w3ls-btn btn-2 ml-lg-1 text-uppercase font-weight-bold d-block"
                            data-toggle="modal" aria-pressed="false" data-target="#exampleModal">
                            Sign in
                        </button>
                    </div>
                </nav>
            </div>
        </header>
        <!-- //header -->
        <div class="slider">
            <ul class="rslides" id="slider">
                <li>
                    <div class="d-flex banner-w3pvt-bg1 common-bg">
                        <div class="d-flex mx-auto align-items-center justify-content-center flex-column">
                            <div class="bnr-w3pvt">
                                <h3>SMI Public recruitment</h3>
                                <div class="d-flex justify-content-between bnr-sub-txt align-items-center">
                                    <span></span>
                                    <p class="text-uppercase text-white">Reach dream with us!</p>
                                    <span></span>
                                </div>
                            </div>
                            <div class="row justify-content-between bnr-form-w3ls">
                                <div class="col-lg-4">
                                    <h4>A better career is out there. We'll help you find it to use.</h4>
                                </div>
                                <div class="col-lg-8">
                                    <form action="/joblist" method="get" class="bnr-field">
                                        <div class="row">
                                            <div class="col-md-5 form-group mb-md-0">
                                                <label class="text-capitalize">
                                                    looking for job
                                                </label>
                                                <input class="form-control" type="text" name="name" required=""
                                                    placeholder="Job title,Keywords">
                                            </div>
                                            <div class="col-md-5 mb-md-0 form-group">
                                                <label class="text-capitalize">
                                                    place to work
                                                </label>
                                                <input class="form-control" type="text" name="place" required=""
                                                    placeholder="City,State,zip">
                                            </div>
                                            <div class="col-md-2 d-flex align-items-end">
                                                <button type="submit" class="btn btn-w3ltd btn-block w-100 bg-theme font-weight-bold text-uppercase"><span
                                                        class="fa fa-search"></span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- <li>
                    <div class="d-flex banner-w3pvt-bg2 common-bg">
                        <div class="d-flex mx-auto align-items-center justify-content-center flex-column">
                            <div class="bnr-w3pvt">
                                <h3>global recruitment</h3>
                                <div class="d-flex justify-content-between bnr-sub-txt align-items-center">
                                    <span></span>
                                    <p class="text-uppercase text-white">allowing you to expand quickly</p>
                                    <span></span>
                                </div>
                            </div>
                            <div class="row justify-content-between bnr-form-w3ls">
                                <div class="col-lg-4">
                                    <h4>A better career is out there. We'll help you find it to use.</h4>
                                </div>
                                <div class="col-lg-8">
                                    <form action="job_list.html" method="post" class="bnr-field">
                                        <div class="row">
                                            <div class="col-md-5 form-group mb-md-0">
                                                <label class="text-capitalize">
                                                    looking for job
                                                </label>
                                                <input class="form-control" type="text" name="name" required=""
                                                    placeholder="Job title,Keywords">
                                            </div>
                                            <div class="col-md-5 mb-md-0 form-group">
                                                <label class="text-capitalize">
                                                    place to work
                                                </label>
                                                <input class="form-control" type="text" name="place" required=""
                                                    placeholder="City,State,zip">
                                            </div>
                                            <div class="col-md-2 d-flex align-items-end">
                                                <button type="submit" class="btn btn-w3ltd bg-theme btn-block w-100 font-weight-bold text-uppercase"><span
                                                        class="fa fa-search"></span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </li> -->
                <!-- <li>
                    <div class="d-flex banner-w3pvt-bg3 common-bg">
                        <div class="d-flex mx-auto align-items-center justify-content-center flex-column">
                            <div class="bnr-w3pvt">
                                <h3>global recruitment</h3>
                                <div class="d-flex justify-content-between bnr-sub-txt align-items-center">
                                    <span></span>
                                    <p class="text-uppercase text-white">allowing you to expand quickly</p>
                                    <span></span>
                                </div>
                            </div>
                            <div class="row justify-content-between bnr-form-w3ls">
                                <div class="col-lg-4">
                                    <h4>A better career is out there. We'll help you find it to use.</h4>
                                </div>
                                <div class="col-lg-8">
                                    <form action="job_list.html" method="post" class="bnr-field">
                                        <div class="row">
                                            <div class="col-md-5 form-group mb-md-0">
                                                <label class="text-capitalize">
                                                    looking for job
                                                </label>
                                                <input class="form-control" type="text" name="name" required=""
                                                    placeholder="Job title,Keywords">
                                            </div>
                                            <div class="col-md-5 mb-md-0 form-group">
                                                <label class="text-capitalize">
                                                    place to work
                                                </label>
                                                <input class="form-control" type="text" name="place" required=""
                                                    placeholder="City,State,zip">
                                            </div>
                                            <div class="col-md-2 d-flex align-items-end">
                                                <button type="submit" class="btn btn-w3ltd bg-theme  btn-block w-100 font-weight-bold text-uppercase"><span
                                                        class="fa fa-search"></span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </li> -->
            </ul>
        </div>
    </div>
    <!-- //Slider -->
    <!--partners  -->
    <div class="w3ltdits-partners bg-theme" id="partners">
        <div class="container pt-4">
            <div class="title-wthree text-center">
                <h3 class="w3ltd-title">
                    find the one that’s right for you.
                </h3>
                <span></span>
            </div>
            <ul class="list-unstyled py-md-5 py-3 partners-icon text-center">
                <li>
                    <span class="fa fa-lastfm-square" aria-hidden="true"></span>
                </li>
                <li>
                    <span class="fa fa-meanpath" aria-hidden="true"></span>
                </li>
                <li>
                    <span class="fa fa-behance-square" aria-hidden="true"></span>
                </li>
                <li>
                    <span class="fa fa-cc-discover" aria-hidden="true"></span>
                </li>
                <li>
                    <span class="fa fa-cc-stripe" aria-hidden="true"></span>
                </li>
                <li>
                    <span class="fa fa-cc-jcb" aria-hidden="true"></span>
                </li>
            </ul>
        </div>
    </div>
    <!-- //partners -->

    <!-- job roles -->
    <div class="wthreepvt-pos py-md-5 py-5" id="positions">
        <div class="container py-lg-5">
            <div class="wthreepvt-pos-row row  text-center">
                <div class="col-lg-4 col-sm-6 wthreepvt-pos-grids">
                    <div class="p-md-5 p-sm-3">
                        <span class="fa fa-check-square" aria-hidden="true"></span>
                        <h4 class="mt-2 mb-3">Computer & IT</h4>
                        <p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur aut</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wthreepvt-pos-grids  border-left border-right my-sm-0 my-5">
                    <div class="p-md-5 p-sm-3">
                        <span class="fa fa-suitcase" aria-hidden="true"></span>
                        <h4 class="mt-2 mb-3">Marketing</h4>
                        <p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur aut</p>
                    </div>
                </div>
                <div class="col-lg-4 wthreepvt-pos-grids">
                    <div class="p-md-5 p-sm-3">
                        <span class="fa fa-thumbs-up" aria-hidden="true"></span>
                        <h4 class="mt-2 mb-3">Insurance</h4>
                        <p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur aut</p>
                    </div>
                </div>
            </div>
            <div class="wthreepvt-pos-row border-top row text-center pb-lg-5 pt-md-0 pt-5 mt-md-0 mt-sm-5 mt-4">
                <div class="col-lg-4 col-sm-6 wthreepvt-pos-grids">
                    <div class="p-md-5 p-sm-3 col-label">
                        <span class="fa fa-thumb-tack" aria-hidden="true"></span>
                        <h4 class="mt-2 mb-3">Customer Service</h4>
                        <p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur aut</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wthreepvt-pos-grids mt-lg-0 mt-md-3 border-left border-right pt-sm-0 pt-5">
                    <div class="p-md-5 p-sm-3 col-label">
                        <span class="fa fa-external-link" aria-hidden="true"></span>
                        <h4 class="mt-2 mb-3">health care</h4>
                        <p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur aut</p>
                    </div>
                </div>
                <div class="col-lg-4 wthreepvt-pos-grids pt-md-0 pt-5">
                    <div class="p-md-5 p-sm-3 col-label">
                        <span class="fa fa-cog" aria-hidden="true"></span>
                        <h4 class="mt-2 mb-3">automotive</h4>
                        <p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur aut</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //job roles -->
    <!-- services bottom -->
    <section class="bg-theme position-relative" id="services-bot">
        <div class="container-fluid px-0">
            <div class="title-sec-w3layouts_pvt text-center">
                <span class="title-wthree text-white">a world full of possibilities</span>
                <h4 class="w3layouts_pvt-head">allowing you to expand quickly.</h4>
            </div>
            <img src="{{asset('web/images/services.jpg') }}" alt="" class="img-fluid">
            <div class="row head-row-home mx-0">
                <div class="offset-5"></div>
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-md-6 service-title my-sm-5 my-4">
                            <h4 class="home-title text-white">Job by Category</h4>
                            <p class="sec-4">Itaque earum rerum hic tenetur a sapiente delectusum hic
                                tenetur a
                                sapiente delectus reiciendis maiores alias consequatur.
                            </p>
                        </div>
                        <div class="col-md-6 service-title my-md-5">
                            <h4 class="home-title text-white">Job by Company</h4>
                            <p class="sec-4">Itaque earum rerum hic tenetur a sapiente delectusum hic
                                tenetur a
                                sapiente delectus reiciendis maiores alias consequatur.
                            </p>
                        </div>
                        <div class="col-md-6 service-title mt-md-0 mt-sm-5 mt-4">
                            <h4 class="home-title text-white">Job by Skill</h4>
                            <p class="sec-4">Itaque earum rerum hic tenetur a sapiente delectusum hic
                                tenetur a
                                sapiente delectus reiciendis maiores alias consequatur.
                            </p>
                        </div>
                        <div class="col-md-6 service-title mt-md-0 mt-sm-5 mt-4">
                            <h4 class="home-title text-white">Job by Opening</h4>
                            <p class="sec-4">Itaque earum rerum hic tenetur a sapiente delectusum hic
                                tenetur a
                                sapiente delectus reiciendis maiores alias consequatur.
                            </p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="job_list.html" class="btn wthree-bnr-btn">Read more</a>
                    </div>
                </div>
                <div class="offset-2"></div>
            </div>
        </div>
    </section>
    <!-- //services bottom-->
    <!-- blog -->
    <section class="blog_w3ls py-lg-5">
        <div class="container py-5">
            <div class="title-sec-w3layouts_pvt text-center">
                <span class="title-wthree">a world full of possibilities</span>
                <h4 class="w3layouts_pvt-head">allowing you to expand quickly.</h4>
            </div>
            <div class="row head-row-home">
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-sm-0 mt-4">
                    <div class="card border-0">
                        <div class="card-header p-0">
                            <a href="#exampleModal2" data-toggle="modal" aria-pressed="false" data-target="#exampleModal2"
                                role="button">
                                <img class="card-img-bottom" src="{{asset('web/images/b1.jpg') }}" alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body border-0 px-0">
                            <div class="blog_w3icon d-flex justify-content-between">
                                <span>
                                    By: Admin</span>
                                <span>
                                    20/6/2018</span>
                            </div>
                            <div class="pt-4">
                                <h5 class="blog-title card-title font-weight-bold">
                                    <a href="#exampleModal2" data-toggle="modal" aria-pressed="false" data-target="#exampleModal2"
                                        role="button">Cras ultricies ligula sed magna dictum porta auris blandita.</a>
                                </h5>
                                <p>At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit
                                    ametLorem ipsum dolor sit amet,sed diam nonumy.</p>
                            </div>
                            <button type="button" class="btn blog-btn wthree-bnr-btn" data-toggle="modal" aria-pressed="false"
                                data-target="#exampleModal2">
                                Read more
                            </button>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-md-0 mt-sm-5 mt-4">
                    <div class="card border-0">
                        <div class="card-header p-0">
                            <a href="#exampleModal3" data-toggle="modal" aria-pressed="false" data-target="#exampleModal3"
                                role="button">
                                <img class="card-img-bottom" src="{{asset('web/images/b2.jpg') }}" alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body border-0">
                            <div class="blog_w3icon d-flex justify-content-between">
                                <span>
                                    By: Admin</span>
                                <span>
                                    20/6/2018</span>
                            </div>
                            <div class="pt-4">
                                <h5 class="blog-title card-title font-weight-bold">
                                    <a href="#exampleModal3" data-toggle="modal" aria-pressed="false" data-target="#exampleModal3"
                                        role="button">Cras ultricies ligula sed magna dictum porta auris blandita.</a>
                                </h5>
                                <p>At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit
                                    ametLorem ipsum dolor sit amet,sed diam nonumy.</p>
                            </div>
                            <button type="button" class="btn blog-btn wthree-bnr-btn" data-toggle="modal" aria-pressed="false"
                                data-target="#exampleModal3">
                                Read more
                            </button>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-5 mx-auto">
                    <div class="card border-0">
                        <div class="card-header p-0">
                            <a href="#exampleModal4" data-toggle="modal" aria-pressed="false" data-target="#exampleModal4"
                                role="button">
                                <img class="card-img-bottom" src="{{asset('web/images/b3.jpg') }}" alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body border-0">
                            <div class="blog_w3icon d-flex justify-content-between">
                                <span>
                                    By: Admin</span>
                                <span>
                                    20/6/2018</span>
                            </div>
                            <div class="pt-4">
                                <h5 class="blog-title card-title font-weight-bold">
                                    <a href="#exampleModal4" data-toggle="modal" aria-pressed="false" data-target="#exampleModal4"
                                        role="button">Cras ultricies ligula sed magna dictum porta auris blandita.</a>
                                </h5>
                                <p>At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit
                                    ametLorem ipsum dolor sit amet,sed diam nonumy.</p>
                            </div>
                            <button type="button" class="btn blog-btn wthree-bnr-btn" data-toggle="modal" aria-pressed="false"
                                data-target="#exampleModal4">
                                Read more
                            </button>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
            </div>
        </div>
    </section>
    <!-- //blog -->
    <!-- Footer -->
    <footer id="footer" class="py-sm-5 py-4 bg-theme">
        <div class="container">
            <div class="footer-top-w3ls">
                <h2><a href="index.html" class="navbar-brand">PT. SMI</a></h2>
                <p class="text-white">PT Selaras Mitra Integra  atau biasa disebut SMI merupakan perusahaan human resources management system atau human resources solution. SMI adalah konsultan yang fokus pada pengembangan human capital dan organisasi. SMI menggunakan pendekatan yang humanis dan metode-metode yang reliabel untuk membantu setiap human capital dan organisasi untuk berkembang. SMI mengkombinasikan teori dan praktik human resource sebagai pendekatan yang diterapkan.
                  Spesialiasi SMI di area rekrutmen, assessment center, training & development, coaching & counseling, labour supply dan layanan terkait lainnya. SMI percaya bahwa manusia merupakan aset yang paling penting bagi organisasi. Paradigma ini memberi SMI perspektif yang unik dalam mencari solusi yang holistik akan masalah human capital dan organisasi.
            </div>
            <div class="row  pt-5">
                <div class="col-lg-3 col-sm-6 footer_grid1">
                    <h5>Alamat</h5>
                    <div class="d-flex align-items-center">
                        <span class="fa fa-building mr-4"></span>
                        <p>Jalan Ketintang Madya no 80
                            <br>Surabaya</p>
                    </div>

                </div>

        </div>
      </div>
    </footer>
    <!-- /Footer -->
    <!-- <div class="cpy-right text-center py-4">
        <p class="text-dark">© 2018 Recruit. All rights reserved | Design by
            <a href="http://w3layouts.com" class="text-theme"> W3layouts.</a>
        </p>
    </div> -->
    <!-- blog modal1 -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-theme1">
                    <h5 class="modal-title" id="exampleModalLabel2">Cras ultricies ligula sed magna dictum porta auris
                        blandita.</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="{{asset('web/images/b1.jpg') }}" class="img-fluid" alt="" />
                    <p class="text-left my-4">
                        Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur non nulla sit amet nisl
                        tempus convallis quis ac
                        lectus. Cras ultricies ligula sed magna dictum porta.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- //blog modal1 -->
    <!-- blog modal2 -->
    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-theme1">
                    <h5 class="modal-title" id="exampleModalLabel3">Cras ultricies ligula sed magna dictum porta auris
                        blandita.</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="{{asset('web/images/b2.jpg') }}" class="img-fluid" alt="" />
                    <p class="text-left my-4">
                        Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur non nulla sit amet nisl
                        tempus convallis quis ac
                        lectus. Cras ultricies ligula sed magna dictum porta.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- //blog modal2 -->
    <!-- blog modal3 -->
    <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-theme1">
                    <h5 class="modal-title" id="exampleModalLabel4">Cras ultricies ligula sed magna dictum porta auris
                        blandita.</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="{{asset('web/images/b3.jpg') }}" class="img-fluid" alt="" />
                    <p class="text-left my-4">
                        Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur non nulla sit amet nisl
                        tempus convallis quis ac
                        lectus. Cras ultricies ligula sed magna dictum porta.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- //blog modal3-->
    <!-- login modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-theme1">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('login') }}" method="post" class="p-3">
                        @csrf
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Email address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus id="email">
                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control bg-theme" value="Login">
                        </div>
                        <div class="row sub-w3l my-3">
                            <div class="col sub-w3ltd">
                                <input type="checkbox" id="brand1" value="">
                                <label for="brand1" class="text-dark">
                                    <span></span>Remember me?</label>
                            </div>
                            <div class="col forgot-w3l text-right">
                                <a href="#" class="text-dark">Forgot Password?</a>
                            </div>
                        </div>
                        <p class="text-center dont-do">Don't have an account?
                            <a href="#" data-toggle="modal" data-target="#exampleModal1" class="text-dark">
                                <strong> Now</strong></a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- //login modal -->
    <!-- register modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-theme1">
                    <h5 class="modal-title" id="exampleModalLabel1">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('register') }}" class="p-3">
                        @csrf
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name" id="name" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="recipient-email" class="col-form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"  name="email" id="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="password1" class="col-form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" required autocomplete="new-password" >
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="password2" class="col-form-label">Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation" id="password-confirm"  required autocomplete="new-password">
                        </div>
                        <div class="sub-w3l">
                            <div class="sub-w3ltd">
                                <input type="checkbox" id="brand2" value="">
                                <label for="brand2" class="mb-3 text-dark">
                                    <span></span>I Accept to the Terms & Conditions</label>
                            </div>
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control bg-theme" value="Register">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- //register modal -->
    <!-- js -->
    <script src="{{asset('web/js/jquery-2.2.3.min.js') }}"></script>
    <!-- Slider-JavaScript -->
    <script src="{{asset('web/js/responsiveslides.min.js') }}"></script>
    <script>
        $(function () {
            $("#slider, #slider1").responsiveSlides({
                auto: true,
                nav: false,
                speed: 1500,
                namespace: "callbacks",
                pager: true,
            });
        });
    </script>
    <!-- //Slider-JavaScript -->
    <!-- script for password match -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
    <!-- //js -->
    <script src="{{asset('web/js/move-top.js') }}"></script>
    <script src="{{asset('web/js/easing.js') }}"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="{{ asset('web/js/SmoothScroll.min.js') }}"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('web/js/bootstrap.min.js') }}"></script>
</body>

</html>
