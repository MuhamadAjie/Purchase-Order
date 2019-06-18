<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>PT.Theris Proteksi</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/home/css/bootstrap.css">
        <link rel="stylesheet" href="/home/vendors/linericon/style.css">
        <link rel="stylesheet" href="/home/css/font-awesome.min.css">
        <link rel="stylesheet" href="/home/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="/home/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="/home/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="/home/vendors/animate-css/animate.css">
        <!-- main css -->
        <link rel="stylesheet" href="/home/css/style.css">
        <link rel="stylesheet" href="/home/css/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu" id="mainNav">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item"><a class="nav-link" href="/halaman">Home</a></li> 
								
								<li class="nav-item"><a class="nav-link" href="/invoice">Lihat Invoice</a></li>
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Purchase Order</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="/inputpo">Buat PO</a></li>
										<li class="nav-item"><a class="nav-link" href="/dataPO">Lihat PO</a></li>
									</ul>
								</li> 
								
								<li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Contact Us</h2>
						<div class="page_link">
							<a href="index.html">Home</a>
							<a href="contact.html">Contact</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Contact Area =================-->
        <section class="contact_area p_120">
            <div class="container">
                <div id="mapBox" class="mapBox" 
                    data-lat="40.701083" 
                    data-lon="-74.1522848" 
                    data-zoom="13" 
                    data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
                    data-mlat="40.701083"
                    data-mlon="-74.1522848">
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>Jakarta, Indonesia</h6>
                                <p>Wisma GKBI, Suite 3901, 39th Floor Jl. Jend. Sudirman No. 28 Jakarta 10210 – Indonesia Jakarta 11750 </p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#">(021) 5441092</a></h6>
                                <p>Mon to Fri 8am to 5pm</p>
                                <p>Sat  8am to 2pm</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#">theris@cbn.net.id</a></h6>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--================Contact Area =================-->
        
        <!--================Footer Area =================-->
         <footer class="footer_area p_120">
          <div class="container">
            <div class="row footer_inner">
              <div class="col-lg-5 col-sm-6">
                <aside class="f_widget ab_widget">
                  <div class="f_title">
                    <h3>About Us</h3>
                  </div>
                  <p>VISI : Menjadi Perusahaan Terbaik Dan Profesional Dalam Menyediakan Kebutuhan Sistem
                  Proteksi Kebakaran Yang Tepat Dan Akurat .</p>
                </aside>
              </div>
              <div class="col-lg-5 col-sm-6">
                <aside class="f_widget news_widget">
                  <div class="f_title">
                    <h3>About Us</h3>
                  </div>
                  <p>"The Right System For Protection </p>
                     <p>industrial fire protection specialist" </p>
                  <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                  <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>    
                                    </div>        
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                </aside>
              </div>
              <div class="col-lg-2">
                <aside class="f_widget social_widget">
                  <div class="f_title">
                    <h3>Follow Us</h3>
                  </div>
                  <p>Let us be social</p>
                  <ul class="list">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                  </ul>
                </aside>
              </div>
            </div>
            <div class="copy_right_text">
              <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script>  PT.Theris Proteksi| Project KP2019  by <a href="https://colorlib.com" target="_blank">Anjany & Aji</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
          </div>
        </footer>
        <!--================End Footer Area =================-->
        
        <!--================Contact Success and Error message Area =================-->
        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Thank you</h2>
                        <p>Your message is successfully sent...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals error -->

        <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Sorry !</h2>
                        <p> Something went wrong </p>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Contact Success and Error message Area =================-->
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="/home/js/jquery-3.2.1.min.js"></script>
        <script src="/home/js/popper.js"></script>
        <script src="/home/js/bootstrap.min.js"></script>
        <script src="/home/js/stellar.js"></script>
        <script src="/home/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="/home/vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="/home/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="/home/vendors/isotope/isotope-min.js"></script>
        <script src="/home/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="/home/js/jquery.ajaxchimp.min.js"></script>
        <script src="/home/js/mail-script.js"></script>
        <script src="/home/vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="/home/vendors/counter-up/jquery.counterup.js"></script>
        <script src="/home/vendors/popup/jquery.magnific-popup.min.js"></script>
        <!-- contact js -->
        <script src="/home/js/jquery.form.js"></script>
        <script src="/home/js/jquery.validate.min.js"></script>
        <script src="/home/js/contact.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="/home/js/gmaps.min.js"></script>
        <script src="/home/js/theme.js"></script>
    </body>
</html>