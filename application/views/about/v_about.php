<?php $this->load->view('template/header') ?>
<div class="sections section-2">
	<div class="container">
		<div class="sections-title">
			<div class="sections-title-h3"><h3><?php echo $maindata->judul; ?></h3></div>
			</div><!-- End sections-title -->
			<div class="row">
				<div class="col-md-4">
					<div class="">
						<ul>
							<li><img alt="" src="custompanel/<?php echo $maindata->image; ?>"></li>
							<!-- <li><img alt="" src="images/about-2.jpg"></li> -->
						</ul>
					</div>
				</div>
				<div class="col-md-8">
					<?php echo $maindata->ket; ?>
				</div>
			</div><!-- End row -->
	</div><!-- End container -->
</div><!-- End sections -->
<?php $this->load->view('template/footer') ?>
<?php $this->load->view('template/js') ?>