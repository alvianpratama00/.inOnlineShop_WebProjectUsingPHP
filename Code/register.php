<!DOCTYPE html>
<html>
<head>
  <title>.In</title>
  <link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>
<form action="register_proses.php" method="post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="usern"><b>Username or Email</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>  

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="index.html">Sign in</a>.</p>
  </div>
</form>
</body>
</html>