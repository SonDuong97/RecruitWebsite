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

  <script src="user_assets/js/bootstrap.min.js"></script>
  <script src="user_assets/js/jquery-min.js"></script>
   <script src="user_assets/js/ajax/signup.js"></script>

</head>
<body>
<div class="container">
	<div class="row">
    <div class="col-md-8">
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
                    <input name="role" type="radio" value="3" >
                    Người tìm việc </label>
                  </div>
                </div>
              <div class="form-group">
                <label class="control-label col-sm-3">Họ và tên<span class="text-danger">*</span></label>
                <div class="col-md-8 col-sm-9">
                  <input type="text" class="form-control" name="mem_name" id="mem_name" placeholder="Enter your Name here" value="">
                </div>
              </div>
              <div class="form-group">
          <label class="control-label col-sm-3">Email<span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
              <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input type="email" class="form-control" name="emailid" id="emailid" placeholder="Enter your Email ID" value="">
            </div>
            <small> Địa chỉ email của bạn được sử dụng để đảm bảo tính bảo mật và khôi phục tài khoản của bạn. </small> </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-sm-3">Mật khẩu <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input type="password" class="form-control" name="password" id="password" placeholder="Mật khẩu (nhiều hơn 6 kí tự)" value="">
           </div>   
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Xác nhận mật khẩu<span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Xác nhận mật khẩu" value="">
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
</div>
</div>
</body>
</html>