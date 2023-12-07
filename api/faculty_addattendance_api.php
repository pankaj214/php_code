<?php
include('conn.php');
    $array=json_decode(stripslashes($_POST['info']),true);
    $rollno=$array[0]['value'];
    $sub=$array[1]['value'];
    $semester=$array[2]['value'];
    $attendance=$array[3]['value'];
    $cat=$array[4]['value'];
    $sql=mysqli_query($connection,"INSERT INTO `s_attendance`(`rollno`, `subject_code`,`date`, `status`, `semester`,`category`) VALUES ('$rollno','$sub',now(),'$attendance','$semester','$cat')");
    if($sql)
    { 
      $output=1;
    }
    else{
    $output=0;
    }
    echo $output;
 ?>