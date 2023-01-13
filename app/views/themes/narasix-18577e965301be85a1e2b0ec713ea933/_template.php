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

		
        
		<!-- CSS FILES -->
		
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="<?=$this->CI->theme_asset('css/bootstrap.min.css');?>" />
        
		<link rel="stylesheet" href="<?=$this->CI->theme_asset('css/bootstrap-icons.css');?>" />
        
		<link rel="stylesheet" href="<?=$this->CI->theme_asset('css/magnific-popup.css');?>" />
        
		<link rel="stylesheet" href="<?=$this->CI->theme_asset('css/tooplate-waso-strategy.css');?>" />
        
		
	<!-- script -->
	<script src="<?=site_url('plugins/jquery/jquery3.4.1.min.js');?>"></script>

	<!-- google analytics -->
	<?=google_analytics();?>
	 
</head>
    <body id="section_1">

        <header class="site-header">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-3 col-md-5 col-7">
                        <p class="text-white mb-0">
                            <i class="bi-email site-header-icon me-2"></i>
                            <?=get_setting('web_email')?>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-3 col-5">
                        <p class="text-white mb-0">
                            <a href="tel: <?=get_setting('telephone')?>" class="text-white">
                                <i class="bi-telephone site-header-icon me-2"></i>
                                <?=get_setting('telephone')?>
                            </a>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-3 col-12 ms-auto">
                        <ul class="social-icon">
                                <li><a href="<?=get_setting('facebook')?>" class="social-icon-link bi-facebook"></a></li>

                                <li><a href="<?=get_setting('instagram')?>" class="social-icon-link bi-instagram"></a></li>
    
                                <li><a href="<?=get_setting('twitter')?>" class="social-icon-link bi-twitter"></a></li>
    
                                <li><a href="<?=get_setting('youtube')?>" class="social-icon-link bi-youtube"></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </header>

        <nav class="navbar navbar-expand-lg bg-white shadow-lg">
            <div class="container">

                <a href="<?=site_url();?>" class="navbar-brand">PIK-R <span class="text-danger">Formasi</span></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1"><small class="small-title"><strong class="text-warning">01</strong></small> Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2"><small class="small-title"><strong class="text-warning">02</strong></small> About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3"><small class="small-title"><strong class="text-warning">03</strong></small> Services</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4"><small class="small-title"><strong class="text-warning">04</strong></small> Projects</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_5"><small class="small-title"><strong class="text-warning">05</strong></small> Contact</a>
                        </li>
                    </ul>
                <div>
                        
            </div>
        </nav>

        <main>
			<?php $this->CI->_layout($this->CI->__content_view); ?>
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">
                        
                    <div class="col-lg-6 col-12">
                        <div class="site-footer-wrap d-flex align-items-center">
                            <p class="copyright-text mb-0 me-4"><?=copyright();?></p>

                            <ul class="social-icon">
                                <li><a href="<?=get_setting('facebook')?>" class="social-icon-link bi-facebook"></a></li>

                                <li><a href="<?=get_setting('instagram')?>" class="social-icon-link bi-instagram"></a></li>
    
                                <li><a href="<?=get_setting('twitter')?>" class="social-icon-link bi-twitter"></a></li>
    
                                <li><a href="<?=get_setting('youtube')?>" class="social-icon-link bi-youtube"></a></li>
                            </ul>
                            
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-12">
                    	<p class="copyright-text mb-0 me-4"><a href="<?=admin_url()?>"><?=login_status()?'<i class="fa fa-user"></i> &nbsp;'.data_login('name'):"LOGIN";?></a>
								| <a href="<?=site_url('pages/about-us')?>">About Us</a>
								| <a href="<?=site_url('contact')?>">Contact</a>
						</p>
                    </div>

                </div>
            </div>
        </footer>

	
        <!-- JAVASCRIPT FILES -->
		<script src="<?=$this->CI->theme_asset('js/jquery.min.js');?>"></script>
        
		<script src="<?=$this->CI->theme_asset('js/bootstrap.min.js');?>"></script>
        
		<script src="<?=$this->CI->theme_asset('js/jquery.sticky.js');?>"></script>
        
		<script src="<?=$this->CI->theme_asset('js/jquery.magnific-popup.min.js');?>"></script>
        
		<script src="<?=$this->CI->theme_asset('js/magnific-popup-options.js');?>"></script>
        
		<script src="<?=$this->CI->theme_asset('js/click-scroll.js');?>"></script>
        
		<script src="<?=$this->CI->theme_asset('js/custom.js');?>"></script>
        
	<?php if (get_setting('recaptcha')=="Y"): ?>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<?php endif ?>
	
</body>
</html>