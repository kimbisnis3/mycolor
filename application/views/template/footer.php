<?php 
$tk =  $this->db->get_where('t_config_text', array('tipe' => 'tk'), 6)->row();

 ?>
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="footer-widget">
            <div class="widget-title"><h6><?php echo $tk->judul; ?></h6></div>
            <div class="widget-about">
              <p><?php echo $tk->teks; ?></p>
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
                  <div>Jalan Merak Raya Blok C No.28, Dusun I, Langenharjo, Grogol, Kabupaten Sukoharjo, Jawa Tengah 57552</div>
                </li>
                <li>
                  <i class="fa fa-phone"></i>
                  <div>(0271) 9221000</div>
                </li>
                <li>
                  <i class="fa fa-envelope"></i>
                  <div>info@mycolour.com</div>
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
                <li><a href="home">Home</a></li>
                <li><a href="about">Tentang Kami</a></li>
                <li><a href="produk">Produk</a></li>
                <li><a href="portofolio">Portfolio</a></li>
                <li><a href="berita">Berita</a></li>
                <li><a href="kontak">Hubungi Kami</a></li>
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
                  <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="social-instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li class="social-whatsapp"><a href="#"><i class="fa fa-whatsapp-square"></i></a></li>
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
      <nav class="navigation-footer" style="display: none;">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="features.html">Tentang Kami</a></li>
          <li><a href="services.html">Produk</a></li>
          <li><a href="portfolio-description.html">Portfolio</a></li>
          <li><a href="blog.html">Berita</a></li>
          <li><a href="contact.html">Hubungi Kami</a></li>
        </ul>
      </nav>
    </div><!-- End container -->
  </footer><!-- End footer-bottom -->
  
</div><!-- End wrap -->