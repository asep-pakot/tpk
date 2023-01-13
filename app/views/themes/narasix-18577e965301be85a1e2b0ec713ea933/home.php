<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

            <section class="hero">
                <div class="container-fluid h-100">
                    <div class="row h-100">

                        <div id="carouselExampleCaptions" class="carousel carousel-fade hero-carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="container position-relative h-100">
                                        <div class="carousel-caption d-flex flex-column justify-content-center">
                                            <small class="small-title">Selamat Datang di  <strong class="text-warning"></strong></small>
                                            <h1>PIK <span class="text-warning">Remaja</span> Formasi Fresh</h1>
                                            <div class="d-flex align-items-center mt-4">
                                                <a class="custom-btn btn custom-link" href="#section_2">Mulai Sekarang</a>

                                                <a class="popup-youtube custom-icon d-flex ms-4" href="https://www.youtube.com/watch?v=7PNnFLoRTd4">
                                                    <i class="bi-play play-icon d-flex m-auto text-white"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-image-wrap">
                                        <img src="<?=$this->CI->theme_asset('images/slide/christina-wocintechchat-com-NDoVgcS_lZM-unsplash.jpg');?>" class="img-fluid carousel-image" alt="">
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="container position-relative h-100">
                                        <div class="carousel-caption d-flex flex-column justify-content-center">
                                            <small class="small-title">Mari kemari <strong class="text-warning">Maju Bersama</strong></small>

                                            <h1>Generasi <span class="text-warning">Berencana</span></h1>

                                            <div class="d-flex align-items-center mt-4">
                                                <a class="custom-btn btn custom-link" href="#section_2">Selengkapnya</a>

                                                <a class="popup-youtube custom-icon d-flex ms-4" href="https://www.youtube.com/watch?v=PAWeQ0OkZHc">
                                                    <i class="bi-play play-icon d-flex m-auto text-white"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="carousel-image-wrap">
                                        <img src="<?=$this->CI->theme_asset('images/slide/jason-goodman-0K7GgiA8lVE-unsplash.jpg');?>" class="img-fluid carousel-image" alt="">
                                    </div>
                                </div>

                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>

                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="about section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                            <div class="about-image-wrap h-100">
                                <img src="<?=$this->CI->theme_asset('images/peter-jones-WZROBIlY8Rg-unsplash.jpg');?>" class="img-fluid about-image" alt="">

                                <div class="about-image-info">
                                    <h4 class="text-white">Ikhsan Fauzi, S.Pd</h4>

                                    <p class="text-white mb-0">Forum PIK Remaja Formasi Fresh Bandung Barat</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12 d-flex flex-column">
                            <div class="about-thumb bg-white shadow-lg">
                                
                                <div class="about-info">
                                    <small class="small-title">About <strong class="text-warning">02/05</strong></small>

                                    <h2 class="mb-3">Ketua Umum</h2>

                                    <h5 class="mb-3">Periode 2018 - 2023</h5>

                                    <p>Waso Strategy is a Bootstrap 5 HTML template for your business. You may use this template for any purpose. You may not redistribute the template ZIP file on any other website.</p>

                                    <p>You may support a little PayPal donation to Tooplate by visiting our <a href="https://www.tooplate.com/contact">contact page</a>. Thank you.</p>
                                </div>
                            </div>

                            <div class="row h-100">
                                <div class="col-lg-6 col-6">
                                    <div class="about-thumb d-flex flex-column justify-content-center bg-danger mb-lg-0 h-100">
                                        
                                        <div class="about-info">
                                            <h5 class="text-white mb-4">We're growing business dolor</h5>

                                            <a class="custom-btn btn custom-bg-primary" href="#section_3">Join us</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-6">
                                    <div class="about-thumb d-flex flex-column justify-content-center bg-warning mb-lg-0 h-100">
                                        
                                        <div class="about-info">
                                            <h5 class="text-white mb-4">How did you about us?</h5>

                                            <p class="text-white mb-0">Lorem ipsum dolor sit consectetur</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="services section-padding" id="section_3">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12 text-center mx-auto mb-5">
                            <small class="small-title">Services <strong class="text-warning">03/05</strong></small>

                            <h2>How can we help you?</h2>

                        </div>

                        <div class="col-lg-6 col-12">
                            <nav>
                                <div class="nav nav-tabs flex-column align-items-baseline" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-business-tab" data-bs-toggle="tab" data-bs-target="#nav-business" type="button" role="tab" aria-controls="nav-business" aria-selected="true">
                                        <h3>Business Consulting</h3>

                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore</span>
                                    </button>

                                    <button class="nav-link" id="nav-strategy-tab" data-bs-toggle="tab" data-bs-target="#nav-strategy" type="button" role="tab" aria-controls="nav-strategy" aria-selected="false">
                                        <h3>Strategy Planning</h3>
                                        
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore</span>
                                    </button>

                                    <button class="nav-link" id="nav-video-tab" data-bs-toggle="tab" data-bs-target="#nav-video" type="button" role="tab" aria-controls="nav-video" aria-selected="false">
                                        <h3>Video Content</h3>
                                        
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore</span>
                                    </button>
                                </div>
                            </nav>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-business" role="tabpanel" aria-labelledby="nav-intro-tab">
                                    <img src="<?=$this->CI->theme_asset('images/services/young-entrepreneurs-mature-investor-watching-presentation-discussing-project.jpg');?>" class="img-fluid" alt="">

                                    <h5 class="mt-4 mb-2">Introduction to Business Consulting</h5>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore</p>

                                    <ul>
                                        <li>Helping small businesses</li>

                                        <li>Lorem ipsum dolor sit amet</li>

                                        <li>Business Strategy and Management</li>
                                    </ul>
                                </div>

                                <div class="tab-pane fade show" id="nav-strategy" role="tabpanel" aria-labelledby="nav-strategy-tab">
                                    <img src="<?=$this->CI->theme_asset('images/services/startup-leader-drawing-flowchart-board-discussing-project.jpg');?>" class="img-fluid" alt="">

                                    <h5 class="mt-4 mb-2">Strategy Planning</h5>

                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolore</p>
                                        </div>

                                        <div class="col-lg-6 col-12">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolore</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade show" id="nav-video" role="tabpanel" aria-labelledby="nav-video-tab">
                                    <img src="<?=$this->CI->theme_asset('images/services/portrait-smiling-african-american-young-woman-holding-movie-production-blackboard.jpg');?>" class="img-fluid" alt="">

                                    <h5 class="mt-4 mb-2">Video Content</h5>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore</p>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="projects section-padding pb-0" id="section_4">
                <div class="container">
                    <div class="row">
	<?php
		$homePost1 = $this->CI->index_model->get_category_by('id', 2, 'row');
	?>
                        <div class="col-lg-10 col-12 text-center mx-auto mb-5">
                            <small class="small-title">Berita dan Cerita <strong class="text-warning">04/05</strong></small>

                            <h2>Disini kami berikan untuk saudara</h2>
                        </div>
					<?php
						$post1b = $this->CI->index_model->get_post_lmit_by_category($homePost1['id'], [3,1]);
						foreach ($post1b->result_array() as $res_post1b):
					?>
                        <div class="col-lg-4 col-12">
                            <div class="projects-thumb projects-thumb-small">
                                <a href="<?=post_url($res_post1b['post_seotitle']);?>">
                                    <img src="<?=post_images($res_post1b['picture'], '', TRUE);?>" class="img-fluid projects-image" alt="<?=$res_post1b['post_title'];?>">
                                    
                                    <div class="projects-info">
                                        <div class="projects-title-wrap">
                                            <a href="<?=site_url('category/'.$res_post1b['category_seotitle']);?>"><small class="projects-small-title"><?=$res_post1b['category_title'];?></small></a>

                                            <h3 class="projects-title"><?=$res_post1b['post_title'];?></h3>
                                        </div>

                                        <div class="projects-btn-wrap mt-4">
                                            <span class="custom-btn btn">
												<a href="<?=post_url($res_post1b['post_seotitle']);?>">
                                                <i class="bi-arrow-right"></i>
												</a>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
					<?php endforeach ?>
					
					<?php
						$post1b = $this->CI->index_model->get_post_lmit_by_category($homePost1['id'], [1,3]);
						foreach ($post1b->result_array() as $res_post1b):
					?>
                        <div class="col-lg-8 col-12">
                            <div class="projects-thumb projects-thumb-small">
                                <a href="<?=post_url($res_post1b['post_seotitle']);?>">
                                    <img src="<?=post_images($res_post1b['picture'], '', TRUE);?>" class="img-fluid projects-image" alt="<?=$res_post1b['post_title'];?>">
                                    
                                    <div class="projects-info">
                                        <div class="projects-title-wrap">
                                            <a href="<?=site_url('category/'.$res_post1b['category_seotitle']);?>"><small class="projects-small-title"><?=$res_post1b['category_title'];?></small></a>

                                            <h3 class="projects-title"><?=$res_post1b['post_title'];?></h3>
                                        </div>

                                        <div class="projects-btn-wrap mt-4">
                                            <span class="custom-btn btn">
												<a href="<?=post_url($res_post1b['post_seotitle']);?>">
                                                <i class="bi-arrow-right"></i>
												</a>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
					<?php endforeach ?>

					<?php
						$post1b = $this->CI->index_model->get_post_lmit_by_category($homePost1['id'], [1,2]);
						foreach ($post1b->result_array() as $res_post1b):
					?>
                        <div class="col-lg-4 col-12">
                            <div class="projects-thumb projects-thumb-small">
                                <a href="<?=post_url($res_post1b['post_seotitle']);?>">
                                    <img src="<?=post_images($res_post1b['picture'], '', TRUE);?>" class="img-fluid projects-image" alt="<?=$res_post1b['post_title'];?>">
                                    
                                    <div class="projects-info">
                                        <div class="projects-title-wrap">
                                            <a href="<?=site_url('category/'.$res_post1b['category_seotitle']);?>"><small class="projects-small-title"><?=$res_post1b['category_title'];?></small></a>

                                            <h3 class="projects-title"><?=$res_post1b['post_title'];?></h3>
                                        </div>

                                        <div class="projects-btn-wrap mt-4">
										
                                            <span class="custom-btn btn">
												<a href="<?=post_url($res_post1b['post_seotitle']);?>">
                                                <i class="bi-arrow-right"></i>
												</a>
                                            </span>
										
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
					<?php endforeach ?>

                    </div>
                </div>
            </section>

