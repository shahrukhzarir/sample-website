<!-- This page for when the user and adminstrator logs out-->
<?php
session_start();//session is a way to store information (in variables) to be used across multiple pages.
session_destroy();//ends session
header("Location: login.php");//takes you back to login
?>