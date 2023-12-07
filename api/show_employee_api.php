<?php
include('conn.php');
$result=mysqli_query($connection,"SELECT * FROM `employee`") or die("Sql query Failed");
$output="";
if(mysqli_num_rows($result)>0)
{
$output='
<tr><th>S.no</th>
<th>username</th>
    <th>First_name</th>
    <th>Last_name</th>
    <th>Full Address</th>
    <th>Pincode</th>
    <th>Department</th>
    <th>Password</th>
    <th>Gender</th>
    <th>Qualification</th>
    <th>Salary</th>
    <th>Email_id</th>
    <th>Designation</th>
    <th>Employee_department</th>
    <th colspan="2">Actions</th>
</tr>';
$count=1;
while($row=mysqli_fetch_assoc($result))
{
    $output .="<tr> 
    <td>".$count."</td>
    <td>".$row['username']."</td>
    <td>".$row['first_name']."</td>
    <td>".$row['last_name']."</td>
    <td>".$row['address']."</td>
    <td>".$row['pincode']."</td>
    <td>".$row['department']."</td>
    <td>".$row['password']."</td>
    <td>".$row['gender']."</td>
    <td>".$row['qualification']."</td>
    <td>".$row['salary']."</td>
    <td>".$row['email_id']."</td>
    <td>".$row['Faculty_post']."</td>
    <td>".$row['employee_department']."</td>
    <td><button data-user=".$row['username']." id='edit_user' data-toggle='modal' data-target='#edit'><i class='fa fa-pencil-square-o' style='font-size:30px;' aria-hidden='true'></i></button></td>
    <td><button data-user=".$row['username']." id='delete_user' ><i class='fa fa-trash' style='font-size:30px;' aria-hidden='true'></i></button></td></tr>";
$count++;}
echo $output;
}
else{
    echo "<h2>No record found</h2>";
}
?>