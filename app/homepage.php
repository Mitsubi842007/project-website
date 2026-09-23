<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homePage</title>
    <!--boxicons cdn links--->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="settings.css">
    <!--google fonts--->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Changa+One:ital@0;1&family=Oswald:wght@200..700&family=Share+Tech&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="sidebar active">
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
        <!-- SOCIAL LINKS: of my social media's that i use -->
        <div class="social-boxes">
            <a class="social-box" href="https://discord.com/users/844851964620832781?" aria-label="Social link A"><i
                    class='bx bxl-discord-alt'></i></a>
            <a class="social-box" href="https://www.youtube.com/@hyper_alexyt19" aria-label="Social link B"><i
                    class='bx bxl-youtube'></i></a>
            <a class="social-box" href="https://www.tiktok.com/@hyper_alexyt19?is_from_webapp=1&sender_device=pc"
                aria-label="Social link C"><i class='bx bxl-tiktok'></i></a>
            <a class="social-box" href="https://github.com/Mitsubi842007" aria-label="Social link D"><i
                    class='bx bxl-github'></i></a>

        </div>
    </div>
    <div class="home_content">
    </div>

    <div class="top_bar">
        <div class="top_bar_boxes">
            <div> <i class='bx bx-arrow-back'></i> menu | welcome to my page!</div>
            <div>「 Developer ✦ Gamer ✦ Writer 」</div>
        </div>
        <div class="background-picture">
            <div class="cherry-blossom" aria-hidden="true">
                <div class="background-picture-box-transparent">
                    <h3>hey, i'm</h3>
                    <h1>MITSUBI</h1>
                    <h4>developer ✦ gamer and a writer</h4>
                    <p>i built websites</p>
                    <p>i also write</p>
                    <div class="background-picture-box-transparent-link">
                        <a href="aboutpage.php">gallery</a>
                         <a href="aboutpage.php">about me</a>
                        

                    </div>
                </div>
            </div>
        </div>
        <div class="down_bar"></div>
    </div>

    <script src="javascript.js"></script>

</body>