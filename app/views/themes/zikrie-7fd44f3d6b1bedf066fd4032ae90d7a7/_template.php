<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?=$this->meta_title;?></title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="description" content="<?=$this->meta_description;?>"/>
	<meta name="keywords" content="<?=$this->meta_keywords;?>"/>
	<meta name="author" content="<?=get_setting('web_author');?>"/>
	<meta http-equiv="Copyright" content="<?=get_setting('web_name');?>"/>
	<meta http-equiv="imagetoolbar" content="no"/>
	<meta name="language" content="english"/>
	<meta name="revisit-after" content="7"/>
	<meta name="webcrawlers" content="all"/>
	<meta name="rating" content="general"/>
	<meta name="spiders" content="all"/>
	<link rel="canonical" href="<?=site_url(uri_string());?>"/>

	<!-- favicon -->
	<link rel="shortcut icon" href="<?=favicon();?>"/>

	<!-- metasocial -->
	<?php $this->load->view('meta_social'); ?>

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?=$this->CI->theme_asset('lib/animate/animate.min.css');?>" rel="stylesheet">
    <link href="<?=$this->CI->theme_asset('lib/owlcarousel/assets/owl.carousel.min.css');?>" rel="stylesheet">
    <link href="<?=$this->CI->theme_asset('lib/lightbox/css/lightbox.min.css');?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?=$this->CI->theme_asset('css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?=$this->CI->theme_asset('css/style.css');?>" rel="stylesheet">

	<!-- google analytics -->
	<?=google_analytics();?>
	 
</head>
<body>
    <!-- Spinner Start 
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
     Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small><?=get_setting('address')?></small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small><?=get_setting('telephone')?></small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="<?=get_setting('facebook')?>"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="<?=get_setting('twitter')?>"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="<?=get_setting('youtube')?>"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href="<?=get_setting('instagram')?>"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="<?=site_url();?>" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><?=get_setting('web_name');?></h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <?php 
                // Load web menu.
                $this->CI->load_menu(
                                        $menu_group = 2, 
                                        $ul = 'class="navbar-nav ms-auto p-4 p-lg-0"', 
                                        $ul_li = 'class="nav-item dropdown"', 
                                        $ul_li_a ='class="nav-link"', 
                                        $ul_li_a_ul = 'class="dropdown-menu fade-up m-0"'
                                    )
            ?>            
            <!---div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="service.html" class="nav-item nav-link">Service</a>
                <a href="project.html" class="nav-item nav-link">Project</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="feature.html" class="dropdown-item">Feature</a>
                        <a href="quote.html" class="dropdown-item">Free Quote</a>
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div--->
            <a href="<?=admin_url()?>" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block"><?=login_status()?'<i class="fa fa-arrow-right ms-3"></i> &nbsp;'.data_login('name'):"LOGIN";?></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <?php $this->CI->_layout($this->CI->__content_view); ?>               

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><?=get_setting('address')?></p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><?=get_setting('telephone')?></p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i><?=get_setting('web_email')?></p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="<?=get_setting('twitter')?>"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="<?=get_setting('facebook')?>"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="<?=get_setting('youtube')?>"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="<?=get_setting('instagram')?>"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="<?=site_url('pages/about-us')?>">About Us</a>
                    <a class="btn btn-link" href="<?=site_url('contact')?>">Contact</a>
                    <a class="btn btn-link" href="<?=site_url('pages/faq')?>">FAQ</a>
                    <a class="btn btn-link" href="<?=site_url('pages/tos')?>">Termen off cervice</a>
                    <a class="btn btn-link" href="<?=site_url('pages/privacy-polici')?>">Privacy Polici</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Services</h4>
                    <a class="btn btn-link" href="<?=site_url('pages/layanan')?>">Layanan</a>
                    <a class="btn btn-link" href="<?=site_url('pages/pengurus')?>">Pengurus</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="<?=site_url();?>"><?=get_setting('web_name');?></a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <!--/***Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>***/-->
                        <?=copyright();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?=$this->CI->theme_asset('lib/wow/wow.min.js');?>"></script>
    <script src="<?=$this->CI->theme_asset('lib/easing/easing.min.js');?>"></script>
    <script src="<?=$this->CI->theme_asset('lib/waypoints/waypoints.min.js');?>"></script>
    <script src="<?=$this->CI->theme_asset('lib/counterup/counterup.min.js');?>"></script>
    <script src="<?=$this->CI->theme_asset('lib/owlcarousel/owl.carousel.min.js');?>"></script>
    <script src="<?=$this->CI->theme_asset('lib/isotope/isotope.pkgd.min.js');?>"></script>
    <script src="<?=$this->CI->theme_asset('lib/lightbox/js/lightbox.min.js');?>"></script>

    <!-- Template Javascript -->
    <script src="<?=$this->CI->theme_asset('js/main.js');?>"></script>
    
	<?php if (get_setting('recaptcha')=="Y"): ?>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<?php endif ?>
	
</body>
</html>