<?php
namespace Php;
//error_reporting(0);
session_start();
use \Php\Member; 

include '../dbconnect.php';
if (! empty($_SESSION["userId"])) {
    require_once __DIR__ . './../class/Member.php';
    $member = new Member();
    $memberResult = $member->getMemberById($_SESSION["userId"]);
    if(!empty($memberResult[0]["display_name"])) {
        $username = $memberResult[0]["user_name"];
        $points = ucwords($memberResult[0]["points"]);
        $profile_pic = $memberResult[0]["filename"];
    } else {
        $username = $memberResult[0]["user_name"];
        $points = $memberResult[0]["points"];
                $profile_pic = $memberResult[0]["filename"];
    }
}
if($_SERVER["REQUEST_METHOD"] == "POST") {
   $goal = $_POST["goal"];
      $sabout = $_POST["sabout"];
         $about = $_POST["about"];
            $youtube = $_POST["youtube"];
               $insta = $_POST["insta"];

if($goal != "")//not empty
{
   $sql = "UPDATE registered_users SET goal='$goal' where user_name = '$username';";
   $result = mysqli_query($conn, $sql); 
}
if($sabout != "")//not empty
{
   $sql = "UPDATE registered_users SET sabout='$sabout' where user_name = '$username';";
   $result = mysqli_query($conn, $sql); 
}
if($about != "")//not empty
{
   $sql = "UPDATE registered_users SET about='$about' where user_name = '$username';";
   $result = mysqli_query($conn, $sql); 
}
if($insta != "")//not empty
{
   $sql = "UPDATE registered_users SET insta='$insta' where user_name = '$username';";
   $result = mysqli_query($conn, $sql); 
}
if($youtube != "")//not empty
{
   $sql = "UPDATE registered_users SET youtube='$youtube' where user_name = '$username';";
   $result = mysqli_query($conn, $sql); 
}
if($sudo == 1) {          
    
}
 else {   
   header("Location: ./not.html");
      die();
}
}
include '../dbconnect.php';
?>  
<!DOCTYPE html>
<html>

<head>
  <?php include_once("a.html") ?>
  <script type="text/javascript">
    var temp = "<?php echo $profile_pic; ?>";
    var pic = document.getElementById("pic");
    pic.setAttribute('src', temp);
    points.setAttribute("href", "points1.php");
    points.setAttribute("class", "nav-link active");
    blogs.setAttribute("href", "../blog/index.html");
    movies.setAttribute("href", "movies.php");
    yt.setAttribute("href", "../yt/index.html");
    upload.setAttribute("href", "./upload2.php");
    logout.setAttribute("href", "/logout.php");
    home.setAttribute("href", "../index.php");
    home.setAttribute("class", "nav-link");
    pic.setAttribute("src", "<?php echo $profile_pic ?>");
  </script>
  <!--BOOTSTRAP-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!--BOOTSTRAP-->
</head>

<body>
  <br><br><br>
<br><br><h3>SUBXSUB PORTFOLIO</h3>
 
  <form id="myForm" action="#" method="post">
    <hr><center><label for="username"><b>Goal</b></label><br>
    <input type="input" id="goal" name="goal"><br>
        <label for="username"><b>Small About</b></label><br>
        <input type="input" id="sabout" name="sabout"><br>
            <label for="username"><b>About</b></label><br>
            <input type="input" id="about" name="about"><br>
                <label for="username"><b>Instagram</b></label><br>
                <input type="input" id="insta" name="insta"><br>
                    <label for="username"><b>Youtube</b></label><br>
                    <input type="input" id="youtube" name="youtube"><br>
<div>
                        <br>
 <a href="/index.php" class="btn btn-info me-1">DASHBOARD</a>
                        <input type="submit" name="login" value="SAVE"
                        class="btnLogin btn btn-info me-1"></span><hr></center>
                    </div>
  </form>
  <br>
  <?php include_once("footer.html") ?>
</body>
</html>
