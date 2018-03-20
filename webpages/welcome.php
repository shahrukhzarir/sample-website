<!-- Simple welcome page just to show login works-->
<?php
session_start();
if(!$_SESSION['email']){
    header("Location: login.php");
}
?>
<html>
<head>
    <title>
        Enter Registration Information
    </title>
</head>
<body>
<h1>Ahoy!</h1><br>
<?php
echo $_SESSION['email'];
?>
<h1><a href="logout.php">Please Logout here</a> </h1>
</body>

</html>
