<?php 
include('conn.php');
$id=$_POST['id'];
$status=$_POST['status'];
    $sql=mysqli_query($connection,"INSERT INTO `e_atteandance`(`id`, `status`) VALUES ('$id','$status')");
    if($sql)
    { 
      $output=1;
    }
    else{
    $output=0;
    }
    echo $output;
 ?>