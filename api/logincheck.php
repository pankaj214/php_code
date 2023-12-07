<?php 
include('conn.php');
    $id=$_POST['id'];
    $pass=$_POST['pass'];
    $type=$_POST['type'];
    if($type=="admin")
    {$sql=mysqli_query($connection,"SELECT * FROM `admin` WHERE `id`='$id' and `password`='$pass'");}
    else if($type=="student")
    {
      $sql=mysqli_query($connection,"SELECT * FROM `student` WHERE `rollno`='$id' and `password`='$pass'");
      }
    else
    {
      $sql=mysqli_query($connection,"SELECT * FROM `employee` WHERE `username`='$id' and `password`='$pass' and  `employee_department`='$type'");  
    }
    $row=mysqli_num_rows($sql);
    if($row)
    { 
      $output=1;
    }
    else{
    $output="Id and Password doesn't match";
    }
echo $output;
 ?>
