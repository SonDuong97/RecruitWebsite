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
              <a href="job-details.html">{{ $value->title }}</a>
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
                      <div class="icon">
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
                <img class="img-member" src="user_assets/img/testimonial/img1.jpg" alt="">
                <div class="client-info">
                  <h2 class="client-name">Jessica
                    <span>(Senior Accountant)</span>
                  </h2>
                </div>
                <p>
                  <i class="fa fa-quote-left quote-left"></i> The team that was assigned to our project... were extremely professional
                  <i class="fa fa-quote-right quote-right"></i>
                  <br> throughout the project and assured that the owner expectations were met and
                  <br> often exceeded. </p>
                </div>
                <div class="item text-center">
                  <img class="img-member" src="user_assets/img/testimonial/img2.jpg" alt="">
                  <div class="client-info">
                    <h2 class="client-name">John Doe
                      <span>(Project Menager)</span>
                    </h2>
                  </div>
                  <p>
                    <i class="fa fa-quote-left quote-left"></i> The team that was assigned to our project... were extremely professional
                    <i class="fa fa-quote-right quote-right"></i>
                    <br> throughout the project and assured that the owner expectations were met and
                    <br> often exceeded. </p>
                  </div>
                  <div class="item text-center">
                    <img class="img-member" src="user_assets/img/testimonial/img3.jpg" alt="">
                    <div class="client-info">
                      <h2 class="client-name">Helen
                        <span>(Engineer)</span>
                      </h2>
                    </div>
                    <p>
                      <i class="fa fa-quote-left quote-left"></i> The team that was assigned to our project... were extremely professional
                      <i class="fa fa-quote-right quote-right"></i>
                      <br> throughout the project and assured that the owner expectations were met and
                      <br> often exceeded. </p>
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
                  Clients & Partners
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
                    <div class="items">
                      <img src="user_assets/img/clients/img6.png" alt="">
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
                        <h1 class="counter">{{ $job }}</h1>
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
                        <h1 class="counter" id="member">{{ $member }}</h1>
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
                        <h1 class="counter">{{ $company }}</h1>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- Counter Section End -->

            @endsection
