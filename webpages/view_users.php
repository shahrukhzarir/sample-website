<!-- This page for when the adminstrator logs in and sees the user in his website-->
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> <!--css file link in bootstrap folder-->
    <title>View Users</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;
    }
    .table {
        margin-top: 50px;

    }
</style>
<body>

<div class="table-scrol">
    <h1 align="center">List of Users</h1>
<div class="table-responsive">
    <!-- create a table-->
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
        <thead>
        <!--Setup headers for the table-->
        <tr>
            <th>User Id</th>
            <th>User Name</th>
            <th>User E-mail</th>
            <th>User Pass</th>
            <th>Delete User</th>
        </tr>
        </thead>

        <?php
        include("database/db_connection.php");//set up a connection
        $view_users_query="select * from users"; //get information from a simple query
        $run=mysqli_query($dbcon,$view_users_query);//run the query 
        while($row=mysqli_fetch_array($run))//return a split of the rows in an array
        {
            $user_id=$row[0];
            $user_name=$row[1];
            $user_email=$row[2];
            $user_pass=$row[3];
        ?>

        <!--out put each row in the table-->
        <tr>
            <td><?php echo $user_id;  ?></td>
            <td><?php echo $user_name;  ?></td>
            <td><?php echo $user_email;  ?></td>
            <td><?php echo $user_pass;  ?></td>
            <!-- delete function-->
            <td><a href="delete.php?del=<?php echo $user_id ?>"><button class="btn btn-danger">Delete</button></a></td> 
        </tr>

        <?php } ?>

    </table>
        </div>
</div>


</body>

</html>
