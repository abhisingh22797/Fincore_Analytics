
  <!--==========================
    Intro Section//<?php print_r($program);?>
  ============================-->

  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
 <?php $i = 0; ?>
        <?php foreach ($allSlider as $slid) : ?>
          <div  <?php if ($i == 0) { ?>class="carousel-item active" <?php } else { ?>class="carousel-item" <?php } ?>>
            <div class="carousel-background"><img src="<?php echo base_url(); ?>uploads/slider/<?php echo $slid->image; ?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
              <p><?php echo $slid->title_upper; ?></p>
                <h2><?php echo $slid->title; ?></h2>
                <p><?php echo $slid->title_bottom; ?></p>
				<a href="<?php echo $slid->links; ?>" class="btn-get-started scrollto">Know More</a>

              </div>
            </div>
			  <?php $i++; ?>
          </div>
		  <?php endforeach; ?>

      <!--    <div class="carousel-item">
            <div class="carousel-background"><img src="<?php echo  base_url(); ?>assets/frontend/img/intro-carousel/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
              <p>Your Success, Our Promise!</p>
                <h2>Level I CFA<sup>®</sup> Program Training<br>
With a Moneyback Guarantee</h2>
                <p>We are an approved prep provider of cfa Institute. This course comes with a 100% money back guarantee if the student is not able to clear the exam*.</p>

              </div>
            </div>
          </div>

        </div>-->

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->
  
   <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Our Target recruiters </h3>
   <!--      <p><?= $allHome["client"]; ?>-->
</p>
        </header>

        <div class="owl-carousel clients-carousel">
		<?php foreach($allBarnds as $brand): ?>
          <img src="<?php echo  base_url(); ?>uploads/brands/<?= $brand->image; ?>" alt="">
		   <?php endforeach; ?>
       <!--   <img src="<?php echo  base_url(); ?>assets/frontend/img/clients/client-2.png" alt="">
          <img src="<?php echo  base_url(); ?>assets/frontend/img/clients/client-3.png" alt="">
          <img src="<?php echo  base_url(); ?>assets/frontend/img/clients/client-4.png" alt="">
          <img src="<?php echo  base_url(); ?>assets/frontend/img/clients/client-5.png" alt="">
          <img src="<?php echo  base_url(); ?>assets/frontend/img/clients/client-6.png" alt="">
          <img src="<?php echo  base_url(); ?>assets/frontend/img/clients/client-7.png" alt="">
          <img src="<?php echo  base_url(); ?>assets/frontend/img/clients/client-8.png" alt="">-->
        </div>
      </div>
    </section><!-- #clients -->

    <!--==========================
      Clients Section
    ============================-->
  
  

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Why Fincore?</h3>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="<?php echo  base_url(); ?>uploads/home/<?= $allHome["sec1_image"]; ?>" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><?= $allHome["sec1_title"]; ?></h2>
              <p>
                <?= $allHome["sec1_des"]; ?>
				
              </p>
			  <a href="<?= $allHome["sec1_url"]; ?>">  <button type="button" class="btn btn-default">Know more</button></a>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="<?php echo  base_url(); ?>uploads/home/<?= $allHome["sec2_image"]; ?>" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><?= $allHome["sec2_title"]; ?></h2>
              <p>
			  <?= $allHome["sec2_des"]; ?>
            
              </p>
			   <a href="<?= $allHome["sec2_url"]; ?>">   <button type="button" class="btn btn-default">Know more</button>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="<?php echo  base_url(); ?>uploads/home/<?= $allHome["sec3_image"]; ?>" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><?= $allHome["sec3_title"]; ?></h2>
              <p>
                <?= $allHome["sec3_des"]; ?>
              </p>
			  <a href="<?= $allHome["sec3_url"]; ?>">    <button type="button" class="btn btn-default">Know more</button> </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Our Programs</h3>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="tryy"><img src="<?php echo  base_url(); ?>uploads/home/<?= $allHome["pro1_image"]; ?>"></div>
            <h4 class="title"><a href="<?= $allHome["pro1_url"]; ?>"><?= $allHome["pro1_title"]; ?></a></h4>
            <p class="description"><?= $allHome["pro1_des"]; ?></p>
    
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
             <div class="tryy"><img src="<?php echo  base_url(); ?>uploads/home/<?= $allHome["pro2_image"]; ?>"></div>
            <h4 class="title"><a href="<?= $allHome["pro2_url"]; ?>"><?= $allHome["pro2_title"]; ?></a></h4>
            <p class="description"><?= $allHome["pro2_des"]; ?></p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
              <div class="tryy"><img src="<?php echo  base_url(); ?>uploads/home/<?= $allHome["pro3_image"]; ?>"></div>
            <h4 class="title"><a href="<?= $allHome["pro3_url"]; ?>"><?= $allHome["pro3_title"]; ?></a></h4>
            <p class="description"><?= $allHome["pro3_des"]; ?></p>
          </div>
        
       

        </div>

      </div>
    </section><!-- #services -->

   

   
    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="<?php echo  base_url(); ?>assets/frontend/img/testimonial-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <img src="<?php echo  base_url(); ?>assets/frontend/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="<?php echo  base_url(); ?>assets/frontend/img/testimonial-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <img src="<?php echo  base_url(); ?>assets/frontend/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="<?php echo  base_url(); ?>assets/frontend/img/testimonial-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <img src="<?php echo  base_url(); ?>assets/frontend/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="<?php echo  base_url(); ?>assets/frontend/img/testimonial-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <img src="<?php echo  base_url(); ?>assets/frontend/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="<?php echo  base_url(); ?>assets/frontend/img/testimonial-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <img src="<?php echo  base_url(); ?>assets/frontend/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

        </div>

      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
    <div class="container-fluid Training">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3><?= $allHome["team_title"]; ?></h3>
          <p><?= $allHome["team_des"]; ?></p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 wow fadeInUp">
          <h3><?= $allHome["team1_title"]; ?></h3>
          <p><?= $allHome["team1_des"]; ?></p>
          </div>

		 <div class="col-lg-4 col-md-6 wow fadeInUp">
          <h3><?= $allHome["team2_title"]; ?></h3>
          <p><?= $allHome["team2_des"]; ?></p>
          </div>
          
         <div class="col-lg-4 col-md-6 wow fadeInUp">
          <h3><?= $allHome["team3_title"]; ?></h3>
          <p><?= $allHome["team3_des"]; ?></p>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp">
          <h3><?= $allHome["team4_title"]; ?></h3>
          <p><?= $allHome["team4_des"]; ?></p>
          </div>
           <div class="col-lg-4 col-md-6 wow fadeInUp">
          <h3><?= $allHome["team5_title"]; ?></h3>
          <p><?= $allHome["team5_des"]; ?></p>
          </div>
          <div class="clearfix"></div>
           <div class="col-lg-4 col-md-6 wow fadeInUp">
          <h3><?= $allHome["team6_title"]; ?></h3>
          <p><?= $allHome["team6_des"]; ?></p>
          </div>
        </div>

      </div>
      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Discuss a Current Requirement</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>	<?= $contact["address"];?>  </address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:<?= $contact["phone"];?>"> <?= $contact["phone"];?></a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:<?= $contact["email"];?>"><?= $contact["email"];?></a></p>
            </div>
          </div>

        </div>

