<?php
include('conn.php');
$roll=$_POST['id'];
$type=$_POST['info'];
$result=mysqli_query($connection,"SELECT * FROM `marks` Where `rollno`='$roll' AND `type`='$type'") or die("Sql query Failed");
$output="";
if(mysqli_num_rows($result)>0)
{
$output='
<tr><th>S.no</th>
    <th>rollno</th>
    <th>subject</th>
    <th>semester</th>
    <th>marks</th>
</tr>';
$count=1;
while($row=mysqli_fetch_assoc($result))
{
    $output .="<tr> 
    <td>".$count."</td>
    <td>".$row['rollno']."</td>
    <td>".$row['sub_code']."</td>
    <td>".$row['semester']."</td>
    <td>".$row['marks']."</td>";

$count++;}
echo $output;
}
else{
    echo "<h2>No record found</h2>";
}
?>