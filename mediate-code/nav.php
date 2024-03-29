<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/06edf57802.js" crossorigin="anonymous"></script>
       <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="fonts/icomoon/style.css">
       
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js'></script>
</head>
<body>
<?php





// // session================================================================
// if (!isset($_SESSION)) {
//     session_start();    
// }


// // login condition=======================================================
// $boolLoggedIn = false;
// if (isset($_SESSION) and isset($_SESSION['username'])) {
//     $boolLoggedIn = true;
//     $currentUser = $_SESSION['username'];
     
// }
// else{
//   $currentUser=null;
// }


// $website = "";
// Variable for linking flies urls ============================================
$signUp = "$website/sign up/signup.php";
$profile = "$website/user profile/profile.php";
$logOut = "$website/logout/logout.php";
$contactUs = "$website/contact us/contactus.php";
$claim= "$website/claim/claim.php";
$homePage = "$website/index.php";
$userProfile="$website/user profile/profile.php";
$testimonial="$website/testimonial/testimonial.php";
$notification="$website/notify/notify.php";
$chat="$website/chat/users.php";





//Notification 
// $sql="SELECT SUM(COALESCE(account_created,0)+(COALESCE(email_verified,0))+(COALESCE(signed_in,0))+(COALESCE(password_reset,0))+(COALESCE(update_info,0))+(COALESCE(profile_pic,0))+(COALESCE(policy_app,0))+(COALESCE(policy_claimed,0))+(COALESCE(admin_review,0))+(COALESCE(approved,0))+
// (COALESCE(`disapproved`,0))+(COALESCE(`download_pdf`,0))+(COALESCE(`question`,0))+(COALESCE(`logout`,0))+(COALESCE(`payment_success`,0))+(COALESCE(`pdf`,0))+(COALESCE(`pass_activity`,0))) AS sum_value FROM `notify` WHERE `username`='$currentUser';";
// $result=mysqli_query($conn,$sql);
// $aff=mysqli_fetch_assoc($result);
// $sum = $aff['sum_value'];


// Discrete block that changes for different blocks 
// to be displayed at differend place ======================================

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








// // ========================================Policies Dynamic session and Condition to fect all cards 
// //  at one place when admin adds any policies to database==============================================================



// $fetch = false;
// $policyCard ="";
// $sql = "SELECT * FROM `policycards`";
// $result = mysqli_query($conn,$sql);
// $aff = mysqli_affected_rows($conn);
// if($aff<1){
//     $fetch = false;
// }
// else{
//     $fetch = true;
// }

// if ($fetch) {

//     while($data = mysqli_fetch_object($result)){
//         $id=$data->{"id"};
//         $policyCat = $data->{'policycat'};
//         $policyName = $data->{'policyname'};
//         $policyDetails = $data->{'policydetails'};
//         $policyPremium = $data->{'policypremium'};
//         $policyCoverage = $data->{'policycoverage'};
//         $date = $data->{'date'};
//         $newDate = date("j-F Y", strtotime($date));
//         $newTime = date("l, g:i a", strtotime($date));

     

        
//         // polcies image are randomly inserted for every card that while loop fetches from database
//         $random=rand(1,15);
//         if($boolLoggedIn){        
//           $policyImage="../static/img/$random.svg";
//         }
//           else{
//             $policyImage="./static/img/$random.svg";
//           }
         
           
//           // $uniqueCustomerid=$id.$currentUser;
//           // echo $uniqueCustomerid;
//           if($boolLoggedIn){
//             $apply="../apply policy/applypolicy.php?category=$policyCat&policyName=$policyName&premium=$policyPremium&coverage=$policyCoverage&id=$id";
            
//             }
//             else{
//               $apply='index.php';

//             }
//         //the actual policy card ,note all cards are fetched from the db which are uploaded by admin
//         //while loops iterates all the cards to the user profile if logged in else on index page 
//         $policyCard .= " <div class='card-wrap'>
//      <div class='card'>
//      <div class='card-content z-index'>
//      <img src='$policyImage' alt'image'>
//     <p class='title-sm' style='font-size: 18px; margin:15px 10px'>$policyCat</p>
//     <h3 class='title-sm'>$policyName</h3>
//     <p class='text'>
//     $policyDetails
//     </p>
//     <p class='title-sm' style='font-size: 17px; margin:10px'>Premium $policyPremium</p>
//     <p class='title-sm' style='font-size: 15px; margin:15px 10px'> Cover upto $policyCoverage lakhs</p>



//     <a href='$apply' type='submit' class='btn small'>Apply Now</a>
//     <p class='title-sm' style='font-size: 15px; margin:15px 10px;'> Posted on $newDate</p>
//     <p class='title-sm' style='font-size: 15px; margin:15px 10px;'> at $newTime</p>




