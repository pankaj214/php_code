<?php
include('conn.php');
if($_POST['action']=="fetch")
{$id=$_POST['id'];
$result=mysqli_query($connection,"SELECT * FROM `employee` Where `username`='$id'") or die("Sql query Failed");
if(mysqli_num_rows($result)>0)
{$row=mysqli_fetch_array($result);
    echo json_encode($row);
}}
if($_POST['action']=="update")
{
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
    $sql=mysqli_query($connection,"UPDATE `employee` SET `first_name`='$fisrt_name',`last_name`='$last_name',`address`='$address',`pincode`='$pincode',`department`='$department',`password`='$pass',`gender`='$gender',`qualification`='$qualification',`salary`='$salary',`email_id`='$email_id',`Faculty_post`='$faculty_post',`employee_department`='$employee_type' WHERE `username`='$username'");
    if($sql)
    { 
      $output=1;
    }
    else{
    $output="Not inserted";
    }
    echo $output;
}
if($_POST['action']=='delete')
{
    $id=$_POST['id'];
    $sql=mysqli_query($connection,"DELETE FROM `employee` WHERE `username`='$id'");
    if($sql)
    {$output=1;
        echo $output;
    }
}
?>