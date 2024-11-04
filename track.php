
<?php include 'authenticate.php'; ?>
<?php include 'headConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Responsive Bootstrap Logistic Html Template" />
  <meta name="keywords"
    content="Trans, Aero, Bootstrap, Html, Template, Logistic, Blog, Transport, Corporate, Cargo, Truck" />
  <meta name="author" content="Vadzim Liashkevich" />

  <!-- SITE TITLE -->
  <title>PAX FREIGHT | About us</title>

  <!-- =========================
      FAV AND TOUCH ICONS  
============================== -->
  <link rel="shortcut icon" href="img/favicon.ico" />

  <!-- =========================
     STYLESHEETS   
============================== -->

  <!-- STYLES FILE -->
  <link href="css/master.css" rel="stylesheet" />

  <style>
    .tracking-section {
      padding: 30px 0;
      text-align: center;
    }

    .tracking-input {
      max-width: 400px;
      margin: 0 auto;
      display: flex;
      gap: 10px;
      padding: 15px;
    }

    .tracking-input input {
      background-color: transparent;
      width: 100%;
      padding: 10px;
      border-radius: 4px;
      border: 1px solid #ccc;
      font-size: 16px;
    }

    .tracking-results {
      background-color: #fff;
      border-radius: 8px;
      padding: 20px;
      max-width: 500px;
      margin: 20px auto;
      font-family: Arial, sans-serif;
    }

    .step-container {
      position: relative;
      padding-left: 30px;
    }

    .step-container::before {
      content: "";
      position: absolute;
      left: -2px;
      top: 5px;
      bottom: 78px;
      width: 2px;
      background-color: #00798c;
      z-index: 0;
    }

    .step {
      position: relative;
      padding: 15px 0;
      display: flex;
      align-items: center;
      z-index: 1;
    }

    .step-marker {
      position: absolute;
      left: -41px;
      top: 5px;
      width: 20px;
      height: 20px;
      background-color: #00798c;
      border-radius: 3px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      font-size: 16px;
      font-weight: bold;
    }

    .step.completed .step-marker {
      background-color: #00798c;
    }

    .step-content h4 {
      margin: 0;
      font-size: 16px;
      font-weight: normal;
      text-align: justify;
    }

    .step-content h4.current {
      font-weight: bold;
    }

    .step-content p {
      margin: 5px 0 0;
      font-size: 14px;
      color: #666;
    }

    .step-content a {
      color: #00798c;
      text-decoration: none;
      font-size: 14px;
    }

    .step-content a:hover {
      text-decoration: underline;
    }

    .error {
      color: red;
      text-align: center;
      font-size: 16px;
      font-weight: bold;
    }

    .step.hidden {
      display: none;
    }

    .step.delivered~.step::before {
      display: none;
    }
  </style>
</head>

