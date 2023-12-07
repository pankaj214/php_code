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



#main {
  transition: margin-left .5s;
  padding: 16px;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 20%;
  height: 250px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
  margin-top:8px;
}
</style>
</head>
<body>



<?php include_once('faculty_header.php')?>
<?php include_once('faculty_sidebar.php')?>
<div id="main">
    <center>
<h2>Notices</h2>
</center>
<?php
$path="C:\\xampp\htdocs\Pbl\api\conn.php";
include($path);
$sql=mysqli_query($connection,"SELECT * FROM `notice`");
while($row=mysqli_fetch_array($sql))
{ ?>
<div class="card">
 <a href="<?php echo 'http://localhost/pbl/upload/'.$row['notice'];?> " download="download"> <img src="<?php echo "http://localhost/pbl/upload/".$row['notice'];?>" alt="Not found" style="width:100%; height:125px;"></a>
  <div class="container">
    <h4><b><?php echo $row['description'];?></b></h4> 
    <p>Date:<?php echo $row['date'];?></p> 
  </div>
</div><?php }?>

                                             
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html> 
