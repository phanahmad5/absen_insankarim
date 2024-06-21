<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <script type="application/x-javascript"> 
    addEventListener("load", function() { 
      setTimeout(hideURLbar, 0); 
    }, false); 
    function hideURLbar(){ 
      window.scrollTo(0,1); 
    } 
  </script>
  <!-- Custom Theme files -->
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
  <!-- //Custom Theme files -->
  <!-- web font -->
  <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
  <!-- //web font -->
   <style>
    body {
      background: url('img/bkg1.jpg') no-repeat center center fixed;
      background-size: cover;
    }
  </style>
</head>
<body>
  <!-- main -->
  <div class="main-w3layouts wrapper">
    <h1>Login Admin</h1>
    <div class="main-agileinfo">
      <div class="agileits-top">
        <form action="proses_login.php" method="post">
          <input class="text" type="text" name="username" placeholder="Username" required=""><br>
          <input class="text" type="password" name="password" placeholder="Password" required="">
          <div class="wthree-text">
            <label class="anim"></label>
            <div class="clear"></div>
          </div>
          <input type="submit" value="Login">
        </form>
        <p>Login sebagai karyawan? <a href="karyawan/login_karyawan.php">Klik di sini</a></p>
      </div>
    </div>
    <!-- copyright -->
    <!-- //copyright -->
    <ul class="colorlib-bubbles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
  <!-- //main -->
</body>
</html>
