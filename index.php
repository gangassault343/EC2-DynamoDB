<?php
include 'config.php';
if ($_POST) {
    $timestamp = date('c'); // ISO 8601 format (Recommended)
    $dynamodb->putItem([
        'TableName' => 'users',
        'Item' => [
            'user_id' => ['S' => uniqid()],
            'name'    => ['S' => $_POST['name']],
            'email'   => ['S' => $_POST['email']],
            'contactno'   => ['S' => $_POST['contactno']],
            'message'   => ['S' => $_POST['message']],
            'created_at' => ['S' => $timestamp]   // ✅  Timestamp Added
        ]
    ]);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data
    $success = true; // Assume success for this example

    if ($success) {
        echo '<script type="text/javascript">';
        echo 'document.addEventListener("DOMContentLoaded", function() {';
        echo 'Swal.fire({';
        echo '  title: "Thank You Vey Much",';
        echo '  text: "I would love to hear more 😊",';
        echo '  icon: "success",';
        echo '  confirmButtonText: "OK"';
        echo '}) .then((value) => {
        if (value) {
        window.location.href = "index.php";
        }
        });';
        echo '});';
        echo '</script>';
    } else {
        echo '<script type="text/javascript">';
        echo 'document.addEventListener("DOMContentLoaded", function() {';
        echo 'Swal.fire({';
        echo '  title: "Error!",';
        echo '  text: "There was an error processing your request.",';
        echo '  icon: "error"';
        echo '});';
        echo '});';
        echo '</script>';
    }
}
    header("Location: index.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>ArunCloudWhiz</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

<!-------gallery----->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">

  <!-------gallery----->

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename"><img src="assets/img/cloud.png"></img>ArunCloudWhiz</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active" >Home<br></a></li>
          <li><a href="#about" >About</a></li>
          <li><a href="#resume" >Resume</a></li>
          <li><a href="#portfolio" >Gallery</a></li>

              <!-------
              <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
              -->


          <li><a href="#contact" >Contact</a></li>
          <li><a href="view.php" >Admin</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="assets/img/hero-img.jpg" alt="" data-aos="fade-in">

      <div class="container d-flex flex-column align-items-center justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
        <h2>I am Arun M L</h2>
        <p><span class="typed" data-typed-items="AWS Solutions Architect, Cyber Law Practioner, System Administrator, Cyber Warrior, Sergeant in IAF (Retd), Yuvacharya - Art of living"></span></p>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-md-6">

            <div class="row justify-content-between gy-4">
              <div class="col-lg-5">
                <img src="assets/img/DSC_0471.JPG" class="img-fluid" alt="">
              </div>
              <div class="col-lg-7 about-info">
                <p><strong>Name: </strong> <span>ARUN M L</span></p>
                <p><strong>Profile: </strong> <span>System Admin</span></p>
                <p><strong>Email: </strong> <span>aarjaappu@outlook.com</span></p>
                <p><strong>Phone: </strong> <span>7087046932</span></p>
              </div>
            </div>

            <div class="skills-content skills-animation">

              <h5>Skills</h5>

              <div class="progress">
                <span class="skill"><span>HTML</span> <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><!-- End Skills Item -->

              <div class="progress">
                <span class="skill"><span>Cyber Security</span> <i class="val">80%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><!-- End Skills Item -->

              <div class="progress">
                <span class="skill"><span>AWS</span> <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><!-- End Skills Item -->

              <div class="progress">
                <span class="skill"><span>Docker</span> <i class="val">85%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><!-- End Skills Item -->
              <div class="progress">
                <span class="skill"><span>Terraform</span> <i class="val">85%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><!-- End Skills Item -->

               <div class="progress">
                <span class="skill"><span>Jenkins</span> <i class="val">55%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><!-- End Skills Item -->
               <div class="progress">
                <span class="skill"><span>Photoshop</span> <i class="val">50%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><!-- End Skills Item -->
               <div class="progress">
                <span class="skill"><span>GIMP</span> <i class="val">50%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><!-- End Skills Item -->

            </div>
          </div>

          <div class="col-md-6">
            <div class="about-me">

              <p align="justify">
                <b><u>ABOUT ME</b></u><br>
                &nbsp;&nbsp;&nbsp;Experienced IT professional with over 20 years of distinguished service
                in the Indian Air Force, specializing in System Administration, Cybersecurity, Networking,
                and Cloud Computing. Skilled in managing and securing complex, mission-critical IT infrastructures
                across diverse operational environments. Proven ability to implement robust cybersecurity protocols,
                 optimize system performance, and lead cross-functional teams. Committed to leveraging cutting-edge
                 technologies to enhance security, efficiency, and operational readiness.
                <br><br>
                &nbsp;&nbsp;&nbsp;Certified in AWS Administration, with additional expertise in Python for Data Science,
                modern application development, Ethical Hacking, Network and Defence Essentials, and cybersecurity
                warfare training. Holds a Bachelor’s Degree in Computer Applications, a Diploma in Cyber Law, and
                a Diploma in Telecommunications, reflecting a well-rounded understanding of both the technical and
                legal aspects of cybersecurity.
                <br><br>
                &nbsp;&nbsp;&nbsp;Passionate about driving innovation and operational excellence. Currently seeking to contribute to a
                dynamic multinational company where I can apply my skills on a global scale and continue to grow in
                the evolving tech landscape.
              </p>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <div class="container">
        <div class="row">
          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Summary</h3>

            <div class="resume-item pb-0">
              <h4>Indian Air Force (IAF)</h4>
              <p align="justify"><em>I served as a Sergeant in Indian Air Force. I put up 20 years of distinguished service,
                I was in-charge of Web and File services, Cyber warfare, Audit & assessment,
                Centralized Internet Access Server (Cyberoam & Fortinet - Unified Threat Mangement)
                and AR/VR (Augumented Reality & Virtual Reality) simulators. Also, I have hands on experience on
                few Aircraft IT System and Simulators</em></p>
             <!--  <ul>
                <li>Portland par 127,Orlando, FL</li>
                <li>(123) 456-7891</li>
                <li>alice.barkley@example.com</li>
              </ul> Edn Resume Item -->
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Bachelor in Computer Application</h4>
              <p><em>Swami Vivekanand Subharti University, UP</em></p>
                 </div><!-- Edn Resume Item -->

            <div class="resume-item">
              <h4>Diploma in Cyber Law</h4>
              <p><em>Asian School of Cyber Law, Pune</em></p>
                     </div><!-- Edn Resume Item -->
            <div class="resume-item">
              <h4>Diploma in Tele Communication</h4>
              <p><em>Indira Gandhi National Open University</em></p>
                 </div><!-- Edn Resume Item -->
                 <div class="resume-item">
              <h4>Associate Degree in Science</h4>
              <p><em>Indira Gandhi National Open University</em></p>
                 </div><!-- Edn Resume Item -->
                 <div class="resume-item">
              <h4>Pre-University (10 + 2)</h4>
              <p><em>Department of Pre-University Education, Karnataka</em></p>
                 </div><!-- Edn Resume Item -->
                 <div class="resume-item">
              <h4>Matriculation</h4>
              <p><em>Secondary Education Examination Board, Karnataka</em></p>
                 </div><!-- Edn Resume Item -->

          </div>

          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
            <h3 class="resume-title">Professional IT Certifications</h3>
            <div class="resume-item">
              <h4>AWS Certified Solutions Architect</h4>
            <!---<h4>Microsoft Azure Associate</h4> --->
              <h4>Python for Data Science, IIT Madras</h4>
               <h4>Introduction to Modern Application Development, IIT Madras</h4>
                <h4>Basic Information Warfare, IW School, Bengaluru</h4>
                  <h4>Ethical Hacking Essentials, EC-Council</h4>
                  <h4>Network Defense Essentials, EC-Council</h4>
                  <h4>Digital Forensic Essentials, EC-Council</h4>
                  <h4>SQL Injection Attacks, EC-Council</h4>
                  <h4>Website Hacking Techniques, EC-Council</h4>
                  <h4>Introduction to DarkWeb,Anonimity & Cryptocurrency, EC-Council</h4>
                  <h4>Getting Started with Open Source Intelligence Using Windows Host, EC-Council</h4>
                  <h4>Cisco LABS Crash Course, EC-Council</h4>
                 <h4>Network Management & System administration, HCL Infosystems</h4>
                  <h4>Social Media & Smartphone Security, IW School, Bengaluru</h4>
                  <h4>Internet Security, IW School, Bengaluru</h4>
                  <h4>Web Designing (HTML,CSS,JS,Jquery,PHP,Mysql), Seed, Pune</h4>
                  <h4>Information Security & Server Administration, C-DAC, Mohali</h4>
                  <h4>Basic Hardware & OS Management, C-DAC, Mohali</h4>
                  <h4>Cyber Security,Infowiz, Bathinda</h4>
                  <h4>Security Management of Strategic Installations, IGNOU</h4>

            </div><!-- Edn Resume Item -->




          </div>

        </div>

      </div>

    </section><!-- /Resume Section -->





    </section><!-- /Services Section -->


        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">
      <!-------gallery----->
  <div class="photo-gallery">


            <div class="row photos">
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="/assets/img/certificates/iw_school.png" data-lightbox="photos"><img class="img-fluid" src="/assets/img/certificates/iw_school.png" style= "border-radius: 10%; border: 4px solid gold;width:300px;height:180px;"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="/assets/img/certificates/cdac1_pic.png" data-lightbox="photos"><img class="img-fluid" src="/assets/img/certificates/cdac1_pic.png" style= "border-radius: 10%; border: 4px solid gold;width:300px;height:180px;"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="/assets/img/certificates/cdac2_pic.png" data-lightbox="photos"><img class="img-fluid" src="/assets/img/certificates/cdac2_pic.png" style= "border-radius: 10%; border: 4px solid gold;width:300px;height:180px;"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="/assets/img/certificates/aws.jpg" data-lightbox="photos"><img class="img-fluid" src="/assets/img/certificates/aws.jpg" style= "border-radius: 10%; border: 4px solid gold;width:300px;height:180px;"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="/assets/img/certificates/linux.png" data-lightbox="photos"><img class="img-fluid" src="/assets/img/certificates/linux.png" style= "border-radius: 10%; border: 4px solid gold;width:300px;height:180px;"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="/assets/img/certificates/ascl.png" data-lightbox="photos"><img class="img-fluid" src="/assets/img/certificates/ascl.png" style= "border-radius: 10%; border: 4px solid gold;width:300px;height:180px;"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="/assets/img/certificates/ignou1.png" data-lightbox="photos"><img class="img-fluid" src="/assets/img/certificates/ignou1.png" style= "border-radius: 10%; border: 4px solid gold;width:300px;height:180px;"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="/assets/img/certificates/ignou2.png" data-lightbox="photos"><img class="img-fluid" src="/assets/img/certificates/ignou2.png" style= "border-radius: 10%; border: 4px solid gold;width:300px;height:180px;"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="/assets/img/certificates/ignou3.png" data-lightbox="photos"><img class="img-fluid" src="/assets/img/certificates/ignou3.png" style= "border-radius: 10%; border: 4px solid gold;width:300px;height:180px;"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="/assets/img/certificates/nptel1.png" data-lightbox="photos"><img class="img-fluid" src="/assets/img/certificates/nptel1.png" style= "border-radius: 10%; border: 4px solid gold;width:300px;height:180px;"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="/assets/img/certificates/nptel2.png" data-lightbox="photos"><img class="img-fluid" src="/assets/img/certificates/nptel2.png" style= "border-radius: 10%; border: 4px solid gold;width:300px;height:180px;"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="/assets/img/certificates/cdac1.png" data-lightbox="photos"><img class="img-fluid" src="/assets/img/certificates/cdac1.png" style= "border-radius: 10%; border: 4px solid gold;width:300px;height:180px;"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="/assets/img/certificates/cdac2.png" data-lightbox="photos"><img class="img-fluid" src="/assets/img/certificates/cdac2.png" style= "border-radius: 10%; border: 4px solid gold;width:300px;height:180px;"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="/assets/img/certificates/iwschool1.png" data-lightbox="photos"><img class="img-fluid" src="/assets/img/certificates/iwschool1.png" style= "border-radius: 10%; border: 4px solid gold;width:300px;height:180px;"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="/assets/img/certificates/iwschool2.png" data-lightbox="photos"><img class="img-fluid" src="/assets/img/certificates/iwschool2.png" style= "border-radius: 10%; border: 4px solid gold;width:300px;height:180px;"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="/assets/img/certificates/iwschool3.png" data-lightbox="photos"><img class="img-fluid" src="/assets/img/certificates/iwschool3.png" style= "border-radius: 10%; border: 4px solid gold;width:300px;height:180px;"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="/assets/img/certificates/hcl.png" data-lightbox="photos"><img class="img-fluid" src="/assets/img/certificates/hcl.png" style= "border-radius: 10%; border: 4px solid gold;width:300px;height:180px;"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="/assets/img/certificates/EthicalHackingEssentials.png" data-lightbox="photos"><img class="img-fluid" src="/assets/img/certificates/EthicalHackingEssentials.png" style= "border-radius: 10%; border: 4px solid gold;width:300px;height:180px;"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="/assets/img/certificates/DigitalForensicEssentials.png" data-lightbox="photos"><img class="img-fluid" src="/assets/img/certificates/DigitalForensicEssentials.png" style= "border-radius: 10%; border: 4px solid gold;width:300px;height:180px;"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="/assets/img/certificates/NetworkDefenseEssentials.png" data-lightbox="photos"><img class="img-fluid" src="/assets/img/certificates/NetworkDefenseEssentials.png" style= "border-radius: 10%; border: 4px solid gold;width:300px;height:180px;"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="/assets/img/certificates/SQLInjectionAttacts.png" data-lightbox="photos"><img class="img-fluid" src="/assets/img/certificates/SQLInjectionAttacts.png" style= "border-radius: 10%; border: 4px solid gold;width:300px;height:180px;"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="/assets/img/certificates/websiteHackingTechniques.png" data-lightbox="photos"><img class="img-fluid" src="/assets/img/certificates/seed.png" style= "border-radius: 10%; border: 4px solid gold;width:300px;height:180px;"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="/assets/img/certificates/GettingStartedWithOpenSourceIntelligenceUsingWindowsHost.png" data-lightbox="photos"><img class="img-fluid" src="/assets/img/certificates/GettingStartedWithOpenSourceIntelligenceUsingWindowsHost.png" style= "border-radius: 10%; border: 4px solid gold;width:300px;height:180px;"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="/assets/img/certificates/IntroductionToDarkWebAnonimityandCryptocurrency.png" data-lightbox="photos"><img class="img-fluid" src="/assets/img/certificates/IntroductionToDarkWebAnonimityandCryptocurrency.png" style= "border-radius: 10%; border: 4px solid gold;width:300px;height:180px;"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="/assets/img/certificates/CiscoLABSCrashCourse.png" data-lightbox="photos"><img class="img-fluid" src="/assets/img/certificates/CiscoLABSCrashCourse.png"style= "border-radius: 10%; border: 4px solid gold;width:300px;height:180px;"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="/assets/img/certificates/seed.png" data-lightbox="photos"><img class="img-fluid" src="/assets/img/certificates/GettingStartedWithOpenSourceIntelligenceUsingWindowsHost.png" style= "border-radius: 10%; border: 4px solid gold;width:300px;height:180px;"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="/assets/img/certificates/infowiz.png" data-lightbox="photos"><img class="img-fluid" src="/assets/img/certificates/infowiz.png" style= "border-radius: 10%; border: 4px solid gold;width:300px;height:180px;"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="/assets/img/certificates/saylor.png" data-lightbox="photos"><img class="img-fluid" src="/assets/img/certificates/saylor.png" style= "border-radius: 10%; border: 4px solid gold;width:300px;height:180px;"></a></div>

        </div>
    </div>

<!-------gallery----->



    </section><!-- /Portfolio Section -->




    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>I AM EXCITED TO HEAR FROM YOU, PLEASE LEAVE YOUR MESSAGE!<span style='font-size:25px;'>&#128522;</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="info-wrap" data-aos="fade-up" data-aos-delay="200">
          <div class="row gy-5">

            <div class="col-lg-4">
              <div class="info-item d-flex align-items-center">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>Mysore, Karnataka</p>
                </div>
              </div>
            </div><!-- End Info Item -->

            <div class="col-lg-4">
              <div class="info-item d-flex align-items-center">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call Me On</h3>
                  <p>+91-7087046932</p>
                </div>
              </div>
            </div><!-- End Info Item -->

            <div class="col-lg-4">
              <div class="info-item d-flex align-items-center">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Me On</h3>
                  <p>aarjaappu@outlook.com</p>
                </div>
              </div>
            </div><!-- End Info Item -->

          </div>
        </div>

        <!-- Form -->
            <form  method="POST" >


            <div class="row gy-4">
            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" placeholder="Your Name" required="true">
      </div>
       <div class="col-md-6">
            <input type="text" class="form-control" name="contactno" placeholder="Enter your Mobile Number" required="true" maxlength="10" pattern="[0-9]+">
        </div>

         <div class="col-md-12">
                <input type="email" class="form-control" name="email" placeholder="Enter your Email id" required="true">
        </div>

                 <div class="col-md-12">
            <textarea class="form-control" name="message" placeholder="Enter Your Message" required="true"></textarea>
        </div>
                  <div class="col-md-12 text-center">
      <div class="col-md-12">
              <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Send Message</button>

          </div>
        </div>
        </div>
    </form>
               <!-- Form -->



    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer accent-background">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">ArunCloudWhiz.in</strong> <span>All Rights Reserved</span></p>
      </div>
      <div class="copyright text-center ">
        <strong class="px-1 sitename">Website hosted using <img src="/assets/img/docker.png" style="height:40px; width:60px;"></img> containers</strong>
      </div>
      <!--<div class="social-links d-flex justify-content-center">
        <a href="#"><i class="bi bi-twitter-x"></i></a>
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a>
        <a href="#"><i class="bi bi-linkedin"></i></a>
      </div>
      ---->
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

<!-------gallery----->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-------gallery----->

</body>

</html>
