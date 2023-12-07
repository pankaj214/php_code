<?php
include('conn.php');
$result=mysqli_query($connection,"SELECT * FROM `s_attendance`") or die("Sql query Failed");
$output="";
if(mysqli_num_rows($result)>0)
{
$output='
<tr><th>S.no</th>
    <th>rollno</th>
    <th>Subject_code</th>
    <th>Date</th>
    <th>semester</th>
    <th>Attendance</th>
    <th>Category</th>
</tr>';
$count=1;
while($row=mysqli_fetch_assoc($result))
{
    $output .="<tr> 
    <td>".$count."</td>
    <td>".$row['rollno']."</td>
    <td>".$row['subject_code']."</td>
    <td>".$row['date']."</td>
    <td>".$row['semester']."</td>
    <td>".$row['status']."</td>
    <td>".$row['category']."</td>";

$count++;}
echo $output;
}
else{
    echo "<h2>No record found</h2>";
}
?>