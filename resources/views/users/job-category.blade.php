@extends('users.layout.layout')
@section('content')
<!-- Find Job Section Start -->


<section class="find-job section">
	<div class="container">
		<h2 class="section-title">{{ $category->name }}</h2>
		@foreach ($jobs as $value)
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
											<div class="icon">
												<i class="ti-heart"></i>
											</div>
											<a href="job-details.html" class="btn btn-common btn-rm">Xem chi tiết</a>
										</div>
									</div>
								</div>
							</div>
							@endforeach


							<div class="col-md-12">
								<div class="showing pull-left">
									<a href="#">Hiện thị
										<span>{{ $jobs->firstItem() }} - {{   $jobs->lastItem() }}</span> trong tổng số {{ $jobs->total() }} tin</a>
									</div>
									<div class="pagination pull-right">
										{!! $jobs->links() !!}
									</div>
								</div>
							</div>
						</div>
					</section>
					<!-- Find Job Section End -->

					@endsection
