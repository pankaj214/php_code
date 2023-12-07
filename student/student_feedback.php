<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
<script type='text/javascript' src='http://localhost/pbl/jquery-3.5.1.js'></script> 
        <style>
#main {
  transition: margin-left .5s;
  padding: 16px;
}
marquee{
    font-size:40px;
}* {
  box-sizing: border-box;
}

input[type=text], input[type=number],input[type=email],input[type=password],select, textarea {
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

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
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
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
        </style>
    </head>
    <body>
        <?php include_once('student_header.php') ?>
<?php include_once('student_sidebar.php')?>
<div id="main">
    <center>
<div class="container">
    <marquee>Feedback</marquee>
    <form action="" method="">
        <div class="row">
            <div class="col-25">
<label>Teacher1: </label></div>
<div class="col-75">
<textarea placeholder="Enter comment" required name="street1"></textarea><br/>
        </div></div><div class="row"><div class="col-25">
<label>Teacher2: </label></div><div class="col-75">
<textarea placeholder="Enter comment" required name="street2"></textarea><br/>

</div></div><div class="row"><div class="col-25">
<label>Teacher3: </label></div><div class="col-75">
<textarea placeholder="Enter comment" required name="street3"></textarea><br/>
</div></div>
<div class="row">
            <div class="col-25">
<label>Teacher4: </label></div>
<div class="col-75">
<textarea placeholder="Enter comment" required name="street4"></textarea><br/>
        </div></div>
        <div class="row">
            <div class="col-25">
<label>Teacher5: </label></div>
<div class="col-75">
<textarea placeholder="Enter comment" required name="street5"></textarea><br/>
        </div></div>
        <div class="row"><div class="col-75">
<input type="submit" value="Submit" name="submit"><br/>
        </div></div>
        </form>
</div>
    </center>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>