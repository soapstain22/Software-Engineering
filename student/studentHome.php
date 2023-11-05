<?php 
session_start();
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
            <title>HOME</title>
            <link rel="stylesheet" type="text/css" href="style.css">
        </head>
        <body>
            <h1>Hello, <?php echo $_SESSION['f_name'];?> You are a student!</h1>
            <a href="../logout.php">Logout</a>
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