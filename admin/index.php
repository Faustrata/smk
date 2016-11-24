<!DOCTYPE html>
<html>
<head>
	<title>Login Form Admin</title>
</head>
<body>
<div class="col-md-6">
    <form role="form" action="login.php" method="post">
        <div class="form-group">
          <h4 style="color:#999999;">username :</h4>
            <input type="text" class="form-control" placeholder="Enter NIK" name="username" required>
        </div>
        <div class="form-group">
          <h4 style="color:#999999;">Password :</h4>
             <input type="password" class="form-control" placeholder="Enter password" name="password" required>
        </div>
         <div class="form-group">
          <h4 style="color:#999999;">Level :</h4>
            <select name="level">
                <option></option>
                <option value="pengajar">Pengajar</option>
                <option value="admi">Admin</option>
            </select>
        </div>

             <button type="submit" class="btn btn-warning btn-block" name="signin">Login
             </button>
        </form>
    </div>
</body>
</html>