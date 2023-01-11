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
?>
<form action="addstudent.php" method="post" enctype="multipart/form-data" align="center">
    <br><br>
    <lebel>Roll No. :</lebel>
    <input type="text" name="rollno" placeholder="Enter Rollno." required><br><br>
    <lebel>Full Name :</lebel>
    <input type="text" name="name" placeholder="Enter Name." required><br><br>
    <lebel>City:</lebel>
    <input type="text" name="city" placeholder="Enter City" required><br><br>
    <lebel>Parent Contract No. :</lebel>
    <input type="text" name="pcon" placeholder="Enter Parent Contract No." required><br><br>
    <lebel>Standerd :</lebel>
    <input type="number" name="std" placeholder="Enter Standerd" required><br><br>
    <lebel>Roll No. :</lebel>
    <input type="file" name="simg"s required><br><br>
    <input type="submit" name="submit" value="submit">
    
</form>
</body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        include('../dbcon.php');
        $rolno=$_POST['rollno'];
        $name=$_POST['name'];
        $city=$_POST['city'];
        $pcon=$_POST['pcon'];
        $std=$_POST['std'];
        $imagename = $_FILES['simg']['name'];
        $tempname = $_FILES['simg']['tmp_name'];
        
        move_uploaded_file($tempname,"../dataimg/$imagename");
        
        $qry="INSERT INTO `student`(`rollno`, `name`, `city`, `pcont`, `standerd`,`image`) VALUES ('$rolno','$name','$city','$pcon','$std','$imagename')";
        $run=mysqli_query($con,$qry);
        if($run==true)
        {
            ?>
            <script>
                    alert('Data inserted Scussesfully !');
            </script>
            
            <?php
        }
    }

?>










