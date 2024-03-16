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

            <h3>Create New Password →
            </h3>

            <div class="inputContainer">
                <input type="text" class="inputLogin" placeholder=" ">
                <label class="labelLogin">New Password</label>
            </div>

            <div class="inputContainer">
                <input type="password" class="inputLogin" placeholder=" ">
                <label class="labelLogin">Confirm New Password</label>
            </div>

            <input type="submit" class="submitButton" value="Reset">


        </div>
    </div>
  </body>
</html>