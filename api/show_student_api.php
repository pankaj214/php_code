<?php
include('conn.php');
$result=mysqli_query($connection,"SELECT * FROM `student`") or die("Sql query Failed");
$output="";
if(mysqli_num_rows($result)>0)
{
$output='
<tr><th>S.no</th>
<th>Roll no</th>
<th>Password</th>
    <th>First_name</th>
    <th>Last_name</th>
    <th>Full Address</th>
    <th>Pincode</th>
    <th>Father_name</th>
    <th>Mother_name</th>
    <th>Gender</th>
    <th>Branch</th>
    <th>Batch</th>
    <th>Email_id</th>
    <th colspan="2">Actions</th>
</tr>';
$count=1;
while($row=mysqli_fetch_assoc($result))
{
    $output .="<tr> 
    <td>".$count."</td>
    <td>".$row['rollno']."</td>
    <td>".$row['password']."</td>
    <td>".$row['firstname']."</td>
    <td>".$row['lastname']."</td>
    <td>".$row['address']."</td>
    <td>".$row['pincode']."</td>
    <td>".$row['Father_name']."</td>
    <td>".$row['Mother_name']."</td>
    <td>".$row['Gender']."</td>
    <td>".$row['Branch']."</td>
    <td>".$row['Batch']."</td>
    <td>".$row['Email_id']."</td>
    <td><button  data-user='".$row["rollno"]."' id='edit_user' data-toggle='modal'data-target='#edit'><i class='fa fa-pencil-square-o' style='font-size:30px;' aria-hidden='true'></i></a></td>
    <td><button data-user='".$row["rollno"]."' id='delete_user' ><i class='fa fa-trash' style='font-size:30px;' aria-hidden='true'></i></a></td></tr>";
$count++;}
echo $output;
}
else{
    echo "<h2>No record found</h2>";
}
?>