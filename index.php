<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

   <script   src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
  
  </head>

  <body>

<?php

if(isset($_POST['logout']) == "Log Out")
{
  unset($_POST);
}

if(isset($_POST['submit']) == "Submit")
{
//$_POST['user'] = mysql_escape_string($_POST['user']);
//$_POST['pass'] = mysql_escape_string($_POST['pass']);

$link = mysql_connect('localhost', 'root', '');


mysql_select_db('website',$link);
$sql = "Select * from login where user = '".$_POST['user']."' and pass = '".$_POST['pass'] ."'";
$data = mysql_query($sql);
$row = mysql_fetch_row($data);
var_dump($row); 
if(mysql_num_rows($data) != 0 )
{


  ?>
<div class="container">
<div class="row">
<div class="col-xs-6">
      
        <h2 class="form-signin-heading">Welcome Mr. <?php echo $row[1];?></h2>
        <h4 class="form-signin-heading">Your ID is Mr. <?php echo $row[0];?></h4>
        <form action="" class="form-signin" method="POST">
  <input class="btn btn-lg btn-primary btn-block" type="submit" name="logout" id="submit" value="Log Out"> 
  </form>
      </form>
      </div>
      </div>

    </div> <!-- /container -->


<?php
}
else
{
?>


 <div class="container">
<div class="row">
<div class="col-xs-3">
      <form action="" class="form-signin" method="POST">
        <h2 class="form-signin-heading">Error</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" name="user" id="email" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="text" name="pass" id="pass" class="form-control" placeholder="Password" required>        
        <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" id="submit" value="Submit"> 
      </form>
      </div>
      </div>

    </div> <!-- /container -->




<?php

}
}
else
{

?>
    <div class="container">
<div class="row">
<div class="col-xs-3">
      <form action="" class="form-signin" method="POST">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" name="user" id="email" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="text" name="pass" id="pass" class="form-control" placeholder="Password" required>        
        <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" id="submit" value="Submit"> 
      </form>
      </div>
      </div>

    </div> <!-- /container -->

<?php
}
   ?>
  </body>
</html>
