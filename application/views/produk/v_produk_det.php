<?php $this->load->view('template/header') ?>
<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h4>Produk</h4>
					<span>Contoh Produk dari Kami</span>
				</div>
				<div class="col-md-6">
					<div class="crumbs">You are here: <a href="<?php echo base_url() ?>">Home</a><span class="crumbs-span">&raquo;</span><span><a href="<?php echo base_url() ?>produk">Kategori produk</a></span><span class="crumbs-span">&raquo;</span><span><a href="<?php echo base_url().''.$menu.'/list_item/'.$ktgproduk->id ?>"><?php echo $ktgproduk->judul ?></a></span>&raquo;<span> <?php echo $maindata->judul; ?></span></div>
				</div>
			</div><!-- End row -->
		</div><!-- End container -->
	</div><!-- End breadcrumbs -->
<div class="sections section-2">
	<div class="container">
		<div class="sections-title">
			<div class="sections-title-h3"><h3><?php echo $maindata->judul; ?></h3></div>
			</div><!-- End sections-title -->
			<div class="row">
				<div class="col-md-4">
							<img alt="" src="<?php echo base_url() ?><?php echo $this->config->item('admin_page') ?>/<?php echo $maindata->image; ?>">
						
				</div>
				<div class="col-md-8">
					<?php echo $maindata->artikel; ?>
				</div>
			</div><!-- End row -->
	</div><!-- End container -->
</div><!-- End sections -->
<?php $this->load->view('template/footer') ?>
<?php $this->load->view('template/js') ?>