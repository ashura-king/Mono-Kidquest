<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='UTF-8'>

	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<link rel="stylesheet" href="/public/CSS/list.css">
	<script src="https://kit.fontawesome.com/ea595f32d6.js" crossorigin="anonymous"></script>
	<script defer src="/public/Script/slider.js"></script>
	<script defer src="/public/Script/auto.js"></script>
	<title>Learn</title>
</head>
<body>
<form action="" id="edit-form">
    <div>
    <button type="button" id="exit"><i class="fa-solid fa-circle-xmark custom-size"></i></button>
    </div>
    <div class="edit-form-header">
    <img src="/public/images/profile-image.png" class="user-pic" alt="">
    <h3 class="input">My Profile</h3>
    </div>
    <div>
      <label for="username" class="input-text">Username</label>
    <input type="text" name="username"  class="input-style" value="<?= $username ?>">
    </div>
    <div>
      <label for="email" class="input-text">Email</label>
    <input type="email" name="email" class="input-style" value="<?= $email ?>">
    </div>
    <button type="submit" class="update">Update</button>
    <button type="submit"  id="delete"class="delete">Delete</button>
  </form>

  <div class="head">
<a href="/home" class="back"><i class="fa-solid fa-circle-left"></i></a>
</div>
<div class="hero"> 
    <nav> 
        <ul>
            <li><a href="/learn">Record</a></li>
            <li><a href="/record">Learn</a></li>
            <li><a href="/about">About</a></li>
        </ul> 
        <img src="/public/images/profile-image.png" class="user-pic" onclick="toggleMenu()"> 

        <div class="menu-wrap" id="subMenu"> 
            <div class="sub-menu"> 
                <div class="info"> 
                    <img src="/public/images/profile-image.png">
                    <h3 id="menu-user"><?= $username ?></h3> 
                </div> 
                <hr> 
                
              <button id="edit-profile" type="button" class="sub-link">
              <img src="/public/images/profile.png">
                    <p>Edit Profile</p>
                    <span>•</span>
              </button>

              </form>
                
                <form action="/home/logout" method="post"> 
                  <button type="submit" class="sub-link"> 
                    <img src="/public/images/logout.png" alt="Logout Icon"> 
                    <p>Logout</p> 
                    <span>•</span>
                   </button> 
                   
                  </form>
                  
            </div> 
        </div> 
    </nav>
</div>


<section class="learn"> 
    <h2 class="learning-category">Learning Category</h2>
    <button class="pre-btn"><img src="/public/images/arrow.png" alt=""></button>
    <button class="nxt-btn"><img src="/public/images/arrow.png" alt=""></button>
    <div class="learning-container">
        <div class="learning-card">
            <div class="learning-image">
                <img src="/public/images/number.jpg" class="learning-thumb" alt="">
              <a href="/courses" class="card-btn">Enter</a>

            </div>
            <div class="learning-info">
                <h2 class="learning-brand">Counting Adventure</h2>
                <p class="learning-short-description">Let's learn numbers</p>
            </div>
        </div>

        <div class="learning-card">
            <div class="learning-image">
                <img src="/public/images/letter.jpg" class="learning-thumb" alt="">
              <a href="/letter" class="card-btn">Enter</a>

            </div>
            <div class="learning-info">
                <h2 class="learning-brand">Phonics Safari</h2>
                <p class="learning-short-description">Let's Learn Alphabet</p>
            </div>
        </div>

        <div class="learning-card">
            <div class="learning-image">
                <img src="/public/images/2.jpg" class="learning-thumb" alt="">
              <a href="/colors" class="card-btn">Enter</a>

            </div>
            <div class="learning-info">
                <h2 class="learning-brand">Color Splash</h2>
                <p class="learning-short-description">Color your Knowledge</p>
            </div>
        </div>

       

       

        <div class="learning-card">
            <div class="learning-image">
                <img src="/public/images/Emotions.jpg" class="learning-thumb" alt="">
              <a href="/emotion" class="card-btn">Enter</a>

            </div>
            <div class="learning-info">
                <h2 class="learning-brand">Feelings Adventure</h2>
                <p class="learning-short-description">dig and explore emotions</p>
            </div>
        </div>

       
       
        </div>

    
        
      
    </div>
</section> 
</body>
</html>