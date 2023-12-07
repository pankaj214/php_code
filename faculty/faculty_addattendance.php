<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
<script type='text/javascript' src='http://localhost/pbl/jquery-3.5.1.js'></script> 
<script>
 $(document).ready(function(){
            function show(){
                $.ajax({
                    method:"post",
                 url:"http://localhost/pbl/api/attendance_show_api.php",
                 success:function(data){
                    $('#show').html(data);
                    }
                });
            }
            show();
            
            $('#faculty').on('click',function(){
                var data=$('form').serializeArray();
                data=JSON.stringify(data);
                console.log(data)
             $.ajax({
                 method:"post",
                 url:"http://localhost/pbl/api/faculty_addattendance_api.php",
                 data:{info:data},
                 success:function(data){
                    if(data == 1)
                    {show();
                    }
                    else
                    {
                        console.log(data);
                    }
              }} );

            });
        });
</script>
        <style>
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
  padding: 20px;
}
label{
    font-size: 30px;
    margin-top: -10px;
}
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 55%;
  margin-left: 70px;
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
  input[type=button]{
      width: 100%;
      margin-top:20px;
  }
}
#main {
  transition: margin-left .5s;
  padding: 16px;
}
marquee{
    font-size:40px;
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
input[type=radio]{
    width:25px;
    height: 25px;
}
tr:nth-child(even){background-color: #f2f2f2}
        </style>
    </head>
    <body>
        <?php include_once('faculty_header.php') ?>
<?php include_once('faculty_sidebar.php')?>
<div id="main">
<marquee>Add student attendance</marquee>
<center>
<a class="btn btn-info" href="#" data-toggle="modal" style="margin-bottom:20px;" data-target="#ad"><i class="fa fa-plus" aria-hidden=true></i>Add Attendance</a>
</center>
<div class="modal fade" id="ad" role="dialog">
            <div class="modal-dialog">
                <div class="container-fluid form-container modal-content">
                    <div class="modal-header">
                   <h2 class="modal-title">Add Attendance</h2>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        
                    </div>
                            <form class="modal-body" method="POST" action="">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="row"><div class="col-25">
                            <label>Roll_no: </label></div><div class="col-75">
<input type="text" placeholder="enter" id="roll" name="first" required><br/></div></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="row"><div class="col-25">
                            <label>Subject: </label></div><div class="col-75">
<input type="text" placeholder="enter subject" id="sub" name="subject" required><br/></div></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="row"><div class="col-25">
                            <label>Semester: </label></div><div class="col-75">
<select  id="semester"  name="sem" required>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
</select><br/></div></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                     <div class="row"><div class="col-25">
<label for="a">Attendance: </label></div><div class="col-75">
  <select name="a" id="attendance" required>
      <option value="present" default>Present</option>
      <option value="absent">Absent</option>
      
  </select><br/>
  </div></div>            </div>   </div>
  <div class="form-group row">
                            <div class="col-sm-12">
                     <div class="row"><div class="col-25">
<label for="a">category: </label></div><div class="col-75">
  <select name="a" id="attendance" required>
      <option value="theory" default>Theory</option>
      <option value="pratical">Practical</option>
      
  </select><br/>
  </div></div>            </div>   </div>
                        <div class="form-group">
                            <input type="button" id="faculty" class="btn btn-success" value="OK">

                        </div>            

                       
                    </form>
              

                </div>
            </div>
        </div>
<div style="overflow-x:auto;   box-shadow:10px 10px 10px grey;">
<table id="show">
    
</table>
</div>
</div>
        <div class="modal fade" id="det" role="dialog">
            <div class="modal-dialog">
                <div class="container-fluid form-container modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        
                    </div>
                            <form class="modal-body" method="POST" action="">
                        <div class="form-group row">
                            <div class="col-sm-12">
                            
                     <label>Successfully deleted. </label>  </div>   </div>
                       
                            
                        <div class="form-group">
                            <input type="submit" id="submit3" class="btn btn-success" data-dismiss="modal" value="OK">

                        </div>            

                       
                    </form>
              

                </div>
            </div>
        </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>