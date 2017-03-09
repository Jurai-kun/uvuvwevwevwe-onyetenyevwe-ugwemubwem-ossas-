<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="DIST/css/bootstrap.css">
</head>
<body>
<div class="container"> 
	<div class="col-lg-4"></div>
	<div class="col-lg-4">
  <div style="width:400px; margin:200px auto;">
	<div style="border:1px;padding: 5px;">
		<form action="#" method="post">
			<form class="form-horizontal">
		  <fieldset>
		    <legend>Login</legend>
		    <div class="form-group">
		      <label for="inputUsername" class="col-lg-2 control-label">Username</label>
		      <div class="col-lg-14">
		        <input type="text" name="Username" class="form-control" id="inputUsername" placeholder="Username">
		      </div>
		    </div> 

		    <div class="form-group">
		      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
		      <div class="col-lg-14">
		        <input type="Password" name="Password" class="form-control" id="inputPassword" placeholder="Password">
		       
		      </div>
		    </div>
		    <div class="form-group">
		      <div class="col-lg-10 col-lg-offset-2">
		        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
		      </div>
		    </div> 
		  </fieldset>
		</form>
		</form>
	</div>
	<div class="col-lg-4"></div>
	</div>
	</div>
</div>
<?php
	if(isset($_POST['submit'])) {
		$username = $_POST['Username'];
		$password = $_POST['Password'];
		$c = oci_connect($username, $password, "localhost/XE");
		if(!$c){		//(username,password,localserver

	$e=oci_error();												//BlogSheet
	trigger_error('Could not connect to database:'.$e['message'],E_USER_ERROR);
        													 //Oracle Conection 
	}
	else {
		header("Location: Inventory.php");
	}
}


?>
</body>
</html>