<?php
session_start();
            if(isset($_SESSION['uid']))
            {
                echo "";
            }
            else
            {
                header('location:../login.php');
            }
?>

<?php 

include('header.php');
?>
<div class="logout">
   <button><a href="logout.php">Logout</a></button>
</div><br>
<div class="admintitle" align="center">
   
    <h1>Welcome to Admin Dashboard</h1>
     
</div><br>
<div class="dashboard" align="center">
    <button><a href="addstudent.php">Insert Student</a></button><br><br>
    <button><a href="updatestudent.php">Update Student</a></button><br><br>
    <button><a href="deletestudent.php">Delete Student</a></button>
</div>


</body>
</html>
