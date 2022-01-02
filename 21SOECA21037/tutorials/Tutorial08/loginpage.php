<?php
  $username=isset($_COOKIE['usename'])?$_COOKIE['username']:"";
  $password=isset($_COOKIE['password'])?$_COOKIE['password']:"";
  $rememberme=isset($_COOKIE['username'])?"checked":"";
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Loginpage</title>
    
    <style>
      *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }
      body{
        background:  rgb(142, 141, 156);
      }
      row{
        background: white;
        border-radius: 30px;
        box-shadow: 12px 12px 22px grey;
      }
      img{
        border-top-left-radius: 30px;
        border-bottom-left-radius: 30px;
      }
      button{
        border: none;
        outline: none;
        height: 50px;
        width: 100%;
        background-color: black;
        color: white;
        border-radius: 4px;
        font-weight: bold;
      }
      button:hover{
        background: white;
        border: 1px solid;
        color: black;
      }
    </style>
  </head>
  <body>
    <section class="Form my-4 mx-5">
	    <div class="Container">
        <div class="row g-0">
          <div class="col-md-6">
            <img src="https://ps.w.org/custom-login-page-templates/assets/icon-256x256.png?rev=1667452" class="img-fluid offset-5 col-md-6" alt="">
          </div>
          <div class="col-md-6">
            <h1 class="form-weight-bold py-4">Login</h1>
            <form action="loginpage.php" method="post">
              <div class="form-row">
                <div class="col-md-6">
                  <input type="Username" value="<?=$username?>" placeholder="Username" class="form-control my-2 p-3" name="username">
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-6">
                  <input type="Password" value="<?=$password?>" placeholder="********" class="form-control my-2 p-3" name="password">
                </div>
              </div>
              <div class="checkbox">
                <label>
                    <input type="checkbox" name="rememberme" vlaue="<?=rememberme?>">Remember me
                </label>
             </div>
              <div class="form-row">
                <div class="col-md-6">
                  <button type="submit" name="login" class="button mt-2 mb-4">Login</button>
                </div>
              </div>
              <a href="#">Forgot Password</a>
                            <p>Don't have an account? <a href="registrationpage.php">Register here</a></p>

            </form>
          </div>
        </div>
		</div>
	
	
	</section>
	
	
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>