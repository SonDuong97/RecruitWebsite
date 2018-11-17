@extends('users.layout.layout')

@section('content')
<!-- Find Job Section Start -->

<section class="find-job section">
  <div class="container">
    <h2 class="section-title">Công việc mới nhất</h2>
    @foreach ($jobSummary as $value)
    <div class="row">
      <div class="col-md-12">
        <div class="job-list">
          <div class="thumb">
            <a href="job-details.html">
              <img src="user_assets/img/jobs/img-1.jpg" alt="">
            </a>
          </div>
          <div class="job-list-content">
            <h4>
              <a href="job-detail/{{ $value->id_job_detail }}">{{ $value->title }}</a>
            </h4>
            <p>{{ $value->description }}
            </p>
            <div class="job-tag">
              <div class="pull-left">
                <div class="meta-tag">
                  <span>
                    <a href="{{ $value->company->link }}" target="_blank">
                      <i class="ti-briefcase"></i>{{ $value->company->name }}</a>
                    </span>
                    <span>
                      <i class="ti-location-pin"></i>{{ $value->address->name }}</span>
                      <span>
                        <i class="ti-user"></i>{{ $value->user->name }}</span>
                      </div>
                    </div>
                    <div class="pull-right">
                      <div class="icon" id="{{ $value->id }}">
                        <i class="ti-heart"></i>
                      </div>
                      <a href="job-details.html" class="btn btn-common btn-rm">Xem chi tiết</a>
                    </div>
                  </div>
                </div>
              </div>

              @endforeach

            </div>

          </div>
        </div>
      </section>
      <!-- Find Job Section End -->
      <!-- Testimonial Section Start -->
      <section id="testimonial" class="section">
        <div class="container">
          <div class="row">
            <div class="touch-slider" class="owl-carousel owl-theme">
              <div class="item active text-center">
                <img class="img-member" src="user_assets/img/clients/sonduong.jpg" alt="">
                <div class="client-info">
                  <h2 class="client-name">Dương Ngọc Sơn <br>
                    <span>(Sơn Bơm)</span>
                  </h2>
                </div>
                <p>
                  <i class="fa fa-quote-left quote-left"></i> Trang web hết sức tuyệt vời
                  <i class="fa fa-quote-right quote-right"></i>
                </div>
                <div class="item text-center">
                  <img class="img-member" src="user_assets/img/clients/trung.jpg" alt="">
                  <div class="client-info">
                    <h2 class="client-name">Nguyễn Ngọc Trung <br>
                      <span>(Thạch Thất)</span>
                    </h2>
                  </div>
                  <p>
                    <i class="fa fa-quote-left quote-left"></i> Trang web đã giúp tôi tìm được công việc phù hợp
                    <i class="fa fa-quote-right quote-right"></i>
                  </div>
                  <div class="item text-center">
                    <img class="img-member" src="user_assets/img/clients/hai.jpg" alt="">
                    <div class="client-info">
                      <h2 class="client-name">Đỗ Thị Hải <br>
                        <span>(Hải Ngáo)</span>
                      </h2>
                    </div>
                    <p>
                      <i class="fa fa-quote-left quote-left"></i>Cảm ơn trang web
                      <i class="fa fa-quote-right quote-right"></i>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- Testimonial Section End -->

            <!-- Clients Section -->
            <section class="clients section">
              <div class="container">
                <h2 class="section-title">
                  Đối tác liên kết
                </h2>
                <div class="row">
                  <div id="clients-scroller">
                    <div class="items">
                      <img src="user_assets/img/clients/img1.png" alt="">
                    </div>
                    <div class="items">
                      <img src="user_assets/img/clients/img2.png" alt="">
                    </div>
                    <div class="items">
                      <img src="user_assets/img/clients/img3.png" alt="">
                    </div>
                    <div class="items">
                      <img src="user_assets/img/clients/img4.png" alt="">
                    </div>
                    <div class="items">
                      <img src="user_assets/img/clients/img5.png" alt="">
                    </div>
                    <div class="items">
                      <img src="user_assets/img/clients/img6.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- Client Section End -->

            <!-- Counter Section Start -->
            <section id="counter">
              <div class="container">
                <div class="row">
                  <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="counting">
                      <div class="icon">
                        <i class="ti-briefcase"></i>
                      </div>
                      <div class="desc">
                        <h2>Công việc</h2>
                        <h1 class="counter">{{ $cJob }}</h1>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="counting">
                      <div class="icon">
                        <i class="ti-user"></i>
                      </div>
                      <div class="desc">
                        <h2>Thành viên</h2>
                        <h1 class="counter" id="member">{{ $cmember }}</h1>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="counting">
                      <div class="icon">
                        <i class="ti-write"></i>
                      </div>
                      <div class="desc">
                        <h2>Resume</h2>
                        <h1 class="counter">700</h1>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="counting">
                      <div class="icon">
                        <i class="ti-heart"></i>
                      </div>
                      <div class="desc">
                        <h2>Company</h2>
                        <h1 class="counter">{{ $ccompany }}</h1>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- Counter Section End -->
            <script type="text/javascript" src="user_assets/js/jquery-min.js"></script>
            <script>
              $(document).ready(function() {
                $('.icon').click(function(event) {
                  /* Act on the event */
                  $.ajaxSetup({
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                  });
                  $.ajax({
                    'url': '/favorite',
                    'type': 'post',
                    'data': {'idJob': $(this).attr('id')},
                    success:function(data){
                      if(data.error==true){
                        window.location="/login";
                      }
                      else{
                        if(data.message == false){

                   $('#'.data.idJob).css({'background-color':'red','color':'white'});
                        }
                      }
                    }
                  })
                });  
              });
            </script>
            @endsection

