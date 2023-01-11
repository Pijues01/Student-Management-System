<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Management System</title>
</head>
<body>
     <h5 align="right" style="margin-right:20px;"><a href="login.php">Admin Login</a></h5>
    <h1 align="center">Welcome to Student Management System</h1>
  <form action="index.php" method="post">
     <h3 align="center">Choose Information</h3>
     <div align="center">
      
      <label for="">Choose Standerd :</label>
      <select name="std" required>
          <option value="1">1st</option>
          <option value="2">2nd</option>
          <option value="3">3rd</option>
          <option value="4">4th</option>
          <option value="5">5th</option>
          <option value="6">6th</option>
          <option value="7">7th</option>
          <option value="8">8th</option>
          <option value="9">9th</option>
          <option value="10">10th</option>
          <option value="11">11th</option>
          <option value="12">12th</option>
      </select>
      <br><br>
      <label for="">Enter Roll No. :</label>
      <input type="text" name="rollno" required placeholder="Rollno."><br><br>
      <input type="submit" name="submit" value="Show info">
      </div>
  </form>
</body>
</html>


<?php

if (isset($_POST['submit']))
{
    $standerd = $_POST['std'];
    $rollno = $_POST['rollno'];
    
    include('dbcon.php');
    include('function.php');
    
    showdetails($standerd,$rollno);
}
?>

