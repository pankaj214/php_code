<?php ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type='text/javascript' src='jquery-3.5.1.js'></script>
    <script>
    $(document).ready(function(){
         $('#submit').on('click',function(){
             let id=$("#username").val();
             let pass=$("#password").val();
             let type=$("#type").val();
             if(type!=null)
             {
             $.ajax({
                 method:"post",
                 url:"./api/logincheck.php",
                 data:{id:id,pass:pass,type:type},
                 success:function(data){
                     if(data==1)
                     { if(type=="admin")
                        { window.location.href="admin_dashboard.php?id="+id;}
                        if(type=="teacher")
                        { window.location.href="./faculty/faculty_dashboard.php?id="+id;}
                        if(type=="student")
                        { window.location.href="./student/student_dashboard.php?id="+id;}
                        if(type=="library")
                        { window.location.href="./library/library_dashboard.php?id="+id;}
                        if(type=="transport")
                        { window.location.href="./transport/transporthead_dashboard.php?id="+id;}
                     }
                     else
                     {
                         $("#status").html("<div class='alert alert-warning' role='alert'>"+data+"</div>");
                     }
                 }


              } );}
              else{
                       
                $("#status").html("<div class='alert alert-warning' role='alert'>Please Fill all details</div> ");
              }
         });
     });
        </script>
        <script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}</script>
    <title>ITM</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	
  
  <style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: transparent;
}

.topnav a {
  float: right;
  display: block;
  color: #f2f2f2;
  margin-top:25px;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}
.ht{
    background-image:url(./img/M.jpeg);
    filter:saturation(40%);
    height:800px;
    width:100%;
}
@media screen and (max-width: 600px) {
    .topnav a:not(:first-child) {display: none;}
    .topnav a.icon {
    float: right;
    display: block;
  }
  .ht{
      background-image: url(./img/itm.jpg);
      height: 670px; 
background-position: center;
background-repeat: no-repeat;
background-size: cover;
  }
  div div h2{
      color:white;
    margin-top:30px;
  }
  div div h2 b{
   
   display: none;  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  #ey{
   
   display: none;  }
}


    </style>


</head>
<body>
<div class="ht">
<div class="topnav sticky-top" id="myTopnav">
    <img src="./img/logo.png" style="margin-left:14px; margin-top:9px; margin-bottom:10px; background-color:white;"/>
  <a href="http://itmgoi.in" target="_blank">Visit in ITM</a>
  <a href='#' data-toggle='modal' data-target='#login'>Login</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars" style="font-size:28px; margin-top:10px;"></i>
  </a>
</div>


  <center>
        <div class="header-content">
            <div class="header-content-inner">
                <marquee style="color:white; font-weight:40px; margin-top:100px; font-size:50px;"><h2>Welcome to ITM</h2> </marquee>
                <h2 id="ey" style="color:black; font-weight:50px;font-family: Arial, Helvetica, sans-serif; margin-top:200px;"><b style="background-color:white;">College Management System</b> <br><br> <b style="background-color:white;">ITM GOI GWALIOR</b></h2>
            </div>
        </div>
  
  </center>


        <div class="modal fade" id="login" role="dialog">
            <div class="modal-dialog">
                <div class="container-fluid form-container modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title">Login</h1>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        
                    </div>
                  
                  

                            <form class="modal-body" method="POST">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control required" name="username" id="username" placeholder="Enter Your Username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="password" class="form-control required" name="login_password" id="password" placeholder="Enter Your Password">
                            </div>
                        </div>

                        <div class="form-group">
                            <select name="user_type" class="form-control" id="type">
                            <option value="" disabled selected>Choose a user type</option>
                            <option value="admin">Admin</option>
                            <option value="teacher">Faculty</option>
                            <option value="student">Student</option>
                            <option value="library">Library</option>
                            <option value="transport">Transport</option>
                        </select>
                            </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                
                                <label>In case you forgot password then set a new password <a href="#">SET PASSWORD</a></label>

                            </div>
                        </div>
                                                
                        <div class="form-group">
                            <input type="button" id="submit" class="btn btn-success" value="Login">
                        </div>            

                        <div class="form-group row">
             
                          
                        
                         <div class="col-sm-12">
                         <span id="status"></span> 
                            </div>
             
                        </div>

                    </form>
              

                </div>
            </div>
        </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>