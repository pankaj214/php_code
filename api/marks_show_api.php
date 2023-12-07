<?php
include('conn.php');
$result=mysqli_query($connection,"SELECT * FROM `marks`") or die("Sql query Failed");
$output="";
if(mysqli_num_rows($result)>0)
{
$output='
<tr><th>S.no</th>
    <th>rollno</th>
    <th>type</th>
    <th>subject</th>
    <th>semester</th>
    <th colspan="2">Actions</th>
    <th>marks</th>
</tr>';
$count=1;
while($row=mysqli_fetch_assoc($result))
{
    $output .="<tr> 
    <td>".$count."</td>
    <td>".$row['rollno']."</td>
    <td>".$row['type']."</td>
    <td>".$row['sub_code']."</td>
    <td>".$row['semester']."</td>
    <td><button class='btn btn-info' href='#' data-id=".$row['rollno']." data-toggle='modal' data-target='#updt'>Update marks</button></td>
    <td>".$row['marks']."</td>";

$count++;}
echo $output;
}
else{
    echo "<h2>No record found</h2>";
}
?>