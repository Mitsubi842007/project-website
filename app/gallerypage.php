<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gallery page</title>
    <!--boxicons cdn links--->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="settings.css">
</head>

<body>
    <div class="sidebar">
        <i class='bx bx-menu' id='btn'></i>
        <div class="logo-content">
            <div class="logo">
                <div class="logo-name">MITSU</div>

            </div>


        </div>
      <ul class="navList">
            <li>
                <i class='bx bx-search'></i>
                <input type="text" placeholder="search...">
            </li>
            <li>
                <a href="homepage.php">
                    <i class='bx bxs-home'></i>
                    <span class="links_name">Home</span>
                </a>
                <span class="tooltip">Home</span>
            </li>
            <li>
                <a href="aboutpage.php">
                    <i class='bx bxs-user'></i>
                    <span class="links_name">About me</span>
                </a>
                <span class="tooltip">About me</span>
            </li>
            <li>
                <a href="gallerypage.php">
                    <i class='bx bxs-photo-album'></i>
                    <span class="links_name">gallery</span>
                </a>
                <span class="tooltip">gallery</span>
            </li>
            <li>
                <a href="games.php">
                    <i class='bx bxs-joystick'></i>
                    <span class="links_name">Games</span>
                </a>
                <span class="tooltip">Games</span>
            </li>
            <li>
                <a href="goals.php">
                    <i class='bx bxs-check-square'></i>
                    <span class="links_name">Goals</span>
                </a>
                <span class="tooltip">Goals</span>
            </li>
            <li>
                <a href="otherstuff.php">
                    <i class='bx bxs-folder'></i>
                    <span class="links_name">Other stuff</span>
                </a>
                <span class="tooltip">Other stuff</span>
            </li>
        </ul>
        <!-- SOCIAL LINKS: replace the # values with your social media URLs. -->
         <div class="social-boxes">
            <a class="social-box" href="#" aria-label="Social link A"><i class='bx bxl-discord-alt' ></i></a>
            <a class="social-box" href="#" aria-label="Social link B"><i class='bx bxl-youtube' ></i></a>
            <a class="social-box" href="#" aria-label="Social link C"><i class='bx bxl-tiktok' ></i></a>
            <a class="social-box" href="#" aria-label="Social link D"><i class='bx bxl-github' ></i></a>
            
        </div>
    </div>
    <div class="home_content">
        <div class="top_bar">
        </div>
        <div class="background-picture">
            <div class="cherry-blossom" aria-hidden="true"></div>
            <div class="block-text1">
                <p>GALLERY</p>
            </div>
        </div>
        <div class="down_bar"></div>
    </div>

    </div>

    <div class="placeholder-space">
    </div>



    <script src="javascript.js"></script>

    <div class="footer">
        <h1>Made with html, css, php and JS</h1>
    </div>
</body>

</html>