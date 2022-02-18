<?php include "partials/header.php" ?>

<!-------- header -------->
<header>
    <img src="img/slide-03.jpg" alt="">
    <article>
        <h1>free video lessons</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur incidunt perspiciatis quo, fuga
            dolor vitae assumenda vel magni eaque natus?</p>
        <!-- dodata klasa slide-in radi dodavanja animacije -->
        <div class="slide-in">
            <a class="btn" href="courses.php">our services</a>
            <a class="btn btnLight" href="teachers.php">our teacher</a>
        </div>
    </article>
</header>

<!-------- services -------->
<section class="services container py">
    <article>
        <img src="img/services-01.jpg" alt="">
        <h3><i class="fas fa-car"></i> Learn to drive</h3>
        <div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis aut facilis iste eligendi fugit ea
                facere suscipit quos vero quod.</p>
            <a href="courses.php"><i class="fas fa-caret-right"></i> Read more</a>
        </div>
    </article>

    <article>
        <img src="img/services-02.jpg" alt="">
        <h3><i class="fas fa-car"></i> Learn to drive</h3>
        <div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis aut facilis iste eligendi fugit ea
                facere suscipit quos vero quod.</p>
            <a href="courses.php"><i class="fas fa-caret-right"></i> Read more</a>
        </div>
    </article>

    <article>
        <img src="img/services-03.jpg" alt="">
        <h3><i class="fas fa-car"></i> Learn to drive</h3>
        <div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis aut facilis iste eligendi fugit ea
                facere suscipit quos vero quod.</p>
            <a href="courses.php"><i class="fas fa-caret-right"></i> Read more</a>
        </div>
    </article>
</section>

<!-------- features -------->
<?php include "partials/features.php" ?>

<!-------- courses -------->

<section class="courses container py">
    <article class="title-section container">
        <h2>our courses</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem, qui?</p>
    </article>
    <article class="wrapper">
        <div class="card">
            <img src="img/course-01.jpg" alt="">
            <div class="card-body">
                <span>Driving, Road Signs</span>
                <h6>Rules and requirements</h6>
                <h6>&dollar; 100</h6>
                <a href="courses_single.php" class="btn">detail</a>
            </div>
        </div>

        <div class="card">
            <img src="img/course-02.jpg" alt="">
            <div class="card-body">
                <span>Driving, Road Signs</span>
                <h6>Rules and requirements</h6>
                <h6>&dollar; 100</h6>
                <a href="courses_single.php" class="btn">detail</a>
            </div>
        </div>

        <div class="card">
            <img src="img/course-03.jpg" alt="">
            <div class="card-body">
                <span>Driving, Road Signs</span>
                <h6>Rules and requirements</h6>
                <h6>&dollar; 100</h6>
                <a href="courses_single.php" class="btn">detail</a>
            </div>
        </div>

        <div class="card">
            <img src="img/course-04.jpg" alt="">
            <div class="card-body">
                <span>Driving, Road Signs</span>
                <h6>Rules and requirements</h6>
                <h6>&dollar; 100</h6>
                <a href="courses_single.php" class="btn">detail</a>
            </div>
        </div>
    </article>
    <article class="wrapper">
        <a href="courses.php" class="btn">All Courses</a>
    </article>

</section>


<!-- cta -->
<section class="cta py">
    <article class="title-section container">
        <h2>Request a callback</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem, qui?</p>
    </article>
    <article class="container">
        <form action="">
            <div>
                <input type="text" placeholder="Your name">
                <input type="email" placeholder="Email">
                <input type="phone" placeholder="Phone number">
                <input type="text" placeholder="Messages">
            </div>
            <button type="submit" class="btn">submit</button>
        </form>
    </article>
</section>


<!-------- news -------->
<section class="news container py">
    <article class="title-section container">
        <h2>latest news</h2>
    </article>
    <article class="wrapper">
        <div class="card">
            <img src="img/news-01.jpg" alt="">
            <div class="card-body">
                <h6>Trainee licence option with 20 hours training</h6>
                <span>July 18, 2017 | Pro Tips</span>
                <p>
                    Phasellus lorem enim, luctus ut velit eget, convallis egestas eros. Sed ornare ligula eget
                    tortor tempor, quis porta tellus dictum. </p>
                <a href="news_single.php" class="btn">Continue reading</a>
            </div>
        </div>

        <div class="card">
            <img src="img/news-02.jpg" alt="">
            <div class="card-body">
                <h6>Trainee licence option with 20 hours training</h6>
                <span>July 18, 2017 | Pro Tips</span>
                <p>
                    Phasellus lorem enim, luctus ut velit eget, convallis egestas eros. Sed ornare ligula eget
                    tortor tempor, quis porta tellus dictum. </p>
                <a href="news_single.php" class="btn">Continue reading</a>
            </div>
        </div>

        <div class="card">
            <img src="img/news-03.jpg" alt="">
            <div class="card-body">
                <h6>Trainee licence option with 20 hours training</h6>
                <span>July 18, 2017 | Pro Tips</span>
                <p>
                    Phasellus lorem enim, luctus ut velit eget, convallis egestas eros. Sed ornare ligula eget
                    tortor tempor, quis porta tellus dictum. </p>
                <a href="news_single.php" class="btn">Continue reading</a>
            </div>
        </div>
    </article>
</section>


<!-------- map -------->

<section class="map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4528.761487205526!2d-73.98537308849629!3d40.74914091302506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a9e69d16c3%3A0x7a0716652d7d9778!2zMzc5IDV0aCBBdmUsIE5ldyBZb3JrLCBOWSAxMDAxNiwg0KHRmNC10LTQuNGa0LXQvdC1INCU0YDQttCw0LLQtQ!5e0!3m2!1ssr!2s!4v1644326917975!5m2!1ssr!2s"
        height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <div class="rotate-icon">
        <a target="_blank"
            href="https://www.google.com/maps?ll=40.749252,-73.983534&z=16&t=m&hl=sr&gl=US&mapclient=embed&cid=8621354342505868311">
            <i class="fas fa-map-marker-alt"></i>
        </a>
    </div>
</section>


<!-------- footer -------->
<?php include "partials/footer.php" ?>