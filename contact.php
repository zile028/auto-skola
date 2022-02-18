<?php include "partials/header.php" ?>

<!-------- header -------->
<header>
    <img src="img/bg-title-01.jpg" alt="">
    <article>
        <h1>Contact us</h1>
    </article>
</header>


<!-------- contact -------->


<section class="contact container py">
    <article>
        <h3>send message</h3>
        <form action="">
            <input type="text" placeholder="Your name">
            <input type="email" placeholder="Your email">
            <input type="phone" placeholder="Phone number">
            <textarea name="" cols="30" rows="10" placeholder="Your message"></textarea>
            <button class="btn" type="submit">Send email</button>
        </form>
    </article>
    <article>
        <h3>contact us</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque metus arcu, malesuada a est eget,
            maximus efficitur sapien.</p>
        <ul>
            <li><i class="fas fa-home"></i>379 5th Ave New York, NYC 10018</li>
            <li><i class="fas fa-phone"></i>(+1) 96 716 6879</li>
            <li><i class="fas fa-fax"></i>(+1) 96 716 6879</li>
            <li><i class="fas fa-envelope"></i>contact@site.com</li>
            <li><i class="fas fa-clock"></i>Mon-Fri 09:00 - 17:00</li>
        </ul>
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