<div class="container-fluid aboutus">
	<div class="row">
    	<img src="<?php echo base_url(); ?>assets/frontend/image/about-us-banner.jpg" class="img-responsive"/>
        <h2>About <?= SITE_NAME?></h2>
    </div>
</div>

<div class="container-fluid aboutt">
	<div class="row">
    	<div class="col-lg-7">
        	<h2> <?php echo $allData['title']; ?></h2>
            <?php echo $allData['description']; ?>
            
        </div>
        <div class="col-lg-5">
        	<img src="<?php echo base_url(); ?>assets/frontend/image/about-flower.jpg" class="img-responsive"/>
        </div>
    </div>
</div>