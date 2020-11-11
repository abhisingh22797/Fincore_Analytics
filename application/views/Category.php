
  <!--==========================
    Intro Section
  ============================-->
<div class="container-fluid excel" style=" background: -webkit-linear-gradient(rgba(25, 26, 27, 0.8), rgba(25, 24, 24, 0.8)), url(<?php echo  base_url(); ?>uploads/training/<?= $allPro["image"]; ?> ); background-size:cover; ">
<div class="container">
<div class="row">
 <div class="col-lg-9 box ">
<div class="wow bounceInUp" data-wow-duration="1.4s"><h2><?= $allPro["c_title"]; ?></h2></div>
   
	<div class="wow fadeInUp"> 	<p><?= $allPro["c_description"]; ?></div>
</p>
   <!--    <ul>
            <li><i class="fa fa-chevron-right"></i> Practical training with the aim of getting our training participants job ready</li>
            <li><i class="fa fa-chevron-right"></i> The training is led by instructors who have worked with major investment banks</li>
            <li><i class="fa fa-chevron-right"></i> Concise and up-to-date training material with real case studies and discussions</li>
            <li><i class="fa fa-chevron-right"></i> Pay only 40% of the fees on enrollment and 60% on successful placement</li>
            <li><i class="fa fa-chevron-right"></i> Transparent placements with contact details of previously placed candidates.</li>
            <li><i class="fa fa-chevron-right"></i> Batches available in both full time and weekend modes</li>
        </ul> 
        <div class="ban-btn-list">
          
                    <a href="#" target="_blank"><img src="<?php echo  base_url(); ?>assets/frontend/img/ban-icon-1.png" alt=""> Download Brochure</a>
               
                    <a class="fancybox" href="#video"><img src="<?php echo  base_url(); ?>assets/frontend/img/ban-icon-2.png" alt=""> Watch Demo Video</a>
            
        </div>-->
</div>
<div class="col-md-3">
<div class="kajji">
<h6>Get a Call-Back</h6>

<?php $this->load->helper("form"); ?>
<?php
$attributes = array('id' => 'f_form1', 'method' => 'post', 'class' => 'form_horizontal');
echo form_open_multipart('Category/request', $attributes);
?>
<form>
  <div class="form-group">
<input type="text" name="name" class="form-control" placeholder="First name" required>
</div>
  <div class="form-group">
  <input type="email"  name="email" class="form-control" id="email"  placeholder="Enter email" required>
  </div>
  <div class="form-group">
    <input type="tel" name="phone" class="form-control" id="exampleInputPassword1" placeholder="Phone no." required>
  </div>

  <div class="form-group">
   <select class="custom-select" name="training" required>
<option value="">-- Training Programs --</option>
   <?php foreach ($program as $pro) : ?>
  <option value="<?php echo $pro->cat_name; ?>"><?php echo $pro->cat_name; ?></option>
  <?php endforeach; ?>
<!--  <option value="2">Level I Prep Course for CFA® Program</option>
  <option value="3">Stock Market Wizard</option>-->
</select>
</div>
<div class="form-group">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message" name="message" required></textarea>
  </div>
  <div class="digi">
  <button type="submit" class="btn btn-primary" value="Submit" id="f_submit1" name="submit">Submit</button>
   <span id="f_error1"></span>
  </div>
</form>
</div>
                                            
                                                
                            
</div>
</div>
</div>
</div>
<!-- #intro 

<section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Essential Features</h3>
        </header>

        <div class="row">

          <div class="col-lg-3 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="tryy"><img src="<?php echo  base_url(); ?>assets/frontend/img/ic1.png"></div>
            <h4 class="title"><a href="">Success based Fees</a></h4>
            <p class="description">We charge 40% fee initially and balance 60% is charged post placements with a max of 90 day commitment. So that pressure of responsibility of placements is as much yours as ours.</p>
    
          </div>
          <div class="col-lg-3 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
             <div class="tryy"><img src="<?php echo  base_url(); ?>assets/frontend/img/ic2.png"></div>
            <h4 class="title"><a href="">Placement Assistance</a></h4>
            <p class="description">The WallStreet School provides 100% placement assistance to the delegates who have successfully completed one of our Investment Banking training programmes.</p>
          </div>
          <div class="col-lg-3 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
              <div class="tryy"><img src="<?php echo  base_url(); ?>assets/frontend/img/ic3.png"></div>
            <h4 class="title"><a href="">Experiential learning</a></h4>
            <p class="description">Our trainers are Ex-consultants and Ex-investment bankers of reputed companies such as Mckinsey and Goldman Sachs. They bring real business problems to the classroom.</p>
          </div>
          <div class="col-lg-3 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
             <div class="tryy"><img src="<?php echo  base_url(); ?>assets/frontend/img/ic4.png"></div>
            <h4 class="title"><a href="">Certification</a></h4>
            <p class="description">To add-up the credible pinch to your CV, a certification for successful completion of workshop is provided after the end of the training program, which is industry recognized.

</p>
          </div>
       

        </div>

      </div>
    </section><!-- #services -->
    

  <section id="free">
      <div class="container-fluid free">
          <div class="container">
             <div class="section-header wow fadeInUp">
              <h3>Essential Features</h3>
             <!--    <ul>
          <li><i class="fa fa-chevron-right"></i> Practical training with the aim of getting our training participants job ready</li>
            <li><i class="fa fa-chevron-right"></i> The training is led by instructors who have worked with major investment banks</li>
            <li><i class="fa fa-chevron-right"></i> Concise and up-to-date training material with real case studies and discussions</li>
            <li><i class="fa fa-chevron-right"></i> Pay only 40% of the fees on enrollment and 60% on successful placement</li>
            <li><i class="fa fa-chevron-right"></i> Transparent placements with contact details of previously placed candidates.</li>
            <li><i class="fa fa-chevron-right"></i> Batches available in both full time and weekend modes</li>
        </ul> -->
		<?= $allPro["feature"]; ?>
		
            </div>
			<div class="batches">
			<button type="button" class="btn btn-primary">Online batches</button>
<button type="button" class="btn btn-secondary">Upcoming batches</button>
</div>
        </div>
     </div>
</section>



	
    <!--==========================
      Team Section
    ============================-->
    <section id="team">
	  <div class="container-fluid techh">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Syllabus</h3>
       
        </div>

        <div class="row">   
	<div class="tab">
	 <?php $i = 0; ?>
	   <?php foreach ($syllabus as $slid) : ?>
  <button class="tablinks" onclick="openCity(event, '<?php echo $slid->title; ?>')" <?php if ($i == 0) { ?> id="defaultOpen"  <?php } ?>><?php echo $slid->title; ?></button>

  <?php $i++; ?>
   <?php endforeach; ?>
  </div>
  <?php foreach ($syllabus as $slid) : ?>
 <div id="<?php echo $slid->title; ?>" class="tabcontent ">
   <center><h3><?php echo $slid->title; ?></h3> </center>
  <p><?php echo $slid->content; ?></p>
 </div>
 <?php endforeach; ?>
 </div>
	</div>
	</div>
        

    </section><!-- #team -->

    
     <!--==========================
      Call To Action Section
    ============================-->
	

	
	
	

    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Got a Question?</h3>
        <p>We're here to help. Send us an <a href="mailto:<?= $contact["email"]; ?>">email</a> or call us at <a href="tel:<?= $contact["phone"]; ?>"><?= $contact["phone"]; ?></a></p>
        
      </div>
    </section>

	<!-- #call-to-action -->
  

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

    <script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
