<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" >
</head>
<body>
<div class="container">
	<div class="row">
			<br><br><br><br><br><br>
			<div class="col-md-4">
			</div>
			<div class="col-md-4">
		    	<form class="form-vertical"  action="login_proses.php" method="post">
			        <div class="form-group">
			            <input type="text" class="form-control" autocomplete="off" placeholder="Enter NIS"
			             name="username" required>
			        </div>
			        <div class="form-group">

			             <input type="password" class="form-control" 
			             placeholder="Enter password" name="password" autocomplete="off" required>
			        </div>
			        <br>
		             <button type="submit" class="btn btn-warning btn-block" name="signin">Login</button>
		        </form><br>
		        <a href="admin/">Login Admin</a>
		    </div><br>

		
    </div>

 </div>
</body>
</html>