<?php 
$cookie_name = "eduPlanner_logged_user";
$user_array;
if (isset($_COOKIE[$cookie_name])) {
    $serializedData = $_COOKIE[$cookie_name];
    $user_array = unserialize($serializedData);
    

    if ($user_array['clearance'] == 2)  {

        ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>SUNY NP Faculty Home</title>
      <link rel="stylesheet" href="../css/userNavbar.css">
   </head>
   <body>
        <nav id="topnav">
        <div class="wrap-nav">
        <a id="majors" class="nav-link" href="./studentProfile.php"> <h3>Student: <?php echo $user_array['f_name'];?></h3></a>
        <a id="one" class="nav-link one-big" href="./studentHome.php">Home</a>
        <a id="two" class="nav-link two-big" href="./calendar.php">Calendar</a>
        <a id="three" class="nav-link three-big" href="./schedulePlanner.php">Schedule Planner</a>
        <a id="four" class="nav-link four-big" href="./viewProfessors.php">Professors</a>
        <a id="five" class="nav-link five-big" href="./studentProfile.php">Profile</a>
        <a id="six" class="nav-link six-big" href="../logout.php">Logout</a>
        <div class="dropdown">
            <button class="dropbtn" onclick="showDropDown()" >Dropdown
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content" onclick="hideDropDown()" id="myDropdown">
                <div class="one-small">
                    <a id="one-small-a" class="nav-link" href="./studentHome.php">Home</a>
                </div>
                <div class="two-small">
                    <a id="two-small-a" class="nav-link" href="./calendar.php">Calendar</a>
                </div>
                <div class="three-small">
                    <a id="three-small-a" class="nav-link" href="./schedulePlanner.php">Schedule Planner</a>
                </div>
                <div class="four-small">
                    <a id="four-small-a" class="nav-link" href="./viewProfessors.php">Professors</a>
                </div>
                <div class="five-small">
                    <a id="five-small-a" class="nav-link" href="./studentProfile.php">Profile</a>
                </div>
                <div class="six-small">
                    <a id="six-small-a" class="nav-link" href="../logout.php">Logout</a>
                </div>
            </div>
            </div>
        </div>
        </nav>
    </body>
        </html>
        <?php 
    }
}
else{
    header("Location: ../login.php");
    exit();
}
?>