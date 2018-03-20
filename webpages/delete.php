<!-- This page for when the adminstrator deletes a user-->
<?php
include("database/db_connection.php");
$delete_id=$_GET['del'];//get input
$delete_query="delete from users WHERE id='$delete_id'";//sets up query to delete
$run=mysqli_query($dbcon,$delete_query);//continues to delete 
if($run)
{

    echo "<script>window.open('view_users.php?deleted=user has been deleted','_self')</script>";
}
?>