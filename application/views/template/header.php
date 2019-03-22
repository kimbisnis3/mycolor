<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<?php 
$ktgproduk =  $this->db->get_where('m_ktgproduk', array('aktif' => '1'), 6)->result();

 ?>
<head>

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>My Colour | Digital Printing & Advertising</title>
	<meta name="description" content="My Colour | Digital Printing & Advertising">
	<meta name="Orca Digital" content="My Colour">
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Main Style -->
	<link rel="stylesheet" href="assets/style.css">
	
	<!-- Skins -->
	<link rel="stylesheet" href="assets/css/skins/skins.css">
	
	<!-- Responsive Style -->
	<link rel="stylesheet" href="assets/css/responsive.css">
	
	<!-- Favicons -->
	<link rel="shortcut icon" href="assets/assets/images/favicon.png">
  
</head>
<body>

<div class="loader"><div class="loader_html"></div></div>

<div id="wrap" class="grid_1200">
	<header id="header">
		<div class="container clearfix">
			<div class="logo"><a href="index.html"><img alt="" src="assets/images/logo.png"></a></div>
			<nav class="navigation navbar-fixed-top"> 
				<ul>
					<li class="home"><a href="<?php echo base_url() ?>">Home</a></li>
					<li class="about"><a href="about">Tentang Kami</a></li>
					<li class="produk"><a href="#">Produk</a>
						<ul>
							<?php foreach ($ktgproduk as $t) { ?>
							<li><a href="ktgproduk/<?php echo $t->slug; ?>"><?php echo $t->judul; ?></a></li>	
							<?php } ?>
						</ul>
					</li>
					<li class="portfolio"><a href="portfolio">Portfolio</a></li>
					<li class="news"><a href="news">Berita</a></li>
					<li class="kontak"><a href="kontak">Hubungi Kami</a></li>
				</ul>
			</nav><!-- End navigation -->
		</div><!-- End container -->
	</header><!-- End header -->
	
	<div class="clearfix"></div>