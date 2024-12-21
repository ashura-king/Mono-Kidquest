<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>log in </title>
  <link rel="stylesheet" href="/public/CSS/log.css">
  <link rel="stylesheet" href="/public/CSS/loader.css">
  <script defer src="/public/Script/loader.js"></script>
  <script defer src="/public/Script/login.js"></script>
</head>
<body>

 <div class="wrapper">
  <div class="log-in_box">
  <p id="msg"></p>
   
    <form action="/login" method="post">
   
    <div class="login-header">
    <span><h1>Welcome To Kidsquest</h1></span>
    
    </div>
    <div class="input-box">
      <input type="text" id="user" class="input-field" name="username">
      <label for="user" class="label">Username</label>
    </div>

    <div class="input-box">
      <input type="password"  id="pass" class="input-field" name="password" >
      <label for="pass" class="label">Password</label>
    </div>
    
    <div class="input-box">
     <input type="submit" class="input-submit" value="Login">
    </form>
    
    <br>
      <div class="forgot">
      <a href="/forgot">Forgot password ?</a>
      </div>

      
<br>
    <div class="register-link">
      <span>Don't have an account</span>

      <a href="/register" class="register">Register</a>
    </div>

    
    
</div>
 </div>
 <div class="loader" ></div> 

</body>
</html>