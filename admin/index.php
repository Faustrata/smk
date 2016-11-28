<!DOCTYPE html>
<html>
<head>
	<title>Login Form Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css" >
  <script type="text/css">
  </script>
</head>
<body>
<div class="container">
  <div class="row">
      <br><br><br><br><br><br>
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
          <form role="form" action="login.php" method="post">
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Enter NIK" name="username" required>
              </div>
              <div class="form-group">
                   <input type="password" class="form-control" placeholder="Enter password" name="password" required>
              </div>
               <div class="form-group">
                  <select name="level" class="form-control" >
                      <option value="" selected="selected"></option>
                      <option value="pengajar">Pengajar</option>
                      <option value="admi">Admin</option>
                  </select>
              </div>
              <button type="submit" class="btn btn-warning btn-block" name="signin">Login
              </button>
          </form>
      </div>
  </div>
</div>
</body>
</html>