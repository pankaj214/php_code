<?php 
include('conn.php');
    $array=json_decode(stripslashes($_POST['info']),true);
    $rollno=$array[11]['value'];
    $pass=$array[4]['value'];
    $fisrt_name=$array[0]['value'];
    $last_name=$array[1]['value'];
    $address=$array[2]['value'];
    $pincode=$array[3]['value'];
    $F_name=$array[5]['value'];
    $M_name=$array[6]['value'];
    $gender=$array[7]['value'];
    $branch=$array[8]['value'];
    $batch=$array[9]['value'];
    $email_id=$array[10]['value'];
    $sql=mysqli_query($connection,"INSERT INTO `student`(`rollno`, `password`, `firstname`, `lastname`, `address`, `pincode`, `Father_name`, `Mother_name`, `Gender`, `Branch`, `Batch`, `Email_id`) VALUES ('$rollno','$pass','$fisrt_name','$last_name','$address','$pincode','$F_name','$M_name','$gender','$branch','$batch','$email_id')");
    if($sql)
    { 
      $output=1;
    }
    else{
    $output="Not inserted";
    }
    echo $output;
 ?>
