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

            <h2>Reset Password →
            </h2>

            <div class="inputContainer">
                <input type="text" class="inputLogin" placeholder=" ">
                <label class="labelLogin">Registered Email </label>
            </div>
            <input type="submit" class="submitButton" value="Rest Password">
            <div class="register">
            </div>

        </div>
    </div>
  </body>
</html>