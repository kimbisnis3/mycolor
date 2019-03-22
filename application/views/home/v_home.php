<?php $this->load->view('template/header') ?>
<?php 
$ss =  $this->db->get_where('t_config_image', array('tipe' => 'ss', 'aktif' => '1'))->result();

 ?>
<div class="slideshow">
		<div class="tp-banner-container">
			<div class="tp-banner">
				<ul>
					<?php foreach ( $ss as $t ) { ?>
					<li data-transition="random" data-slotamount="7" data-masterspeed="500">
						<!-- MAIN IMAGE -->
						<img src="custompanel/<?php echo $t->image ?>" alt="" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
						
						<div class="slideshow-bg"
						data-y="310"
						data-x="center"
						data-start="0"></div>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div><!-- End tp-banner-container -->
	</div><!-- End slideshow -->
	
	<div class="sections">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="box-icon box-icon-2 box-icon-3">
						<div class="box-icon-i box-icon-i-2 box-icon-i-5"><i class="fa fa-thumbs-up"></i></div>
						<div class="box-icon-content">
							<h5>Kualitas Terbaik</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Integer lorem quam adipiscing.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box-icon box-icon-2 box-icon-3">
						<div class="box-icon-i box-icon-i-2 box-icon-i-5"><i class="fa fa-money"></i></div>
						<div class="box-icon-content">
							<h5>Harga Terjangkau</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Integer lorem quam adipiscing.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box-icon box-icon-2 box-icon-3">
						<div class="box-icon-i box-icon-i-2 box-icon-i-5"><i class="fa fa-bolt"></i></div>
						<div class="box-icon-content">
							<h5>Pelayanan Cepat</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Integer lorem quam adipiscing.</p>
						</div>
					</div>
				</div>
			</div><!-- End row -->
			<br><br>
			<div class="load-more-projects"><a class="button-1" href="about">Sekilas Tentang Kami</a></div>
		</div><!-- End container -->
	</div><!-- End sections -->
	
	<div class="sections section-2">
		<div class="container">
			<div class="sections-title">
				<div class="sections-title-h3"><h3>Produk Unggulan Kami</h3></div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.</p>
			</div><!-- End sections-title -->
			<div class="row" style="display: none;">
				<div class="col-md-12 protfolio-filter">
					<ul>
						<li class="current"><a data-filter="*" href="#">ALL</a></li>
						<li><a data-filter=".term-photography" href="#">Photography</a></li>
						<li><a data-filter=".term-design" href="#">Design</a></li>
						<li><a data-filter=".term-development" href="#">Development</a></li>
						<li><a data-filter=".term-wordpress" href="#">Wordpress</a></li>
					</ul>
				</div>
			</div><!-- End row -->
			<div class="row portfolio-all portfolio-0">
				<ul>
					<li class="col-md-3 term-design portfolio-item isotope-item">
						<div class="portfolio-one">
							<div class="portfolio-head">
								<div class="portfolio-img"><img alt="" src="assets/images/portfolio-1.jpg" style="height: 250px;"></div>
								<div class="portfolio-hover">
									<a class="portfolio-link" href="single-portfolio.html"><i class="fa fa-link"></i></a>
									<a class="portfolio-zoom prettyPhoto" href="assets/images/portfolio-1.jpg"><i class="fa fa-search"></i></a>
								</div>
							</div><!-- End portfolio-head -->
							<div class="portfolio-content">
								<i class="fa fa-leaf"></i>
								<div class="portfolio-meta">
									<div class="portfolio-name"><h6><a href="single-portfolio.html">Backdrop 1</a></h6></div>
									<div class="portfolio-cat"><a href="#">Backdrop</a></div>
								</div><!-- End portfolio-meta -->
							</div><!-- End portfolio-content -->
						</div><!-- End portfolio-item -->
					</li>
					<li class="col-md-3 term-photography portfolio-item isotope-item">
						<div class="portfolio-one">
							<div class="portfolio-head">
								<div class="portfolio-img"><img alt="" src="assets/images/portfolio-2.jpg" style="height: 250px;></div>
								<div class="portfolio-hover">
									<a class="portfolio-link" href="single-portfolio.html"><i class="fa fa-link"></i></a>
									<a class="portfolio-zoom prettyPhoto" href="assets/images/portfolio-2.jpg"><i class="fa fa-search"></i></a>
								</div>
							</div><!-- End portfolio-head -->
							<div class="portfolio-content">
								<i class="fa fa-leaf"></i>
								<div class="portfolio-meta">
									<div class="portfolio-name"><h6><a href="single-portfolio.html">Backdrop 2</a></h6></div>
									<div class="portfolio-cat"><a href="#">Backdrop</a></div>
								</div><!-- End portfolio-meta -->
							</div><!-- End portfolio-content -->
						</div><!-- End portfolio-item -->
					</li>
					<li class="col-md-3 term-design portfolio-item isotope-item">
						<div class="portfolio-one">
							<div class="portfolio-head">
								<div class="portfolio-img"><img alt="" src="assets/images/portfolio-3.jpg" style="height: 250px;></div>
								<div class="portfolio-hover">
									<a class="portfolio-link" href="single-portfolio.html"><i class="fa fa-link"></i></a>
									<a class="portfolio-zoom prettyPhoto" href="assets/images/portfolio-3.jpg"><i class="fa fa-search"></i></a>
								</div>
							</div><!-- End portfolio-head -->
							<div class="portfolio-content">
								<i class="fa fa-leaf"></i>
								<div class="portfolio-meta">
									<div class="portfolio-name"><h6><a href="single-portfolio.html">Baliho</a></h6></div>
									<div class="portfolio-cat"><a href="#">Baliho</a></div>
								</div><!-- End portfolio-meta -->
							</div><!-- End portfolio-content -->
						</div><!-- End portfolio-item -->
					</li>
					<li class="col-md-3 term-photography portfolio-item isotope-item">
						<div class="portfolio-one">
							<div class="portfolio-head">
								<div class="portfolio-img"><img alt="" src="assets/images/portfolio-4.jpg" style="height: 250px;></div>
								<div class="portfolio-hover">
									<a class="portfolio-link" href="single-portfolio.html"><i class="fa fa-link"></i></a>
									<a class="portfolio-zoom prettyPhoto" href="assets/images/portfolio-4.jpg"><i class="fa fa-search"></i></a>
								</div>
							</div><!-- End portfolio-head -->
							<div class="portfolio-content">
								<i class="fa fa-leaf"></i>
								<div class="portfolio-meta">
									<div class="portfolio-name"><h6><a href="single-portfolio.html">Board</a></h6></div>
									<div class="portfolio-cat"><a href="#">Board</a></div>
								</div><!-- End portfolio-meta -->
							</div><!-- End portfolio-content -->
						</div><!-- End portfolio-item -->
					</li>
					<li class="col-md-3 term-development portfolio-item isotope-item">
						<div class="portfolio-one">
							<div class="portfolio-head">
								<div class="portfolio-img"><img alt="" src="assets/images/portfolio-5.jpg" style="height: 250px;"></div>
								<div class="portfolio-hover">
									<a class="portfolio-link" href="single-portfolio.html"><i class="fa fa-link"></i></a>
									<a class="portfolio-zoom prettyPhoto" href="assets/images/portfolio-5.jpg"><i class="fa fa-search"></i></a>
								</div>
							</div><!-- End portfolio-head -->
							<div class="portfolio-content">
								<i class="fa fa-leaf"></i>
								<div class="portfolio-meta">
									<div class="portfolio-name"><h6><a href="single-portfolio.html">Huruf Timbul 1</a></h6></div>
									<div class="portfolio-cat"><a href="#">Huruf Timbul</a></div>
								</div><!-- End portfolio-meta -->
							</div><!-- End portfolio-content -->
						</div><!-- End portfolio-item -->
						</li>
						<li class="col-md-3 term-development portfolio-item isotope-item">
						<div class="portfolio-one">
							<div class="portfolio-head">
								<div class="portfolio-img"><img alt="" src="assets/images/portfolio-6.jpg" style="height: 250px;"></div>
								<div class="portfolio-hover">
									<a class="portfolio-link" href="single-portfolio.html"><i class="fa fa-link"></i></a>
									<a class="portfolio-zoom prettyPhoto" href="assets/images/portfolio-6.jpg"><i class="fa fa-search"></i></a>
								</div>
							</div><!-- End portfolio-head -->
							<div class="portfolio-content">
								<i class="fa fa-leaf"></i>
								<div class="portfolio-meta">
									<div class="portfolio-name"><h6><a href="single-portfolio.html">Huruf Timbul 2</a></h6></div>
									<div class="portfolio-cat"><a href="#">Huruf Timbul</a></div>
								</div><!-- End portfolio-meta -->
							</div><!-- End portfolio-content -->
						</div><!-- End portfolio-item -->
					</li>
					<li class="col-md-3 term-wordpress portfolio-item isotope-item">
						<div class="portfolio-one">
							<div class="portfolio-head">
								<div class="portfolio-img"><img alt="" src="assets/images/portfolio-7.jpg"> style="height: 250px;</div>
								<div class="portfolio-hover">
									<a class="portfolio-link" href="single-portfolio.html"><i class="fa fa-link"></i></a>
									<a class="portfolio-zoom prettyPhoto" href="assets/images/portfolio-7.jpg"><i class="fa fa-search"></i></a>
								</div>
							</div><!-- End portfolio-head -->
							<div class="portfolio-content">
								<i class="fa fa-leaf"></i>
								<div class="portfolio-meta">
									<div class="portfolio-name"><h6><a href="single-portfolio.html">Neon Box</a></h6></div>
									<div class="portfolio-cat"><a href="#">Neon Box</a></div>
								</div><!-- End portfolio-meta -->
							</div><!-- End portfolio-content -->
						</div><!-- End portfolio-item -->
					</li>
					<li class="col-md-3 term-wordpress portfolio-item isotope-item">
						<div class="portfolio-one">
							<div class="portfolio-head">
								<div class="portfolio-img"><img alt="" src="assets/images/portfolio-8.jpg" style="height: 250px;></div>
								<div class="portfolio-hover">
									<a class="portfolio-link" href="single-portfolio.html"><i class="fa fa-link"></i></a>
									<a class="portfolio-zoom prettyPhoto" href="assets/images/portfolio-8.jpg"><i class="fa fa-search"></i></a>
								</div>
							</div><!-- End portfolio-head -->
							<div class="portfolio-content">
								<i class="fa fa-leaf"></i>
								<div class="portfolio-meta">
									<div class="portfolio-name"><h6><a href="single-portfolio.html">Wall Paint</a></h6></div>
									<div class="portfolio-cat"><a href="#">Wall Paint</a></div>
								</div><!-- End portfolio-meta -->
							</div><!-- End portfolio-content -->
						</div><!-- End portfolio-item -->
					</li>
				</ul>
			</div><!-- End portfolio-0 -->
			<div class="load-more-projects"><a class="button-1 button-2" href="portfolio-description.html">Lihat Produk Lainnya</a></div>
		</div><!-- End container -->
	</div><!-- End sections -->
	
	
	<div class="sections sections-padding-b-50">
		<div class="container">
			<div class="sections-title">
				<div class="sections-title-h3"><h3>Berita Terbaru</h3></div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.</p>
			</div><!-- End sections-title -->
			<div class="row">
				<div class="bxslider-slide blog-silde">
					<ul>
						<li>
							<div class="col-md-4 blog-item">
								<div class="blog-one">
									<div class="blog-img">
										<img alt="" src="assets/images/blog-1.png">
										<div class="blog-date"><span>3</span><span>July, 2014</span></div>
									</div><!-- End blog-img -->
									<div class="blog-content">
										<h6><a href="single-blog.html">Blog Tiltle Shall Be Here !</a></h6>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, turpis. <a href="single-blog.html">Read More</a></p>
									</div><!-- End blog-content -->
									<div class="clearfix"></div>
								</div><!-- End blog-item -->
							</div>
							<div class="col-md-4 blog-item">
								<div class="blog-one">
									<div class="blog-img">
										<img alt="" src="assets/images/blog-1.png">
										<div class="blog-date"><span>2</span><span>July, 2014</span></div>
									</div><!-- End blog-img -->
									<div class="blog-content">
										<h6><a href="single-blog.html">Blog Tiltle Shall Be Here !</a></h6>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, turpis. <a href="single-blog.html">Read More</a></p>
									</div><!-- End blog-content -->
									<div class="clearfix"></div>
								</div><!-- End blog-item -->
							</div>
							<div class="col-md-4 blog-item">
								<div class="blog-one">
									<div class="blog-img">
										<img alt="" src="assets/images/blog-1.png">
										<div class="blog-date"><span>3</span><span>July, 2014</span></div>
									</div><!-- End blog-img -->
									<div class="blog-content">
										<h6><a href="single-blog.html">Blog Tiltle Shall Be Here !</a></h6>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, turpis. <a href="single-blog.html">Read More</a></p>
									</div><!-- End blog-content -->
									<div class="clearfix"></div>
								</div><!-- End blog-item -->
							</div>
						</li>
						<li>
							<div class="col-md-4 blog-item">
								<div class="blog-one">
									<div class="blog-img">
										<img alt="" src="assets/images/blog-1.png">
										<div class="blog-date"><span>3</span><span>July, 2014</span></div>
									</div><!-- End blog-img -->
									<div class="blog-content">
										<h6><a href="single-blog.html">Blog Tiltle Shall Be Here !</a></h6>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, turpis. <a href="single-blog.html">Read More</a></p>
									</div><!-- End blog-content -->
									<div class="clearfix"></div>
								</div><!-- End blog-item -->
							</div>
							<div class="col-md-4 blog-item">
								<div class="blog-one">
									<div class="blog-img">
										<img alt="" src="assets/images/blog-1.png">
										<div class="blog-date"><span>2</span><span>July, 2014</span></div>
									</div><!-- End blog-img -->
									<div class="blog-content">
										<h6><a href="single-blog.html">Blog Tiltle Shall Be Here !</a></h6>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, turpis. <a href="single-blog.html">Read More</a></p>
									</div><!-- End blog-content -->
									<div class="clearfix"></div>
								</div><!-- End blog-item -->
							</div>
							<div class="col-md-4 blog-item">
								<div class="blog-one">
									<div class="blog-img">
										<img alt="" src="assets/images/blog-1.png">
										<div class="blog-date"><span>3</span><span>July, 2014</span></div>
									</div><!-- End blog-img -->
									<div class="blog-content">
										<h6><a href="single-blog.html">Blog Tiltle Shall Be Here !</a></h6>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, turpis. <a href="single-blog.html">Read More</a></p>
									</div><!-- End blog-content -->
									<div class="clearfix"></div>
								</div><!-- End blog-item -->
							</div>
						</li>
					</ul>
				</div><!-- End blog-silde -->
			</div><!-- End row -->
		</div><!-- End container -->
	</div><!-- End sections -->
	
	<div class="sections sections-padding-t-0 sections-padding-b-50">
		<div class="container">
			<div class="head-title"><h6>Klien Kami</h6></div>
			<div class="row">
				<div class="bxslider-slide bxslider-slide-title clients-slide">
					<ul>
						<li>
							<div class="col-md-2 client-item">
								<div class="client"><a href="#"><img alt="" src="assets/images/client-1.png"></a></div>
							</div>
							<div class="col-md-2 client-item">
								<div class="client"><a href="#"><img alt="" src="assets/images/client-2.png"></a></div>
							</div>
							<div class="col-md-2 client-item">
								<div class="client"><a href="#"><img alt="" src="assets/images/client-1.png"></a></div>
							</div>
							<div class="col-md-2 client-item">
								<div class="client"><a href="#"><img alt="" src="assets/images/client-2.png"></a></div>
							</div>
							<div class="col-md-2 client-item">
								<div class="client"><a href="#"><img alt="" src="assets/images/client-1.png"></a></div>
							</div>
							<div class="col-md-2 client-item">
								<div class="client"><a href="#"><img alt="" src="assets/images/client-2.png"></a></div>
							</div>
						</li>
						<li>
							<div class="col-md-2 client-item">
								<div class="client"><a href="#"><img alt="" src="assets/images/client-1.png"></a></div>
							</div>
							<div class="col-md-2 client-item">
								<div class="client"><a href="#"><img alt="" src="assets/images/client-2.png"></a></div>
							</div>
							<div class="col-md-2 client-item">
								<div class="client"><a href="#"><img alt="" src="assets/images/client-1.png"></a></div>
							</div>
							<div class="col-md-2 client-item">
								<div class="client"><a href="#"><img alt="" src="assets/images/client-1.png"></a></div>
							</div>
							<div class="col-md-2 client-item">
								<div class="client"><a href="#"><img alt="" src="assets/images/client-2.png"></a></div>
							</div>
							<div class="col-md-2 client-item">
								<div class="client"><a href="#"><img alt="" src="assets/images/client-1.png"></a></div>
							</div>
						</li>
					</ul>
				</div><!-- End clients-slide -->
			</div><!-- End row -->
		</div><!-- End container -->
	</div><!-- End sections -->
<?php $this->load->view('template/footer') ?>
<?php $this->load->view('template/js') ?>