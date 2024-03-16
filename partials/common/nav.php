<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/06edf57802.js" crossorigin="anonymous"></script>
       <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="fonts/icomoon/style.css">
       
</head>
<body>
<?php





$website = "http://localhost/amuwisper";
// Variable for linking flies urls ============================================
$signUp = "$website/login/index.php";
$profile = "$website/user profile/profile.php";
$logOut = "$website/logout/logout.php";
$contactUs = "$website/contact us/contactus.php";
$claim= "$website/claim/claim.php";
$homePage = "/amuwisper/";
$userProfile="$website/user profile/profile.php";
$testimonial="$website/testimonial/testimonial.php";
$notification="$website/notify/notify.php";
$chat="$website/chat/users.php";


//Navigation Block
$headBlock = '<div class="logo">
              <img src"" class="logoimg"alt="" />
              </div>';

$homeBlock =  "<a href='$homePage' class='home'>Home</a>";
$claimBlock="<a href='$claim'>Whispers</a>";
$testimonialBlock="<a href='$testimonial'>Moments</a>";
$signUpBlock="<a href='$signUp' class='btn'>Get Started</a>";
$contactUsBlock = "  <a href='$contactUs'>Help</a>";
$chatBlock = "  <a href='$chat'>Chat</a>";
$notifyBlock="
<a href='$notification?username=$currentUser'><i class='fas fa-solid fa-envelope fa-2x'></i><span class='badge badge-danger' style='background-color:red !important;  border-radius:50%; padding:0 6px;
position:relative; top:-20px; left:-17px; color: white;'>$sum</span></a>
";


if($_SERVER['REQUEST_URI']==$homePage){
  $signInBlock = "<a href='$website/login/index.php' class='active' id='openBtn'>Sign in</a>";

}
else{
  $signInBlock="";
}
//user block sessioon check 
// if($boolLoggedIn){
//   $profileBlock= "<a href='$userProfile' class='active'>$currentUser</a>";

// }
// else{
//    if($_SERVER['REQUEST_URI']!=$homePage)
//    $signInBlock = "<a href='$website/login/index.php' class='active' id='openBtn'>Sign in</a>";
//    else{
//    $signInBlock = "";
//    }
//   }

if(!$boolLoggedIn){
if($_SERVER['REQUEST_URI']=$claim){
  $claimBlock="<a href='$homePage'>Whispers</a>";
}
}


// Login Session check 
if ($boolLoggedIn) {
    echo "
    <nav>
    <div class='container'>
      $headBlock
      <div class='links'>
        $homeBlock
        $claimBlock
        $testimonialBlock
        $contactUsBlock
        $chatBlock
        $profileBlock
        $notifyBlock
      </div>
      <div class='hamburger-menu'>
        <div class='bar'></div>
      </div>
    </div>
  </nav>

";
}
else{
    echo "
    <nav>
    <div class='container'>
        $headBlock
      <div class='links'>
        $homeBlock
        $claimBlock
        $testimonialBlock
        $contactUsBlock
        $signInBlock
      </div>
      <div class='hamburger-menu'>
        <div class='bar'></div>
      </div>
    </div>
  </nav>

";
}
?>
</body>
</html>
