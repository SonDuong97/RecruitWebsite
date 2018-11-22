<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">    
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="author" content="Jobboard">

  <title>Đăng tin tuyển dụng</title>    

  <!-- Favicon -->
  <link rel="shortcut icon" href="user_assets/img/favicon.png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="user_assets/css/bootstrap.min.css" type="text/css">    
  <link rel="stylesheet" href="user_assets/css/jasny-bootstrap.min.css" type="text/css">  
  <link rel="stylesheet" href="user_assets/css/bootstrap-select.min.css" type="text/css">  
  <!-- Material CSS -->
  <link rel="stylesheet" href="user_assets/css/material-kit.css" type="text/css">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="user_assets/fonts/font-awesome.min.css" type="text/css"> 
  <link rel="stylesheet" href="user_assets/fonts/themify-icons.css"> 

  <!-- Animate CSS -->
  <link rel="stylesheet" href="user_assets/extras/animate.css" type="text/css">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="user_assets/extras/owl.carousel.css" type="text/css">
  <link rel="stylesheet" href="user_assets/extras/owl.theme.css" type="text/css">
  <!-- Rev Slider CSS -->
  <link rel="stylesheet" href="user_assets/extras/settings.css" type="text/css"> 
  <!-- Editor -->
  <link rel="stylesheet" href="user_assets/extras/froala_editor.min.css" type="text/css"> 
  <!-- Slicknav js -->
  <link rel="stylesheet" href="user_assets/css/slicknav.css" type="text/css">
  <!-- Main Styles -->
  <link rel="stylesheet" href="user_assets/css/main.css" type="text/css">
  <!-- Responsive CSS Styles -->
  <link rel="stylesheet" href="user_assets/css/responsive.css" type="text/css">

  <!-- Color CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="user_assets/css/colors/red.css" media="screen" />
  <link href="user_assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="user_assets/css/jobpost.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>  

  <!-- Page Header Start -->
 <div class="page-header" style="background: url(user_assets/img/banner1.jpg);">
    <div class="container">
      <div class="row">         
        <div class="col-md-12">
          <div class="breadcrumb-wrapper">
            <h2 class="product-title">Đăng tin tuyển dụng</h2>
            <ol class="breadcrumb"  >
              <li><a href="{{ route('home') }}"><i class="ti-home"></i> Trang chủ</a></li>
              <li class="current">Đăng tin tuyển dụng</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
        <!-- Page Header End -->    



        <div class="container">
          <div class="row">
            <div class="col col-md-2"></div>
            <div class="col col-md-8">
              <form>
                <div class="form-group required col-xs-12">
                  <label for="exampleInputEmail1" class='control-label'>Tiêu đề</label>
                  <input type="text" class="form-control" id="title" name="title">
                  <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                </div>
                <div class="form-group required col-xs-12 col-md-6">
                  <label for="exampleInputPassword1" class='control-label'>Ngành nghề</label>
                  <select class="form-control" id="exampleSelect1">
                   <option>--------------- Chọn ngành nghề ---------------</option>
                   @foreach ($listCategory as $c)
                   <option value="{{ $c->id }}">{{ $c->name }}</option>
                   @endforeach
                 </select>
               </div>
               <div class="form-group required col-xs-12 col-md-6">
                <label for="exampleInputPassword1" class='control-label'>Địa điểm</label>
                <select class="form-control" id="exampleSelect1">
                 <option>--------------------- Chọn địa điểm ---------------------</option>
                 @foreach ($listAddress as $a)
                 <option value="{{ $a->id }}">{{ $a->name }}</option>
                 @endforeach
               </select>
             </div>
             <div class="form-group required col-xs-12 col-sm-6">
              <label for="exampleInputPassword1" class='control-label'>Số lượng</label>
              <input type="number" class="form-control" id="quantity" name= "quantity" min=0>
            </div>
            <div class="form-group required col-xs-12 col-sm-6">
              <label for="exampleInputPassword1" class='control-label'>Lương</label>
              <input type="number" class="form-control" id="salary" name="salary" min=0 >
            </div>
            <div class="form-group required col-xs-12 col-sm-4">
              <label for="exampleInputPassword1" class='control-label'>Giới tính</label>
              <select class="form-control" id="gender" name="gender">
                <option value="0">Không yêu cầu</option>
                <option value="1">Nam</option>
                <option value="2">Nữ</option>

              </select>
            </div>
            <div class="form-group required col-xs-12 col-sm-4">
              <label for="exampleInputPassword1" class='control-label'>Tuổi</label>
              <input type="number" class="form-control" id="age" name="age" min=18>
            </div>
            <div class="form-group required col-xs-12 col-sm-4">
              <label for="exampleInputPassword1" class='control-label'>Hạn đăng kí</label>
              <input type="date" class="form-control" id="date" name="date">
            </div>

            <div class="form-group required col-xs-12 col-md-4">
              <label for="exampleInputPassword1" class='control-label'>Chức vụ</label>
              <input type="text" class="form-control" id="position" name="position">
            </div>
            <div class="form-group required col-xs-12 col-md-4">
              <label for="exampleInputPassword1" class='control-label'>Kinh nghiệm</label>
              <input type="text" class="form-control" id="experience" name="experience">
            </div>

            <div class="form-group required col-xs-12 col-md-4">
              <label for="exampleInputPassword1" class='control-label'>Bằng cấp</label>
              <input type="text" class="form-control" id="education" name="education">
            </div>

            <div class="form-group required col-xs-12">
              <label for="exampleTextarea" class='control-label'>Mô tả chung</label>
              <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <div class="form-group required col-xs-12">
              <label for="exampleTextarea" class='control-label'>Mô tả chi tiết</label>
              <textarea class="form-control" id="detail" name="detail" rows="3"></textarea>
            </div>
            <div class="form-group required col-xs-12">
              <label for="exampleTextarea" class='control-label'>Quyền lợi</label>
              <textarea class="form-control" id="benefit" name="benefit" rows="3" ></textarea>
            </div>
            <div class="form-group required col-xs-12">
              <label for="exampleTextarea" class='control-label'>Yêu cầu khác</label>
              <textarea class="form-control" id="other_requirement" name="other_requirement" rows="3" ></textarea>
            </div>
            <div class="col-xs-12" style="margin-bottom: 50px;margin-top: 30px">
             <button type="reset" class="btn btn-danger">Làm mới</button>
             <button type="button" class="btn btn-success">Đăng tin</button>
           </div>

         </form>
       </div>
       <div class="col col-md-2"></div>

     </div>
   </div>   

   <!-- Copyright Start  -->
   <div id="copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="site-info text-center">

          </div>   
        </div>
      </div>
    </div>
  </div>
  <!-- Copyright End -->

