<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="style.css">
  <title>Team Profile v1.1</title>
	<link rel="stylesheet" href="/public/CSS/about.css">
  <link rel="stylesheet" href="/public/CSS/loader.css">
  <script src="https://kit.fontawesome.com/ea595f32d6.js" crossorigin="anonymous"></script>
  <script  defer src="/public/Script/loader.js"></script>
  <script defer src="/public/Script/about.js"></script>
<body>

<!-- EDIT FORM -->
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
  <h4>Kid Quest</h4>
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



<section class="about">
        <div class="main">
            <img src="/public/images/about2.jpg">
            <div class="about-text">
                <h5>Our Mission</h5>
                <p>
                Our platform takes pride in fostering a dynamic and inclusive learning ecosystem that adapts to each child’s unique needs and abilities. 
      With our robust adaptive learning algorithms, every child’s experience is tailored to challenge them just enough to stay motivated without overwhelming them. 
      We believe in building foundational skills that set young learners up for success across a variety of subjects, from math and language to science and critical thinking.

                </p>
            </div>
            
        </div>
        <div class=" main2">
            
            <div class="about-text2">
            <h5>Our Story</h5>
                <p>
                KidQuest: A Journey of Learning" began with a simple but profound question: How can we transform learning into an adventure that captivates kids and nurtures their natural curiosity? The world of education had long provided answers and knowledge, but the creators of KidQuest wanted to do something different—something that went beyond rote memorization and made learning feel like a discovery. 
        They set out to build an online learning platform that didn’t just pass along facts and information but actually inspired young minds to explore, dream, and look at the world around them with new wonder.
                </p>
            </div>
            <img src="/public/images/mission.jpg">
        </div>

        <div class="second-title">
  <h2>Meet the Team</h2>
</div>
    </section>
  
  <div class="person" style="--color: #782a2b">
    <div class="container">
      <div class="conianer-inner">
        <div class="circle"></div>
        <img src="/public/images/lee.png">
      </div>
    </div>
    <div class="divider"></div>
    <h1>Leesio</h1>
    <p>Junior Web Designer</p>
  </div>
 
  <div class="person" style="--color: #3e6e7c">
    <div class="container">
      <div class="conianer-inner">
        <div class="circle"></div>
        <img src="/public/images/jay.png">
      </div>
    </div>
    <div class="divider"></div>
    <h1>Denzel Jay</h1>
    <p>Junior WebDev</p>
  </div>
	
 
	


</body>

</html>

