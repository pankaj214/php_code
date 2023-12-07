<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
<style>
body {
    margin: 0;

  font-family: "Lato", sans-serif;
}



#main {
  transition: margin-left .5s;
  padding: 16px;
}
marquee{
    font-size:40px;
}



label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  font-size: 30px;
}


.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  box-shadow:10px 10px 10px grey;

}

.col-25 {
  float: left;
  width: 100%;
  margin-top: 6px;
  margin-left:15px;
}


.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .col-25 {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>



<?php include_once('librarian_header.php')?>
<?php include_once('librarian_sidebar.php')?>
<div id="main">
<center>
<div class="container">
    <marquee>Library rules</marquee>
    <form action="" method="">
       
        <div class="row"><div class="col-25">
<label>1. Strict hai </label></div></div>
<div class="row"><div class="col-25">
<label>2. Book bapas kar jao before 14 days </label></div></div>
<div class="row"><div class="col-25">
<label>3. Book return kar sakte ho after 7 days </label></div></div>
<div class="row"><div class="col-25">
<label>4. Strict to hai </label></div></div>
        
    </form>
</div>
    </center>                              
</div>

<script>
 
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html> 
