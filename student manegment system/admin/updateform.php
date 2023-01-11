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
include('titlehead.php');
include('../dbcon.php');

$sid = $_GET['sid'];
$sql = "SELECT * FROM `student` WHERE `id`='$sid'";
$run=mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($run);

?>  


<form action="updatedata.php" method="post" enctype="multipart/form-data" align="center">
    <br><br>
    <lebel>Roll No. :</lebel>
    <input type="text" name="rollno" placeholder="Enter Rollno." value="<?php echo $data['rollno'];?>" required><br><br>
    <lebel>Full Name :</lebel>
    <input type="text" name="name" placeholder="Enter Name." value="<?php echo $data['name'];?>" required><br><br>
    <lebel>City:</lebel>
    <input type="text" name="city" placeholder="Enter City" value="<?php echo $data['city'];?>" required><br><br>
    <lebel>Parent Contract No. :</lebel>
    <input type="text" name="pcon" placeholder="Enter Parent Contract No." value="<?php echo $data['pcont'];?>" required><br><br>
    <lebel>Standerd :</lebel>
    <input type="number" name="std" placeholder="Enter Standerd" value="<?php echo $data['standerd'];?>" required><br><br>
    <lebel>Image :</lebel>
    <input type="file" name="simg"s required><br><br>
    <input type="hidden" name="sid" value="<?php echo $data['id'];?>">
    <input type="submit" name="submit" value="submit">
    
</form>
</body>
</html>