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
<br><br>
<form action="updatestudent.php" method="post" align="center">
    <lebel>Enter Standerd :</lebel>
    <input type="number" name="standerd" placeholder="Enter Standerd" required="required"><br><br>
    <lebel>Enter Stduent Name :</lebel>
    <input type="text" name="stuname" placeholder="Enter name " required><br><br>
    <input type="submit" name="submit" value="search">
</form>

</body>
</html>

<?php
    if(isset($_POST['submit']))
        
    {
        include('../dbcon.php');
        $standerd=$_POST['standerd'];
        $name = $_POST['stuname'];
        $sql = "SELECT * FROM `student` WHERE `standerd`='$standerd' AND `name` LIKE '%$name%'";
        $run = mysqli_query($con,$sql);
        
        if(mysqli_num_rows($run)<1)
        {
            echo "No records";
        }
        else
        {  
            $count=0;
            while($data=mysqli_fetch_assoc($run))
            {
                $count++;
?>
                <h3><?php echo $count; ?></h3>
                <img src="../dataimg/<?php echo $data['image']; ?>" alt="">
                <h3><?php echo $data['name']; ?></h3>
                <h3><?php echo $data['rollno']; ?></h3>
                <h3><a href="updateform.php?sid=<?php echo $data['id'];?>">Edit</a></h3>
<?php
            }
        }
    }

?>
