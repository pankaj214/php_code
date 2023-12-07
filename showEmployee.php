<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
<script type='text/javascript' src='jquery-3.5.1.js'></script>
<script>
$(document).ready(function(){
    function loadtable(){
        $.ajax({
            url:"./api/show_employee_api.php",
            type:"POST",
            success:function(data){
                $('#table-data').html(data);
            }
        });
    }
    loadtable()
    $("#Edit").on('click',function(){
      let data=$("form").serializeArray();
             data=JSON.stringify(data);
             console.log(data)
             let action="update";
             $.ajax({
                 method:"post",
                 url:"./api/update_employee_api.php",
                 data:{info:data,action:action},
                 success:function(data){
                    if(data == 1)
                    {loadtable();
                      alert("update Successful");
                      
                    }
                    else{
                     alert("update unsuccessful");
                    }
              }} );
    })
    $(document).on('click','#edit_user',function(){
      let id=$(this).data('user');
      console.log(id)
      let action="fetch";
      $.ajax({
            url:"./api/update_employee_api.php",
            type:"POST",
            data:{id:id,action:action},
            dataType:"json",
            success:function(data){
                console.log(data)
                $("#first").val(data.first_name);
                $("#last").val(data.last_name);
                $("#add").val(data.address);
                $("#pin").val(data.pincode);
                $("#user").val(data.username);
                $("#depart").val(data.department);
                $("#pass").val(data.password);
                $("#gne").val(data.gender);
                $("#qual").val(data.qualification);
                $("#sal").val(data.salary);
                $("#email").val(data.email_id);
                $("#ftype").val(data.Faculty_post);
                $("#gnew").val(data.employee_department);
            }
        });
    });
   
    $(document).on('click',"#delete_user",function(){
      let id=$(this).data('user');
      console.log(id)
      let action="delete";
      $.ajax({
            url:"./api/update_employee_api.php",
            type:"POST",
            data:{id:id,action:action},
            success:function(data){
              if(data==1)
              {loadtable();
                alert("delete Successfully"+id);
              }
              else{
                alert("delete unsuccessful");
              }
            }
        });
      
    })});
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
        <?php include_once('admin_header.php') ?>
<?php include_once('admin_sidebar.php')?>
<div id="main">
<marquee>Faculty Details</marquee>
<div style="overflow-x:auto;   box-shadow:10px 10px 10px grey;">
<table id="table-data">
    
</table>
</div>
</div>
<div class="modal fade" id="edit" role="dialog">
            <div class="modal-dialog">
                <div class="container-fluid form-container modal-content">
                    <div class="modal-header">
                   <h2 class="modal-title">Update faculty detail</h2>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        
                    </div>
                            <form class="modal-body" method="POST" action="">
                            <div class="form-group row">
                            <div class="col-sm-12">
                                <label>Username: </label>
<input type="text" placeholder="Enter Username"  id="user" name="user"><br/>               </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="row"><div class="col-25">
                            <label>First_name: </label></div><div class="col-75">
<input type="text" placeholder="Enter first_name" id="first" name="first"><br/></div></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                            <label>Last_name: </label>
<input type="text" placeholder="Enter last_name" id="last" name="last"><br/>    </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                            <label>Address: </label>
<textarea placeholder="Enter full address" id="add" name="street"></textarea><br/>                        </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                            <label>Pincode: </label>
<input type="number" placeholder="Enter Pincode" id="pin" name="pin"><br/>                 </div>
                        </div>
                       
                        <div class="form-group row">
                            <div class="col-sm-12">
                            <label>Department: </label>
                            <input type="text" placeholder="Enter Department" id="depart" required name="dept"><br/>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                            <label>Password: </label>
<input type="password" placeholder="Enter password" id="pass" name="pass"><br/>             </div>
                        </div>
                       
                        <div class="form-group row">
                            <div class="col-sm-12">
                            <label for="gne">Gender: </label>
  <select name="gne" id="gne">
  <option value="">None</option>
      <option value="male">Male</option>
      <option value="female">Female</option>
  </select><br/>                </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                            <label>Qualification: </label>
<input type="text" placeholder="Enter qualification" id="qual" name="qualif"><br/>                </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                            <label>Salary: </label>
<input type="number" placeholder="Enter Salary" id="sal" name="salary"><br/>               </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                            <label>Email_id: </label>
<input type="email" placeholder="Enter Email_id" id="email" name="email"><br/>                 </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                            <label>Designation : </label>
<input type="text" placeholder="Enter faculty_type" id="ftype" name="type"><br/>             </div>
                        </div>

 <div class="form-group row">
                            <div class="col-sm-12">
                            <label>Employee type : </label>
                            <select name="gnew" id="gnew" required>
  <option value="">None</option>
      <option value="teacher">Teacher</option>
      <option value="library">Library</option>
      <option value="transport">Transport</option>
</select>
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" id="Edit" class="btn btn-success" data-dismiss="modal" value="OK">
                        </div>            

                       
                    </form>
              

                </div>
            </div>
        </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>