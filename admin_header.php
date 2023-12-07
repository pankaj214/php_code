<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type='text/javascript' src='jquery-3.5.1.js'></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
 <style>   
 body {
    margin: 0;
  font-family: "Lato", sans-serif;
}
.topnav {
  overflow: hidden;
  box-shadow: 5px 5px 15px gray;
  background: linear-gradient(whitesmoke, cornflowerblue);
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


@media screen and (max-width: 600px) {
    .topnav a:not(:first-child) {display: none;}
   
 
  div div h2{
      color:white;
    margin-top:30px;
  }
  div div h2 b{
   
   display: none;  }
}
#re{
  display:none;
}
@media screen and (max-width: 600px) {
  .topnav {
    height:135px;
  }
  
  .openbtn{
    margin-top:-40px;
  }

   #te{
    display: block;
    margin-top:-3px;
  }
  #re{
    display:block;
  }
  
}
.sidebar {
  height: 100%;
  width: 0;
  position:fixed;
  z-index: 1;
  top: 0;
  left: 0;
 background:  radial-gradient(cornflowerblue,white);  overflow-x:scroll;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: black;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover{
  background-color: cadetblue;
  
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
.sidebar .closebtn:hover{
color: white;
}
.openbtn {
  font-size: 20px;
  cursor: pointer;
  box-shadow: 5px 5px 7px grey;
  background: linear-gradient(cornflowerblue,white);
  color: black;
  padding: 10px 15px;
  border: none;
}
.openbtn:active{
  box-shadow: 2px 2px 4px grey;
}


#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 850px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
    </head>
<body>
<div class="topnav sticky-top" id="myTopnav">
<a href="#" data-toggle="modal" data-target="#avtar"> <img src="./img/avatar.jpeg" width="45" height="45" style="float:right;  margin-top:-7px; background-color:white; border-radius:50%; box-shadow:4px 3px 4px gray;"/></a>

<img src="./img/logo.png" id="te" style="margin-left:14px; margin-top:6px; margin-bottom:10px; background-color:transparent;"/>

    <a href="#" id="oq" onclick="myfn()"><i style="font-size:30px; margin-top:2px; color:black;" class="fa fa-sign-out" aria-hidden="true"></i></a>
    <button class="openbtn" onclick="openNav()"><i class="fa fa-bars"></i></button>  
 
</div>
<div class="modal fade" id="avtar" role="dialog">
            <div class="modal-dialog">
                <div class="container-fluid form-container modal-content">
                    <div class="modal-header">
                   <h2 class="modal-title">User Profile</h2>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        
                    </div>
                            <form class="modal-body" method="POST">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <h5>Admin Username :<?php echo $_SESSION['id']; ?></h5>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <h5>Admin Password : </h5>
                                                          </div>
                        </div>

                        
                        <div class="form-group">
                            <input type="button" id="submit" class="btn btn-success" data-dismiss="modal" value="OK">
                            <a href="#" data-toggle="modal" data-target="#k" id="change" class="btn btn-info" >Change Password</a>
                        </div>            

                       
                    </form>
              

                </div>
            </div>
        </div>
        <div class="modal fade" role="dialog" id="k">
<div class="modal-dialog">
<div class="container-fluid form-container modal-content">
                    <div class="modal-header">
                  
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        
                    </div>
                            <form class="modal-body" method="POST">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <h5>Curent Password : </h5>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <h5>Enter New Password : </h5>
                                <input type="password" required placeholder="New password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <h5>Re-Enter New Password : </h5>
                                <input type="password" required placeholder="Re-enter New password">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="button" id="submit" class="btn btn-success" data-dismiss="modal" value="OK">
                        </div> 
                        </form>
                        </div>
                        
</div>
</div>
<script>
    function myfn(){
    var logout=confirm("Are you sure you want to logout ?");
    if(logout == true)
    {
      window.location.href="logout.php";
    }
    }
   
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>