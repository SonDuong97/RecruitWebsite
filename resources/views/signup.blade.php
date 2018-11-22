<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <base href="{{asset('')}}">
  <link rel="stylesheet" href="user_assets/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="user_assets/css/signup.css" type="text/css">
  
  <script src="user_assets/js/jquery-min.js"></script>
  <script src="user_assets/js/bootstrap.min.js"></script>
  <script src="user_assets/js/ajax/signup.js"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>

  <div class="container" style="margin-top:30px">
   <div class="row">
    <div class="col-md-8">
     <!--thông báo-->
     <div class="alert alert-success " id="alert_success" role="alert">
      Đăng kí thành công <a href="{{ route('login') }}" class="alert-link">Đăng nhập ngay</a>. 
    </div>
    <div class="alert alert-danger " id="alert_danger" role="alert">
      Đăng kí thất bại. <span id="error"></span>. 
    </div>

    <section>      
      <h1 class="entry-title"><span>Đăng kí</span> </h1>
      <hr>
      <form class="form-horizontal" name="signup" id="signup" >

        <div class="form-group">
          <label class="control-label col-sm-3">Loại tài khoản <span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
            <label>
              <input name="role" type="radio" value="2">
            Nhà tuyển dụng </label>
               
            <label>
              <input name="role" type="radio" value="3" checked>
            Người tìm việc </label>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Họ và tên<span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
            <input type="text" class="form-control" name="mem_name" id="mem_name" placeholder="Enter your Name here" value="" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Email<span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input type="email" class="form-control" name="emailid" id="emailid" placeholder="Enter your Email ID" value="" required>
            </div>
            <small> Địa chỉ email của bạn được sử dụng để đảm bảo tính bảo mật và khôi phục tài khoản của bạn. </small> </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3">Mật khẩu <span class="text-danger">*</span></label>
            <div class="col-md-5 col-sm-8">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" class="form-control" name="password" id="password" placeholder="Mật khẩu (nhiều hơn 6 kí tự)" value="" required>
              </div>   
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">Xác nhận mật khẩu<span class="text-danger">*</span></label>
            <div class="col-md-5 col-sm-8">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Xác nhận mật khẩu" value="" required>
              </div>  
            </div>
          </div>
          <div class="form-group">

            <label class="control-label col-md-3">Công ty<span class="text-danger">*</span></label>
            <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <select name="" class="form-control">
                 <option value="">------------------Công ty----------------</option>
                 @foreach ($listCompany as $c)
                 <option value="{{ $c->id }}">{{ $c->name }}</option>}
                 option
                 @endforeach
               </select>
             </div>
           </div>  
           <div class="col-md-1">
            <button type="button" class="btn btn-primary" data-toggle="modal" href='#modal-id'>Thêm mới</button>
          </div>
        </div>

      </div>
      <div class="form-group">
        <div class="col-xs-offset-3 col-md-8 col-sm-9"><span class="text-muted"><span class="label label-danger">Ghi chú :</span> Bằng cách nhấn đăng kí bạn đã đồng ý với <a href="#">điều kiện</a> của chúng tôi</span> </div>
      </div>
      <div class="form-group">
        <div class="col-xs-offset-3 col-xs-10">
          <a href="{{ route('login') }}" class="btn btn-primary">Trở lại đăng nhập</a>
          <input name="Reset" type="reset" value="Làm mới" class="btn btn-danger">
          <input name="Submit" type="button" value="Đăng kí" class="btn btn-success" id="submit">
        </div>
      </div>
    </form>
  </div>

  <div class="modal fade" id="modal-id">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h2 class="modal-title">Thêm mới công ty</h2>
          <div class="alert alert-success " id="alert_success_company" role="alert" >
            Đăng kí thành công . 
          </div>
          <div class="alert alert-danger " id="alert_danger_company" role="alert">
            Đăng kí thất bại. <span id="error_company"></span>. 
          </div>
        </div>
        <div class="modal-body">
          <form action=""  role="form" enctype="multipart/form-data">

            <div class="form-group">
              <label for="">Tên công ty</label>
              <input type="text" class="form-control" id="nameCompany" placeholder="Nhập tên công ty" >
              <label for="">Link công ty</label>
              <input type="text" class="form-control" id="linkCompany" placeholder="Nhập link web công ty">
              <label for="">Logo</label>
              <input type="file" class="form-control" id="logoCompany" name="logo" >
              <label for="">Địa chỉ</label>
              <select name="address" id="addressCompany" class="form-control" >
                <option value="">----------Chọn địa điểm---------</option>
                @foreach ($listAddress as $a)
                {{-- expr --}}
                <option value="{{ $a->id }}">{{ $a->name }}</option>}
                option
                @endforeach

              </select>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
          <button type="button" class="btn btn-primary" id="signup_company">Lưu thông tin</button>
        </div>

      </div>
    </div>
  </div>
</div>
</div>
<script type="text/javascript" src="user_assets/js/jquery-min.js"></script>
<script>
  $(document).ready(function() {
    $('#signup_company').click(function(event) {
      /* Act on the event */
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      var formData = new FormData();
      formData.append("nameCompany",$("#nameCompany").val());
      formData.append("linkCompany",$("#linkCompany").val());
      formData.append("addressCompany",$("#addressCompany").val());
      formData.append("logoCompany",document.getElementById("logoCompany").files[0]);
      $.ajax({
        'url': '/signup-company',
        'type': 'post',
        'data': formData,
        processData : false,
        contentType : false,
        success:function(data){
          if(data.error == true){
            $('#alert_success_company').hide();
            $('#alert_danger_company').show();
            if(data.message.nameCompany != undefined){
              $('#error_company').text(data.message.nameCompany[0]);
            }
            else if (data.message.linkCompany != undefined) {
              $('#error_company').text(data.message.linkCompany[0]);
            }
            else if(data.message.logoCompany != undefined){
              $('#error_company').text(data.message.logoCompany[0]);
            }
            else if (data.message.addressCompany != undefined) {
              $('#error_company').text(data.message.addressCompany[0]);
            }
          }
          else{
            $('#alert_success_company').show();
            $('#alert_danger_company').hide();
          }

        }
      })
    });  
  });
</script>
</body>
</html>