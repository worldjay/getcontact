<!DOCTYPE html>
<html lang="zh">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>服务消息注册</title>

<!-- 绑定用户的openid与客户编号方便接收推送消息 -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <!--    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>-->
     <!--   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <![endif]-->
  </head>

  <body>

    <div class="container">
<img src="images/logo.jpg" class="img-rounded" alt="Responsive image">
      <form class="form-signin" method="post" id="loginForm"  action="bind.php">
    <h2 class="form-signin-heading">请输入您的SAP客户编号</h2>
          <!--   <label for="userName" class="sr-only">Email address</label>  -->
        <input type="text" id="CustomerName" name="CustomerName" class="form-control" placeholder="SAP客户编号" required autofocus>
          <input type="text" id="userName" name="Name" class="form-control" placeholder="您的姓名" required autofocus>
         <input type="hidden" class="form-control" id="Code" name="Code" value=<?php echo $_GET['code'];?> >
        <button class="btn btn-lg btn-primary btn-block" type="submit">绑定</button>
      </form>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   
  </body>
</html>