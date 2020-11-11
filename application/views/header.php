
    <link href="<?php echo  base_url(); ?>assets/frontend/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <link href="<?php echo  base_url(); ?>assets/frontend/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo  base_url(); ?>assets/frontend/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <script src="<?php echo base_url() ?>assets/frontend/js/jquery.min.js"></script>
  <link href="<?php echo  base_url(); ?>assets/frontend/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo  base_url(); ?>assets/frontend/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo  base_url(); ?>assets/frontend/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo  base_url(); ?>assets/frontend/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo  base_url(); ?>assets/frontend/css/style.css" rel="stylesheet">
</head>

<body>

<div class="container-fluid contact">
	<div class="row">
    <div class="container">
    	<div class="col-lg-3">
        	  <h4><a href="tel:<?= $contact["phone"]; ?>"> <i class="fa fa-phone"></i> <?= $contact["phone"]; ?></a></h4>
        </div>
        <div class="col-lg-3">
        	  <h4><a href="mailto:<?= $contact["email"]; ?>"> <i class="fa fa-envelope"> </i> <?= $contact["email"]; ?></a></h4>
        </div>
        <div class="col-lg-3">
        	  <h4><a href="https://api.whatsapp.com/send?phone=91-<?= $contact["mobile"]; ?>"><i class="fa fa-whatsapp"></i><?= $contact["mobile"]; ?></a></h4>
        </div>
        <div class="col-lg-3">
        	<h4><i class="fa fa-arrow-right" aria-hidden="true"></i> Upcoming Batches</h4>
        </div>
     </div>
    </div>
</div>

  <!--==========================
    Header
  ============================-->
<header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="<?php echo base_url();?>"><img src="<?php echo  base_url(); ?>uploads/logo/<?= $contact["logo"]; ?>"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
		 <li <?php if($layout=='home'){ ?> class="menu-active"<?php }?>><a href="<?php echo base_url();?>">Home</a></li>
          <li <?php if($layout=='Category'){ ?> class="menu-active"<?php }?>><a href="#">Training programs </a>
            <ul>
			  <?php foreach ($program as $pro) : ?>
          <li><a href="<?php echo base_url().'programs/'.$pro->url;?>"><?php echo $pro->cat_name; ?></a></li><?php endforeach; ?>
		  
		  </ul></li>
         <!-- <li><a href="#">ONLINE</a>
          <ul>
          <li><a href="<?php echo base_url('Excel');?>">Excel Training</a></li>
          </ul></li> -->
		    <li <?php if($layout=='Placements'){ ?> class="menu-active"<?php }?>><a href="<?php echo base_url('Placements');?>">Student Placements</a></li>
          <li <?php if($layout=='Consulting'){ ?> class="menu-active"<?php }?>><a href="<?php echo base_url('Consulting');?>">HR Consulting</a></li>
		   <li <?php if($layout=='Fincore_Advisors'){ ?> class="menu-active"<?php }?>><a href="<?php echo base_url('Fincore_Advisors');?>">Fincore Advisors</a></li>
          <li <?php if($layout==''){ ?> class="menu-active"<?php }?>><a href="#">e-learnings</a> <ul>
			 
          <li><a href="<?php echo base_url('Fincore_Gyan');?>">Fincore Gyan(Blog)</a></li>
		    <li><a href="<?php echo base_url('Twss');?>">Financial Models and Reports</a></li>
		  </ul></li>
     <!--     <li><a href="<?php echo base_url('Twss');?>">TWSS CFA<sup>®</sup> EXAM RESULTS</a></li>
          <li><a href="<?php echo base_url('Consulting');?>">TWSS CONSULTING</a></li> -->

         <li><a href="#">Student Login</a></li>
		          <li ><a href="<?php echo base_url('Contact');?>">CONTACT</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
