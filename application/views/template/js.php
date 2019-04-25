<div class="go-up"><i class="fa fa-chevron-up"></i></div>

<!-- js -->
<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/html5.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.isotope.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.nicescroll.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.appear.js"></script>
<script src="<?php echo base_url() ?>assets/js/count-to.js"></script>
<script src="<?php echo base_url() ?>assets/js/twitter/jquery.tweet.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.inview.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.prettyPhoto.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.bxslider.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.themepunch.plugins.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/custom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/js/bootstrap-notify.min.js"></script>
<script src="<?php echo base_url() ?>assets/slick/slick.min.js"></script>
<!-- End js -->
<script type="text/javascript">
    $(document).ready(function() {
        $('.slick-ss').slick({
            autoplay: true,
            autoplaySpeed: 1500,
            prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fa fa-chevron-left' aria-hidden='true'></i></button>",
            nextArrow: "<button type='button' class='slick-next pull-right'><i class='fa fa-chevron-right' aria-hidden='true'></i></button>"
        });
    });
    $('.<?php echo $aktifmenu ?>').addClass('current_page_item');
</script>


</body>
</html>