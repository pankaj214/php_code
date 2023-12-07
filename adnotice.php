<?php 
include('./api/conn.php');
if(isset($_POST['submit'])){
$file=basename($_FILES['file']['name']);
$tpath="upload/".$file;
if(copy($_FILES['file']['tmp_name'],$tpath))
{
  $upfile=$file;
$desc=$_POST['desc'];
$sql=mysqli_query($connection,"INSERT INTO `notice`(`notice`, `description`) VALUES ('$upfile','$desc')");
if($sql)
{ 
  echo "<script>alert('File uploaded')</script>" ;
}
else{
  echo "<script>alert('File not uploaded')</script>";
}}
}
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
        <style>
#main {
  transition: margin-left .5s;
  padding: 16px;
}* {
  box-sizing: border-box;
}

input[type=text],input[type=number],input[type=datetime-local],input[type=email],input[type=password],select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[name=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[name=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  margin-top:90px;
  box-shadow:10px 10px 10px grey;
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
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
marquee{
    font-size: 40px;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
        </style>
    </head>
    <body>
        <?php include_once('admin_header.php'); ?>
<?php include_once('admin_sidebar.php');?>
<div id="main">
<center>
    <button data-toggle="modal" data-target="#adds" style="float:right; "><i class="fa fa-plus" aria-hidden="true"></i> Add Notice</button>
    <div style="overflow-x:auto;  margin-top:50px; box-shadow:10px 10px 10px grey;">
<table>
    <tr>
       
        <th>S. No</th>
        <th>Notice Topic </th>
        <th>Time and date</th>
        <th>Notice</th>
        <th colspan="2" style="text-align:center;">Actions</th>
    </tr>
    <?php
    $count=1;
      $sql=mysqli_query($connection,"SELECT * FROM `notice`");
      while($data=mysqli_fetch_assoc($sql))
      {?>
    <tr>
        <td><?php echo $count++;?></td>
        <td><a href="<?php $data['notice'];?>"> <?php echo $data['notice'];?> </td>
        <td><?php echo $data['description']; ?></td>
        <td><?php echo $data['date']; ?></td>
               <td><a href="#" data-toggle="modal" data-target="#edit"><i class="fa fa-pencil-square-o" style="font-size:30px;" aria-hidden="true"></i></a></td>
        <td><a href="#" onclick="dels()"><i class="fa fa-trash" style="font-size:30px;" aria-hidden="true"></i></a></td>
      </tr><?php }?>
</table>
</div>

    <div class="modal fade" id="adds" role="dialog">
            <div class="modal-dialog">
                <div class="container-fluid form-container modal-content">
                    <div class="modal-header">
                   <h2 class="modal-title">Add Notice</h2>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        
                    </div>
                            <form class="modal-body" method="POST" action="adnotice.php" enctype="multipart/form-data">
                        <div class="form-group row">
                            <div class="col-sm-12">
                            <div class="row"><div class="col-25">
<label>Notice : </label></div><div class="col-75">
<input type="file" id="notice" required name="file"><br/>
</div></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                            <div class="row"><div class="col-25">
<label>Description : </label></div><div class="col-75">
<input type="text" required id="desc" name="desc"><br/>
</div></div>
                            </div>
                </div>
                <div class="form-group">
                        <div class="row"><div class="col-75">
<input type="submit" class="btn btn-success" id="submit_Notice" value="Submit" name="submit">
</div></div></div>
</form>
</div>
</div>
</div>
      

    </center>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>
    </html>