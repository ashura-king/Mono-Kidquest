<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href = "/public/CSS/Course.css" type="text/css">
    <title>Courses</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>
<body>
<div class="head">
<a href="/learn" class="back"><i class="fa-solid fa-circle-left"></i></a>
</div>
    <div class="NumberSection">
    <h1> Counting Numbers</h1>
        <div class="number">
        <div class="number-button" onclick="playSound(1)">
            <i class="fa-solid fa-volume-high"></i>
        </div>   
            <span class="number-style">1</span>
            <img src="/public/images/red1.png" alt="Number 1">
            <audio id="sound1" src="/public/Sound/number1.mp3"> type="audio/mpeg" preload="auto"</audio>
        </div>

        <div class="number">
        <div class="number-button" onclick="playSound(2)">
            <i class="fa-solid fa-volume-high"></i>
        </div>
            <span class="number-style">2</span>
            <img src="/public/images/red7.png" alt="Number 2">
            <audio id="sound2" src="/public/Sound/number2.mp3"> type="audio/mpeg" preload="auto"</audio>
        </div>

        <div class="number">
        <div class="number-button" onclick="playSound(3)" >
                <i class="fa-solid fa-volume-high"></i>
        </div>
            <span class="number-style">3</span>
            <img src="/public/images/red6.png" alt="Number 3">
            <audio id="sound3" src="/public/Sound/number3.mp3"> type="audio/mpeg" preload="auto"</audio>
        </div>

        <div class="number">
        <div class="number-button" onclick="playSound(4)">
                <i class="fa-solid fa-volume-high"></i>
        </div>
            <span class="number-style">4</span>
            <img src="/public/images/red4.png" alt="Number 4">
            <audio id="sound4" src="/public/Sound/number4.mp3"> type="audio/mpeg" preload="auto"</audio>
        </div>

        <div class="number">
        <div class="number-button" onclick="playSound(5)">
                <i class="fa-solid fa-volume-high"></i>
        </div>
            <span class="number-style">5</span>
            <img src="/public/images/red5.png" alt="Number 5">
            <audio id="sound5" src="/public/Sound/number5.mp3"> type="audio/mpeg" preload="auto"</audio>
        </div>

        <div class="number">
        <div class="number-button" onclick="playSound(6)">
                <i class="fa-solid fa-volume-high"></i>
        </div>
            <span class="number-style">6</span>
            <img src="/public/images/red3.png" alt="Number 6">
            <audio id="sound6" src="/public/Sound/number6.mp3"> type="audio/mpeg" preload="auto"</audio>
        </div>

        <div class="number">
        <div class="number-button" onclick="playSound(7)">
                <i class="fa-solid fa-volume-high"></i>
        </div>
            <span class="number-style">7</span>
            <img src="/public/images/red2.png" alt="Number 7">
            <audio id="sound7" src="/public/Sound/number7.mp3"> type="audio/mpeg" preload="auto"</audio>
        </div>

        <div class="number">
        <div class="number-button" onclick="playSound(8)">
                <i class="fa-solid fa-volume-high"></i>
        </div>
            <span class="number-style">8</span>
            <img src="/public/images/red1.png" alt="Number 8">
            <audio id="sound8" src="/public/Sound/number8.mp3"> type="audio/mpeg" preload="auto"</audio>
        </div>

        <div class="number">
        <div class="number-button" onclick="playSound(9)">
                <i class="fa-solid fa-volume-high"></i>
        </div>
            <span class="number-style">9</span>
            <img src="/public/images/red8.png" alt="Number 9">
            <audio id="sound9" src="/public/Sound/number9.mp3"> type="audio/mpeg" preload="auto"</audio>
        </div>

        <div class="number">
        <div class="number-button" onclick="playSound(10)">
                <i class="fa-solid fa-volume-high"></i>
        </div>
            <span class="number-style">10</span>
            <img src="/public/images/red5.png" alt="Number 10">
            <audio id="sound10" src="/public/Sound/number10.mp3"> type="audio/mpeg" preload="auto"</audio>
        </div>
