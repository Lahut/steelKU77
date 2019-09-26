<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>


    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="/css/login.css">

   
  </head>
  <body>
      <!-- Default form login -->
  <form class="text-center border border-light p-5" action="#!">

  <p class="h4 mb-4">Sign in</p>

  <!-- Email -->
  <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

  <!-- Password -->
  <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

  <div class="d-flex justify-content-around">
      <div>
          <!-- Remember me -->
          <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
              <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
          </div>
      </div>
      <div>
          <!-- Forgot password -->
          <a href="">Forgot password?</a>
      </div>
  </div>

  <!-- Sign in button -->
  <button onclick="window.location='/merchant';" class="btn btn-info btn-block my-4" type="submit">Sign in</button>

  <!-- Register -->
  <p>Not a member?
      <a href="">Register</a>
  </p>

  

  </form>
  <!-- Default form login -->

    </div>
  </div>
  </body>
</html>
