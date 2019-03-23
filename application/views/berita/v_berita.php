
<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h4>Berita</h4>
					<span>Update berita terbaru </span>
				</div>
				<div class="col-md-6">
					<div class="crumbs">You are here: <a href="index.html">Home</a><span class="crumbs-span">&raquo;</span><span>Berita</span></div>
				</div>
			</div><!-- End row -->
		</div><!-- End container -->
	</div><!-- End breadcrumbs -->
	
	<div class="sections">
		<div class="container">
			<div class="row">
				<div class="col-md-12 main-content">
					<div class="row">
						<?php foreach ($maindata as $t) {  ?>
						<div class="col-md-4 blog-item">
							<div class="blog-one">
								<div class="blog-img">
									<img class="img-news" src="<?php echo base_url() ?>/<?php echo $this->config->item('admin_page') ?>/<?php echo $t->image; ?>">
									<div class="blog-date"><span><?php echo date('d', strtotime($t->datei)); ?></span><span><?php echo date('M Y', strtotime($t->datei)); ?></span></div>
								</div><!-- End blog-img -->
								<div class="blog-content">
									<h6><a href="<?php echo $menu ?>/<?php echo $t->slug; ?>"><?php echo $t->judul; ?></a></h6>
									<p><?php echo $t->ket; ?> <a href="<?php echo $menu ?>//<?php echo $t->slug; ?>">Read More</a></p>
								</div><!-- End blog-content -->
								<div class="clearfix"></div>
							</div><!-- End blog-item -->
						</div>
						<?php } ?>
					</div><!-- End row -->
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
							<li class="pagination-prev" style="display : <?php echo $visibleprev; ?>"><a href="<?php echo $menu ?>?page=<?php echo $prevpage; ?>"><i class="fa fa-angle-left"></i></a></li>
							<?php
							for( $no = 1; $no <= ($numofpage) ; $no++ ) { ?>

							<li><a class="<?php echo ($no == $currentpage) ? 'page_active' : ''; ?>" href="<?php echo $menu ?>?page=<?php echo $no; ?>"><?php echo $no; ?></a></li>
							<?php } ?>
							<li class="pagination-next" style="display: <?php echo $visible; ?> "><a href="<?php echo $menu ?>?page=<?php echo $nextpage; ?>"><i class="fa fa-angle-right"></i></a></li>
						</ul>
					</div><!-- End pagination -->
				</div><!-- End main-content -->
			</div><!-- End row -->
			
		</div><!-- End container -->
	</div><!-- End sections -->