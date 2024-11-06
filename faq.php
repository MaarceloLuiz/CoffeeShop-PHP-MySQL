<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop Website</title>

    <!--CSS-->
    <link rel="stylesheet" href="style.css">

    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- icons -->
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!---->

    <!-- new font: Indie Flower -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">

    <!-- new font: paytone one -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">

    <!-- ScrollReveal link-->
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body>
    <!--Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!--JQuery-->
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <!-- link to js -->
    <script type="text/javascript" src="js/script.js"></script>

    <div class="all-content">
        
        <!-- navigation bar - Bootstrap -->
        <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container-fluid">
              <a class="navbar-brand" href="#" id="logo"><img src="./assets/img/Coffee-shop-logo-design-template-on-transparent-background-PNG.png" alt="" style="height: 100px; width: 100px;"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fa-solid fa-bars" style="color: white; font-size: 23px;"></i></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="aboutUs.php">About Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="menu.php">Menu</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="reviews.php">Reviews</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="faq.php">FAQ</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                      </li>
                 
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>

          <section class="about" id="about">
            <h1 class="heading"> <span>Check our</span> FAQ </h1>
            <div class="about-us-row">
                <div class="about-us-content">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        <br>aliquid mollitia et perspiciatis vel ut quam itaque incidunt?
                        <br>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat, minima.
                    </p>
                </div>
            </div>

        </section>
    </div>

    <!--faq section-->
    <!--jquery used on the faq questions-->
    <section class="contact">
        <div class="faq-container">
            <h1 class="heading" style="text-align: center; padding-top: 10px;"><span>FA</span>Q</h1>
            <ul class="faq-list">
              <li class="faq-item">
                <div class="faq-question">What are your business hours?</div>
                <div class="faq-answer">We are open Monday to Friday from 7:00 AM to 9:00 PM, and on weekends from 8:00 AM to 10:00 PM.</div>
              </li>
              <li class="faq-item">
                <div class="faq-question">Do you offer free Wi-Fi?</div>
                <div class="faq-answer">Yes, we provide free Wi-Fi for all our customers to enjoy while they relax and savor their coffee.</div>
              </li>
              <li class="faq-item">
                <div class="faq-question">What types of coffee do you serve?</div>
                <div class="faq-answer">We offer a wide variety of coffee, including espresso, cappuccino, latte, macchiato, and drip coffee. We also have a selection of flavored coffee and iced coffee options.
                </div>
              </li>
              <li class="faq-item">
                <div class="faq-question">Do you offer dairy-free milk alternatives?</div>
                <div class="faq-answer">Absolutely! We offer a range of dairy-free milk options, including almond milk, soy milk, and oat milk, for customers with dietary preferences or restrictions.</div>
              </li>
            </ul>
          </div>
    </section>

    <!--footer section-->
    <section class="footer">
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-youtube"></a>
        </div>

        <div class="links">
            <a href="index.html">home</a>
            <a href="aboutUs.html">about us</a>
            <a href="menu.html">menu</a>
            <a href="reviews.html">reviews</a>
            <a href="contact.html">contact</a>
        </div>

    </section>
</body>
</html>