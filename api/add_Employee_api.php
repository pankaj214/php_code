<?php 
include('conn.php');
    $array=json_decode(stripslashes($_POST['info']),true);
    $username=$array[0]['value'];
    $fisrt_name=$array[1]['value'];
    $last_name=$array[2]['value'];
    $address=$array[3]['value'];
    $pincode=$array[4]['value'];
    $department=$array[5]['value'];
    $pass=$array[6]['value'];
    $gender=$array[7]['value'];
    $qualification=$array[8]['value'];
    $salary=$array[9]['value'];
    $email_id=$array[10]['value'];
    $faculty_post=$array[11]['value'];
    $employee_type=$array[12]['value'];
    $sql=mysqli_query($connection,"INSERT INTO `employee`(`username`, `first_name`, `last_name`, `address`, `pincode`, `department`, `password`, `gender`, `qualification`, `salary`, `email_id`, `Faculty_post`, `employee_department`) VALUES ('$username','$fisrt_name','$last_name','$address','$pincode','$department','$pass','$gender','$qualification','$salary','$email_id','$faculty_post','$employee_type')");
    if($sql)
    { 
      $output=1;
    }
    else{
    $output="Not inserted";
    }
    echo $output;
 ?>
