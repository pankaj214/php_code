<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
<script type='text/javascript' src='http://localhost/pbl/jquery-3.5.1.js'></script> 
<style>
    body {
    margin: 0;

  font-family: "Lato", sans-serif;
}
#yq{
  height:400px; width:70%; margin-left:180px; margin-top:100px;background-image: url(./d.jpg); filter:drop-shadow(20px 20px 12px gray);
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
  font-weight:bolder;
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
  width:50%;
  box-shadow:2px 5px 9px 4px grey;
  padding: 20px;
}

.col-25 {
  margin-left:110px;
  width: 25%;
  font-size:25px;
  margin-top: 6px;
}

.col-75 {
  width: 75%;
  font-size: 25px;
  margin-left: 400px;
  margin-top: -57px;
}
.col-75 textarea{
  margin-left:-90px;
  background-color:#f2f2f2;
}

.row::after {
  content: "";
  display: table;
  clear: both;
}
#r{
animation-name:w;
animation-duration:0.5s;
animation-direction: alternate;
animation-iteration-count: infinite;
font-size:40px;
font-weight:bolder;
text-decoration:underline;
}
@keyframes w{
    from{
        color:black;

    }
    to{
        color:blue;
    }
}
.h{
    width:190px; 
    height:190px;
     margin-left:225px;
      background-color:white; 
      border-radius:50%; 
      box-shadow:8px 8px 5px 2px grey;
}
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-left:0;
    margin-top: 0;
  }
  .col-75 h2{
color: black;
  }
  .col-75 textarea{
color: black;
margin-left:0px;
  }
  .container{
    width:100%;
  }
  .h{
      margin-left:40px;
  }
}
@media screen and (max-width: 600px){
    #yq{
    height:400px; 
    width:70%; 
    margin-left:50px;
     margin-top:10px;
  }
  .container{
      margin-left:0px;
  }

  }
  div .k{
      margin-top:-40px;
  }
</style>
</head>
<body>
<div class="container">
    <marquee id="r">User Profile</marquee>
    <img class="h" src="avatar.jpeg" /><br><br><br><br>
    <div class="k">
    <?php include('C:\\xampp\htdocs\Pbl\api\conn.php');
    $id=$_SESSION['id']; 
    $sql=mysqli_query($connection,"SELECT * FROM `employee` WHERE `username`='$id'");
    while($row=mysqli_fetch_assoc($sql))
    {
    ?>
        <div class="row">
            <div class="col-25">
<label>First_name: </label></div>
<div class="col-75">
<h2><?php echo $row['first_name'] ; ?></h2>
        </div></div><div class="row"><div class="col-25">
<label>Last_name: </label></div><div class="col-75">
<h2><?php echo $row['last_name']; ?></h2>
</div></div><div class="row"><div class="col-25">
<label>Address: </label></div><div class="col-75">
<textarea><?php echo $row['address']; ?></textarea>
</div></div><div class="row"><div class="col-25">
<label>Pincode: </label></div><div class="col-75">
<h2><?php echo $row['pincode']; ?></h2>
</div></div><div class="row"><div class="col-25">
<label>Username: </label></div><div class="col-75">
<h2><?php echo $row['username'] ;?></h2>
</div></div><div class="row"><div class="col-25">
<label>Gender: </label></div><div class="col-75">
<h2><?php echo $row['gender']; ?></h2>
</div></div><div class="row"><div class="col-25">
<label>Qualification: </label></div><div class="col-75">
<h2><?php echo $row['qualification']; ?></h2>
</div></div><div class="row"><div class="col-25">
<div class="row"><div class="col-25">
<label>Department: </label></div><div class="col-75">
<h2><?php echo $row['department']; ?></h2>
  </div></div><div class="row"><div class="col-25">
<label>Email_id: </label></div><div class="col-75">
<h2><?php echo $row['email_id']; ?></h2>
</div></div><div class="row"><div class="col-25">
<label>Faculty Post: </label></div><div class="col-75">
<h2><?php echo $row['Faculty_post']; ?></h2>
</div><?php }?></div>
    </div>                      

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>