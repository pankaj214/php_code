<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
<script type='text/javascript' src='jquery-3.5.1.js'></script>  
<script>
$(document).ready(function(){
   $('#email').on('blur',function(){
  const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  let email=$("#email").val();
  if(!re.test(email)) 
  {$("#email").val("");
  alert("Enter Valid Email") });
                      $('#pass').on('keyup',function(){
  const re =/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
  let pass=$("#pass").val();
  if(!re.test(pass)) 
  {
    $("#t").text("Weak password");}
})
         $('#sub').on('click',function(){
             let data=$("form").serializeArray();
             let check=false;
             $.each(data,function(i,field)
             {
             console.log(i)
               if(data[i].value =='')
             {
              check=true;
             }
             })
             if(check)
             {
               $("#status").html("<div class='alert alert-warning' role='alert'>Fill all details</div>");
                      setTimeout(() => {$('#status').hide();}, 10000);}
             else{
             data=JSON.stringify(data);
             $.ajax({
                 method:"post",
                 url:"./api/add_student_api.php",
                 data:{info:data},
                 success:function(data){
                    if(data == 1)
                    {$("form").trigger("reset");
                      $("#status").html("<div class='alert alert-success' role='alert'>Data inserted</div>");
                      setTimeout(() => {$('#status').hide();}, 10000);
                    }
                    else{
                      $("#form").trigger("reset");
                      $("#status").html("<div class='alert alert-warning' role='alert'> Not inserted</div>");
                      setTimeout(() => {$('#status').hide();}, 10000);
                    }
              }} );}
     });});
</script>
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
        <?php include_once('admin_header.php') ?>
<?php include_once('admin_sidebar.php')?>
<div id="main">
    <center>
<div class="container">
    <marquee>Add Student Record</marquee>
    <form  method="" id="form">
        <div class="row">
            <div class="col-25">
<label>First_name: </label></div>
<div class="col-75">
<input type="text" placeholder="Enter first_name" required name="first"><br/>
        </div></div><div class="row"><div class="col-25">
<label>Last_name: </label></div><div class="col-75">
<input type="text" placeholder="Enter last_name" required name="last"><br/>
</div></div><div class="row"><div class="col-25">
<label>Address: </label></div><div class="col-75">
<textarea placeholder="Enter full address" required name="street"></textarea><br/>
</div></div><div class="row"><div class="col-25">
<label>Pincode: </label></div><div class="col-75">
<input type="number" placeholder="Enter Pincode" required name="pin"><br/>
</div></div><div class="row"><div class="col-25">
<label>Password: </label></div><div class="col-75">
<input type="password" id="pass" placeholder="Enter password" required name="pass"><br/><span id="t"></span>
</div></div><div class="row"><div class="col-25">
<label>Father_name: </label></div><div class="col-75">
<input type="text" placeholder="Enter Father_name" required name="father"><br/>
</div></div><div class="row"><div class="col-25">
<label>Mother_name: </label></div><div class="col-75">
<input type="text" placeholder="Enter Mother_name" required name="mother"><br/>
</div></div><div class="row"><div class="col-25">
<label for="gne">Gender: </label></div><div class="col-75">
  <select name="gne" id="gne" required>
  <option value="">None</option>
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="others">Others</option>
  </select><br/>
  </div></div><div class="row"><div class="col-25">
<label>Branch: </label></div><div class="col-75">
<input type="text" placeholder="Enter Branch" required name="branch"><br/>
</div></div><div class="row"><div class="col-25">
<label>Batch: </label></div><div class="col-75">
<input type="number" placeholder="Enter Batch" required name="section"><br/>
</div></div><div class="row"><div class="col-25">
<label>Email_id: </label></div><div class="col-75">
<input type="email" id="email" placeholder="Enter Email_id" value="" required name="emaiss"><br/>
</div></div><div class="row"><div class="col-25">
<label>Roll_Number: </label></div><div class="col-75">
<input type="text" placeholder="Enter Roll_number" required name="roll"><br/>
</div></div><div class="row"><div class="col-75">
<input type="button" class="btn btn-success" value="Submit" id="sub" name="submit">            
                         
    </div></div></form>
    <div class="row">
    <div class="col-sm-12">
                         <span id="status"></span> 
                            </div>
             
                        </div>
</div>
    </center>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>