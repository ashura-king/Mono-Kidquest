<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registraion form</title>
  
  <link rel="stylesheet" href="/public/CSS/register.css">
  <link rel="stylesheet" href="/public/CSS/loader.css">
  <script defer src="/public/Script/loader.js"></script>
  <script defer src="/public/Script/register.js"></script>

</head>
<body>

<div class="wrapper">

  <div class="log-in_box">
 
  <p id="msg"></p>
    <!--Create user-->
	
  <form action="/register" method="post">
  <div class="login-header">
    <span><h1>Register Here</h1></span>
   </div>
    
<!-- username field-->
    <div class="input-box" >
      <input type="text" id="user" class="input-field" name="username" placeholder="username">
      <label for="user" class="label">Username</label>
    </div>
<!-- email field-->
    <div class="input-box">
    <input type="email" id="email" class="input-field" name="email" placeholder="eg.Kid@gmail.com">
      <label for="email" class="label">Email</label>
    </div>
<!-- password field-->
    <div class="input-box">
      <input type="password"  id="pass" class="input-field" name="password" >
      <label for="pass" class="label">Password</label>
    </div>
<!-- check password field-->
    <div class="input-box">
      <input type="password"  id="repeat" class="input-field" name="repeat" >
      <label for="repeat" class="label">Repeat Password</label>
    </div>
    
<!-- submit button-->
    <div class="input-box">
    <input type="submit" class="input-submit" value="Register"> 
</div>
    </form>
   
</div>
</div>
<div class="loader" ></div> 
</body>

</html>