//   </div>
// </div>
// </div>";
// }

// }

// 





// ======================================policy cards data variable ================================




$policyCardBlock="<section class='services section' id='services'>
<div class='container'>
  <div class='section-header'>
    <h3 class='title' data-title='COVID-19'>Insurance Plans</h3>
    <p class='text'>
      We offer comprehensive policies that provide insurance for
      eventualities. Opt for a suitable corona insurance policy.
    </p>
  </div>

  <div class='cards'>
     $policyCard
  </div>
</div>
</section>";



// policies that user has applied will be shown =================================================






// Sql Test for the specific user so that he can not turn more than one policy to claimed process ===========================================



// $fetch = false;
// $userpolicyCard ="";
// $sql = "SELECT * FROM `appliedpolicy` Where `username`='$currentUser'";
// $result = mysqli_query($conn,$sql);
// $aff = mysqli_affected_rows($conn);
// if($aff<1){
//   $fetch = false;
// }
// else{
//   $fetch = true;
// }

// if ($fetch) {
//     $boolAlreadyClaimed = false;
//     $innerSql = "SELECT * FROM `appliedpolicy` Where `username`='$currentUser' and `action` = 1 ";
//     $resultSql = mysqli_query($conn,$innerSql);
//     $innerAff = mysqli_affected_rows($conn);
//     if($innerAff > 0){
//       $boolAlreadyClaimed = true;
//     }

//     $claimhref="";
//     while($data = mysqli_fetch_object($result)){
//         $id=$data->{"id"};
//         $policyCat = $data->{'p_cat'};
//         $policyName = $data->{'p_name'};
//         $unique_id = $data->{'unique_id'};
//         $policyPremium = $data->{'p_premium'};
//         $policyCoverage = $data->{'p_coverage'};
//         // $actionformypolicies=$data->{'action'};
//         $date = $data->{'date'};
//         $newDate = date("j-F Y", strtotime($date));
//         $newTime = date("l, g:i a", strtotime($date));
//         $action=$data->{'action'};
         
//         if($action==0){
//           $action="Insured";
//           $details="Your Unique Insuranse Id for this Policy:  $unique_id
//           Do not Share this with anyone. this will be needed when you will claim policy.";
//           if(!$boolAlreadyClaimed){
//             $claimhref="../claim/claim.php";
//           }
//         }
//         if($action==1){
//           $action="Claimed,Download Application";
//           $details="You have Claimed this policy with Id $unique_id,Once admin Verifies details Admin will call on 
//           phone Number and ask for bank details and Sum assured will be transfered to you";
//           $claimhref="../claim/userpage.php?id=$id";
//         }
//         if($action==2){
//           $action="Approved, Print Applicaition";
//           $details="Congratulations, Your claim of Id no $unique_id has been approved and assured money is transferred Check
//           your funds in account. If any questions feel free to contact us.";
//           $claimhref="../claim/userpage.php?id=$id";
//         }
//         if($action==3){
//           $action="Disapproved, Discrepancy found";
//           $details="Sorry, Your policy with Id $unique_id details didn't matach with our records.
//           we found discrepancy in your documents or details. If any questions feel free to contact us.";
//         }
//         // echo $policyName;

        
//         // polcies image are randomly inserted for every card that while loop fetches from database
//         $random=rand(1,15);
//         if($boolLoggedIn){        
//           $policyImage="../static/img/$random.svg";
//         }
//           else{
//             $policyImage="./static/img/$random.svg";
//           }
         

//         //the actual policy card ,note all cards are fetched from the db which are uploaded by admin
//         //while loops iterates all the cards to the user profile if logged in else on index page 
//         $userpolicyCard .= " <div class='card-wrap'>
//      <div class='card'>
//      <div class='card-content z-index'>
//      <img src='$policyImage' alt'image'>
//     <p class='title-sm' style='font-size: 18px; margin:15px 10px'>$policyCat</p>
//     <h3 class='title-sm'>$policyName</h3>
//     <p class='text'>
//   $details
//     </p>
//     <p class='title-sm' style='font-size: 17px; margin:10px'>Premium $policyPremium</p>
//     <p class='title-sm' style='font-size: 15px; margin:15px 10px'> Cover upto $policyCoverage lakhs</p>



//     <a href='$claimhref' type='submit' class='btn small'>$action</a>
//     <p class='title-sm' style='font-size: 15px; margin:15px 10px;'> on $newDate</p>
//     <p class='title-sm' style='font-size: 15px; margin:15px 10px;'> at $newTime</p>




//   </div>
// </div>
// </div>";
// }

// }

