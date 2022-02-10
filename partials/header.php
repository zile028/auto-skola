<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto-skola</title>
    <!-- Font Awesome 5 | visit: https://fontawesome.com/v5.15/icons?d=gallery&p=2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-------- top bar -------->
    <section class="topBar">
        <article class="container">
            <ul>
                <li><i class="fas fa-phone-alt"></i>1-800-123-6889</li>
                <li><i class="fas fa-map-marker-alt"></i>8th floor, 379 Hudson St, New York</li>
                <li><i class="far fa-clock"></i>09:30 am – 06:00 pm</li>
            </ul>
        </article>
    </section>


    <!-------- navbar -------->
    <nav>
        <article class="container">
            <div class="logo">
                <a href="index.php"><img src="img/logo.png" alt=""></a>
            </div>
            <div class="nav-btn">
                <button id="menu-btn"><i class="fas fa-bars"></i></button>
            </div>
            <div class="navbar" id="menu-box">
                <ul>
                    <li><a href="index.php">Home</a></li>

                    <li class="drop"><span>About</span>
                        <ul>
                            <li><a href="intro.php">Intro</a></li>
                            <li><a href="teachers.php">Teachers</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                        </ul>
                    </li>

                    <li><a href="news.php">News</a></li>
                    <li><a href="courses.php">Courses</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li>
                        <a href="/"><i class="fab fa-facebook-f"></i></a>
                        <a href="/"><i class="fab fa-twitter"></i></a>
                    </li>
                </ul>
            </div>
        </article>
    </nav>