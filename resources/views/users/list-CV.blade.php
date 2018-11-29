@extends('users.layout.layout')
@section('content')
<!-- Find Job Section Start -->


<section class="find-job section">
	<div class="container">
		<h2 class="section-title">Danh sách ứng viên công việc mã ID {{ $jobID }}</h2>
		<table class="table table-hover" style="width: 100%;">
			<thead>
				<tr>

					<th style="width: 35%">Tên ứng viên</th>
					<th style="width: 35">Email</th>

					<th style="width: 30%">Hành động</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($listCV as $CV)
				<tr id="tr{{ $CV->id }}">{{-- expr --}}
					<td>{{ $CV->name }}</td>
					<td>{{ $CV->email }}</td>
					<td>
						<a href="{{ $CV->getCV->cv }}"><span class="label label-success">Xem CV</span></a>

						<a data-toggle="modal" href='#modal-id'><span class="label label-primary">Liên hệ</span></a>
					</td>
				</tr>
				@endforeach

			</tbody>

		</table>
		<div class="col-md-12">
			<div class="showing pull-left">
				<a href="#">Hiện thị
					<span>{{ $listCV->firstItem() }} - {{   $listCV->lastItem() }}</span> trong tổng số {{ $listCV->total() }} tin</a>
				</div>
				<div class="pagination pull-right">
					{!! $listCV->links() !!}
				</div>
			</div>
		</div>


	</div>
	<div class="modal fade" id="modal-id">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Modal title</h4>
				</div>
				<div class="modal-body">
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Find Job Section End -->
<script type="text/javascript" src="user_assets/js/jquery-min.js"></script>

@endsection