// // 
// if($fetch){
// $userpolicyCardBlock="<section class='services section' id='services'>
// <div class='container'>
//   <div class='section-header'>
//     <h3 class='title' data-title='Your'>Insurance Policies</h3>
//     <p class='text'>
//           You have applied for these policies,
//           Claim in hour of need we are there for you always...!!
//     </p>
//   </div>

//   <div class='cards'>
//      $userpolicyCard
//   </div>
// </div>
// </section>";}
// else{
//   $userpolicyCardBlock="<section class='services section' id='services'>
// <div class='container'>
//   <div class='section-header'>
//     <h3 class='title' data-title='You Have No'> Insured Policies</h3>
//     <p class='text'>
//          Looks Like you haven't insured yourself against Covid!!
//          Do it Now and get fully insured against deadly covid...
//     </p>
//   </div>
// </div>
// </section>";
// }





// // ========================================Policies Conditions End Here========================================================

// $payments="";
// // Payments section for user who have insured 

//         //  Testing payment only awailable when user has claimed any policy otherwise not 
        
  
//         $fetch = false;
//         $sql = "SELECT * FROM `appliedpolicy` Where `username`='$currentUser' and `action` = 0";
//         $result = mysqli_query($conn,$sql);
//         $aff = mysqli_affected_rows($conn);
//         if($aff<1){
//           $fetch = false;
//         }
//         else{
//           $fetch = true;
//         }
        
//         if ($fetch) {
//             $innerSql2 = "SELECT * FROM `appliedpolicy` Where `username`='$currentUser' and `action` = 0 ";
//             $resultSql2 = mysqli_query($conn,$innerSql2);
//             $data = mysqli_fetch_object($resultSql2);
//                 $id=$data->{"id"};
//                 $policyName = $data->{'p_name'};
//                 $unique_id = $data->{'unique_id'};
//                 $policyPremium = $data->{'p_premium'};
//                 $policyCoverage = $data->{'p_coverage'};
//                 $date = $data->{'date'};
//                 $newDate = date("j-F Y", strtotime($date));
//                 $newTime = date("l, g:i a", strtotime($date));

//     $innerSql2 = "SELECT * FROM `payments` Where `username`= '$currentUser'";
//     $resultSql2 = mysqli_query($conn,$innerSql2);
//     $data = mysqli_fetch_assoc($resultSql2);
//     $paid_on=$data["date"];
//     $time=$data["time"];
//     $due_date=$data["next_date"];
//     date_default_timezone_set('UTC');
//     $Current_date = date("Y-m-d");

//     if($due_date===$Current_date){
// $payments="<section class='chat-us' id=''>
// <div class='container'>
//   <h3 class='title' data-title='Pay your premium Installments for'>$policyName <h4>With Id $unique_id</h4></h3>
//   <p class='text'>
//   Pay your Current Active policy premium here for $policyName that covers
//   $policyCoverage everymonth.
//   Last Premium Payment was paid on $paid_on at $time <br>
//     You applied this policy on $newDate at $newTime,
//     If you have any questions, don't <br> hesitate Chat with us Now!<br><br>
//     <a href='../partials/payscript.php?id=$id' class='btn'>Pay Now</a>
//   </p>
// </div>

// </div>
// </section>
// </main>";
// $sql2 = "UPDATE `payments` SET `status`='unpaid' WHERE `username`='$currentUser'";
// $result = mysqli_query($conn, $sql2);
// }
// else{
//       $payments="<section class='chat-us' id=''>
//       <div class='container'>
//         <h3 class='title' data-title='Next Due Date For'>$policyName <h4>With Id $unique_id</h4></h3>
//         <p class='text'>
//         Your Next due Date for Premium Payment is <strong> $due_date </strong>
//         Last Premium Payment was paid on $paid_on at $time.
//           You applied this policy on $newDate at $newTime,
//           If you have any questions, don't hesitate Chat with us Now!<br><br>
//         </p>
//       </div>
      
//       </div>
//       </section>
//       </main>";

//     }
//       }
// else{
//   $id="";
//   $policyName = "";
//   $unique_id = "";
//   $policyPremium = "";
//   $policyCoverage = "";
//   $date = "";
//   $newDate = "";
//   $newTime = "";
// }






// different condition to change assigned as variable blocks when user is logged in =============



if($boolLoggedIn){
  $profileBlock= "<a href='$userProfile' class='active'>$currentUser</a>";

}
else{
   if($_SERVER['REQUEST_URI']!=$homePage)
   $signInBlock = "<a href='$homePage' class='active' id='openBtn'>Sign in</a>";
   else{
   $signInBlock = "<a href='#' class='active' id='openBtn'>Sign in</a>";
   }

}
if(!$boolLoggedIn){
if($_SERVER['REQUEST_URI']=$claim){
  $claimBlock="<a href='$homePage'>Whispers</a>";
}
}
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
