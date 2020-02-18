<?php
include 'connect.php';
session_start();
if(isset($_SESSION['SESS_ID']))
{
  $_SESSION['message']="You are already Logged in.";
  header('location:welcome.php');
  die();
}
?>

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--Bootsrap 4 CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->

  <link rel="stylesheet" type="text/css" href="style2.css">
  <title>Login Client</title>
</head>
<body>
  <div class="container">
    
    <!-- alert messages show start-->
    
    <div class="msg col-md-12"></div>
    
    <?php if(isset($_SESSION['message'])) {?>
          <div class="alert alert-info" role="alert">
            <?php

              echo $_SESSION['message'];
              unset ($_SESSION['message']);

            ?>
            
          </div>
          <?php }?>
    <!-- alert messages show end-->

    <div class="d-flex justify-content-center h-100">
      
      <div class="card">

        <div class="card-header">
          <h3>Sing In</h3>
          <div class="d-flex justify-content-end social_icon">
            <div class="title-box">Client Area</div>
          </div>
        </div>
        <div class="card-body">
          <form action="action.php" method="POST">
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <input type="email" name="username" class="form-control" placeholder="useremail">
              </div>
            </div>

            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
                <input type="password" name="password" class="form-control" placeholder="password">
              </div>
            </div>

            <div class="row align-items-center remember">
              <input type="checkbox" name="#">Remember Me
            </div>

            <div class="form-group">
              <input type="submit" name="login" id="loginId" value="Login" class="btn float-right login_btn">
            </div>

          </form>
        </div>
        <div class="card-footer">
          <div class="d-felx justify-content-center links">
            Don't have an account?<a href="register.php">Sing Up</a>
          </div>
        </div>

        <div class="d-flex justify-content-center">
          <a href="#">Forgot Your Password</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>

<script type="text/javascript">

  function errorMsg(msg)
  {
    var messHtml='';
    messHtml+='<div class="alert alert-danger">';
    messHtml+='   <strong>Warning!</strong> '+msg;
    messHtml+='</div>';
    return messHtml;


  }

  function successMsg(msg)
  {
    var messHtml='';
    messHtml+='<div class="alert alert-success">';
    messHtml+='   <strong>Success!</strong> '+msg;
    messHtml+='</div>';
    return messHtml;
  }

  function closeNotification()
  {
    setTimeout(function(){
      $(".msg").fadeOut('slow');
    },3000);
  }

  $(document).ready(function(){
    $("#loginId").click(function(){
       /* $('.msg').show();

        $('.msg').html("Please You should  fill up field");
                setTimeout(function() { 
         

                $('.msg').hide();
               
              }, 2000);*/

              var username=$('input[name=username]').val();
              if(username.length==0)
              {
                $('.msg').html(errorMsg("Enter username"));
                $(".msg").fadeIn('slow');
                closeNotification();
                return false;
              }

              var password=$('input[type=password]').val();
              if(password.length==0)
              {
                $('.msg').html(errorMsg("Enter password"));
                $(".msg").fadeIn('slow');
                closeNotification();
                return false;
              }

              
              
              /*$('.msg').html(successMsg("Logged in complete."));
              $(".msg").fadeIn('slow');
              closeNotification();
              return false;*/
              //$(".msg").fadeOut(1000);

              
              
            });
    
  });
</script>