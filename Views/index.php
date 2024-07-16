<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../Public/index.css" />
    <title>SvaraVilasa</title>
</head>

<body>
    <div id="welcomePopup" class="welcome-popup">
        <h2>Welcome to SvaraVilasa! <br>Delighted to see you here</h2>
    </div>

    <div class="navbar">
        <div class="brand">
            <a href="index.html" target="_self"></a><h1>SvaraVilasa</h1>
        </div>
        <div class="navbar-links">
            <a href="myaccount.html" target="_self"> My Account</a>
            <a href="playlist.html" target="_self">Playlist</a>
            <a href="aboutus.html" target="_self">About Us</a>
            <a href="ContactUs.html" target="_self">Contact Us</a>
            <a href="logout.php" target="_self">Log Out</a>
        </div>
    </div>

    <div class="homepage-container">


        <div class="music-boxes">
            <div  class="music-box" onclick="openCategory('Sad Songs')">
                <a href="musicplayer.html">Sad Songs</a>
            </div>
            <div class="music-box" onclick="openCategory('Romantic Songs')">
                <a href="musicplayer.html">Romantic Songs</a>
               
            </div>
            <div class="music-box" onclick="openCategory('Workout Musics')">
                <a href="musicplayer.html">Workout Musics</a>
            </div>
            <div class="music-box" onclick="openCategory('Devotional and Prayers')">
                <a href="musicplayer.html">Devotional and Prayers</a>
                
            </div>
            <div class="music-box" onclick="openCategory('English Songs')">
                <a href="musicplayer.html">English Songs</a>
                
            </div>
            <div class="music-box" onclick="openCategory('Punjabi Songs')">
                <a href="musicplayer.html">Punjabi Songs</a>
                
            </div>
            <div class="music-box" onclick="openCategory('80s Songs')">
                <a href="musicplayer.html">80s Songs</a>
                
            </div>
            <div class="music-box" onclick="openCategory('90s Songs')">
                <a href="musicplayer.html">90s Songs</a>
                
            </div>
           
        </div>

        <div class="singer-boxes">
            <div class="singer-box" id="Arijit" onclick="openCategory('Arijit Singh') ">
                
            </div>
            <div class="singer-box" id="Lata" onclick="openCategory('Lata Mangeshkar')">
                
            </div>
            <div class="singer-box" id="Mohammad" onclick="openCategory('Mohammad Rafi')">
                
            </div>
            <div class="singer-box" id="Kishor" onclick="openCategory('Kishor Kumar')">
                
            </div>
            <div class="singer-box" id="Udit" onclick="openCategory('Udit Narayan')">
                
            </div>
            <div class="singer-box" id="Sanu" onclick="openCategory('Kumar Sanu')">
                
            </div>
            <div class="singer-box" id="Sonu" onclick="openCategory('Sonu Nigam')">
                
            </div>
            <div class="singer-box" id="Akon" onclick="openCategory('Akon')">
                
            </div>
            <div class="singer-box" id="Charlie" onclick="openCategory('Charlie Puth')">
                
            </div>
            <!-- Add more boxes as needed -->
        </div>
    </div>

    <script>
        // Welcome Popup
        setTimeout(() => {
            document.getElementById("welcomePopup").style.display = "none";
        }, 2000);

        // Function to open music category (replace with actual behavior)
        function openCategory(category) {
            alert("Opening " + category);
        }
    </script>
</body>

</html>