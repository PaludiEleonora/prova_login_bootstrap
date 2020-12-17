<?php
  session_start();
  ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords"
          content="unique login form,leamug login form,boostrap login form,responsive login form,free css html login form,download login form">
    <meta name="author" content="leamug">
    <title>Login</title>
    <link href="css/style.css" rel="stylesheet" id="style">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
      body {
        background-image:url("back.jpg");
        background-position:center;
        background-size:cover;

        -webkit-font-smoothing: antialiased;
        font: normal 14px Roboto,arial,sans-serif;

      }

      .container {
        padding: 110px;
      }
      ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: #ffffff!important;
        opacity: 1; /* Firefox */
        font-size:18px!important;
      }
      .form-login {
        background-color: rgba(0,0,0,0.55);
        padding-top: 10px;
        padding-bottom: 20px;
        padding-left: 20px;
        padding-right: 20px;
        border-radius: 15px;
        border-color:#d2d2d2;
        border-width: 5px;
        color:white;
        box-shadow:0 1px 0 #cfcfcf;
      }
      .form-control{
        background:transparent!important;
        color:white!important;
        font-size: 18px!important;
      }
      h1{
        color:white!important;
      }
      h4 {
        border:0 solid #fff;
        border-bottom-width:1px;
        padding-bottom:10px;
        text-align: center;
      }

      .form-control {
        border-radius: 10px;
      }
      .text-white{
        color: white!important;
      }
      .wrapper {
        text-align: center;
      }
      .footer p{
        font-size: 18px;
      }
</style>
</head>
<body>
  <?php
    $username ="";
    $errore_login="";
    if(isset($_POST["accedi"])){
      unset($_SESSION["username"]);
      $username = $_POST["username"];
      $password = $_POST["password"];

    if("007" == $password){
      $_SESSION["username"] = $username;
      header("location:benvenuto.php");
      exit();
    }else{
      $errore_login="Non corretto";
    }
  }
  ?>
<form method="post">
  <div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-4 text-center">
            <h1 class='text-white'> LOGIN</h1>
              <div class="form-login"></br>
                <h4>Login sicuro</h4>
                </br>
                <input type="text" id="" name="username" class="form-control input-sm chat-input" placeholder="username"/>
                </br></br>
                <input type="password" name ="password" id="" class="form-control input-sm chat-input" placeholder="password"/>
                </br></br>
                <div class="wrapper">
                        <span class="group-btn">
                          <input type="submit" class="btn btn-danger btn-md" name="accedi" value="Accedi">
                          <input type="reset" class="btn btn-danger btn-md" value="Reset">
                        </span>
                </div>
            </div>
        </div>
    </div>
    </br></br></br>
        <div class="footer text-white text-center">
        <p>© 2020 L'ho fatto chiaramente io, Eleonora Paludi. </p>
    </div>
    </div>
</form>
<?php
  if($errore_login){
    echo'<div class="alert-danger" role="alert">';
      echo $errore_login;
    echo "</div>";
  }
 ?>

</body>
