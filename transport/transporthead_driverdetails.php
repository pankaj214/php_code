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
label{
    font-size: 30px;
    margin-top: -10px;
}
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 55%;
  margin-left: 70px;
  margin-top: 6px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}
.gl{
    font-size:25px;
    margin-top:20px;
    font-weight: 600;
}
.glo{
    font-size:25px;
    margin-top:6px;
    font-weight: 600;

}
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
  input[type=button]{
      width: 100%;
      margin-top:20px;
  }
}
</style>
</head>
<body>



<?php include_once('transporthead_header.php')?>
<?php include_once('transporthead_sidebar.php')?>
<div id="main">
<div class="card" style="width: 15rem;">
  <img class="card-img-top" style="height:250px;" src="pn.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 style="font-weight:700;" class="card-title">Golu</h5>
    <p style="font-weight:700;" class="card-text">Bus Incharge..</p>
    <a href="#" data-toggle="modal" data-target="#go" class="btn btn-primary">Go to details</a>
  </div>
</div>  
<div class="modal fade" id="go" role="dialog">
<div class="modal-dialog">
                <div class="container-fluid form-container modal-content">
                    <div class="modal-header">
                
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        
                    </div>
                            <form class="modal-body" method="POST" action="">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="row"><div class="col-25">
                            <label>Contact Number: </label></div><div class="col-75">
<p class="gl">35242643</p><br/></div></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="row"><div class="col-25">
                            <label>Address: </label></div><div class="col-75">
<p class="glo">ehjsfhduuewrfhdxcb</p><br/></div></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="row"><div class="col-25">
                            <label>Driving Bus Experience: </label></div><div class="col-75">
<p class="gl">pata nahi</p><br/></div></div>
                            </div>
                        </div>
                       
                        
                        <div class="form-group">
                            <input type="submit" id="submit" class="btn btn-success" data-dismiss="modal" value="OK">

                        </div>            

                       
                    </form>
              

                </div>
            </div>
</div>
</div>

<script>
 
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html> 
