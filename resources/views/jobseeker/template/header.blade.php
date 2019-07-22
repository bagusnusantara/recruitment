<!-- Header Section Start -->
<header id="home" class="hero-area">
  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
    <div class="container">
      <div class="theme-header clearfix">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="lni-menu"></span>
            <span class="lni-menu"></span>
            <span class="lni-menu"></span>
          </button>
        <a href="{{route('JobseekerPublic')}}" class="navbar-brand"><img src="{{asset('jobx/assets/img/logo.png') }}" alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="navbar-nav mr-auto w-100 justify-content-end">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">
                Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('jobseeker/public')}}">
                Lowongan Pekerjaan
              </a>
            </li>
            <li class="button-group">
              <a href="{{url('login')}}" class="button btn btn-common">Sign in</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="mobile-menu" data-logo="{{asset('jobx/assets/img/logo-mobile.png') }}"></div>
  </nav>
  <!-- Navbar End -->
  @if ((url()->current()) == (url('/')))
  <div class="container">
    <div class="row space-100 justify-content-center">
      <div class="col-lg-10 col-md-12 col-xs-12">
        <div class="contents">
          <h2 class="head-title">SMI Public Recruitment</h2>
          <!-- <h3 class="head-title">Reach Your Dream with Us!!!</h3> -->
          <div class="job-search-form">
            <form>
              <div class="row">
                <div class="col-lg-5 col-md-6 col-xs-12">
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="Job Title or Company Name">
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                  <div class="form-group">
                    <div class="search-category-container">
                      <label class="styled-select">
                        <select>
                          <option value="none">Locations</option>
                          <option value="none">New York</option>
                          <option value="none">California</option>
                          <option value="none">Washington</option>
                          <option value="none">Birmingham</option>
                          <option value="none">Chicago</option>
                          <option value="none">Phoenix</option>
                        </select>
                      </label>
                    </div>
                    <i class="lni-map-marker"></i>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                  <div class="form-group">
                    <div class="search-category-container">
                      <label class="styled-select">
                        <select>
                          <option>All Categories</option>
                          <option>Finance</option>
                          <option>IT & Engineering</option>
                          <option>Education/Training</option>
                          <option>Art/Design</option>
                          <option>Sale/Markting</option>
                          <option>Healthcare</option>
                          <option>Science</option>
                          <option>Food Services</option>
                        </select>
                      </label>
                    </div>
                    <i class="lni-layers"></i>
                  </div>
                </div>
                <div class="col-lg-1 col-md-6 col-xs-12">
                  <button type="submit" class="button"><i class="lni-search"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @elseif ((url()->current()) == (url('/login')))
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="inner-header">
            <h3>Login</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  @elseif ((url()->current()) == (url('/register')))
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="inner-header">
            <h3>Register</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  @else
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="inner-header">
          </div>
        </div>
      </div>
    </div>
  </div>
  @endif

</header>
<!-- Header Section End -->
