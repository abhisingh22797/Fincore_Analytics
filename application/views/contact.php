
  <!--==========================
    Intro Section
  ============================-->
<div class="container-fluid connect">
<div class="row">
<div class="container">
<h2>Contact Us</h2>
<p>Get in touch with us</p>
</div>
</div>
</div>
<!-- #intro -->



<div class="container-fluid classic">
<header class="section-header">
          <h3>Contact Us</h3>
</header>
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="col-lg-3">
   <div class="single-latest-image something">
   <h6>Corporate Meeting Office</h6>
   <p>Suite 220, Regus Business Centre, KLJ Towers,Netaji Subhash Place, Pitampura,New Delhi – 110034 (India)</p>
   <p>View Location Map</p>
   </div>
</div>
<div class="clearfix"></div>
<div class="col-lg-3">
<div class="single-latest-image something">
 <h6>Delhi Classroom</h6>
<p style="margin-bottom:107px;">Suite 402, Pearls Business Park,Netaji Subhash Place, Pitampura,New Delhi – 110034 (India)</p>
   </div>
</div>
<div class="clearfix"></div>
<div class="col-lg-3">
<div class="single-latest-image something">
   <h6>Gurugram Classroom</h6>
   <p style="margin-bottom:53px;">Suite 203-205, DLF Galleria Towers, DLF Galleria Road, DLF Phase IV, Sector 28, Gurugram -122009</p>
     <p>View Location Map</p>
   </div>
</div>
<div class="col-lg-3">
<div class="single-latest-image something">
<h6>Indore Classroom</h6>
<p>505, Fortune Business Ambience(Near Surya Hotel), Sriram Nagar, South Tukoganj, Indore, Madhya Pradesh 452001</p>
  <p>View Location Map</p>
</div>
   </div>
</div>
</div>
</div>
</div>


    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Send Your Message</h3>
         
        </div>

    

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
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
        <p>We're here to help.send us an <a href="mailto:<?= $contact["email"]; ?>">email</a> or call us at <a href="tel:<?= $contact["phone"]; ?>"><?= $contact["phone"]; ?></a></p>
        
      </div>
    </section><!-- #call-to-action -->

    