</div>
         <div class="center-button">
         <button  id="NumbersButton">More Numbers</button>
    </div>

    <!-- additional numbes 11-20 -->

   <div class="additionalNumbers" id="next" >
    <div class="number">
        <div class="number-button" onclick="playSound(11)">
            <i class="fa-solid fa-volume-high"></i>
        </div>   
        <span class="number-style">11</span>
        <img src="/public/images/red1.png" alt="Number 11">
        <audio id="sound11" src="/public/Sound/number11.mp3" type="audio/mpeg" preload="auto"></audio>
    </div>
    <div class="number">
        <div class="number-button" onclick="playSound(12)">
            <i class="fa-solid fa-volume-high"></i>
        </div>
        <span class="number-style">12</span>
        <img src="/public/images/red7.png" alt="Number 12">
        <audio id="sound12" src="/public/Sound/number12.mp3" type="audio/mpeg" preload="auto"></audio>
    </div>
    <div class="number">
        <div class="number-button" onclick="playSound(13)">
            <i class="fa-solid fa-volume-high"></i>
        </div>
        <span class="number-style">13</span>
        <img src="/public/images/red6.png" alt="Number 13">
        <audio id="sound13" src="/public/Sound/number13.mp3" type="audio/mpeg" preload="auto"></audio>
    </div>
    <div class="number">
        <div class="number-button" onclick="playSound(14)">
            <i class="fa-solid fa-volume-high"></i>
        </div>
        <span class="number-style">14</span>
        <img src="/public/images/red2.png" alt="Number 14">
        <audio id="sound14" src="/public/Sound/number14.mp3" type="audio/mpeg" preload="auto"></audio>
    </div>
    <div class="number">
        <div class="number-button" onclick="playSound(15)">
            <i class="fa-solid fa-volume-high"></i>
        </div>
        <span class="number-style">15</span>
        <img src="/public/images/red4.png" alt="Number 15">
        <audio id="sound15" src="/public/Sound/number15.mp3" type="audio/mpeg" preload="auto"></audio>
    </div>
    <div class="number">
        <div class="number-button" onclick="playSound(16)">
            <i class="fa-solid fa-volume-high"></i>
        </div>
        <span class="number-style">16</span>
        <img src="/public/images/red3.png" alt="Number 16">
        <audio id="sound16" src="/public/Sound/number16.mp3" type="audio/mpeg" preload="auto"></audio>
    </div>
    <div class="number">
        <div class="number-button" onclick="playSound(17)">
            <i class="fa-solid fa-volume-high"></i>
        </div>
        <span class="number-style">17</span>
        <img src="/public/images/red2.png" alt="Number 17">
        <audio id="sound17" src="/public/Sound/number17.mp3" type="audio/mpeg" preload="auto"></audio>
    </div>
    <div class="number">
        <div class="number-button" onclick="playSound(18)">
            <i class="fa-solid fa-volume-high"></i>
        </div>
        <span class="number-style">18</span>
        <img src="/public/images/red2.png" alt="Number 18">
        <audio id="sound18" src="/public/Sound/number18.mp3" type="audio/mpeg" preload="auto"></audio>
    </div>
    <div class="number">
        <div class="number-button" onclick="playSound(19)">
            <i class="fa-solid fa-volume-high"></i>
        </div>
        <span class="number-style">19</span>
        <img src="/public/images/red8.png" alt="Number 19">
        <audio id="sound19" src="/public/Sound/number19.mp3" type="audio/mpeg" preload="auto"></audio>
    </div>
    <div class="number">
        <div class="number-button" onclick="playSound(20)">
            <i class="fa-solid fa-volume-high"></i>
        </div>
        <span class="number-style">20</span>
        <img src="/public/images/red5.png" alt="Number 20">
        <audio id="sound20" src="/public/Sound/number20.mp3" type="audio/mpeg" preload="auto"></audio>
    </div>
</div>


    <script>
        
        
    document.getElementById("NumbersButton").onclick = function() {
         window.location.href = "#next"; 
    };


        function playSound(number) {
            var audio = document.getElementById("sound" + number);
            audio.play();
        }

        
         document.getElementById("NumbersButton").addEventListener("click", function() {
            document.getElementById("additionalNumbers").style.display = "block";
        });

    </script>

</body>
</html>
   
   
