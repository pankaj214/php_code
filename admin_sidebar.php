<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
<script type='text/javascript' src='jquery-3.5.1.js'></script>
<style>

body {
    margin: 0;

  font-family: "Lato", sans-serif;
}
.topnav {
  overflow: hidden;
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
  box-shadow:4px 3px 5px grey;
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
  background-color: cornflowerblue;
  color: black;
  padding: 10px 15px;
  border: none;
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
    <div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="admin_dashboard.php"><i class="fa fa-home" aria-hidden="true"></i> Dashboard</a>
  <hr style="background-color:black;">
  <a href="#" class="dropdown-btn"><i class="fa fa-child" aria-hidden="true"></i> Student</a>
  <div class="dropdown-container" style="display:none;">
  <a href="addstudent.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Add student</a>
    <a href="showstudent.php"><i class="fa fa-address-card" aria-hidden="true"></i> Show Student</a>
  </div>
  <hr style="background-color:black;">
    <a href="#" class="dropdown-btn"><i class="fa fa-mortar-board" aria-hidden="true"></i>Employee</a>
    <div class="dropdown-container" style="display:none;">
  <a href="addEmployee.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Add Employee</a>
    <a href="showEmployee.php"><i class="fa fa-address-card" aria-hidden="true"></i> Show employee</a>

<a href="add_facultyattendance.php"><i class="fa fa-plus" aria-hidden="true"></i> Add Faculty Attendance</a>
  </div>
    <hr style="background-color:black;">
    <a href="adnotice.php"><i class="fa fa-sticky-note" aria-hidden="true"></i> Admin Notice</a>
    <hr style="background-color:black;">
    <a href="#" onclick="myfn()" id="re"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
</div>
<script>

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.getElementById("myTopnav").style.marginLeft = "250px";
  document.getElementById("myTopnav").style.transition = "0.8s";
document.getElementById("oq").style.marginLeft="250px";
document.getElementById("mySidebar").style.transition="0.8s";
  document.getElementById("mySidebar").style.marginTop = "0px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.getElementById("myTopnav").style.marginLeft = "0";

}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>
    </html>