<?php $this->load->helper("form"); ?>
<?php
$attributes = array('id' => 'f_form1', 'method' => 'post', 'class' => 'form_horizontal');
echo form_open_multipart('Home/request', $attributes);
?>
        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-4 wow fadeInUp">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"  data-msg="Please enter your Name" />
                <div class="validation"></div>
              </div>
			    <div class="form-group col-md-4 wow fadeInUp">
                <input type="tel" name="phone" class="form-control" id="phone" placeholder="Phone."  data-msg="Please enter your phone no." />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-4 wow fadeInUp">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group wow fadeInUp">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"  data-msg="Please enter subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group wow fadeInUp">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
           
			  <div class="text-center"><button type="submit" value="Submit" id="f_submit1" name="submit">Send Message</button></div>
			 <span id="f_error1"></span>
          </form>
        </div>

      </div>
    </section><!-- #contact -->
    
     <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Got a Question?</h3>
        <p>We're here to help.,send us an <a href="mailto:<?= $contact["email"]; ?>">email</a> or call us at <a href="tel:<?= $contact["phone"]; ?>"><?= $contact["phone"]; ?></a></p>
        
      </div>
    </section><!-- #call-to-action -->

    

  </main>
  
  

<script>
  $(document).ready(function() {
    $("#f_submit1").click(function() {

      $("#f_form1").submit(function(e) {

        $("#f_error1").html("<img src='<?php echo base_url() ?>/assets/images/loading.gif' alt='Loading'/>");
        var postData = $(this).serializeArray();
        var formURL = $(this).attr("action");
        $.ajax({
          url: formURL,
          type: "POST",
          data: postData,
          success: function(data, textStatus, jqXHR) {
            if ($.trim(data) == "Success") {
              $("#f_error1").html('<p><span class="prettyprintS" style="color:#00ff00;"> Successfully submitted. </span></p>');
              $('input[type="text"],textarea').val('');

            } else {
              $("#f_error1").html('<p><span class="prettyprint" style="color:#ff0000;">' + data + '</span></p>');
            }
          },
          error: function(jqXHR, textStatus, errorThrown) {
            $("#f_error1").html('<pre><code class="prettyprint" style="color:#ff0000;">AJAX Request Failed<br/> textStatus=' + textStatus + ', errorThrown=' + errorThrown + '</code></pre>');
          }
        });
        e.preventDefault(); //STOP default action
        e.unbind();
      });

    });
  });
</script>