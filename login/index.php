<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome|Login</title>
    <link rel="stylesheet" href="../static/form.css">
    <?php
    require_once '../partials/common/font.php';
    ?>
  </head>
  <body>

  <div class="nanobar my-class" id="my-id" style="position: fixed;">
    <div class="bar"></div>
</div>
    <div id="login">
        <div id="formLogin">

            <h1>Sign In →
            </h1>

            <div class="inputContainer">
                <input type="text" class="inputLogin" placeholder=" ">
                <label class="labelLogin">Email</label>
            </div>

            <div class="inputContainer">
                <input type="password" class="inputLogin" placeholder=" ">
                <label class="labelLogin">Password</label>
            </div>

            <input type="submit" class="submitButton" value="Sign In">


            <div class="register">
            <span class="breaker">
                or 
            </span>    
                <a href="../signup/register.php">Register</a>
            </div>
            <div class="register">
            <span class="breaker">
              <b>Fotgot password?</b>
            </span>  
            <a href="../auth/forgot.php">Reset Now</a>
            </div>

        </div>
    </div>




  </body>
</html>