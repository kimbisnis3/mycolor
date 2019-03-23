		
<?php $this->load->view('template/header');  ?>
<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h4>Produk</h4>
					<span>Inilah daftar produk dari kami</span>
				</div>
				<div class="col-md-6">
					<div class="crumbs">You are here: <a href="<?php echo base_url() ?>">Home</a><span class="crumbs-span">&raquo;</span><span><a href="<?php echo base_url() ?>produk">Kategori Produk</a></span><span class="crumbs-span">&raquo;</span><span><?php echo $ktgproduk->judul ?></span></div>
				</div>
			</div><!-- End row -->
		</div><!-- End container -->
	</div><!-- End breadcrumbs -->
	
	<div class="sections">
		<div class="container">
			<div class="sections-title">
				<div class="sections-title-h3"><h3><?php echo $ktgproduk->judul ?></h3></div>
				<p>Berikut Ini Adalah Daftar produk dari Kategori <strong><?php echo $ktgproduk->judul ; ?></strong>.</p>
			</div><!-- End sections-title -->
			<div class="row">
				<div class="col-md-12 main-content">
					<div class="row portfolio-all portfolio-0">
						<ul>
							<?php foreach ($maindata as $t) { ?>
							
							<li class="col-md-3 term-design portfolio-item portfolio-item-2 isotope-item">
								<div class="portfolio-one">
									<div class="portfolio-head">
										<div class="portfolio-img"><img alt="" src="<?php echo base_url() ?>/<?php echo $this->config->item('admin_page') ?><?php echo $t->image ?>" style="height: 250px;"></div>
										<div class="portfolio-hover">
											<div class="portfolio-meta">
												<div class="portfolio-name"><h6><a href="<?php echo base_url() ?><?php echo $menu ?>/detail/<?php echo $t->slug ?>"><?php echo $t->judul ?></a></h6></div>
												<div class="portfolio-desc"><p><?php echo $t->ket ?></p>
												</div>
											</div><!-- End portfolio-meta -->
											<a class="portfolio-link" href="<?php echo base_url() ?><?php echo $menu ?>/detail/<?php echo $t->slug ?>"><i class="fa fa-link"></i></a>
											<a class="portfolio-zoom prettyPhoto" href="<?php echo base_url() ?>/<?php echo $this->config->item('admin_page') ?><?php echo $t->image ?>"><i class="fa fa-search"></i></a>
										</div>
									</div><!-- End portfolio-head -->
								</div><!-- End portfolio-item -->
							</li>
							<?php } ?>
						</ul>
					</div><!-- End portfolio-0 -->
					<?php 
					$visibleprev = $currentpage - 1 == 0 ? 'none' : 'inline';
					if (($currentpage < $numofpage)) {
						$nextpage =  $currentpage + 1;
						$prevpage =  $currentpage - 1;
						$visible = 'inline';
					} elseif ($currentpage == $numofpage) {
						$nextpage = $numofpage;
						$prevpage =  $currentpage - 1;
						$visible = 'none';
					}

					?>
					<div class="pagination">
						<ul>
							<li class="pagination-prev" style="display : <?php echo $visibleprev; ?>"><a href="<?php echo $this->uri->segment(3) ?>?page=<?php echo $prevpage; ?>"><i class="fa fa-angle-left"></i></a></li>
							<?php
							for( $no = 1; $no <= ($numofpage) ; $no++ ) { ?>

							<li><a class="<?php echo ($no == $currentpage) ? 'page_active' : ''; ?>" href="<?php echo $this->uri->segment(3) ?>?page=<?php echo $no; ?>"><?php echo $no; ?></a></li>
							<?php } ?>
							<li class="pagination-next" style="display: <?php echo $visible; ?> "><a href="<?php echo $this->uri->segment(3) ?>?page=<?php echo $nextpage; ?>"><i class="fa fa-angle-right"></i></a></li>
						</ul>
					</div><!-- End pagination -->
				</div><!-- End main-content -->
			</div><!-- End row -->
		</div><!-- End container -->
	</div><!-- End sections -->
<?php 
		$this->load->view('template/footer');
		$this->load->view('template/js');
 ?>