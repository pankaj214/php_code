<!DOCTYPE html>
<html>
<head>
<style>
    body {
    margin: 0;

  font-family: "Lato", sans-serif;
}#yq{
  height:400px; width:70%; margin-left:180px; margin-top:100px;background-image: url(./img/d.jpg); filter:drop-shadow(20px 20px 12px gray);
}
    #zc{width:100%; height:200px; 
text-decoration:underline;
 font-family:Arial, Helvetica, sans-serif;
 font-size:40px;
 margin-top:130px; 
animation-name:hello;
animation-duration: 0.6s;
animation-direction: alternate;
animation-iteration-count: infinite;}
@keyframes hello{
  from {
    color:black;
    
  }
  to{color:blue;
  
  }
}
@media screen and (max-width: 600px){
    #yq{
    height:400px; 
    width:70%; 
    margin-left:50px;
     margin-top:10px;
  }
  }
</style>
</head>
<body>
<div id="yq">
<marquee direction="right" style="font-size:40px; color:black; text-decoration:underline;">Hello Admin</marquee>  
<marquee id="zc" >Welcome to Admin Panel</marquee></div>
</body>
</html>