<body>
  <!-- =========================
     PRE LOADER       
  ============================== -->

  <div class="preloader" id="preloader">
    <div class="cssload-container">
      <div class="cssload-whirlpool"></div>
    </div>
  </div>

  <!-- =========================
     END PRE LOADER       
  ============================== -->

  <!-- =========================
    TOP MAIN NAVBAR
  ============================== -->
  <div class="main-navbar main-navbar-1">
    <div class="container">
      <div class="row">
        <!-- === TOP LOGO === -->

        <div class="logo" id="main-logo">
          <div class="logo-image">
            <img src="img/logo.png" alt="" />
          </div>
          <div class="logo-text">Pax <span class="color-primary">Freight</span></div>
        </div>

        <div class="show-menu-control">
          <!-- === top search button show === -->
          <a id="show-menu" class="show-menu" href="#">
            <div class="my-btn my-btn-primary">
              <div class="my-btn-bg-top"></div>
              <div class="my-btn-bg-bottom"></div>
              <div class="my-btn-text">
                <i class="fa fa-bars"></i>
              </div>
            </div>
          </a>
        </div>

        <!-- === TOP MENU === -->

        <div class="collapse navbar-collapse main-menu main-menu-1" id="main-menu">
          <ul class="nav navbar-nav">
            <!-- === top menu item === -->
            <li class="dropdown">
              <a href="index.html">Home</a>
            </li>
            <li class="main-menu-separator"></li>
            <!-- === top menu item === -->
            <li class="dropdown">
              <a data-toggle="dropdown" href="#">Service</a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="air_freight.html">Air Freight</a>
                </li>
                <li>
                  <a href="sea_freight.html">Sea Freight</a>
                </li>
                <li>
                  <a href="customs_brokerage.html">Customs Brokerage</a>
                </li>
                <li>
                  <a href="cargo_insurance.html">Cargo Insurance</a>
                </li>
                <li>
                  <a href="move_management.html">Move Management</a>
                </li>
                <li>
                  <a href="corporate_relocations.html">Corporate Relocations</a>
                </li>
              </ul>
            </li>
            <li class="main-menu-separator"></li>
            <!-- === top menu item === -->
            <li class="active">
              <a href="about.html">About us</a>
            </li>
            <li class="main-menu-separator"></li>
            <!-- === top menu item === -->
            <li>
              <a href="#">Solutions</a>
            </li>
            <li class="main-menu-separator"></li>
            <li>
              <a href="track.html">Track</a>
            </li>
            <li class="main-menu-separator"></li>
            <!-- === top menu item === -->
            <li>
              <a href="terms.html">Inco terms</a>
            </li>
            <li class="main-menu-separator"></li>
            <!-- === top menu item === -->
            <li>
              <a href="contact.html">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- =========================
    END TOP MAIN NAVBAR
  ============================== -->

  <!-- ===================================
    PAGE HEADER
  ======================================== -->
  <div class="page-header" data-stellar-background-ratio="0.4">
    <div class="page-header-overlay"></div>
    <div class="container">
      <div class="row">
        <!-- === PAGE HEADER TITLE === -->
        <div class="page-header-title">
          <h2>TRACK SHIPMENT</h2>
        </div>

        <!-- === PAGE HEADER BREADCRUMB === -->
        <div class="page-header-breadcrumb">
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">TRACK SHIPMENT</li>
          </ol>
        </div>

        <!-- === PAGE HEADER BUTTON === -->
        <div class="page-header-button">
          <a href="contact.html">
            <div class="my-btn my-btn-primary">
              <div class="my-btn-bg-top"></div>
              <div class="my-btn-bg-bottom"></div>
              <div class="my-btn-text">GET A FREE QUOTE</div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- ===================================
    END PAGE HEADER
  ======================================== -->

  <!-- =========================
    ABOUT TEXT
  ============================== -->
  <div class="def-section about-text">
    <div class="container">
      <div class="tracking-section">
        <div class="container">
          <div class="tracking-input">
            <input type="text" id="paxId" placeholder="Enter Pax Number" required />

            <div class="my-btn my-btn-primary">
              <div class="my-btn-bg-top"></div>
              <div class="my-btn-bg-bottom"></div>
              <button class="my-btn-text" onclick="trackShipment()">Track</button>
            </div>
          </div>
          <div class="tracking-results" id="trackingResult">
            <div class="step-container" id="stepContainer"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- =========================
    END ABOUT TEXT
  ============================== -->

  <!-- ===================================
    SUBSCRIBE SECTION
  ======================================== -->
  <div class="def-section home-subscribe">
    <div class="container">
      <div class="row">
        <!-- === SUBSCRIBE TEXT === -->
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 home-subscribe-text animated wow fadeInUp"
          data-wow-duration=".5s" data-wow-offset="100">
          <span class="home-subscribe-icon"><i class="flaticon-email114"></i></span>
          SIGN UP FOR NEWSLETTER TO GET UPDATES AND NEWS
        </div>

        <!-- === SUBSCRIBE FORM === -->
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 home-subscribe-form animated wow fadeInUp"
          data-wow-duration=".5s" data-wow-delay=".3s" data-wow-offset="100">
          <form>
            <div class="home-subscribe-form-input">
              <input type="text" name="subscribe" placeholder="YOUR E-MAIL" />
            </div>
            <div class="home-subscribe-form-button">
              <button>
                <span class="my-btn my-btn-primary">
                  <span class="my-btn-bg-top"></span>
                  <span class="my-btn-bg-bottom"></span>
                  <span class="my-btn-text"> SUBSCRIBE </span>
                </span>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- ===================================
    END SUBSCRIBE SECTION
  ======================================== -->

  <!-- ===================================
    FOOTER
  ======================================== -->
  <footer class="def-section footer">
    <div class="container">
      <div class="row">
        <!-- === FOOTER COLUMN === -->
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 footer-1">
          <div class="logo with-border-bottom">
            <div class="logo-image">
              <img src="img/logo.png" alt="" />
            </div>
            <div class="logo-text">Pax <span class="color-primary">Freight</span></div>
          </div>
          <div class="footer-1-text">
            <p>
              Pax Freight Express Pvt.Ltd. <br />
              is One stop shop for all your logistics need. Do contact us for best service in the industry.
            </p>
          </div>
          <div class="footer-1-button">
            <a href="06_about.html">
              <div class="my-btn my-btn-primary">
                <div class="my-btn-bg-top"></div>
                <div class="my-btn-bg-bottom"></div>
                <div class="my-btn-text">MORE</div>
              </div>
            </a>
          </div>
        </div>

        <!-- === FOOTER COLUMN === -->
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 footer-2">
          <h4 class="with-square with-border-bottom">LINKS</h4>
          <div class="footer-2-links">
            <div class="footer-2-links-1">
              <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="about.html">About us</a></li>
              </ul>
            </div>
            <div class="footer-2-links-2">
              <ul>
                <li><a href="#">Support</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="terms.html">Terms</a></li>
              </ul>
            </div>
          </div>
          <br /><br />
          <h5 style="margin-top: 30px">Registered Address</h5>

          <p style="font-size: 10px">
            <span class="footer-3-icon"><i class="fa fa-map-marker"></i></span> Pax Freight Express Pvt. Ltd., <br />
            A 163 Prodhyogiki Appartment Plot No 11 Sector 3 Dwarka New Delhi-110075 (INDIA)
          </p>
        </div>

        <!-- === FOOTER COLUMN === -->
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 footer-3">
          <h4 class="with-square with-border-bottom">Office Address</h4>

          <div class="footer-3-adress footer-3-item">
            <span class="footer-3-icon"><i class="fa fa-map-marker"></i></span>
            Pax Freight Express Pvt. Ltd., <br />
            A 42 Ground Floor Road No. 4 Street No. 9 Mahipal Pur <br />
            New Delhi-110037 (INDIA)<br />Gst: 07AAGCP8397N1ZG<br />
            <br />
            <span class="footer-3-icon"><i class="fa fa-map-marker"></i></span>
            Pax Freight Express Pvt. Ltd., <br />
            Dubai Investment Park 1 Store No. 65-66 Leaders Camp <br />
            Dubai UAE
          </div>
        </div>

        <!-- === FOOTER COLUMN === -->
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 footer-4">
          <h4 class="with-square with-border-bottom">Phone/Email</h4>
          <div class="footer-4-widget">
            <div class="footer-3-phone footer-3-item">
              <span class="footer-3-icon"><i class="fa fa-phone"></i></span>
              Mobile: +91-9350737438
            </div>
            <div class="footer-3-fax footer-3-item">
              <span class="footer-3-icon"><i class="fa fa-fax"></i></span>
              Fax/phone: +91-11-26786163
            </div>
            <div class="footer-3-mail footer-3-item">
              <span class="footer-3-icon"><i class="fa fa-envelope"></i></span>
              E-mail: mktg@paxfreight.com
            </div>
            <br />

            <div class="footer-3-phone footer-3-item">
              <span class="footer-3-icon"><i class="fa fa-phone"></i></span>
              Dubai No.: +971 522767721
            </div>

            <div class="footer-3-mail footer-3-item">
              <span class="footer-3-icon"><i class="fa fa-envelope"></i></span>
              Dubai E-mail: akhilesh@paxfreight.com
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- ===================================
    END FOOTER
  ======================================== -->

  <!-- ===================================
    BOTTOM SECTION
  ======================================== -->
  <div class="bottom">
    <div class="container">
      <div class="row">
        <!-- === BOTTOM LEFT === -->
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bottom-1">COPYRIGHT 2016 | PAX <span
            class="color-primary">FREIGHT</span></div>

        <!-- === BOTTOM CENTER === -->
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bottom-2">
          <a href="#">
            <div class="my-btn my-btn-grey">
              <div class="my-btn-bg-top"></div>
              <div class="my-btn-bg-bottom"></div>
              <div class="my-btn-text">
                <i class="fa fa-twitter"></i>
              </div>
            </div>
          </a>
          <a href="#">
            <div class="my-btn my-btn-grey">
              <div class="my-btn-bg-top"></div>
              <div class="my-btn-bg-bottom"></div>
              <div class="my-btn-text">
                <i class="fa fa-facebook"></i>
              </div>
            </div>
          </a>
          <a href="#">
            <div class="my-btn my-btn-grey">
              <div class="my-btn-bg-top"></div>
              <div class="my-btn-bg-bottom"></div>
              <div class="my-btn-text">
                <i class="fa fa-google-plus"></i>
              </div>
            </div>
          </a>
          <a href="#">
            <div class="my-btn my-btn-grey">
              <div class="my-btn-bg-top"></div>
              <div class="my-btn-bg-bottom"></div>
              <div class="my-btn-text">
                <i class="fa fa-pinterest-p"></i>
              </div>
            </div>
          </a>
          <a href="#">
            <div class="my-btn my-btn-grey">
              <div class="my-btn-bg-top"></div>
              <div class="my-btn-bg-bottom"></div>
              <div class="my-btn-text">
                <i class="fa fa-instagram"></i>
              </div>
            </div>
          </a>
        </div>

        <!-- === BOTTOM RIGHT === -->
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bottom-3">
          <a href="#">TERM OF USE</a> | MADE BY <a href="http://www.99creative.in/" target="new"> <span
              class="color-primary">99CREATIVE</span></a>
        </div>
      </div>
    </div>
  </div>
  <!-- ===================================
    END BOTTOM SECTION
  ======================================== -->

  <!-- =========================
     SLIDE MENU
  ============================== -->
  <aside id="slide-menu" class="slide-menu">
    <!-- === CLOSE MENU BUTON === -->
    <div class="close-menu" id="close-menu">
      <i class="fa fa-close"></i>
    </div>

    <!-- === SLIDE MENU === -->
    <ul id="left-menu" class="left-menu">
      <!-- === SLIDE MENU ITEM === -->
      <li>
        <a href="index.html">Home <i class="fa fa-plus arrow"></i></a>
      </li>

      <!-- === SLIDE MENU ITEM === -->
      <li>
        <a href="air_freight.html">Service <i class="fa fa-plus arrow"></i></a>
      </li>

      <!-- === SLIDE MENU ITEM === -->
      <li>
        <a href="about.html">About us</a>
      </li>

      <!-- === SLIDE MENU ITEM === -->
      <li>
        <a href="#">Solutions<i class="fa fa-plus arrow"></i></a>
      </li>

      <!-- === SLIDE MENU ITEM === -->
      <li>
        <a href="terms.html">Terms<i class="fa fa-plus arrow"></i></a>
      </li>

      <!-- === SLIDE MENU ITEM === -->
      <li>
        <a href="contact.html">Contacts</a>
      </li>
    </ul>
  </aside>
  <!-- =========================
     END SLIDE MENU
  ============================== -->

  <!-- =========================
     BLACK OVERLAY
  ============================== -->
  <div class="black-overlay" id="black-overlay"></div>
  <!-- =========================
     END BLACK OVERLAY
  ============================== -->

  <!-- JQUERY -->
  <script src="js/jquery-1.11.3.min.js"></script>

  <!-- BOOTSTRAP -->
  <script src="js/bootstrap.min.js"></script>

  <!-- SMOOTH SCROLLING  -->
  <script src="js/smoothscroll.min.js"></script>

  <!-- STELLAR.JS FOR PARALLAX -->
  <script src="js/jquery.stellar.min.js"></script>

  <!-- SLIDER PRO  -->
  <script src="assets/slider-pro/js/jquery.sliderPro.min.js"></script>

  <!-- SCROLLSPY -->
  <script src="js/scrollspy.min.js"></script>

  <!-- WOW PLAGIN -->
  <script src="js/wow.min.js"></script>

  <!-- CAROUSEL -->
  <script src="assets/owl-carousel/owl.carousel.min.js"></script>

  <!-- VERTICAL ACCORDEON MENU -->
  <script src="js/metisMenu.min.js"></script>

  <!-- CUSTOM SCRIPT -->
  <script src="js/theme.min.js"></script>

  <script src="assets/colors/js/colors.js"></script>

  <!-- Yandex.Metrika counter -->
  <script type="text/javascript">
    (function (d, w, c) {
      (w[c] = w[c] || []).push(function () {
        try {
          w.yaCounter33369363 = new Ya.Metrika({
            id: 33369363,
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
          });
        } catch (e) { }
      });

      var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () {
          n.parentNode.insertBefore(s, n);
        };
      s.type = "text/javascript";
      s.async = true;
      s.src = "mc.yandex.ru/metrika/watch.html";

      if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
      } else {
        f();
      }
    })(document, window, "yandex_metrika_callbacks");

    //function to track the shipment

    function trackShipment() {
      const paxId = $("#paxId").val(); 
      const trackingResult = $("#trackingResult"); 

      if (paxId) {
        $.ajax({
          type: "GET",
          url: `<?= $_SESSION['api_path']; ?>/addPaxMapping/getTrackingDetailsByPaxId/${paxId}`, 
          contentType: "application/json",
          success: function (data) {
            if (data.success) {
              displayTrackingData(data); 
              trackingResult.show();
            } else {
              trackingResult.html(`<p class="error">Error: ${data.message || "No tracking information found."}</p>`);
            }
          },
          error: function (jqXHR, textStatus, errorThrown) {
            console.error("Error during AJAX request:", textStatus, errorThrown); 
            trackingResult.html(`<p class="error">Error fetching tracking details. Please try again.</p>`);
          },
        });
      } else {
        alert("Please enter a Pax ID"); 
      }
    }

    function displayTrackingData(data) {
      const trackingResult = document.getElementById("trackingResult");
      const stepContainer = document.getElementById("stepContainer");
      stepContainer.innerHTML = "";

      console.log("Display Data:", data); 
    
      const events = data.data.data?.awbEvents; 

      console.log("Events:", events); 

      if (events && events.length > 0) {
        events.reverse().forEach((event, index) => {
          const step = document.createElement("div");
          step.classList.add("step");

          step.innerHTML = `
                <div class="step-marker">✓</div>
                <div class="step-content">
                    <h4>${event.awb_history_comment}</h4>
                    <p>${new Date(event.awb_history_datetime).toLocaleDateString()}</p>
                </div>
            `;

          stepContainer.appendChild(step);

          if (index >= 3) {
            step.classList.add("hidden");
          }
        });

        const showAllLink = document.createElement("a");
        showAllLink.href = "#";
        showAllLink.innerText = "See all updates";
        showAllLink.style.display = "block";
        showAllLink.style.marginTop = "10px";

        showAllLink.onclick = (e) => {
          e.preventDefault();
          stepContainer.classList.toggle("show-all");

          if (stepContainer.classList.contains("show-all")) {
            const hiddenSteps = stepContainer.querySelectorAll(".step.hidden");
            hiddenSteps.forEach((step) => step.classList.remove("hidden"));
            showAllLink.innerText = "Show less";
          } else {
            const allSteps = stepContainer.querySelectorAll(".step");
            allSteps.forEach((step, index) => {
              if (index >= 3) {
                step.classList.add("hidden");
              }
            });
            showAllLink.innerText = "See all updates";
          }
        };
        stepContainer.appendChild(showAllLink);
      } else {
        trackingResult.innerHTML = '<p class="error">No tracking information found.</p>';
      }

      trackingResult.style.display = "block";
    }

  </script>
</body>

</html>