  <?php 
				       $contact = $this->db->get_where('tbl_contact', array( 'id'=>1 ))->row_array();
				
				?>
    <div class="container-fluid footer">
         <div class="row">
            <div class="container">
                 <div class="col-lg-12">
                      <div class="col-lg-3">
                         <img src="<?php echo base_url(); ?>/uploads/logo/<?=$contact['logo'];?>" class="img-responsive"/>
                      </div>
                   </div>
       		<div class="col-lg-3">
                  <h2>DATA SCIENCE</h2>
                    <ul>
                        <li><a href="#">Data Science | PG Diploma | Online</a></li>
                        <li> <a href="#">Data Science | PG Diploma | Online + Offline</a></li>
                        <li><a href="#">Machine Learning and AI | PG Diploma</a></li>
                        <li><a href="#">MBA (Executive) | Business Analytics Specialisation</a></li>
                        <li><a href="#">Business Analytics | Certification</a></li>
                        <li><a href="#">Data Science | PG Certificate</a></li>
                        <li><a href="#">Big Data Engineering | PG Program</a></li>
                        <li><a href="#">Machine Learning and NLP | PG Certificate</a></li>
                         <li><a href="#">Machine Learning and Deep Learning | PG Certificate</a></li>
                         <li><a href="#">Big Data and Analytics | PG Certificate</a></li>
                         <li><a href="#">Data Science | Master of Science</a></li>
                         <li><a href="#">Machine Learning and AI | Master of Science</a></li>
                         <li><a href="#">Advanced Certification in Machine Learning & Cloud</a></li>
                  </ul>
                    <h2>TECHNOLOGY</h2>
                  <ul>
                        <li><a href="#">Full Stack Development | PG Diploma</a></li>
                        <li><a href="#">Software Development - Blockchain | PG Diploma</a></li>
                        <li><a href="#">Blockchain Technology | PG Certificate</a></li>
                        <li><a href="#">Blockchain Technology Management | Executive Program</a></li>
                        <li><a href="#">Product Management | Certification</a></li>
                        <li><a href="#">Big Data Engineering | PG Program</a></li>
                        <li><a href="#">Entrepreneurship | Certification</a></li>
                        <li><a href="#">Placement track in FullStack Development | Placement Track</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
            <h2>MANAGEMENT</h2>
            <ul>
            <li><a href="#">Blockchain Technology Management | Executive Program</a></li>
            <li><a href="#">MBA (Executive) | Business Analytics Specialisation</a></li>
            <li><a href="#">Digital Marketing | PG Certificate</a></li>
            <li><a href="#">Digital Marketing Certificate Program | Career Track</a></li>
            <li><a href="#">Product Management | Certification</a></li>
            <li><a href="#">Strategic Digital Marketing | Executive Program</a></li>
            <li><a href="#">Entrepreneurship | Certification</a></li>
            <li><a href="#">Management | PG Program</a></li>
            <li><a href="#">Life Insurance Job | PG Program</a></li>
            </ul>
            </div>
            <div class="col-lg-3">
            <h2>SUPPORT</h2>
            <ul>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#">Privacy Policy</a></li>
            </ul>
            </div>
            <div class="col-lg-3">
            <h2>FIESTTECH</h2>
            <ul>
             <li><a href="#">About</a></li>
             <li><a href="#">Careers</a></li>
             <li><a href="#">Success Stories</a></li>
             <li><a href="#">blog</a></li>
             <li><a href="#">For Teams</a></li>
             <li><a href="#">Online Power Learning</a></li>     
             <li><a href="#">Xchange</a></li>
             <li><a href="#">BaseCamp</a></li>
            </ul>
            </div>
              
            </div>
        
         </div>
    </div>
    <div class=" container-fluid footer-second">
          <div class="row">
          <div class="container">
          <div class="col-lg-12">
          
            <div class="col-lg-3">
            <p>© 2020 fiesttech Education Private Limited.</p>
            </div>
                <div class="col-lg-3">
            </div>
                <div class="col-lg-3">
            </div>
                <div class="col-lg-3">
            </div>
          </div>
       </div>
    </div>
    </div>
    <script>
    	(function($){
	$(document).ready(function(){
		$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
			event.preventDefault(); 
			event.stopPropagation(); 
			$(this).parent().siblings().removeClass('open');
			$(this).parent().toggleClass('open');
		});
	});
})(jQuery);
    </script>
   <script>
		$("#myCarousel").carousel();

// Enable Carousel Indicators
$(".item").click(function(){
  $("#myCarousel").carousel(1);
});

// Enable Carousel Controls
$(".left").click(function(){
  $("#myCarousel").carousel("prev");
});

	</script>
    
</body>
</html>