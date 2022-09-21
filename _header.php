<?php
$title = $title ?? 'High-Quality Training Data for Machine Learning - Quantigo AI';
$meta_desc = $meta_desc ?? 'Quantigo AI provides a fully managed data annotation solution for your machine learning training data needs. Leverage our annotation experts to create accurate AI models!';
$meta_keywords = $meta_keywords ?? 'machine learning data training, training data for machine learning, training data for ai, ai training data';
$covid_banner = $covid_banner ?? false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    
  <title>
    <?php echo $title; ?>
    
  </title>
    
  <!-- SEO Meta Tags -->
  <!-- Primary Meta Tags -->
  <meta name="title" content="<?php echo $title; ?>">
  <meta name="description" content="<?php echo $meta_desc; ?>">
  <meta name="keywords" content="<?php echo $meta_keywords; ?>">
  <meta name="robots" content="index, follow">
  <script src='https://www.google.com/recaptcha/api.js'></script>
  
  <link rel="canonical" href="https://www.quantigo.ai/" />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://quantigo.ai/">
  <meta property="og:title" content="High-Quality Training Data for Machine Learning">
  <meta property="og:description" content="Quantigo AI is a fully managed data labeling service. We promise to deliver high-quality training data to your AI needs. A complete solution for your innovations.">
  <meta property="og:image" content="https://quantigo.ai/images/social.jpg">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://quantigo.ai/">
  <meta property="twitter:title" content="High-Quality Training Data for Machine Learning">
  <meta property="twitter:description" content="Quantigo AI is a fully managed data labeling service. We promise to deliver high-quality training data to your AI needs. A complete solution for your innovations.">
  <meta property="twitter:image" content="https://quantigo.ai/images/social.jpg">
  
  <!-- Styles -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css.map">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Spartan:wght@400;500;700&display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.3.8/css/swiper.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.7/css/intlTelInput.css">
  <link rel="stylesheet" href="/css/styles.css">   
  <link rel="stylesheet" href="/css/responsive.css">
  <link rel="stylesheet" href="/css/grid.css">
  <link rel="stylesheet" href="/css/slick.css">

	<!-- Favicon  -->
  <link rel="icon" href="/images/favicon.png">
    
<!--
  <meta name="google-site-verification" content="uvnTIOLexGQKyXhI6e2x_tkHQ6NQRUtvBs90cW_l9Rs" />
  <meta name="msvalidate.01" content="39AE69EEBEE095B4AB9D07787E63A5B5" />
  <!-- Global site tag (gtag.js) - Google Analytics
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-173911282-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-173911282-1');
  </script>
-->
</head>

