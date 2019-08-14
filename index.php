
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="loginstyle1.css">
  <title> 
  Login Form
  </title>
</head>
<body>
  <div class="login-form-wrap">
    <div class="left-section">
      <div class="title">
        <h1>Hello!</h1>
        <p>sign in to your account!</p>
      </div>
      <div class="form">
        <form action="logincheck.php" method="post">
          <input type="text" placeholder="Email" name="email" required>
          <input type="password" placeholder="Password" name="pass" required>
          <span class="floatleft"><input type="checkbox"> Remember me</span>
          <span class="floatright"><a href="#">Forgot Password?</a></span>
          <input type="submit" value="Sign In">
        </form>
        <div class="create-account">
          Don,t have an Account? <span class="design"><a href="registration.php">REGISTER</a></span>
        </div>
      </div>
    </div>
    <div class="right-section">
      <div class="welcome-text">
      <h1>Welcome to Tour and Travel</h1>
      <p>YOU CAN ENJOY YOUR DAILY RIDE</p> 
      </div>
    </div>
  </div>
</body>
</html>
