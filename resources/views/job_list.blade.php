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
                      <li class="nav-item  mr-lg-4 mt-lg-0 mt-sm-4 mt-3">
                          <a href="{{url('/')}}">Home</a>
                      </li>
                      <li class="nav-item active mr-lg-4 mt-lg-0 mt-sm-4 mt-3">
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
    <div class="inner-banner-w3ls">
    </div>
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb d-flex justify-content-center bg-theme">
            <li class="breadcrumb-item">
                <a href="{{url('/')}}" class="text-white">Home</a>
            </li>
            <li class="breadcrumb-item active text-white font-weight-bold" aria-current="page">Job List</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- jobs -->
    <section class="employ-sec">
        <div class="container">
            <div class="title-sec-w3layouts_pvt text-center pb-4">
                <span class="title-wthree">a world full of possibilities</span>
                <h4 class="w3layouts_pvt-head">allowing you to expand quickly.</h4>
            </div>
            <div class="row pt-lg-5">
                <div class="col-lg-4">
                    <div class="left_widget">
                        <h3 class="left-widget-job">
                           top employer</h3>
                        <form action="#" class="widget-content" method="post">
                            <input type="text" class="form-control my-3" placeholder="Location" required>
                            <select class="form-control jb_1">
                                <option value="0">sort by</option>
                                <option value="">Relevant</option>
                                <option value="">Date posted (newsest to oldest)</option>
                                <option value="">Date posted (oldest to newsest)</option>
                            </select>
                            <select class="form-control my-3">
                                <option value="0">Job Title</option>
                                <option value="">java developer</option>
                                <option value="">.net developer</option>
                                <option value="">senior software engineer</option>
                                <option value="">android developer</option>
                                <option value="">ios developer</option>
                            </select>
                            <input type="submit" value="submit" class="form-control bg-theme text-uppercase">
                        </form>
                    </div>
                    <div class="left_widget">
                        <h3 class="left-widget-job">
                            Last Activity</h3>
                        <ul>
                            <li>
                                <input type="checkbox" class="checked" name="cat1" id="cat1">
                                <label for="cat1">Last Hour</label>
                            </li>
                            <li>
                                <input type="checkbox" class="checked" name="cat2" id="cat2">
                                <label for="cat2">Last 24 hours</label>
                            </li>
                            <li>
                                <input type="checkbox" class="checked" name="cat3" id="cat3">
                                <label for="cat3">Last 7 days</label>
                            </li>
                            <li>
                                <input type="checkbox" class="checked" name="cat4" id="cat4">
                                <label for="cat4">Last 14 days</label>
                            </li>
                            <li>
                                <input type="checkbox" class="checked" name="cat4" id="cat5">
                                <label for="cat4">Last 30 days</label>
                            </li>
                            <li>
                                <input type="checkbox" class="checked" name="cat4" id="cat6">
                                <label for="cat4">All</label>
                            </li>

                        </ul>
                    </div>
                    <div class="left_widget">
                        <h3 class="left-widget-job">
                            Categories</h3>
                        <ul>
                            <li>
                                <input type="checkbox" class="checked" name="cat2" id="c1">
                                <label for="cat2">Digital & Creative</label>
                            </li>
                            <li>
                                <input type="checkbox" class="checked" name="cat1" id="c2">
                                <label for="cat1">Accountancy</label>
                            </li>

                            <li>
                                <input type="checkbox" class="checked" name="cat3" id="c3">
                                <label for="cat3">Estate Agency</label>
                            </li>
                            <li>
                                <input type="checkbox" class="checked" name="cat4" id="c4">
                                <label for="cat4">IT Contractor</label>
                            </li>
                            <li>
                                <input type="checkbox" class="checked" name="cat4" id="c5">
                                <label for="cat4">Banking</label>
                            </li>

                        </ul>
                    </div>
                    <div class="left_widget">
                        <h3 class="left-widget-job">
                            More filters</h3>
                        <ul>
                            <li>
                                <input type="checkbox" class="checked" name="cat2" id="f1">
                                <label for="cat2">Full time</label>
                            </li>
                            <li>
                                <input type="checkbox" class="checked" name="cat1" id="f2">
                                <label for="cat1">Part time</label>
                            </li>

                            <li>
                                <input type="checkbox" class="checked" name="cat3" id="f3">
                                <label for="cat3">freelance</label>
                            </li>
                            <li>
                                <input type="checkbox" class="checked" name="cat4" id="f4">
                                <label for="cat4">internship</label>
                            </li>
                            <li>
                                <input type="checkbox" class="checked" name="cat4" id="f5">
                                <label for="cat4">permanent</label>
                            </li>
                            <li>
                                <input type="checkbox" class="checked" name="cat4" id="f6">
                                <label for="cat4">contact</label>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-sm-6 e-left">
                            <a href="#"><img src="{{ asset('web/images/b2.jpg') }}" alt="" class="img-fluid"></a>
                            <div class="e-desc">
                                <h6><a href="{{url('/jobsingle')}}">Lead Android Developer </a></h6>

                                <ul class="e-tags">
                                    <li>
                                        javascript</li>

                                    <li>computer vision</li>
                                    <li>angular js</li>
                                    <li>c++</li>
                                </ul>
                                <hr>
                                <ul class="desc-list">
                                    <li>
                                        <span>Location:</span>
                                        loremipsum, dolor
                                    </li>
                                    <li>
                                        <span>Salary:</span>
                                        Negotiable
                                    </li>
                                    <li>
                                        <span>Experience</span>
                                        Expert
                                    </li>
                                    <li>
                                        <span>Posted: </span>
                                        32 minutes ago
                                    </li>
                                </ul>
                                <a href="#exampleModal" class="btn wthree-bnr-btn text-capitalize" data-toggle="modal"
                                    aria-pressed="false" data-target="#exampleModal" role="button">Apply
                                    for job</a>
                            </div>
                        </div>
                        <div class="col-sm-6 e-left">
                            <a href="#"><img src="{{ asset('web/images/b1.jpg') }}" alt="" class="img-fluid"></a>
                            <div class="e-desc">
                                <h6><a href="{{url('jobsingle')}}">Senior Front - End Engineer </a></h6>

                                <ul class="e-tags">
                                    <li>
                                        javascript</li>

                                    <li>computer vision</li>
                                    <li>angular js</li>
                                    <li>c++</li>
                                </ul>
                                <hr>
                                <ul class="desc-list">
                                    <li>
                                        <span>Location:</span>
                                        loremipsum, dolor
                                    </li>
                                    <li>
                                        <span>Salary:</span>
                                        Negotiable
                                    </li>
                                    <li>
                                        <span>Experience</span>
                                        Expert
                                    </li>
                                    <li>
                                        <span>Posted: </span>
                                        5 hours ago
                                    </li>
                                </ul>
                                <a href="#exampleModal" class="btn wthree-bnr-btn text-capitalize" data-toggle="modal"
                                    aria-pressed="false" data-target="#exampleModal" role="button">Apply
                                    for job</a>
                            </div>
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col-sm-6 e-left">
                            <a href="#"><img src="{{ asset('web/images/b3.jpg') }}" alt="" class="img-fluid"></a>
                            <div class="e-desc">
                                <h6><a href="{{url('jobsingle')}}">Senior Java Developer
                                    </a></h6>

                                <ul class="e-tags">
                                    <li>
                                        javascript</li>

                                    <li>computer vision</li>
                                    <li>angular js</li>
                                    <li>c++</li>
                                </ul>
                                <hr>
                                <ul class="desc-list">
                                    <li>
                                        <span>Location:</span>
                                        loremipsum, dolor
                                    </li>
                                    <li>
                                        <span>Salary:</span>
                                        Negotiable
                                    </li>
                                    <li>
                                        <span>Experience</span>
                                        Expert
                                    </li>
                                    <li>
                                        <span>Posted: </span>
                                        1 day ago
                                    </li>
                                </ul>
                                <a href="#exampleModal" class="btn wthree-bnr-btn text-capitalize" data-toggle="modal"
                                    aria-pressed="false" data-target="#exampleModal" role="button">Apply
                                    for job</a>
                            </div>
                        </div>
                        <div class="col-sm-6 e-left">
                            <a href="#"><img src="{{ asset('web/images/b1.jpg') }}" alt="" class="img-fluid"></a>
                            <div class="e-desc">
                                <h6><a href="{{url('jobsingle')}}">Senior Front - End Engineer </a></h6>

                                <ul class="e-tags">
                                    <li>
                                        javascript</li>

                                    <li>computer vision</li>
                                    <li>angular js</li>
                                    <li>c++</li>
                                </ul>
                                <hr>
                                <ul class="desc-list">
                                    <li>
                                        <span>Location:</span>
                                        loremipsum, dolor
                                    </li>
                                    <li>
                                        <span>Salary:</span>
                                        Negotiable
                                    </li>
                                    <li>
                                        <span>Experience</span>
                                        Expert
                                    </li>
                                    <li>
                                        <span>Posted: </span>
                                        2 days ago
                                    </li>
                                </ul>
                                <a href="#exampleModal" class="btn wthree-bnr-btn text-capitalize" data-toggle="modal"
                                    aria-pressed="false" data-target="#exampleModal" role="button">Apply
                                    for job</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 e-left">
                            <a href="#"><img src="{{ asset('web/images/b2.jpg') }}" alt="" class="img-fluid"></a>
                            <div class="e-desc">
                                <h6><a href="{{url('jobsingle')}}">Lead Android Developer </a></h6>

                                <ul class="e-tags">
                                    <li>
                                        javascript</li>

                                    <li>computer vision</li>
                                    <li>angular js</li>
                                    <li>c++</li>
                                </ul>
                                <hr>
                                <ul class="desc-list">
                                    <li>
                                        <span>Location:</span>
                                        loremipsum, dolor
                                    </li>
                                    <li>
                                        <span>Salary:</span>
                                        Negotiable
                                    </li>
                                    <li>
                                        <span>Experience</span>
                                        Expert
                                    </li>
                                    <li>
                                        <span>Posted: </span>
                                        5 days ago
                                    </li>
                                </ul>
                                <a href="#exampleModal" class="btn wthree-bnr-btn text-capitalize" data-toggle="modal"
                                    aria-pressed="false" data-target="#exampleModal" role="button">Apply
                                    for job</a>
                            </div>
                        </div>
                        <div class="col-sm-6 e-left">
                            <a href="#"><img src="{{ asset('web/images/b3.jpg') }}" alt="" class="img-fluid"></a>
                            <div class="e-desc">
                                <h6><a href="{{url('jobsingle')}}">Web Designer </a></h6>

                                <ul class="e-tags">
                                    <li>
                                        javascript</li>

                                    <li>computer vision</li>
                                    <li>angular js</li>
                                    <li>c++</li>
                                </ul>
                                <hr>
                                <ul class="desc-list">
                                    <li>
                                        <span>Location:</span>
                                        loremipsum, dolor
                                    </li>
                                    <li>
                                        <span>Salary:</span>
                                        Negotiable
                                    </li>
                                    <li>
                                        <span>Experience</span>
                                        Expert
                                    </li>
                                    <li>
                                        <span>Posted: </span>
                                        1 week ago
                                    </li>
                                </ul>
                                <a href="#exampleModal" class="btn wthree-bnr-btn text-capitalize" data-toggle="modal"
                                    aria-pressed="false" data-target="#exampleModal" role="button">Apply
                                    for job</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="d-flex justify-content-center">
                <ul class="pagination pt-4">
                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li class="active"><a href="#" class="text-white bg-theme">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li> <a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //jobs -->
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
