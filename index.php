<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
<div class="col-md-6">
    <form role="form" action="login_proses.php" method="post">
        <div class="form-group">
          <h4 style="color:grey;">username :</h4>
            <input type="text" class="form-control" autocomplete="off" placeholder="Enter NIS"
             name="username" required>
        </div>
        <div class="form-group">
          <h4 style="color:grey">Password :</h4>
             <input type="password" class="form-control" 
             placeholder="Enter password" name="password" autocomplete="off" required>
        </div>
        <br>
             <button type="submit" class="btn btn-warning btn-block" name="signin">Login</button>
        </form>
    </div>
</body>
</html>