<?php $this->load->view('template/header');  ?>
<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h4>Hubungi Kami</h4>
					<span>Tim kami akan selalu membantu anda</span>
				</div>
				<div class="col-md-6">
					<div class="crumbs">You are here: <a href="index.html">Home</a><span class="crumbs-span">&raquo;</span><span>Hubungi Kami</span></div>
				</div>
			</div><!-- End row -->
		</div><!-- End container -->
	</div><!-- End breadcrumbs -->
	
	<div class="sections">
		<div class="container">
			<div class="row">
				<div class="col-md-12 main-content">
					<div class="row">
						<div class="col-md-9">
							<div class="section-title section-title-2 section-title-3"><h6>Contact Form :</h6></div>
							<div class="comment-form">
								<form class="form-js" id="form">
									<div class="row">
										<div class="col-md-6">
											<div class="form-input">
												<i class="fa fa-user"></i>
												<input name="nama" id="name" type="text" placeholder="Your Name">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-input">
												<i class="fa fa-envelope"></i>
												<input name="email" id="mail" type="email" placeholder="Email">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-input">
												<i class="fa fa-comment"></i>
												<textarea name="pesan" id="message" placeholder="Message"></textarea>
											</div>
										</div>
										<div class="col-md-12">
											<input type="submit" onclick="send_pesan()" class="button-3 btn-message" value="Send Message">
										</div>
										<div class="col-md-12 callout callout-4 sukses">
											<h6>Pesan Anda Telah Terkirim</h6>
											<div class="row">
												<div class="col-md-10">
													<p>Terimakasih telah mengirimkan pesan</p>
												</div>
												<div class="col-md-2">
													<div class="callout-a "><a class="button-3" href="<?php echo base_url() ?>">Home</a></div>
												</div>
											</div>
										</div>
									</div><!-- End row -->
								</form>
							</div><!-- End comment-form -->
						</div>
						<div class="col-md-3">
							<div class="section-title section-title-2 section-title-3"><h6>Alamat & Kontak :</h6></div>
							<div class="contact-information">
								<ul>
									<li style="color : #212121 !important;">Jalan Merak Raya Blok C No.28, Dusun I, Langenharjo, Grogol, Kabupaten Sukoharjo, Jawa Tengah 57552.</li>
									<li>(0271) 9221000</li>
									<li>info@mycolour.com</li>
								</ul>
							</div><!-- End contact-information -->
							<div class="section-title section-title-2 section-title-3"><h6>Jam Operasional :</h6></div>
							<ul class="business-hours">
								<li>Senin – Sabtu : 9.00 - 17.00</li>
							</ul>
						</div>
					</div><!-- End row -->
					
					<div class="row" style="padding-top: 20px;">
					<div class="contact-iframe">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.692769536558!2d110.81071831432436!3d-7.608372677315516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1601f28c83eb%3A0x50fef894e374877b!2sMy+Colour+digital+printing+-+advertising!5e0!3m2!1sen!2sid!4v1552998114230" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
				</div>	
				</div><!-- End main-content -->
			</div><!-- End row -->
			
		</div><!-- End container -->
	</div><!-- End sections -->

<?php 
		$this->load->view('template/footer');
		$this->load->view('template/js');
 ?>
<script type="text/javascript">
$( document ).ready(function() {
	$('.sukses').css({display: 'none'});
});
 function send_pesan() {
 	$.ajax({
          url: "<?php echo base_url() ?>kontak/pesan",
          type: "POST",
          data: $('#form').serialize(),
          dataType: "JSON",
          success: function(data) {
              if (data.sukses == 'success') {
              	console.log('oke');
              	$('#form')[0].reset();
              	$('.btn-message').css({display: 'none'});
              	$('.form-input').css({display: 'none'});
              	$('.sukses').toggle( "slow" );
                // $('.sukses').show();

              } else if (data.sukses == 'fail') {
                  console.log('no');
              }


          },
          error: function(jqXHR, textStatus, errorThrown) {
              alert('Error on process');
          }
      });
 }
</script>