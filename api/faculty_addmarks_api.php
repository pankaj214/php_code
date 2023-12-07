<?php
include('conn.php');
    $array=json_decode(stripslashes($_POST['info']),true);
    $rollno=$array[0]['value'];
    $type=$array[1]['value'];
    $subject=$array[2]['value'];
    $sem=$array[3]['value'];
    $mark=$array[4]['value'];
    $sql=mysqli_query($connection,"INSERT INTO `marks`(`rollno`, `type`, `sub_code`, `semester`, `marks`) VALUES ('$rollno','$type','$subject','$sem','$mark')");
    if($sql)
    { 
      $output=1;
    }
    else{
    $output=0;
    }
    echo $output;
 ?>