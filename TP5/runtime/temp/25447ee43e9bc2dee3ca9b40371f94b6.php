<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:96:"E:\httpd-2.4.28-Win64-VC15\Apache24\htdocs\TP5\public/../application/admin\view\login\index.html";i:1537154686;}*/ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><!--Head--><head>
    <meta charset="utf-8">
    <title>登陆</title>
    <meta name="description" content="login page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="http://localhost:8080/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="http://localhost:8080/static/admin/style/font-awesome.css" rel="stylesheet">
    <!--Beyond styles-->
    <link id="beyond-link" href="http://localhost:8080/static/admin/style/beyond.css" rel="stylesheet">
    <link href="http://localhost:8080/static/admin/style/demo.css" rel="stylesheet">
    <link href="http://localhost:8080/static/admin/style/animate.css" rel="stylesheet">
</head>
<!--Head Ends-->
<!--Body-->

<body>
    <div class="login-container animated fadeInDown">
        <form action="" method="post">
            <div class="loginbox bg-white">
                <div class="loginbox-title">登  陆</div>
                <div class="loginbox-textbox">
                    <input value="" class="form-control" placeholder="用户名" name="username" type="text">
                </div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="密码" name="password" type="password">
                </div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="验证码" name="code" style="margin:10px 0;width:80px;float:left;" type="text" >
                    <img  style="float:left;width: 140px;padding: 10px; cursor:pointer;" src="<?php echo captcha_src(); ?>" alt="captcha" onclick="this.src='<?php echo captcha_src(); ?>?'+Math.random();" />
                </div>
                <div class="loginbox-submit">
                    <input class="btn btn-primary btn-block" value="Login" type="submit">
                </div>
            </div>
                <div class="logobox">
                    <p class="text-center">后台管理员登陆</p>
                </div>
        </form>
    </div>
    <!--Basic Scripts-->
    <script src="http://localhost:8080/static/admin/style/jquery.js"></script>
    <script src="http://localhost:8080/static/admin/style/bootstrap.js"></script>
    <script src="http://localhost:8080/static/admin/style/jquery_002.js"></script>
    <!--Beyond Scripts-->
    <script src="http://localhost:8080/static/admin/style/beyond.js"></script>




</body><!--Body Ends--></html>