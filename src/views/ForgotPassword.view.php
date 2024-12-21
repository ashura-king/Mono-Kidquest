<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='UTF-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<title>ForgotPassword</title>
  <link rel="stylesheet" href="/public/CSS/forgot.css">
  <script defer src="/public/Script/forgot.js"></script>
</head>

<body>
<div class="wrapper">
  <div class="log-in_box">
  <p id="msg"></p>
    <form action="/forgot" method="post">
    <div class="login-header">
    <span><h1>Change Password</h1></span>
    </div>

    
<!-- username field-->
    <div class="input-box">
      <input type="text" id="user" class="input-field" name="username" placeholder="username">
      <label for="user" class="label">Username</label>
    </div>

<!-- password field-->
    <div class="input-box">
      <input type="password"  id="pass" class="input-field" name="password" >
      <label for="pass" class="label">Password</label>
    </div>
<!-- check password field-->
    <div class="input-box">
      <input type="password"  id="repeat" class="input-field"  placeholder="change password" name="confirm" >
      <label for="repeat" class="label">Confirm Password</label>
    </div>
<!-- submit button-->
    <div class="input-box">
    <input type="submit" class="input-submit" value="Change"> 
</div>


    </form>
</body>
</html>