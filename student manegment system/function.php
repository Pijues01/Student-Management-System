<?php
 function showdetails($standerd,$rollno)
 {
      include('dbcon.php');
     $sql = "SELECT * FROM `student` WHERE `rollno`='$rollno' AND `standerd`='$standerd'";
     $run = mysqli_query($con,$sql);
     
     if (mysqli_num_rows($run)>0)
     {
         $data = mysqli_fetch_assoc($run);
         ?>
         <div align="center">
         <form action="">
             <h3>Student Details</h3>
            <div style="width:100px;height:100px;"> <img src="dataimg/<?php echo $data['image']; ?>" alt=""><br></div>
             <br><br>
             
             <lebel>Roll no :</lebel><?php echo $data['rollno']; ?><br>
             
             <lebel>Name :</lebel><?php echo $data['name']; ?><br>
             
             <lebel>Standerd :</lebel><?php echo $data['standerd']; ?><br>
             
             <lebel>Parents Contact Number :</lebel><?php echo $data['pcont']; ?><br>
             
             <lebel>City :</lebel><?php echo $data['city']; ?>
         </form>
         </div>
         <?php
     }
     else
     {
         echo "<script>alert('No Student Found !');</script>";
         
     }
 }

?>