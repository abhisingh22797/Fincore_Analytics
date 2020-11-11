<script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Home Page Management
        <small>Edit Home</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
			<div class="col-md-4 pull-right">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Home Page Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php
				          $attributes = array('id' => 'editHome','method' => 'post','class' => 'form_horizontal');
				          echo form_open_multipart('admin/home/editHome', $attributes); 
					  ?>
                    
                        <div class="box-body">
						
								<h3>why Fincore Analytics</h3>
								 <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="sec1_title">sec1 title</label>
                                         <input type="text" class="form-control required" value="<?php echo $allData->sec1_title; ?>" id="sec1_title" name="sec1_title" maxlength="128">
									
                                    </div>
                                </div>
								<div class="col-md-3">
                                    <div class="form-group">
                                        <label for="sec1_des">sec1 discription</label>
                                        
                                        <textarea rows="10" col="8" id="sec1_des"  class="form-control" name="sec1_des"><?php  echo $allData->sec1_des; ?></textarea>
                                    </div>
                                </div>
								   <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="sec1_url">sec1 url</label>
                                         <input type="text" class="form-control required" value="<?php echo $allData->sec1_url; ?>" id="sec1_url" name="sec1_url" maxlength="128">
									
                                    </div>
                                </div>
								<div class="col-md-3">
                                    <div class="form-group">
                                        <label for="sec1_image">sec1 image</label>
                                         <input type="file" class="form-control required" id="banner_image" name="sec1_image">
										<img src="<?php echo  base_url();?>uploads/home/<?php echo $allData->sec1_image;?>" height="100px" width="200px">
                                    </div>
                                </div>
                            </div>
															 <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="sec2_title">sec2 title</label>
                                         <input type="text" class="form-control required" value="<?php echo $allData->sec2_title; ?>" id="sec2_title" name="sec2_title" maxlength="128">
									
                                    </div>
                                </div>
								<div class="col-md-3">
                                    <div class="form-group">
                                        <label for="sec1_des">sec2 discription</label>
                                        
                                        <textarea rows="10" col="8" id="sec2_des"  class="form-control" name="sec2_des"><?php  echo $allData->sec2_des; ?></textarea>
                                    </div>
                                </div>
								  <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="sec2_url">sec2 url</label>
                                         <input type="text" class="form-control required" value="<?php echo $allData->sec2_url; ?>" id="sec2_url" name="sec2_url" maxlength="128">
									
                                    </div>
                                </div>
								<div class="col-md-3">
                                    <div class="form-group">
                                        <label for="sec1_image">sec2 image</label>
                                         <input type="file" class="form-control required" id="banner_image" name="sec2_image">
										<img src="<?php echo  base_url();?>uploads/home/<?php echo $allData->sec2_image;?>" height="100px" width="200px">
                                    </div>
                                </div>
                            </div>
															 <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="sec3_title">sec3 title</label>
                                         <input type="text" class="form-control required" value="<?php echo $allData->sec3_title; ?>" id="sec3_title" name="sec3_title" maxlength="128">
									
                                    </div>
                                </div>
								<div class="col-md-3">
                                    <div class="form-group">
                                        <label for="sec3_des">sec3 discription</label>
                                        
                                        <textarea rows="10" col="8" id="sec3_des"  class="form-control" name="sec3_des"><?php  echo $allData->sec3_des; ?></textarea>
                                    </div>
                                </div>
								  <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="sec3_url">sec3 url</label>
                                         <input type="text" class="form-control required" value="<?php echo $allData->sec3_url; ?>" id="sec3_url" name="sec3_url" maxlength="128">
									
                                    </div>
                                </div>
								<div class="col-md-3">
                                    <div class="form-group">
                                        <label for="sec3_image">sec3 image</label>
                                         <input type="file" class="form-control required" id="banner_image" name="sec3_image">
										<img src="<?php echo  base_url();?>uploads/home/<?php echo $allData->sec3_image;?>" height="100px" width="200px">
                                    </div>
                                </div>
                            </div>
							
							<h3>OUR TRaining PROGRAMS</h3>
								 <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="pro1_title">sec1 title</label>
                                         <input type="text" class="form-control required" value="<?php echo $allData->pro1_title; ?>" id="pro1_title" name="pro1_title" maxlength="128">
									
                                    </div>
                                </div>
								<div class="col-md-3">
                                    <div class="form-group">
                                        <label for="pro1_des">sec1 discription</label>
                                        
                                        <textarea rows="10" col="8" id="pro1_des"  class="form-control" name="pro1_des"><?php  echo $allData->pro1_des; ?></textarea>
                                    </div>
                                </div>
								    <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="pro1_url">sec1 url</label>
                                         <input type="text" class="form-control required" value="<?php echo $allData->pro1_url; ?>" id="pro1_url" name="pro1_url" maxlength="128">
									
                                    </div>
                                </div>
								<div class="col-md-3">
                                    <div class="form-group">
                                        <label for="pro1_image">sec1 image(size:100*100)</label>
                                         <input type="file" class="form-control required" id="banner_image" name="pro1_image">
										<img src="<?php echo  base_url();?>uploads/home/<?php echo $allData->pro1_image;?>" height="100px" width="200px">
                                    </div>
                                </div>
                            </div>
															 <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="pro2_title">sec2 title</label>
                                         <input type="text" class="form-control required" value="<?php echo $allData->pro2_title; ?>" id="pro2_title" name="pro2_title" maxlength="128">
									
                                    </div>
                                </div>
								<div class="col-md-3">
                                    <div class="form-group">
                                        <label for="pro2_des">sec2 discription</label>
                                        
                                        <textarea rows="10" col="8" id="pro2_des"  class="form-control" name="pro2_des"><?php  echo $allData->pro2_des; ?></textarea>
                                    </div>
                                </div>
							      <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="pro2_url">sec2 url</label>
                                         <input type="text" class="form-control required" value="<?php echo $allData->pro2_url; ?>" id="pro2_url" name="pro2_url" maxlength="128">
									
                                    </div>
                                </div>
								<div class="col-md-3">
                                    <div class="form-group">
                                        <label for="pro2_image">sec2 image(size:100*100)</</label>
                                         <input type="file" class="form-control required" id="banner_image" name="pro2_image">
										<img src="<?php echo  base_url();?>uploads/home/<?php echo $allData->pro2_image;?>" height="100px" width="200px">
                                    </div>
                                </div>
                            </div>
															 <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="pro3_title">sec3 title</label>
                                         <input type="text" class="form-control required" value="<?php echo $allData->pro3_title; ?>" id="pro3_title" name="pro3_title" maxlength="128">
									
                                    </div>
                                </div>
								<div class="col-md-3">
                                    <div class="form-group">
                                        <label for="pro3_des">sec3 discription</label>
                                        
                                        <textarea rows="10" col="8" id="pro3_des"  class="form-control" name="pro3_des"><?php  echo $allData->pro3_des; ?></textarea>
                                    </div>
                                </div>
								  <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="pro3_url">sec3 url</label>
                                         <input type="text" class="form-control required" value="<?php echo $allData->pro3_url; ?>" id="pro3_url" name="pro3_url" maxlength="128">
									
                                    </div>
                                </div>
								<div class="col-md-3">
                                    <div class="form-group">
                                        <label for="pro3_image">sec3 image(size:100*100)</</label>
                                         <input type="file" class="form-control required" id="banner_image" name="pro3_image">
										<img src="<?php echo  base_url();?>uploads/home/<?php echo $allData->pro3_image;?>" height="100px" width="200px">
                                    </div>
                                </div>
                            </div>
							
						<!--	<h3>Team Section</h3>
								 <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="team_title">Title</label>
                                         <input type="text" class="form-control required" value="<?php echo $allData->team_title; ?>" id="team_title" name="team_title" maxlength="128">
									
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label for="team_des">Discription</label>
                                        
                                        <textarea rows="10" col="8" id="team_des"  class="form-control" name="team_des"><?php  echo $allData->team_des; ?></textarea>
                                    </div>
                                </div>
								</div>
								 <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="team1_title">sec1 Title</label>
                                         <input type="text" class="form-control required" value="<?php echo $allData->team1_title; ?>" id="team1_title" name="team1_title" maxlength="128">
									
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label for="team1_des">sec1 Discription</label>
                                        
                                        <textarea rows="10" col="8" id="team1_des"  class="form-control" name="team1_des"><?php  echo $allData->team1_des; ?></textarea>
                                    </div>
                                </div>
								</div>
								 <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="team2_title">sec2 Title</label>
                                         <input type="text" class="form-control required" value="<?php echo $allData->team2_title; ?>" id="team2_title" name="team2_title" maxlength="128">
									
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label for="team2_des">sec2 Discription</label>
                                        
                                        <textarea rows="10" col="8" id="team2_des"  class="form-control" name="team2_des"><?php  echo $allData->team2_des; ?></textarea>
                                    </div>
                                </div>
								</div>
								 <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="team3_title">sec3 Title</label>
                                         <input type="text" class="form-control required" value="<?php echo $allData->team3_title; ?>" id="team3_title" name="team3_title" maxlength="128">
									
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label for="team3_des">sec3 Discription</label>
                                        
                                        <textarea rows="10" col="8" id="team3_des"  class="form-control" name="team3_des"><?php  echo $allData->team3_des; ?></textarea>
                                    </div>
                                </div>
								</div>
								 <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="team4_title">sec4 Title</label>
                                         <input type="text" class="form-control required" value="<?php echo $allData->team4_title; ?>" id="team4_title" name="team4_title" maxlength="128">
									
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label for="team4_des">sec4 Discription</label>
                                        
                                        <textarea rows="10" col="8" id="team4_des"  class="form-control" name="team4_des"><?php  echo $allData->team4_des; ?></textarea>
                                    </div>
                                </div>
								</div>
								 <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="team5_title">sec5 Title</label>
                                         <input type="text" class="form-control required" value="<?php echo $allData->team5_title; ?>" id="team5_title" name="team5_title" maxlength="128">
									
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label for="team5_des">sec5 Discription</label>
                                        
                                        <textarea rows="10" col="8" id="team5_des"  class="form-control" name="team5_des"><?php  echo $allData->team5_des; ?></textarea>
                                    </div>
                                </div>
								</div>
								 <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="team6_title">sec6 Title</label>
                                         <input type="text" class="form-control required" value="<?php echo $allData->team6_title; ?>" id="team6_title" name="team6_title" maxlength="128">
									
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label for="team6_des">sec6 Discription</label>
                                        
                                        <textarea rows="10" col="8" id="team6_des"  class="form-control" name="team6_des"><?php  echo $allData->team6_des; ?></textarea>
                                    </div>
                                </div>
								</div>
						<!--	 <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="p_title">Program Title</label>
                                        <input type="text" class="form-control required" value="<?php echo $allData->p_title; ?>" id="p_title" name="p_title" maxlength="128">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="p_des">Program Description</label>
                                         <input type="text" class="form-control required" value="<?php echo $allData->p_des; ?>" id="p_des" name="p_des" maxlength="128">
									
                                    </div>
                                </div>
                            </div>
							
							 <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="l_title">Learning Path Title</label>
                                        <input type="text" class="form-control required" value="<?php echo $allData->l_title; ?>" id="l_title" name="l_title" maxlength="128">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="l_des">Learning Path Description</label>
                                         <input type="text" class="form-control required" value="<?php echo $allData->l_des; ?>" id="l_des" name="l_des" maxlength="128">
									
                                    </div>
                                </div>
                            </div>
							
							
							
							 <div class="row">
							 <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="h_title">Help Section Title</label>
                                        <input type="text" class="form-control required" value="<?php echo $allData->h_title; ?>" id="h_title" name="h_title" maxlength="128">
                                    </div>
                                    
                                </div>
							 </div>
						
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="title1">Title1</label>
                                        <input type="text" class="form-control required" value="<?php echo $allData->title1; ?>" id="title1" name="title1" maxlength="128">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="des1">Description</label>
                                         <input type="text" class="form-control required" value="<?php echo $allData->des1; ?>" id="des1" name="des1" maxlength="128">
									
                                    </div>
                                </div>
                            </div>
							<div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="title2">Title2</label>
                                        <input type="text" class="form-control required" value="<?php echo $allData->title2; ?>" id="title2" name="title2" maxlength="128">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="des2">Description</label>
                                       <input type="text" class="form-control required" value="<?php echo $allData->des2; ?>" id="des1" name="des2" maxlength="128">
									
                                    </div>
                                </div>
                            </div>
							
							<div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="title2">Title3</label>
                                        <input type="text" class="form-control required" value="<?php echo $allData->title3; ?>" id="title3" name="title3" maxlength="128">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="des3">Description3</label>
                                       <input type="text" class="form-control required" value="<?php echo $allData->des3; ?>" id="des3" name="des3" maxlength="128">
									
                                    </div>
                                </div>
                            </div>
							
							
							
							<div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="title2">Support_title</label>
                                        <input type="text" class="form-control required" value="<?php echo $allData->support_title; ?>" id="support_title" name="support_title" maxlength="128">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title3">support_img</label>
                                       <input type="file" class="form-control required" name="support_img">
									<img src="<?php echo  base_url();?>uploads/home/<?php echo $allData->support_img;?>" height="100px" width="200px">
                                    </div>
                                </div>
                            </div>
							
							
								<div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="train_title">training_title</label>
                                        <input type="text" class="form-control required" value="<?php echo $allData->train_title; ?>" id="train_title" name="train_title" maxlength="128">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title3">training_des</label>
                                       <input type="text" class="form-control required" value="<?php echo $allData->train_des; ?>" id="train_des" name="train_des">
									
                                    </div>
                                </div>
                            </div>
							
							<div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="below_title1">below_title1</label>
                                        <input type="text" class="form-control required" value="<?php echo $allData->below_title1; ?>" id="below_title1" name="below_title1" maxlength="128">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="below_des1">below_des1</label>
                                       <input type="text" class="form-control required" value="<?php echo $allData->below_des1; ?>" id="below_des1" name="below_des1">
									
                                    </div>
                                </div>
                            </div>
                          <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="below_title2">below_title2</label>
                                        <input type="text" class="form-control required" value="<?php echo $allData->below_title2; ?>" id="below_title2" name="below_title2" maxlength="128">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="below_des2">below_des2</label>
                                       <input type="text" class="form-control required" value="<?php echo $allData->below_des2; ?>" id="below_des2" name="below_des2">
									
                                    </div>
                                </div>
                            </div>
                          <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="below_title3">below_title3</label>
                                        <input type="text" class="form-control required" value="<?php echo $allData->below_title3; ?>" id="below_title3" name="below_title3" maxlength="128">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="below_des3">below_des3</label>
                                       <input type="text" class="form-control required" value="<?php echo $allData->below_des3; ?>" id="below_des3" name="below_des3">
									
                                    </div>
                                </div>
                            </div>
							
							<div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="learn_title">learn_title</label>
                                        <input type="text" class="form-control required" value="<?php echo $allData->learn_title; ?>" id="learn_title" name="learn_title" maxlength="128">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="learn_subtitle">learn_subtitle</label>
                                       <input type="text" class="form-control required" value="<?php echo $allData->learn_subtitle; ?>" id="learn_subtitle" name="learn_subtitle">
									
                                    </div>
                                </div>
                            </div>
							
							<div class="row">
                                <div class="col-md-4">                                
                                    <div class="form-group">
                                        <label for="univ_title">univ_title</label>
                                        <input type="text" class="form-control required" value="<?php echo $allData->univ_title; ?>" id="univ_title" name="univ_title" maxlength="128">
                                    </div>
                                    
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="univ_des">univ_des</label>
                                       <input type="text" class="form-control required" value="<?php echo $allData->univ_des; ?>" id="univ_des" name="univ_des">
									
                                    </div>
                                </div>
								
								 <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="univ_img">univ_img</label>
                                       <input type="file" class="form-control required" name="univ_img">
									 <img src="<?php echo  base_url();?>uploads/home/<?php echo $allData->univ_img;?> " height="100px" width="200px">
                                    </div>
                                </div>
                            </div>
							
							<div class="row">
                                <div class="col-md-4">                                
                                    <div class="form-group">
                                        <label for="sup_title">sup_title</label>
                                        <input type="text" class="form-control required" value="<?php echo $allData->sup_title; ?>" id="sup_title" name="sup_title" maxlength="128">
                                    </div>
                                    
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="sup_des">sup_des</label>
                                       <input type="text" class="form-control required" value="<?php echo $allData->sup_des; ?>" id="sup_des" name="sup_des">
									
                                    </div>
                                </div>
								
								 <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="sup_img">support Image</label>
                                       <input type="file" class="form-control required" name="sup_img">
									 <img src="<?php echo  base_url();?>uploads/home/<?php echo $allData->sup_img;?>" height="100px" width="200px">
                                    </div>
                                </div>
                            </div>
							
							<div class="row">
                                <div class="col-md-4">                                
                                    <div class="form-group">
                                        <label for="indus_title">indus_title</label>
                                        <input type="text" class="form-control required" value="<?php echo $allData->indus_title; ?>" id="indus_title" name="indus_title" maxlength="128">
                                    </div>
                                    
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="indus_des">indus_des</label>
                                       <input type="text" class="form-control required" value="<?php echo $allData->indus_des; ?>" id="indus_des" name="indus_des">
									
                                    </div>
                                </div>
								
								 <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="indus_img">indus_img</label>
                                       <input type="file" class="form-control required" name="indus_img">
									 <img src="<?php echo  base_url();?>uploads/home/<?php echo $allData->indus_img;?>" height="100px" width="200px">
                                    </div>
                                </div>
                            </div>
                          
                          <div class="row">
                                <div class="col-md-4">                                
                                    <div class="form-group">
                                        <label for="career_title">career_title</label>
                                        <input type="text" class="form-control required" value="<?php echo $allData->career_title; ?>" id="career_title" name="career_title" maxlength="128">
                                    </div>
                                    
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="career_des">career_des</label>
                                       <input type="text" class="form-control required" value="<?php echo $allData->career_des; ?>" id="career_des" name="career_des">
									
                                    </div>
                                </div>
								
								 <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="career_img">career_img</label>
                                       <input type="file" class="form-control required" name="career_img">
									 <img src="<?php echo  base_url();?>uploads/home/<?php echo $allData->career_img;?>" height="100px" width="200px">
                                    </div>
                                </div>
                            </div>
							
							
							 <div class="row">
                                <div class="col-md-4">                                
                                    <div class="form-group">
                                        <label for="brands_title">brands_title</label>
                                        <input type="text" class="form-control required" value="<?php echo $allData->brands_title; ?>" id="brands_title" name="brands_title" maxlength="128">
                                    </div>
                                    
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="contact_title">contact_title</label>
                                       <input type="text" class="form-control required" value="<?php echo $allData->contact_title; ?>" id="contact_title" name="contact_title">
									
                                    </div>
                                </div>
								
								 <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="test_img">testimonial img</label>
                                       <input type="file" class="form-control required" name="test_img">
									   <img src="<?php echo  base_url();?>uploads/home/<?php echo $allData->test_img;?>" height="100px" width="200px">
									
                                    </div>
                                </div>
                            </div>
							
							 <div class="row">
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="contact_subtitle">contact_subtitle</label>
                                        <input type="text" class="form-control required" value="<?php echo $allData->contact_subtitle; ?>" id="contact_subtitle" name="contact_subtitle" maxlength="128">
                                    </div>
                                    
                                </div>
                                
                            </div>
                          
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" name="submit" />
                            
							<input type="hidden" name="id" value="<?php echo $allData->id; ?>" />
                        </div>
                    </form>
                </div>
            </div>
            
        </div>    
    </section>
</div>
<script type="text/javascript">
		CKEDITOR.replace( 'description' );
	</script>
