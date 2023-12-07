<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
<script type='text/javascript' src='http://localhost/pbl/jquery-3.5.1.js'></script> 
<style>
body {
    margin: 0;

  font-family: "Lato", sans-serif;
}
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  box-shadow:10px 10px 10px grey;

  padding: 20px;
}
.wy{
  font-size:40px;
  border-radius: 5px;
  background-color: #f2f2f2;
  box-shadow:10px 10px 10px grey;

  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .col-25, .col-75 {
    width: 100%;
    margin-top: 0;
  }
}

#d1 {
  margin:20px;
}
#a1{
display: none;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}
</style>
</head>
<body>



<?php include_once('faculty_header.php')?>
<?php include_once('faculty_sidebar.php')?>
<div id="main">
<center>
    <button class="btn btn-info" id="d1">View</button>
   
<div class="wy" id="s">!!you haven't click the view currently!!</div>
 
<div id="a1">

<div class="container">
        <div class="row"><div class="col-25">
        <?php
        $path="C:\\xampp\htdocs\Pbl\api\conn.php";
        include($path); 
        if(isset($_COOKIE['id']))
        {
          $id=$_COOKIE['id'];
        }
$result=mysqli_query($connection,"SELECT * FROM `e_atteandance` WHERE `id`='$id'");
$output="";
if(mysqli_num_rows($result)>0)
{
$output='<table>
<tr><th>S.no</th>
    <th>Date</th>
    <th>Attendance</th>
</tr>';
$count=1;
while($row=mysqli_fetch_assoc($result))
{
    $output .="<tr> 
    <td>".$count."</td>
    <td>".$row['date']."</td>
    <td>".$row['status']."</td>";
$count++;}
$output .="</tr></table>";
echo $output;
}
else{
    echo "<h2>No record found</h2>";
}
?>
</div></div>
</div></div>




</center>
</div>
<script>
  var a1=document.getElementById("s");
  var a=document.getElementById("a1");
  document.getElementById('d1').addEventListener("click",()=>{
    a.style.display="block";
    a1.style.display="none";
  });
  
  
</script>

<script>
 
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html> 
