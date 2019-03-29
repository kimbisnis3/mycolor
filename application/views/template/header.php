<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<?php 
$ktgproduk =  $this->db->get_where('m_ktgproduk', array('aktif' => '1'), 6)->result();
$produk =  $this->db->order_by('tampildepan', 'ASC')->get_where('m_produk', array('aktif' => '1','tampildepan' => '1'), 6)->result();
$logo =  $this->db->get_where('t_config_image', array('tipe' => 'logo'))->row();

 ?>

<style type="text/css">
	.img-md {
		max-width: 100%;
    	max-height: 100%;
	}
	.img-news {
		width: 100%;
    	max-height: 150px;
	}
	.page_active {
		background-color: #dd0000 !important;
		color: #fff !important;
	}
</style>
<head>

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>My Colour | Digital Printing & Advertising</title>
	<meta name="description" content="My Colour | Digital Printing & Advertising">
	<meta name="Orca Digital" content="My Colour">
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Main Style -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/style.css">
	
	<!-- Skins -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/skins/skins.css">
	
	<!-- Responsive Style -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css">
	
	<!-- Favicons -->
	<link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.png">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/css/bootstrap-notify.min.css" />

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  
</head>
<body>

<div class="loader"><div class="loader_html"></div></div>

<div id="wrap" class="grid_1200">
	<header id="header">
		<div class="container clearfix">
			<div class="logo"><a href="<?php echo base_url() ?>"><img alt="" src="custompanel/<?php echo $logo->image ?>"></a></div>
			<nav class="navigation navbar-fixed-top"> 
				<ul>
					<li class="home"><a href="<?php echo base_url() ?>">Home</a></li>
					<li class="about"><a href="<?php echo base_url() ?>about">Tentang Kami</a></li>
					<li class="produk"><a href="<?php echo base_url() ?>produk">Produk</a>
						<ul>
							<?php foreach ($produk as $t) { ?>
							<li><a href="<?php echo base_url() ?>produk/detail/<?php echo $t->slug; ?>"><?php echo $t->judul; ?></a></li>	
							<?php } ?>
						</ul>
					</li>
					<li class="portofolio"><a href="<?php echo base_url() ?>portofolio">Portfolio</a></li>
					<li class="berita"><a href="<?php echo base_url() ?>berita">Berita</a></li>
					<li class="kontak"><a href="<?php echo base_url() ?>kontak">Hubungi Kami</a></li>
				</ul>
			</nav><!-- End navigation -->
		</div><!-- End container -->
	</header><!-- End header -->
	
	<div class="clearfix"></div>