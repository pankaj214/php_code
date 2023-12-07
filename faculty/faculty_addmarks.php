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
                 url:"http://localhost/pbl/api/marks_show_api.php",
                 success:function(data){
                    $('#show').html(data);
                    }
                });
            }
            show();
            
            $('#add').on('click',function(){
                var data=$('form').serializeArray();
                data=JSON.stringify(data);
             $.ajax({
                 method:"post",
                 url:"http://localhost/pbl/api/faculty_addmarks_api.php",
                 data:{info:data},
                 success:function(data){
                    if(data == 1)
                    {show();
                    }
                    else
                    {
                        alert("enter correct data");
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

tr:nth-child(even){background-color: #f2f2f2}
        </style>
       
    </head>
    <body>
        <?php include_once('faculty_header.php') ?>
<?php include_once('faculty_sidebar.php')?>
<div id="main">

<marquee>Add student marks</marquee>
<center>
<a class="btn btn-info" href="#" data-toggle="modal" style="margin-bottom:20px;" data-target="#ad"><i class="fa fa-plus" aria-hidden=true></i>Add marks</a>
</center>
<div class="modal fade" id="ad" role="dialog">
            <div class="modal-dialog">
                <div class="container-fluid form-container modal-content">
                    <div class="modal-header">
                   <h2 class="modal-title">Add marks</h2>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        
                    </div>
                            <form class="modal-body" id="form" method="POST" action="">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="row"><div class="col-25">
                            <label>Roll_no: </label></div><div class="col-75">
<input type="text" placeholder="enter rollno" name="rollno" required><br/></div></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="row"><div class="col-25">
                            <label>Marks_type: </label></div><div class="col-75">
<select name="type" required>
<option value="assignment">Assignment</option>
<option value="activity">Activity</option>
<option value="quiz">Quiz</option>
<option value="mid">Mid Term</option>
</select><br/></div></div>
                            </div>
                        </div> <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="row"><div class="col-25">
                            <label>Subject: </label></div><div class="col-75">
<input type="text" placeholder="enter subject" name="subject" required><br/></div></div>
                            </div>
                        </div> <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="row"><div class="col-25">
                            <label>Semester: </label></div><div class="col-75">
<select  name="sem" required>
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
                            <label>Marks: </label></div><div class="col-75">
<input type="number" placeholder="enter" name="marks" required><br/></div></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" id="add" class="btn btn-success" value="OK">

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
<div class="modal fade" id="updt" role="dialog">
            <div class="modal-dialog">
                <div class="container-fluid form-container modal-content">
                    <div class="modal-header">
                   <h2 class="modal-title">Update marks</h2>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        
                    </div>
                            <form class="modal-body" method="POST" action="">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="row"><div class="col-25">
                            <label>Marks: </label></div><div class="col-75">
<input type="text" placeholder="enter" name="first" required><br/></div></div>
                            </div>
                        </div>
                       
                        
                        <div class="form-group">
                            <input type="submit" id="faculty" class="btn btn-success" data-dismiss="modal" value="OK">
                            <input type="button" id="faculty1" class="btn btn-danger" data-toggle="modal" data-target="#det" name="eh" value="Delete marks">

                        </div>            

                       
                    </form>
              

                </div>
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
                               
                            <label>Delete marks successfully: </label>
                            </div>
                        </div>
                       
                        
                        <div class="form-group">
                            <input type="submit" id="submit2" class="btn btn-success" data-dismiss="modal" value="OK">
                         

                        </div>            

                       
                    </form>
              

                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>
    </html>