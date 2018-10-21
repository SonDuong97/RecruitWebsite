@extends('users.layout.layout')
@section('content')
<!-- Find Job Section Start -->


<section class="find-job section">
	<div class="container">


		<div class="row">
			<div class="col-md-12">
				<div class="job-list">
					<div class="thumb">
						<a href="job-details.html">
							<img src="user_assets/img/jobs/img-1.jpg" alt="">
						</a>
					</div>
					<div class="job-list-content">
						@if (isset($jobSummary))
						{{-- expr --}}
						
						<h4>
							<a href="" >{{ $jobSummary->title }}</a><br>
							<i class="ti-briefcase"></i><a href="{{ $jobSummary->link }}" style="color: blue">  {{ $jobSummary->company->name }}</a><br>
							<p  class="info-job-basic">
								<b>Địa điểm: </b> <span >{{ $jobSummary->address->name }}</span><br>
								<b>Mức lương: </b> <span >{{ $jobSummary->detail->salary }}</span><br>
								<b>Hạn nộp hồ sơ: </b> <span >{{ $jobSummary->detail->expiration_date }}</span><br>
								<b>Lĩnh vực: </b><a href="/category/{{$jobSummary->category->id}}"> <span >{{ $jobSummary->category->name}}</span></a><br>
								<div>
									<a href="button" class="btn btn-danger"><i class="ti-heart" ></i> Lưu công việc</a>
									<a href="button" class="btn btn-info"><i class="ti-bookmark"></i> Ứng tuyển ngay</a> 
								</div>
							</p>

							<div class="info-job-quick">
								<b>Thông tin tuyển dụng nhanh</b><hr>

								<div class="col-sm-6" style=""><b>Kinh nghiệm: </b><span>{{ $jobSummary->detail->experience}}</span></div>
								<div class="col-sm-6" ><b>Giới tính: </b><span>{{ $jobSummary->detail->gender}}</span></div>
								<div class="col-sm-6" ><b>Bằng cấp: </b><span>{{ $jobSummary->detail->education}}</span></div>
								<div class="col-sm-6" ><b>Chức vụ: </b><span>{{ $jobSummary->detail->position}}</span></div>
								<div class="col-sm-6" ><b>Số lượng cần tuyển: </b><span>{{ $jobSummary->detail->quantity}}</span></div>
								<div class="col-sm-6" ><b>Tuổi: </b><span>{{ $jobSummary->detail->age}}</span></div>


							</div>

							<div class="info-job-descripton" >
								<b>Mô tả công việc</b><hr>

								<div>{!! $jobSummary->detail->job_description !!}</div>

							</div>

							<div class="info-job-benefit" >
								<b>Quyền lợi</b><hr>

								<div>{!! $jobSummary->detail->benefit !!}</div>

							</div>

							<div class="info-job-other_requirement" >
								<b>Yêu cầu khác</b><hr>

								<div>{!! $jobSummary->detail->other_requirement !!}</div>

							</div>
						</h4>


					</div>
					@endif
					<div style="text-align: center;width: 100%">
						<div id="fb-root"></div>
						<script>(function(d, s, id) {
							var js, fjs = d.getElementsByTagName(s)[0];
							if (d.getElementById(id)) return;
							js = d.createElement(s); js.id = id;
							js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.1&appId=384385535379831&autoLogAppEvents=1';
							fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script>
						<div class="fb-comments" data-href="{{ $url }}" data-numposts="5" data-width="1000px"></div>
					</div>
				</section>
				<!-- Find Job Section End -->

				@endsection
