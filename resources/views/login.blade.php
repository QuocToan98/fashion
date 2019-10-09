<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="{{asset('public/backend')}}/"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/form-login.css">
    <title>Login</title>
</head>

<body>
    <Section class="main">
        <div class="container">
            <div class="row">
                <div class="form-login col-12">
                    <div class="row">
                        <div class="form-left col-4 col-md-4" style="background:#f4cc54; text-align: center">
                            <img src="https://ioffice.tatthanh.com.vn/pic/news/images/logo-hoa-hong-do%20(8).jpg" alt=""
                                style="width:60%">
                            <h1 class="name-logo"> Fashion store </h1>
                        </div>
                        <div class="form-right col-8 col-md-8">
                            <div class="form-body">
                                <h1 class="title-form" style="text-align: center;"> Đăng nhập tài khoản</h1>
                                <div class="form-wrap">
                                    <form action="{{URL::to('/admin-dashboard')}}" method="post">
                                    {{csrf_field()}}
                                        <div class="form-group">
                                                <i class="icon-user fas fa-user"></i>
                                            <input type="text" name="email" class="text form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Tên đăng nhập" required="">
                                        </div>
                                        <div class="form-group">
                                                <i class="icon-lock fas fa-lock"></i>
                                            <input type="password" name="password" class="text form-control" id="exampleInputPassword1"
                                                placeholder="Mật khẩu" required="">
                                        </div>
                                        <div class="check-member form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Nhớ mật khẩu</label>
											<div class="clearfix"></div>
                                        </div>
                                        <center><button type="submit" value="Đăng nhập" name="login" class="btn-login">Gửi</button></center>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Section>

</body>

</html>