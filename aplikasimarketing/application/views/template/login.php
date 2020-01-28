<!DOCTYPE html>
<html>
<head>
  <title>Animated Login Form</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
  <img class="wave" src="template/img/background.png">
  <div class="container-log">
    <div class="img">
      <img src="template/img/project.svg">
    </div>
    <div class="login-content">
      <form action="<?= base_url('Login/login')?>" method ="post" >
        <img src="template/img/avatar.svg">
        <h2 class="title">Welcome</h2>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>Username</h5>
                    <input type="text" name="kode_am" class="input">
                 </div>
              </div>
              <div class="input-div pass">
                 <div class="i"> 
                    <i class="fas fa-lock"></i>
                 </div>
                 <div class="div">
                    <h5>Password</h5>
                    <input type="password" name="password" class="input">
                 </div>
              </div>
              
              <input type="submit" name="login" class="btn-log" value="login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="template/js/main.js"></script>
</body>
</html>

<?    ?>