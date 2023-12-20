<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Challenge Digital Mali</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/logocdm.jpeg') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts --> 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <img src="{{ asset('assets/img/logocdm.jpeg') }}" alt="">
        <span>CDM</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
          <li><a class="nav-link scrollto" href="#about">Comment participer </a></li> 
          <li><a class="nav-link scrollto" href="#eligible">Critères d'éligibilité </a></li>
          <li><a class="nav-link scrollto" href="#detailschallenge">Détails du challenge</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="/register">Postuler</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Challenge Digital Mali </h1>
          <h2 data-aos="fade-up" data-aos-delay="400">24 heures pour transformer vos idées en réalité</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#detailschallenge" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Tout savoir sur le challenge</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{ asset('assets/img/felipe.jpg') }}" class="img-fluid imgbord" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
  
  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Comment participer</h3>
              <h4 data-aos="fade-up" data-aos-delay="400" class="justText">Vous êtes jeune développeur, diplômé en finances, ou en commerce et communication ? </h4>
              <h4 data-aos="fade-up" data-aos-delay="400" class="justText">Tentez votre chance au <strong  class="blueText">CHALLENGE DIGITAL MALI</strong>  et faites partie des innovateurs qui façonneront le futur du numérique au Mali.</h4><br>
<br>

              <h3>Comment s'inscrire</h3> 
              <p class="justText">Inscrivez-vous individuellement et, si vous êtes sélectionné, vous serez assigné à une équipe le jour du lancement. C'est une opportunité unique de travailler avec des coéquipiers aux compétences diverses, de construire un réseau professionnel et de vivre une expérience inoubliable.

              </p>
              <div class="text-center text-lg-start">
                <a href="#eligible" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Plus d'infos</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{ asset('assets/img/desol.jpg') }}" class="img-fluid imgbord" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Détails du Challenge</h2>
          <p>Vous aurez 24 heures en équipe</p>
        </header>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <img src="{{ asset('assets/img/values-1.png') }}" class="img-fluid" alt="">
              <h3>Pour conceptualiser</h3>
              <!-- <p>Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatis id.</p> -->
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <img src="{{ asset('assets/img/values-2.png') }}" class="img-fluid" alt="">
              <h3>Pour développer un MVP</h3>
              <!-- <p>Repudiandae amet nihil natus in distinctio suscipit id. Doloremque ducimus ea sit non.</p> -->
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <div class="box">
              <img src="{{ asset('assets/img/values-3.png') }}" class="img-fluid" alt="">
              <h3>Pour préparer un pitch qui convaincra notre jury</h3>
              <!-- <p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p> -->
            </div>
          </div>

          <p class="mt-4"><p><strong>Les équipes gagnantes formeront des startups qui seront soutenues pendant un an, avec des enveloppes financières pour les trois premiers projets de 10, 8 et 5 millions de FCFA.</strong> </p></p>

        </div>

      </div>

    </section><!-- End Values Section -->

   
    <!-- ======= Features Section ======= -->
    <section id="eligible" class="features">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>critères d'éligibilité</h2>
          <p>CRITÈRES D'ÉLIGIBILITÉ </p>
        </header>

        <div class="row">

          <div class="col-lg-4">
            <img src="{{ asset('assets/img/features.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-8 mt-5 mt-lg-0 d-flex">
            <div class="row align-self-center gy-4">

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3 class="justText">Être âgé de 18 à 35 ans.</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3 >Avoir une expertise ou une formation dans l'un des domaines suivants : <br> <br> 
                    <ul>
                      <li>développement backend/fullstack</li> <br>
                      <li>développement frontend/fullstack</li> <br>
                      <li>études commerciales ou communication</li>
                      <li>finances</li>
                    </ul>  
                  </h3>
                  <div>
                    
                  </div>
                </div>
                  
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Être disponible pour s'engager à temps plein sur le projet en cas de sélection.</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Ne pas avoir d'entreprise existante ou d'emploi à temps plein qui interférerait avec l'engagement dans le challenge</h3>
                </div>
              </div>

            </div>
          </div>

        </div> <!-- / row -->

        <!-- Feature Icons -->
        <div class="row feature-icons" id="detailschallenge" data-aos="fade-up">
          <h3>Tout savoir sur le challenge</h3>

          <div class="row">

            <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
              <img src="{{ asset('assets/img/features-3.png') }}" class="img-fluid p-4" alt="">
            </div>

            <div class="col-xl-8 d-flex content">
              <div class="row align-self-center gy-4">

                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="ri-line-chart-line"></i>
                  <div>
                    <h4>Détails du Challenge</h4>
                    <p class="justText">Le défi ? <br> Vous aurez 24 heures en équipe pour conceptualiser, développer un MVP et préparer un pitch qui convaincra notre jury.<br> Les équipes gagnantes formeront des startups qui seront soutenues pendant un an, avec des enveloppes financières pour les trois premiers projets de 10, 8 et 5 millions de FCFA.</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="ri-stack-line"></i>
                  <div>
                    <h4>Jury et Critères </h4>
                    <p class="justText">Notre jury de renom évaluera les propositions sur la base de l'innovation, <br> de la faisabilité technique, et de l'impact social. <br> La clarté de la présentation et la capacité à convaincre sont aussi cruciales que la qualité technique du MVP.</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="ri-brush-4-line"></i>
                  <div>
                    <h4>Mentorat et Ressources </h4>
                    <p class="justText">Nos mentors dévoués vous guideront dans l'élaboration de votre MVP. <br> Vous bénéficierez de leurs conseils, de leur expertise et des ressources nécessaires pour exceller.</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="ri-magic-line"></i>
                  <div>
                    <h4>Lieu et Dates</h4>
                    <p class="justText">Le challenge aura lieu dans le prestigieux Centre International de Conférences de Bamako. Notez les dates clés et préparez-vous pour une aventure enrichissante !</p>
                  </div>
                </div>

                <!-- <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="ri-command-line"></i>
                  <div>
                    <h4>Molestiae dolor</h4>
                    <p>Et fuga et deserunt et enim. Dolorem architecto ratione tensa raptor marte</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                  <i class="ri-radar-line"></i>
                  <div>
                    <h4>Explicabo consectetur</h4>
                    <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>
                  </div>
                </div> -->

              </div>
            </div>

          </div>

        </div><!-- End Feature Icons -->

      </div>

    </section><!-- End Features Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Contact</h2>
          <p>Besoin d'infos ? </p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Adresse</h3>
                  <p>Sotuba ACI</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Appelez-nous</h3>
                  <p>+223 74 18 01 01</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email </h3>
                  <p>contact@cdigitalmali.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Disponible tout les jours </h3>
                  <p>Lundi - Venderdi<br>9:00  - 17:00PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <!-- <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <h4>Souscrire à notre Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Souscrire">
            </form>
          </div>
        </div>
      </div>
    </div> -->

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 col-md-12 footer-info">
            <a href="/" class="logo d-flex align-items-center">
              <img src="{{ asset('assets/img/logocdm.jpg') }}" alt="">
              <span>Challenge Digital Mali</span>
            </a>
            <!-- <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p> -->
            <div class="social-links mt-3">
              <a href="https://www.facebook.com/profile.php?id=61554710376840" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.facebook.com/profile.php?id=61554710376840" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://www.facebook.com/profile.php?id=61554710376840" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

            <div class="partenaire">
            <h3>Une initiative de l'AMRTP</h3>
          <img class="logamrtp" src="{{ asset('assets/img/amrtp.jpg') }}" alt="">
          </div>
          </div>
          

          

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Challenge Digital Mali</h4>
            <p>Sotuba ACI <br>
              <strong>Phone:</strong> +223 74 18 01 01<br>
              <strong>Email:</strong> contact@cdigitalmali.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Challenge Digital Mali</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>