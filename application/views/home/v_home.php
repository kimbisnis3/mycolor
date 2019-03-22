<?php $this->load->view('template/header') ?>
<?php 
$ss  =  $this->db->get_where('t_config_image', array('tipe' => 'ss', 'aktif' => '1'))->result();
$sv1 =  $this->db->get_where('t_config_text', array('tipe' => 'sv1'))->row();
$sv2 =  $this->db->get_where('t_config_text', array('tipe' => 'sv2'))->row();
$sv3 =  $this->db->get_where('t_config_text', array('tipe' => 'sv3'))->row();

$teksprod =  $this->db->get_where('t_config_text', array('tipe' => 'teksprod'))->row();
$tekspor  =  $this->db->get_where('t_config_text', array('tipe' => 'tekspor'))->row();

$ktgproduk  =  $this->db->get_where('m_ktgproduk', array('tampildepan' => '1'),8)->result();
$news1  	=  $this->db->order_by('id', 'DESC')->get_where('m_berita', array('aktif' => '1'),3,0)->result();
$news2  	=  $this->db->order_by('id', 'DESC')->get_where('m_berita', array('aktif' => '1'),3,3)->result();

$cl1  	=  $this->db->get_where('t_config_image', array('tipe' => 'cl'),6,0)->result();
$cl2  	=  $this->db->get_where('t_config_image', array('tipe' => 'cl'),6,6)->result();

$root_path_image = 'custompanel/';

 ?>
<div class="slideshow">
		<div class="tp-banner-container">
			<div class="tp-banner">
				<ul>
					<?php foreach ( $ss as $t ) { ?>
					<li data-transition="random" data-slotamount="7" data-masterspeed="500">
						<!-- MAIN IMAGE -->
						<img src="<?php echo $root_path_image?>.<?php echo $t->image ?>" alt="" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
						
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
							<h5><?php echo $sv1->judul; ?></h5>
							<p><?php echo $sv1->teks; ?></p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box-icon box-icon-2 box-icon-3">
						<div class="box-icon-i box-icon-i-2 box-icon-i-5"><i class="fa fa-money"></i></div>
						<div class="box-icon-content">
							<h5><?php echo $sv2->judul; ?></h5>
							<p><?php echo $sv2->teks; ?></p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box-icon box-icon-2 box-icon-3">
						<div class="box-icon-i box-icon-i-2 box-icon-i-5"><i class="fa fa-bolt"></i></div>
						<div class="box-icon-content">
							<h5><?php echo $sv3->judul; ?></h5>
							<p><?php echo $sv3->teks; ?></p>
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
				<div class="sections-title-h3"><h3><?php echo $teksprod->judul; ?></h3></div>
				<p><?php echo $teksprod->teks; ?></p>
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
					<?php foreach ($ktgproduk as $t) { ?>
					<li class="col-md-3 term-design portfolio-item isotope-item">
						<div class="portfolio-one">
							<div class="portfolio-head">
								<div class="portfolio-img"><img alt="" class="img-md" src="<?php echo $root_path_image?>.<?php echo $t->image ?>" style="height: 250px;"></div>
								<div class="portfolio-hover">
									<a class="portfolio-link" href="ktgproduk/<?php echo $t->slug ?>"><i class="fa fa-link"></i></a>
									<a class="portfolio-zoom prettyPhoto" href="<?php echo $root_path_image?>.<?php echo $t->image ?>"><i class="fa fa-search"></i></a>
								</div>
							</div><!-- End portfolio-head -->
							<div class="portfolio-content">
								<i class="fa fa-leaf"></i>
								<div class="portfolio-meta">
									<div class="portfolio-name"><h6><a href="ktgproduk/<?php echo $t->slug ?>"><?php echo $t->judul ?></a></h6></div>
									<!-- <div class="portfolio-cat"><a href="#"><?php echo $t->judul ?></a></div> -->
								</div><!-- End portfolio-meta -->
							</div><!-- End portfolio-content -->
						</div><!-- End portfolio-item -->
					</li>
					<?php } ?>
				</ul>
			</div><!-- End portfolio-0 -->
			<div class="load-more-projects"><a class="button-1 button-2" href="ktgproduk">Lihat Produk Lainnya</a></div>
		</div><!-- End container -->
	</div><!-- End sections -->
	
	
	<div class="sections sections-padding-b-50">
		<div class="container">
			<div class="sections-title">
				<div class="sections-title-h3"><h3><?php echo $tekspor->judul; ?></h3></div>
				<p><?php echo $tekspor->teks; ?></p>
			</div><!-- End sections-title -->
			<div class="row">
				<div class="bxslider-slide blog-silde">
					<ul>
						<li>
							<?php foreach ($news1 as $t) { ?>
							<div class="col-md-4 blog-item">
								<div class="blog-one">
									<div class="blog-img">
										<img class="img-news" alt="" src="<?php echo $root_path_image?>.<?php echo $t->image; ?>">
										<div class="blog-date"><span><?php echo date('d', strtotime($t->datei)); ?></span><span><?php echo date('M Y', strtotime($t->datei)); ?></span></div>
									</div><!-- End blog-img -->
									<div class="blog-content">
										<h6><a href="single-blog.html"><?php echo $t->judul; ?></a></h6>
										<p><?php echo $t->ket; ?> <a href="news/<?php echo $t->judul; ?>">Read More</a></p>
									</div><!-- End blog-content -->
									<div class="clearfix"></div>
								</div><!-- End blog-item -->
							</div>
							<?php } ?>
						</li>
						<li>
							<?php foreach ($news2 as $t) { ?>
							<div class="col-md-4 blog-item">
								<div class="blog-one">
									<div class="blog-img">
										<img class="img-news" alt="" src="<?php echo $root_path_image?>.<?php echo $t->image; ?>">
										<div class="blog-date"><span><?php echo date('d', strtotime($t->datei)); ?></span><span><?php echo date('M Y', strtotime($t->datei)); ?></span></div>
									</div><!-- End blog-img -->
									<div class="blog-content">
										<h6><a href="single-blog.html"><?php echo $t->judul; ?></a></h6>
										<p><?php echo $t->ket; ?> <a href="news/<?php echo $t->judul; ?>">Read More</a></p>
									</div><!-- End blog-content -->
									<div class="clearfix"></div>
								</div><!-- End blog-item -->
							</div>
							<?php } ?>
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
						<?php foreach ($cl1 as $t) { ?>
							<div class="col-md-2 client-item">
								<div class="client"><a href="<?php echo prep_url($t->link); ?>"><img alt="<?php echo $t->judul; ?>" src="<?php echo $root_path_image?>.<?php echo $t->image; ?>"></a></div>
							</div>
						<?php } ?>
						</li>
						<li>
						<?php foreach ($cl2 as $t) { ?>
							<div class="col-md-2 client-item">
								<div class="client"><a href="<?php echo prep_url($t->link); ?>"><img alt="" src="<?php echo $root_path_image?>.<?php echo $t->image; ?>"></a></div>
							</div>
						<?php } ?>
						</li>
					</ul>
				</div><!-- End clients-slide -->
			</div><!-- End row -->
		</div><!-- End container -->
	</div><!-- End sections -->
<?php $this->load->view('template/footer') ?>
<?php $this->load->view('template/js') ?>