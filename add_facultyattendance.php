<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type='text/javascript' src='jquery-3.5.1.js'></script>  
<script>
$(document).ready(function(){
         $('#attendance').on('click',function(){
             let id=$("#name").val();
             let status=$("#status").val();
             if(id=="" || status=="")
             { $("#show").html("<div class='alert alert-warning' role='alert'> fill all details</div>");
                      setTimeout(() => {$('#show').hide();},10000);}
             else{
             $.ajax({
                 method:"post",
                 url:"./api/add_E_att_api.php",
                 data:{id:id,status:status},
                 success:function(data){
                    if(data == 1)
                    {$("form").trigger("reset");
                      $("#show").html("<div class='alert alert-success' role='alert'>Data inserted</div>");
                      setTimeout(() => {$('#show').hide();}, 10000);
                    }
                    else{
                      $("#show").html("<div class='alert alert-warning' role='alert'> Not inserted</div>");
                      setTimeout(() => {$('#show').hide();}, 10000);
                    }
              }} );}
     });});
</script>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
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

#main {
  transition: margin-left .5s;
  padding: 16px;
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
<?php include_once('admin_header.php');?>
    <?php include_once('admin_sidebar.php');?>
<div id="main">
<br><br><br><br>
<div class="container">
  <form id="form">
    <div class="row">
      <div class="col-25">
        <label for="name">Name</label>
      </div>
      <div class="col-75">
        <select id="name" value="">
        <?php include('./api/conn.php');
       $sql=mysqli_query($connection,"SELECT `username` FROM `employee`");
       while($row=mysqli_fetch_assoc($sql))
       { 
        echo "<option value='".$row['username']."'>".$row['username']."</option>";
         } ?>  
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="hello1">Attendance</label>
      </div>
      <div class="col-75">
        <select id="status" value="">
          <option value="present">Present</option>
          <option value="absent">Absent</option>
        </select>
      </div>
    </div>
    <div class="row" style="margin-left:64%; margin-top:4%;">
      <input type="button" id="attendance" value="Submit">
    </div>
  </form>
  <div class="row">
    <div class="col-sm-12">
                         <span id="show"></span> 
                            </div>
             
                        </div>
</div>
    </div>

</body>
</html>
