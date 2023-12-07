<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
<script type='text/javascript' src='http://localhost/pbl/jquery-3.5.1.js'></script> 
<script>
$(document).ready(function(){

  $("#d1").on('click',function(){
          let id=$("#rollno").val();
          console.log(id);
    $.ajax({
            type:"POST",
            url:"http://localhost/pbl/api/s_marks_show_api.php",
            data:{id:id,info:'activity'},
            success:function(data){
                $('#show').html(data);
            }
        });
  })
  $("#d2").on('click',function(){
    let id=$("#rollno").val();
          console.log(id);
    $.ajax({
            url:"http://localhost/pbl/api/s_marks_show_api.php",
            type:"POST",
            data:{id:id,info:"assignment"},
            success:function(data){
                $('#show1').html(data);
            }
        });
  })
  $("#d3").on('click',function(){
    let id=$("#rollno").val();
          console.log(id);
    $.ajax({
            url:"http://localhost/pbl/api/s_marks_show_api.php",
            type:"POST",
            data:{id:id,info:"midterm"},
            success:function(data){
                $('#show2').html(data);
            }
        });
  })
  $("#d4").on('click',function(){
    let id=$("#rollno").val();
          console.log(id);
    $.ajax({
            url:"http://localhost/pbl/api/s_marks_show_api.php",
            type:"POST",
            data:{id:id,info:"quiz"},
            success:function(data){
                $('#show3').html(data);
            }
        });
  })
  
})
  </script>

<style>
body {
    margin: 0;

  font-family: "Lato", sans-serif;
}
#d1 , #d2 , #d3 , #d4{
  margin:20px;
}
#a1{
display: none;
}
#a2{
display: none;
}
#a3{
display: none;
}
#a4{
display: none;
}


#main {
  transition: margin-left .5s;
  padding: 16px;
}
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  box-shadow:10px 10px 10px grey;

  padding: 20px;
}
.wy{
  font-size:40px;
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
  .col-25, .col-75 {
    width: 100%;
    margin-top: 0;
  }
}

</style>
</head>
<body>



<?php include_once('student_header.php')?>
<?php include_once('student_sidebar.php')?>
<div id="main">
<center>
    <button class="btn btn-info" id="d1">Activity</button>
    <input type="hidden" id="rollno" value="<?php echo $_COOKIE['rollno'];?>">
    <button id="d2" class="btn btn-info">Assignment</button>
    <button id="d3" class="btn btn-info">Mid Term</button>
    <button id="d4" class="btn btn-info">Quiz</button>
<div class="wy" id="s">!!No-one option you have to be selected currently!!</div>
 
<div id="a1">
<h2>Activity</h2>

<div class="container">
     <table id="show">   
     </table>
    </div></div>

<div id="a2">
<h2>Assignment</h2>

<div class="container">
<table id="show1">   
     </table>
    </div>
</div>

<div id="a3">
<h2>Mid Term</h2>

<div class="container">
<table id="show2">   
     </table>  
    </div>
</div>
<div id="a4">
<h2>Quiz</h2>

<div class="container">
        <div class="row"><div class="col-25">
        <table id="show3">   
     </table>
    </div>
</div>
</center>
</div>

<script>
  var a1=document.getElementById("s");
  var a=document.getElementById("a1");
    var b=document.getElementById("a2");
  var c=  document.getElementById("a3");
   var d= document.getElementById("a4");
  document.getElementById('d1').addEventListener("click",()=>{
    a.style.display="block";
  b.style.display="none";
    c.style.display="none";
    a1.style.display="none";
    d.style.display="none";
  });
  document.getElementById('d2').addEventListener("click",()=>{
    b.style.display="block";
    a1.style.display="none";

  a.style.display="none";
    c.style.display="none";
    d.style.display="none";
  });
  document.getElementById('d3').addEventListener("click",()=>{
    c.style.display="block";
  b.style.display="none";
  a1.style.display="none";

    a.style.display="none";
    d.style.display="none";
  });
  document.getElementById('d4').addEventListener("click",()=>{
    d.style.display="block"
  b.style.display="none";
    c.style.display="none";
    a1.style.display="none";

    a.style.display="none";
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html> 
