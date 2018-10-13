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
            <a class="navbar-brand logo" href="index.html">
              <img src="user_assets/img/logo.png" alt="">
            </a>
          </div>

          <div class="collapse navbar-collapse" id="navbar">
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav">
              <li>
                <a class="active" href="{{ route('home') }}">
                  Trang chủ
                  <i class="fa fa-angle"></i>
                </a>
              </li>
              <li>
                <a href="job-page.html">
                  Jobs
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
                <h2>Nhiều công việc đang chờ bạn!</h2>
                <div class="content">
                  <form method="" action="">
                    <div class="row">
                      <div class="col-md-6 col-sm-4">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="job title / keywords / company name" id="">
                          <i class="ti-time"></i>
                        </div>
                      </div>
                      <div class="col-md-5 col-sm-4">
                        <div class="form-group">
                          <input class="form-control"  type="text" placeholder="Thành phố" id="address">
                          <i class="ti-location-pin"></i>

                        </div>
                      </div>
                      <div class="col-md-1 col-sm-4">
                        <button type="button" class="btn btn-search-icon">
                          <i class="ti-search"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="popular-jobs">
                  <b>Popular Keywords: </b>
                  <a href="#">Web Design</a>
                  <a href="#">Manager</a>
                  <a href="#">Programming</a>
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
