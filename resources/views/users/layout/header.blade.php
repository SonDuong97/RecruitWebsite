<!-- Header Section Start -->
<div class="header">
  <!-- Start intro section -->
  <section id="intro" class="section-intro">
    <div class="logo-menu">
      <nav class="navbar navbar-default" role="navigation" data-spy="affix" data-offset-top="50">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand logo" href="{{ route('home') }}">
              <img src="user_assets/img/logo.png" alt="">
            </a>
          </div>
          
          <div class="collapse navbar-collapse" id="navbar">
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav">
              <li>
                <a @if(isset($active_home)) class="active" @endif href="{{ route('home') }}">
                  Trang chủ
                  <i class="fa fa-angle"></i>
                </a>
              </li>
              <li>
                <a href="{{ route('showJob') }}" @if(isset($active_job)) class="active" @endif>
                  Công việc
                  <i class="fa fa-angle"></i>
                </a>
              </li>
              <li>
                <a href="about.html">
                  About Us
                  <i class="fa fa-angle"></i>
                </a>
              </li>
              <li>
                <a href="contact.html">
                  Contact Us
                  <i class="fa fa-angle"></i>
                </a>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right float-right">


              @if(Auth::check())
                @if(Auth::user()->id_role<3)
                  <li class="left">
                    <a href="post-job.html">
                    <i class="ti-pencil-alt"></i>Đăng tin</a>
                  </li>
                @endif
                <li >
                  <a href="resume.html">
                    {{Auth::user()->name}}<i class="fa fa-angle-down" ></i>
                  </a> 
                  <ul class="dropdown">
                    <li>
                      <a href="{{ route('reset-password') }}">
                        Đổi mật khẩu
                      </a>
                    </li>
                    <li>
                      <a href="search-resumes.html">
                        Bài đăng
                      </a>
                    </li>
                    <li>
                      <a href="search-resumes.html">
                        My Shortlist
                      </a>
                    </li>
                    <li>
                      <a href="search-resumes.html">
                        $Payment
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('logout') }} ">
                        Đăng xuất
                      </a>
                    </li>
                  </ul>
                </li>
                @else
                <li class="right">
                  <a href="{{route('login')}}">
                    <i class="ti-lock"></i>Đăng nhập</a>
                  </li>
                  @endif
                </ul>
              </div>
            </div>
          </nav>
        </div>
        <!-- Header Section End -->

        <div class="search-container">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1>Tìm công việc phù hợp với bạn</h1>
                <br>
                @if(isset($job))
                <h2>{{ $job->total() }} công việc đang chờ bạn</h2>
                @else
                <h2>Nhiều công việc đang chờ bạn!</h2>
                @endif
                <div class="content">
                  <form method="get" action="{{ route('searchJob') }}">
                    <div class="row">
                      <div class="col-md-1 col-sm-1">
                       
                      </div>
                      <div class="col-md-3 col-sm-3">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Tên công ty" id="company" name="company">
                          <i class="ti-briefcase"></i>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-3">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Ngành nghề" id="category">
                          <i class="ti-list" name="category"></i>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-3">
                        <div class="form-group">
                          <input class="form-control"  type="text" placeholder="Thành phố" id="address" name="address">
                          <i class="ti-location-pin"></i>
                        </div>
                      </div>
                       <div class="col-md-1 col-sm-1">
                       
                      </div>
                      <div class="col-md-2 col-sm-3">
                        <button type="submit" class="btn btn-search-icon">
                          <i class="ti-search"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end intro section -->
    </div>
    <script type="text/javascript" src="user_assets/js/jquery-min.js"></script>
    <!-- JS file -->
    <script src="user_assets/js/jquery.easy-autocomplete.min.js"></script> 

    <script type="text/javascript" src="user_assets/js/ajax/search.js"></script>
