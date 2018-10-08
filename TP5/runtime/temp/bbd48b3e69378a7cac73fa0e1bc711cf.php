<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:96:"E:\httpd-2.4.28-Win64-VC15\Apache24\htdocs\TP5\public/../application/write\view\login\index.html";i:1526378965;s:81:"E:\httpd-2.4.28-Win64-VC15\Apache24\htdocs\TP5\application\write\view\layout.html";i:1527645391;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
账号登录
</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
  <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.bootcss.com/popper.js/1.12.5/umd/popper.min.js"></script>
  <script src="https://cdn.bootcss.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
</head>
<body>
    


    
    <div class="container">
        <!-- 模态框 -->
        <div class="modal fade" id="myModal" data-backdrop="static" data-keyboard="false">
            <form action="/write/login/check" method="post">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- 模态框头部 -->
                    <div class="modal-header">
                        <h4 class="modal-title">账号登录</h4>
                    </div>
                    <!-- 模态框主体 -->
                    <div class="modal-body">
                            <div class="form-group">
                                <label for="userid">账号：</label>
                                <input type="text" class="form-control" id="userid" name="userid" placeholder="请输入账号">
                            </div>
                            <div class="form-group">
                                <label for="pwd">密码:</label>
                                <input type="password" class="form-control" id="pwd" name="pwd" placeholder="请输入密码">
                            </div>
                            <a href="/write/insert/index">没有账号？点击注册</a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">关闭</button>
                        <button type="submit" class="btn btn-primary">立即登录</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <script>
        $('#myModal').modal();
    </script>

</body>
</html>