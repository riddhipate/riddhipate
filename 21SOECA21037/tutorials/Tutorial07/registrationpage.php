<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <title>Registration Form</title>
    <style>
      body{
        background:  rgb(142, 141, 156);
      }
    </style>
    </head>
  <body>

    <div class="container">
      <div class="text-center row register">
        <h1>Registration</h1>
        <div class="col-sm-6 reg"></div> 
      </div>
      
       <div class="text-left mt-5">
          <form style="max-width:400px;margin:auto;" action="validateuser.php" method="post">
            <img class="mb-4 d-block mx-auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1S4PPY9Gvs9-F7HE3x6M_6Ubb9W6_meZryA&usqp=CAU">
            <label class="name">Name</label>
                <input type="text" class="form-control" placeholder="Jsmith" required autofocus>

                <label class="email">Username</label>
                <input type="email" placeholder="Example@.com" class="form-control" name="username">

                <label class="password">Password</label>
                <input type="password" placeholder="********" class="form-control" name="password">

                <label class="repassword">repassword</label>
                <input type="repassword" placeholder="********" class="form-control" name="repassword">

                <label class="age">Age</label>
                <input type="number" placeholder="01" class="form-control" name="age">

                <label class="birthday">Birthdate</label>
                <input type="date" placeholder="DD/MM/YY" class="form-control" name="birthday">

                <label class="country">Country</label>
                <input type="text" placeholder="Enter country name" class="form-control" name="country">
                        
                <label class="state">State</label>
                <input type="text" placeholder="Enter state name" class="form-control" name="state">
                
                <label class="city">City</label>
                <input type="text" placeholder="Enter city name" class="form-control" name="city">

                <label >Profile Picture</label>
                <input type="file" name="profile picture">


                 <div class="checkbox">
                  <div class="text-center mt-3">
                  <label>
                    <input type="checkbox" value="I accept all terms and conditions">I accept all terms and conditoons
                </label>
                </div>
            </div>
              </div>
              <div class="mt-3">
                <div class="text-center mt-4">
                  <button class="btn btn-lg btn-primary btn-block">Do Register</button>
                  <p>Already have an account? <a href="loginpage.php">Login</a></p>

                </div>
              </div>
          </form>
      </div>
                
                  


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    -->
  </body>
</html>
