<?php 
$tk =  $this->db->get_where('t_config_text', array('tipe' => 'tk'), 6)->row();
$alfoot =  $this->db->get_where('t_config_text', array('tipe' => 'alfoot'), 6)->row();
$tlfoot =  $this->db->get_where('t_config_text', array('tipe' => 'tlfoot'), 6)->row();
$efoot =  $this->db->get_where('t_config_text', array('tipe' => 'efoot'), 6)->row();

// $fb =  $this->db->get_where('t_config_text', array('tipe' => 'logo_fb'), 6)->row();
$tp =  $this->db->get_where('t_config_text', array('tipe' => 'logo_tp'), 6)->row();
$ig =  $this->db->get_where('t_config_text', array('tipe' => 'logo_ig'), 6)->row();
$wa =  $this->db->get_where('t_config_text', array('tipe' => 'logo_wa'), 6)->row();

 ?>
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="footer-widget">
            <div class="widget-title"><h6><?php echo $tk->judul; ?></h6></div>
            <div class="widget-about">
              <p style="color : #acacac !important;"><?php echo $tk->ket; ?></p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="footer-widget">
            <div class="widget-title"><h6>Kontak</h6></div>
            <div class="widget-about-2">
              <ul>
                <li>
                  <i class="fa fa-map-marker"></i>
                  <div><?php echo $alfoot->teks; ?></div>
                </li>
                <li>
                  <i class="fa fa-phone"></i>
                  <div><?php echo $tlfoot->teks; ?></div>
                </li>
                <li>
                  <i class="fa fa-envelope"></i>
                  <div><?php echo $efoot->teks; ?></div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="footer-widget">
            <div class="widget-title"><h6>Quick Links</h6></div>
            <div class="widget-posts">
              <ul>
                <li><a href="<?php echo base_url() ?>home">Home</a></li>
                <li><a href="<?php echo base_url() ?>about">Tentang Kami</a></li>
                <li><a href="<?php echo base_url() ?>produk">Produk</a></li>
                <li><a href="<?php echo base_url() ?>portofolio">Portfolio</a></li>
                <li><a href="<?php echo base_url() ?>berita">Berita</a></li>
                <li><a href="<?php echo base_url() ?>kontak">Hubungi Kami</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="footer-widget">
            <div class="widget-title"><h6>Follow Us</h6></div>
            <div class="widget-about">
              <div class="social-ul">
                <ul>
                  <li class="social-whatsapp"><a href="<?php echo prep_url($tp->teks); ?>"><i class="fas fa-shopping-cart"></i></a></li>
                  <li class="social-instagram"><a href="<?php echo prep_url($ig->teks); ?>"><i class="fab fa-instagram"></i></a></li>
                  <li class="social-whatsapp"><a href="<?php echo prep_url($wa->teks); ?>"><i class="fab fa-whatsapp"></i></a></li>
                  <!-- <li class="social-whatsapp"><a href="#"><i class="fa fa-whatsapp"></i></a></li> -->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div><!-- End row -->
    </div><!-- End container -->
  </footer><!-- End footer -->
  <footer id="footer-bottom">
    <div class="container">
      <div class="copyrights">Copyright <script type="text/javascript">document.write(new Date().getFullYear());</script> My Colour | Developer by <a target="_blank" href="http://orcadigital.id/">ORCA DIGITAL.</a></div>
      <!-- <nav class="navigation-footer" style="display: none;">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="features.html">Tentang Kami</a></li>
          <li><a href="services.html">Produk</a></li>
          <li><a href="portfolio-description.html">Portfolio</a></li>
          <li><a href="blog.html">Berita</a></li>
          <li><a href="contact.html">Hubungi Kami</a></li>
        </ul>
      </nav> -->
    </div><!-- End container -->
  </footer><!-- End footer-bottom -->
  
</div><!-- End wrap -->