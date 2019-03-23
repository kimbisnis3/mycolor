<?php $this->load->view('template/header');  ?>
<style type="text/css">
	.form-control {
		width: 50% !important;
		border: 1px solid black !important;
		color:  black !important;
	}
</style>
	<div class="sections sections-left-sidebar">
		<div class="container">
			<div class="sections-title">
				<div class="sections-title-h3"><h3>Kontak Kami</h3></div>
				<p>Tinggalkan Pesan Di Bawah Ini.</p>
			</div><!-- End sections-title -->
			<div class="callout callout-4 sukses">
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
			<div class="row" style="padding-left: 33%; color: black !important">
				<div class="col-md-12 main-content">
					<form id="form">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" class="form-control" name="nama">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="email">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input type="text" class="form-control" name="alamat">
					</div>
					<div class="form-group">
						<label>Pesan</label>
						<textarea class="form-control" name="pesan" rows="5"></textarea>
					</div>
					</form>
					
				</div><!-- End main-content -->

			</div><!-- End row -->
			<div class="row" style="padding-top: 5%;">
				<div class="load-more-projects btn-message" onclick="send_pesan()"><a class="button-1 button-2" >Tinggalkan Pesan</a></div>
			</div>
			<!-- <div class="row" style="padding-top: 0em;">
				<div class="load-more-projects sukses"><a class="button-1 button-2" style="background-color: lime; border: 1px solid lime !important">Pesan Terkirim</a></div>
			</div> -->
			
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
              	$('.sukses').css({display: ''});
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