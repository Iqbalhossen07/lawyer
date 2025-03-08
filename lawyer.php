<?php
include('app/db.php');

?>
<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css" />
    <!-- Line Awesome CSS -->
    <link rel="stylesheet" href="assets/css/line-awesome.min.css" />
    <!-- Magnific CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <!-- Owl Theme CSS -->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />
    <!-- Odometer CSS -->
    <link rel="stylesheet" href="assets/css/odometer.css" />
    <!-- Stylesheet CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- Stylesheet Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <!-- Theme Dark CSS -->
    <link rel="stylesheet" href="assets/css/theme-dark.css" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <!-- Title -->
    <title>Atorn - Law Firm & Attorney Website HTML Template</title>
  </head>
  <body>
    <!-- Preloder Area -->
    <div class="preloader">
      <div class="d-table">
        <div class="d-table-cell">
          <div class="lds-hourglass"></div>
        </div>
      </div>
    </div>
    <!-- End Preloder Area -->

    <!-- Heder Area -->
    <header class="header-area">
      <div class="top-header">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-sm-6">
              <ul class="left-info">
                <li>
                  <a
                    href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#8fe7eae3e3e0cfeefbe0fde1a1ece0e2"
                  >
                    <i class="las la-envelope"></i>
                    <span
                      class="__cf_email__"
                      data-cfemail="18707d74747758796c776a76367b7775"
                      >[email&#160;protected]</span
                    >
                  </a>
                </li>
                <li>
                  <a href="tel:+823-456-879">
                    <i class="las la-phone"></i>
                    +0123 456 789
                  </a>
                </li>
              </ul>
            </div>

            <div class="col-lg-6 col-sm-6">
              <ul class="right-info">
                <li>
                  <a href="https://www.facebook.com/login/" target="_blank">
                    <i class="lab la-facebook-f"></i>
                  </a>
                </li>
                <li>
                  <a href="https://twitter.com/i/flow/login" target="_blank">
                    <i class="lab la-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.instagram.com/" target="_blank">
                    <i class="lab la-instagram"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.google.co.uk/" target="_blank">
                    <i class="lab la-google-plus"></i>
                  </a>
                </li>

                <li class="heder-btn">
                  <a href="contact.html">Get A Schedule</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Start Navbar Area -->
      <div class="navbar-area">
        <div class="atorn-responsive-nav">
          <div class="container">
            <div class="atorn-responsive-menu">
              <div class="logo">
                <a href="index.html">
                  <img src="assets/img/logo.png" class="logo1" alt="logo" />
                  <img
                    src="assets/img/logo-white.png"
                    class="logo2"
                    alt="logo"
                  />
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="atorn-nav">
          <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
              <a class="navbar-brand" href="index.html">
                <img src="assets/img/logo.png" class="logo1" alt="logo" />
                <img src="assets/img/logo-white.png" class="logo2" alt="logo" />
              </a>

              <div class="collapse navbar-collapse mean-menu">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a href="index.html" class="nav-link active"> Home </a>
                  </li>
                  <li class="nav-item">
                    <a href="about.html" class="nav-link">About</a>
                  </li>
                  <li class="nav-item">
                    <a href="fees.html" class="nav-link">Fees</a>
                  </li>
                  <li class="nav-item">
                    <a href="team.html" class="nav-link">Our Team</a>
                  </li>
                  <li class="nav-item">
                    <a href="caseStudy.html" class="nav-link">Case Studies</a>
                  </li>

                  <li class="nav-item">
                    <a href="services.html" class="nav-link"> Services </a>
                  </li>

                  <li class="nav-item">
                    <a href="blog.html" class="nav-link">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a href="contact.html" class="nav-link">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link search-box">
                      <i class="las la-search"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
      <!-- End Navbar Area -->
    </header>
    <!-- End Heder Area -->

    <!-- Search Overlay -->
    <div class="search-overlay">
      <div class="d-table">
        <div class="d-table-cell">
          <div class="search-overlay-layer"></div>
          <div class="search-overlay-layer"></div>
          <div class="search-overlay-layer"></div>

          <div class="search-overlay-close">
            <span class="search-overlay-close-line"></span>
            <span class="search-overlay-close-line"></span>
          </div>

          <div class="search-overlay-form">
            <form>
              <input
                type="text"
                class="input-search"
                placeholder="Search here..."
              />
              <button type="submit"><i class="las la-search"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Search Overlay -->

    <!-- Page banner Area -->
    <div class="page-banner bg-1">
      <div class="d-table">
        <div class="d-table-cell">
          <div class="container">
            <div class="page-content">
              <h2>Team</h2>
              <ul>
                <li>
                  <a href="index.html"
                    >Home <i class="las la-angle-right"></i
                  ></a>
                </li>
                <li>Team</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page banner Area -->

    <!-- Attorney Area -->
    <div class="attorney-area ptb-100">
      <div class="container">
        <div class="section-title">
          <span>Experienced Team</span>
          <h2>Our Experienced Attorney Are Ready To answer any questions</h2>
        </div>

        <div class="row justify-content-center">
        <?php


            $project = $mysqli->query("SELECT * FROM lawyer_crud");


            // Fetch and display the titles
            while ($row = $project->fetch_assoc()):

            ?>

          <div class="col-lg-4 col-sm-6">
            <div class="attorney-card">
              <a href="lawyerDetail.php?lawyer_id=<?php echo ($row['id']) ?>">
                <img src="assets/img/attorney/attorney1.jpg" alt="Image" />
              </a>
              <div class="attorney-card-text">
                <h3><a href="lawyerDetail.php?lawyer_id=<?php echo ($row['id']) ?>"><?php echo ($row['lawyer_name']) ?></a></h3>
                <p>Senior Attorney</p>

                <div class="about-btn">
                  <a href="practice.php?lawyer_id=<?php echo ($row['id']) ?>" class="default-btn-one">Book Now</a>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; ?>

         

          <!-- Pagination -->
          <!-- <div class="col-lg-12 col-md-12">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="team.html" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="team.html">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="team.html">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="team.html">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="team.html" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </div> -->
        </div>
      </div>
    </div>
    <!-- End Attorney Area -->

    <!-- Footer Area-->
    <footer class="footer-area pt-100 pb-70">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 col-sm-6">
            <div class="footer-widget">
              <div class="logo">
                <img src="assets/img/logo-white.png" alt="logo" />
              </div>
              <p>
                Ston Bridge is a leading law firm with 25 years of experience,
                dedicated to providing expert legal services across various
                fields. Our commitment to justice and client success makes us
                your trusted legal partner.
              </p>

              <ul class="footer-socials">
                <li>
                  <a href="https://www.facebook.com/login/" target="_blank">
                    <i class="lab la-facebook-f"></i>
                  </a>
                </li>
                <li>
                  <a href="https://twitter.com/i/flow/login" target="_blank">
                    <i class="lab la-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.instagram.com/" target="_blank">
                    <i class="lab la-instagram"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.google.co.uk/" target="_blank">
                    <i class="lab la-google-plus"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-lg-2 col-sm-6">
            <div class="footer-widget">
              <h3>Quick Links</h3>

              <ul class="footer-text">
                <li>
                  <a href="index.html">
                    <i class="las la-star"></i>
                    Home
                  </a>
                </li>
                <li>
                  <a href="about.html">
                    <i class="las la-star"></i>
                    About Us
                  </a>
                </li>
                <li>
                  <a href="services.html">
                    <i class="las la-star"></i>
                    Our Services
                  </a>
                </li>
                <li>
                  <a href="caseStudy.html">
                    <i class="las la-star"></i>
                    Case Study
                  </a>
                </li>
                <li>
                  <a href="blog.html">
                    <i class="las la-star"></i>
                    Our Blog
                  </a>
                </li>

                <li>
                  <a href="team.html">
                    <i class="las la-star"></i>
                    Our Attorneys
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-lg-2 col-sm-6">
            <div class="footer-widget pl-50">
              <h3>Services</h3>

              <ul class="footer-text">
                <li>
                  <a href="team.html">
                    <i class="las la-star"></i>
                    Civil Law
                  </a>
                </li>
                <li>
                  <a href="team.html">
                    <i class="las la-star"></i>
                    Family Law
                  </a>
                </li>
                <li>
                  <a href="team.html">
                    <i class="las la-star"></i>
                    Cyber Law
                  </a>
                </li>
                <li>
                  <a href="team.html">
                    <i class="las la-star"></i>
                    Education Law
                  </a>
                </li>
                <li>
                  <a href="team.html">
                    <i class="las la-star"></i>
                    Business Law
                  </a>
                </li>
                <li>
                  <a href="team.html">
                    <i class="las la-star"></i>
                    Investment Law
                  </a>
                </li>
                <li>
                  <a href="team.html">
                    <i class="las la-star"></i>
                    Criminal Law
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6">
            <div class="footer-widget">
              <h3>Contact Info</h3>

              <ul class="info-list">
                <li>
                  <i class="las la-phone"></i>
                  <a href="tel:+44 02033936789">+44 02033936789</a>
                </li>
                <li>
                  <i class="las la-envelope"></i>

                  <span class="__cf_email__">info@stonebridgelegal.co.uk</span>
                </li>
                <li>
                  <i class="las la-map-marker-alt"></i>
                  Room 12, 4th Floor, Boardman House, 64 Broadway, E15 1NT
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer Area -->

    <!-- Footer bottom Area -->
    <div class="footer-bottom">
      <div class="container">
        <p>
          © Atorn is Proudly Owned by
          <a href="#" target="_blank">Team Cipher</a>
        </p>
      </div>
    </div>
    <!-- End Footer bottom Area -->

    <!-- Go Top -->
    <div class="go-top">
      <i class="las la-hand-point-up"></i>
    </div>
    <!-- End Go Top -->

    <!-- jQuery first, then Bootstrap JS -->
    <script
      data-cfasync="false"
      src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
    ></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Meanmenu JS -->
    <script src="assets/js/meanmenu.min.js"></script>
    <!-- Magnific JS -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Odometer JS -->
    <script src="assets/js/odometer.min.js"></script>
    <!-- Appear JS -->
    <script src="assets/js/jquery.appear.js"></script>
    <!-- Form Validator JS -->
    <script src="assets/js/form-validator.min.js"></script>
    <!-- Contact JS -->
    <script src="assets/js/contact-form-script.js"></script>
    <!-- Ajaxchimp JS -->
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/custom.js"></script>
  </body>

  <!-- Mirrored from templates.hibootstrap.com/atorn/default/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Mar 2025 18:41:49 GMT -->
</html>
