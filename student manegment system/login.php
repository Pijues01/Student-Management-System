<?php
session_start();
if(isset($_SESSION['uid']))
{
    header('location:admin/admindash.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <div align="center">
        <h1>Admin Login</h1>
    <form action="login.php" method="post">
    <label for="">Username :</label>
    <input type="text" name="uname" required><br><br>
    <label for="">Password :</label>
    <input type="password" name="pass" required><br><br>
    <input type="submit" name="login" value="Login">
    </form>
    </div>
</body>
</html>
<?php
include('dbcon.php');
    if(isset($_POST['uname']))
    {
        $username = $_POST['uname'];
        $password = $_POST['pass'];
        
        $qry = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
        $run=mysqli_query($con,$qry);
        $row= mysqli_num_rows($run);
        if($row<1)
        {
            ?>
            <script>
                alert('Username and password not matched');
                window.open('login.php','_self');
            </script>
            <?php  
        }
        
   
        else{
        $data = mysqli_fetch_assoc($run);
        
        $id=$data['id'];
        
        
            $_SESSION['uid']=$id;
            header('location:admin/admindash.php');
            
    }
 }
?>