</footer>
<!-- Footer Section End -->  

<!-- Go To Top Link -->
<a href="#" class="back-to-top">
  <i class="ti-arrow-up"></i>
</a>

<div id="loading">
  <div id="loading-center">
    <div id="loading-center-absolute">
      <div class="object" id="object_one"></div>
      <div class="object" id="object_two"></div>
      <div class="object" id="object_three"></div>
      <div class="object" id="object_four"></div>
      <div class="object" id="object_five"></div>
      <div class="object" id="object_six"></div>
      <div class="object" id="object_seven"></div>
      <div class="object" id="object_eight"></div>
    </div>
  </div>
</div>

<!-- Main JS  -->
<script type="text/javascript" src="user_assets/js/jquery-min.js"></script>      
<script type="text/javascript" src="user_assets/js/bootstrap.min.js"></script>    
<script type="text/javascript" src="user_assets/js/material.min.js"></script>
<script type="text/javascript" src="user_assets/js/material-kit.js"></script>
<script type="text/javascript" src="user_assets/js/jquery.parallax.js"></script>
<script type="text/javascript" src="user_assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="user_assets/js/jquery.slicknav.js"></script>
<script type="text/javascript" src="user_assets/js/main.js"></script>
<script type="text/javascript" src="user_assets/js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="user_assets/js/waypoints.min.js"></script>
<script type="text/javascript" src="user_assets/js/jasny-bootstrap.min.js"></script>
<script type="text/javascript" src="user_assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="user_assets/js/form-validator.min.js"></script>
<script type="text/javascript" src="user_assets/js/contact-form-script.js"></script>    
<script type="text/javascript" src="user_assets/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="user_assets/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="user_assets/js/froala_editor.min.js"></script>
<script type="text/javascript" src="user_assets/js/fullscreen.min.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

<script>
  CKEDITOR.replace( 'description' );
  CKEDITOR.replace( 'detail' );
  CKEDITOR.replace( 'benefit' );
  CKEDITOR.replace( 'other_requirement' );
</script>

</body>
</html>