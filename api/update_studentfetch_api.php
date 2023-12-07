<?php
include('conn.php');

if($_POST['action']=="fetch")
{$id=$_POST['id'];
$result=mysqli_query($connection,"SELECT * FROM `student` Where `rollno`='$id'") or die("Sql query Failed");
if(mysqli_num_rows($result)>0)
{$row=mysqli_fetch_array($result);
    echo json_encode($row);
}}
if($_POST['action']=="update")
{
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
    $sql=mysqli_query($connection,"UPDATE `student` SET `rollno`='$rollno',`password`='$pass',`firstname`='$fisrt_name',`lastname`='$last_name',`address`='$address',`pincode`='$pincode',`Father_name`='$F_name',`Mother_name`='$M_name',`Gender`='$gender',`Branch`='$branch',`Batch`='$batch',`Email_id`='$email_id' WHERE `rollno`='$rollno'");
    if($sql==1)
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
    $sql=mysqli_query($connection,"DELETE FROM `student` WHERE `rollno`='$id'");
    if($sql)
    {$output=1;
        echo $output;
    }
    else 
    {
        echo "error";
    }
}
?>