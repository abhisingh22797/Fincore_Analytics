  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3><img src="<?php echo  base_url(); ?>uploads/logo/<?= $contact["logo"]; ?>"></h3>
            <p><?= $contact["about_title"];?></p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
                            <li><i class="ion-ios-arrow-right"></i> <a href="index.html">CLASSROOM BOOTCAMP</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">ONLINE</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="Corporatetraining.html">CORPORATE TRAINING</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="placement.html">PLACEMENT</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="Examresult.html">TWSSEXAM RESULT</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="Consulting.html">TWSS CONSULTING</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="contact .html">CONTACT US</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Course</a></li>
                        </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>GET IN TOUCH</h4>
            <p>
			<?= $contact["address"];?>   
            <strong>Phone: </strong><a href="tel:<?= $contact["phone"]; ?>"> <?= $contact["phone"];?></a> <br>
              <strong>Email: </strong><a href="mailto:<?= $contact["email"]; ?>"><?= $contact["email"];?></a> <br>
            </p>

            <div class="social-links">
              <a href="<?= $contact["twitter"]; ?>" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="<?= $contact["facebook"]; ?>" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="<?= $contact["instagram"]; ?>" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="<?= $contact["google"]; ?>" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="<?= $contact["youtube"]; ?>" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <!--<div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>CENTERS</h4>
            <ul style="padding-left: 0px;list-style: none;">
            <li>Delhi</li>
            <li>Gurgaon</li>
             <li>Indore</li>
            </ul>
              <h4>APPS</h4>
              <img src="<?php echo  base_url(); ?>assets/frontend/img/p.png">
              <div class="sdfs">
                       <img src="<?php echo  base_url(); ?>assets/frontend/img/a.png">
                       </div>
          </div>-->

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Insydin</strong>. All Rights Reserved
      </div>
      <div class="credits">
       
     
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  
  <script src="<?php echo  base_url(); ?>assets/frontend/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/lib/easing/easing.min.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/lib/superfish/hoverIntent.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/lib/superfish/superfish.min.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/lib/wow/wow.min.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/lib/waypoints/waypoints.min.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/lib/counterup/counterup.min.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/lib/lightbox/js/lightbox.min.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?php echo  base_url(); ?>assets/frontend/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo  base_url(); ?>assets/frontend/js/main.js"></script>

</body>
</html>