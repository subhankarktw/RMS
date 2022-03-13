<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
  </head>
  <body>
  <div class="card">
    <div class="text-center intro"> <img src="https://i.imgur.com/uNiv4bD.png" width="160"> <span class="d-block account"></span> <span class="contact"> <a href="" class="mail"></a>  <br> </span> </div>
    <div class="mt-4 text-center">

        <h4>Log In.</h4> <span>Login with your credentials</span>
        <form action="login-submit.php" method="post">
        <div class="mt-3 inputbox"> <input type="text" class="form-control" name="email" placeholder="Email"> <i class="fa fa-user"></i> </div>
        <div class="inputbox"> <input type="password" class="form-control" name="password" placeholder="Password"> <i class="fa fa-lock"></i> </div>
    </div>
    <div class="d-flex justify-content-between">
        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault"> Keep me Logged in </label> </div>
        <div> <a href="#" class="forgot">Forgot Password?</a> </div>
    </div>
    <div class="mt-2"> <button class="btn btn-primary btn-block">Log In</button> </div>
</form>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>