<body data-spy="scroll" data-target=".fixed-top">

	<div class="spinner-wrapper">
    <div class="spinner">
      <div class="bounce1"></div>
      <div class="bounce2"></div>
      <div class="bounce3"></div>
    </div>
  </div>
  
  <!-- Details Lightbox-->
  <div id="details-lightbox-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
    <div class="container">
      <div class="row">
        <button title="Close (Esc)" type="button" class="mfp-close x-button">x</button>
        <div class="col-lg-8 lb_col2">
          <div class="col-lg-9 center-m">
            <h4>Get In Touch</h4>
            <p>Feel free to drop us a line below!</p>
            <!-- Contact Form -->
            <form onsubmit="subscribe(event, '#contact-lightbox')" id="contact-lightbox">
              <input type="hidden" name="type" value="Contact">
              <div class="form-group">
                <input id="lb_input" type="text" class="form-control-input" id="cname" name="business" required>
                <label id="lb_lebel" class="label-control" for="cname" name="business">Business Name</label>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <input id="lb_input" type="email" class="form-control-input" id="cemail" name="email" required>
                <label id="lb_lebel" class="label-control" for="cemail" name="email">Email</label>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <input style="padding-top: 0.3rem;" type="phone" class="form-control-input phone-input" id="lb_input" name="phone" placeholder="Phone No" required>
                <div class="phone-error hide">INVALID NUMBER</div>
                <div class="phone-success hide">VALID NUMBER</div>
                <div class="help-block with-errors"></div>
              </div>
              <select style="display: none" id="test" name="test[]" multiple size = 6></select>
              <div class="form-group">
                <div class="multiselect lb_input" id="countries" multiple="multiple" data-target="multi-0" name="countries">
                  <div class="title noselect">
                    <span id="annotation-type" style="color: #a9a9a9;" class="text">Annotation Type</span>
                    <span class="close-icon">&times;</span>
                    <span class="expand-icon">&plus;</span>
                  </div>
                  <div class="container lb_input">
                    <option value="Bounding Boxes">Bounding Boxes</option>
                    <option value="Cuboid Annotation">Cuboid Annotation</option>
                    <option value="Polygon Annotation">Polygon Annotation</option>
                    <option value="Categorization">Categorization</option>
                    <option value="Semantic Segmentation">Semantic Segmentation</option>
                    <option value="Video Annotation">Video Annotation</option>
                    <option value="Keypoint Annotation">Keypoint Annotation</option>
                    <option value="Line Annotation">Line Annotation</option>
                    <option value="Others">Others</option>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control-textarea txt_ex" id="cmessage" name="msg" required></textarea>
                <label id="lb_lebel" class="label-control" for="cmessage">Tell us your requirements and we will get it sorted.</label>
                <div class="help-block with-errors"></div>
              </div>
			  <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="6Ldof_kbAAAAAGZbBl-KeK0LBlUzBk8XHHnSniH2"></div>
               </div>
              <div class="form-group">
                <button type="submit"  name="submit" class="form-control-submit-button">Let’s Talk</button>
              </div>
              <div class="form-message">
                <div id="cmsgSubmit" class="h3 text-center hidden"></div>
              </div>
            </form>
            <!-- end of contact form -->
          </div>
        </div>
        <div class="col-lg-4 lb_contact">
          <h5>Contact Information</h5>
          <ul class="menu_lbx">
            <li><i class="fas fa-comment-dots"></i><a href="mailto:sales@quantigo.ai">sales@quantigo.ai</a></li>
            <li><i class="fas fa-info-circle"></i><a href="mailto:info@quantigo.ai">info@quantigo.ai</a></li>
          </ul>
          <div class="social_p">
            <span class="fa-stack social_icon">
              <a href="https://www.linkedin.com/company/quantigoai">
                <i class="fab fa-linkedin fa-stack-1x"></i>
              </a>
            </span>              
            <span class="fa-stack social_icon">
              <a href="https://twitter.com/quantigoai">
                <i class="fab fa-twitter-square fa-stack-1x"></i>
              </a>
            </span>
          </div>
        </div>
      </div>
    </div> <!-- end of col -->
  </div> <!-- end of row -->
  </div> <!-- end of container -->
  </div> <!-- end of lightbox-basic -->
  <!-- end of details lightbox -->
  
  <div class="alert alert-dismissible alert_index" <?php echo $covid_banner?'':'style="display:none"; '; ?>role="alert">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <p><strong>Coronavirus (COVID-19) - All operations are normal.</strong> We expect no operational impacts to our annotation services or business functions at this time.</p>
	</div>
  
  <!-- Navigation -->
  <nav id="myHeader" class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <!-- Image Logo -->
    <a class="navbar-brand logo-image" href="/"><img src="/images/logo.svg" alt="Quantigo AI"></a>
    <!-- Mobile Menu Toggle Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-awesome fas fa-bars"></span>
      <span class="navbar-toggler-awesome fas fa-times"></span>
    </button>
    <!-- end of mobile menu toggle button -->
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link page-scroll" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <!-- Dropdown Menu 1 -->          
        <li class="nav-item dropdown">
          <a class="nav-link page-scroll" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Products</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/products/annotation-service"><span class="item-text">Annotation Service</span></a>
            <div class="dropdown-items-divide-hr"></div>
            <a class="dropdown-item" href="/products/annotation-platform"><span class="item-text">Annotation Platform</span></a>
            <div class="dropdown-items-divide-hr"></div>
            <a class="dropdown-item" href="/products/back-office"><span class="item-text">Back Office Servics</span></a>
            <div class="dropdown-items-divide-hr"></div>
          </div>
        </li>
        <!-- end of dropdown menu -->
        <!-- Dropdown Menu 2 -->          
        <li class="nav-item dropdown">
          <a class="nav-link page-scroll" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Use-Cases</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/use-cases/autonomous-driving"><span class="item-text">Autonomous Driving</span></a>
            <div class="dropdown-items-divide-hr"></div>
            <a class="dropdown-item" href="/use-cases/retail"><span class="item-text">Retail</span></a>
            <div class="dropdown-items-divide-hr"></div>
            <a class="dropdown-item" href="/use-cases/security"><span class="item-text">Security</span></a>
            <div class="dropdown-items-divide-hr"></div>
            <a class="dropdown-item" href="/use-cases/agriculture"><span class="item-text">Agriculture</span></a>
            <div class="dropdown-items-divide-hr"></div>
            <a class="dropdown-item" href="/use-cases/sports"><span class="item-text">Sports</span></a>
            <div class="dropdown-items-divide-hr"></div>
            <a class="dropdown-item" href="/use-cases/construction"><span class="item-text">Construction</span></a>
            <div class="dropdown-items-divide-hr"></div>
            <a class="dropdown-item" href="/use-cases/geospatial"><span class="item-text">Geospatial</span></a>
            <div class="dropdown-items-divide-hr"></div>
          </div>
        </li>
        <!-- end of dropdown menu 2 -->
        <li class="nav-item"><a class="nav-link page-scroll" href="/resources">Resources</a></li>
        <li class="nav-item"><a class="nav-link page-scroll" href="/career">Career</a></li>
        <li class="nav-item"><a class="nav-link page-scroll" href="/contact">Contact</a></li>
      </ul>
      <button class="button_slide slide_right popup-with-move-anim" style="padding: 0.7rem 1rem 0.7rem 1rem;display: inline;margin: 0rem 1rem;font-weight: 700;" href="#details-lightbox-1">Request Free Demo</button>
    </div>
  </nav><!-- end of navbar -->
  <!-- end of navigation -->