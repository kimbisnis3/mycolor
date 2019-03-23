<?php $this->load->view('template/header') ?>
<div class="sections section-2">
	<div class="container">
		<div class="sections-title">
			<div class="sections-title-h3"><h3><?php echo $maindata->judul; ?></h3></div>
			</div><!-- End sections-title -->
			<div class="row">
				<div class="col-md-4">
							<img alt="" src="<?php echo $this->config->item('admin_page') ?>/<?php echo $maindata->image; ?>">
						
				</div>
				<div class="col-md-8">
					<?php echo $maindata->ket; ?>
				</div>
			</div><!-- End row -->
	</div><!-- End container -->
</div><!-- End sections -->
<?php $this->load->view('template/footer') ?>
<?php $this->load->view('template/js') ?>