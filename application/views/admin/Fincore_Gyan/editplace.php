<script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Fincore Gyan (Blog and Report)
        <small>Edit</small>
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
                        <h3 class="box-title">Enter Fincore Gyan (Blog and Report) Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php
				          $attributes = array('id' => 'editstudentplacement','method' => 'post','class' => 'form_horizontal');
				          echo form_open_multipart('admin/Gyan/editstudentplacement', $attributes); 
					  ?>
                    
                        <div class="box-body">
						
								<h3>Slider details</h3>
								 <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="slid_title1">title</label>
                                         <input type="text" class="form-control required" value="<?php echo $allData->slid_title1; ?>" id="slid_title1" name="slid_title1" maxlength="128">
									
                                    </div>
                                </div>
								   <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="slid_subtitle1">link</label>
                                         <input type="text" class="form-control required" value="<?php echo $allData->slid_subtitle1; ?>" id="slid_subtitle1" name="slid_subtitle1" maxlength="128">
									
                                    </div>
                                </div>
							<!--	<div class="col-md-4">
                                    <div class="form-group">
                                        <label for="sec1_des">sec1 discription</label>
                                        
                                        <textarea rows="10" col="8" id="sec1_des"  class="form-control" name="sec1_des"><?php  echo $allData->sec1_des; ?></textarea>
                                    </div>
                                </div> -->
								<div class="col-md-4">
                                    <div class="form-group">
                                        <label for="slid_img1">slider1 image</label>
                                         <input type="file" class="form-control required" id="banner_image" name="slid_img1">
										<img src="<?php echo  base_url();?>uploads/gyan/<?php echo $allData->slid_img1;?>" height="100px" width="200px">
                                    </div>
                                </div>
                            </div>
												<!--			 <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="slid_title2">Slider2 title</label>
                                         <input type="text" class="form-control required" value="<?php echo $allData->slid_title2; ?>" id="slid_title2" name="slid_title2" maxlength="128">
									
                                    </div>
                                </div>
								  <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="slid_title2">Slider2 subtitle</label>
                                         <input type="text" class="form-control required" value="<?php echo $allData->slid_subtitle2; ?>" id="slid_subtitle2" name="slid_subtitle2" maxlength="128">
									
                                    </div>
                                </div>
						<!--		<div class="col-md-4">
                                    <div class="form-group">
                                        <label for="sec1_des">sec2 discription</label>
                                        
                                        <textarea rows="10" col="8" id="sec2_des"  class="form-control" name="sec2_des"><?php  echo $allData->sec2_des; ?></textarea>
                                    </div>
                                </div> 
								<div class="col-md-4">
                                    <div class="form-group">
                                        <label for="slid_img2">Slider2 image</label>
                                         <input type="file" class="form-control required" id="banner_image" name="slid_img2">
										<img src="<?php echo  base_url();?>uploads/student/<?php echo $allData->slid_img2;?>" height="100px" width="200px">
                                    </div>
                                </div>
                            </div>-->
															 <div class="row">
                            
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pdes">About Fincore Gyan</label>
                                        
                                        <textarea rows="10" col="8" id="pdes"  class="form-control" name="pdes"><?php  echo $allData->pdes; ?></textarea>
                                    </div>
                                </div>
							
                            </div>
							
							<h3>Fincore Reports</h3>
							
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
                                        <label for="pro1_images">sec1 image(size:100*100)</label>
                                         <input type="file" class="form-control required" id="banner_image" name="pro1_images">
										<img src="<?php echo  base_url();?>uploads/gyan/<?php echo $allData->pro1_images;?>" height="100px" width="200px">
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
                                        <label for="pro2_images">sec2 image(size:100*100)</</label>
                                         <input type="file" class="form-control required" id="banner_image" name="pro2_images">
										<img src="<?php echo  base_url();?>uploads/gyan/<?php echo $allData->pro2_images;?>" height="100px" width="200px">
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
                                        <label for="pro3_images">sec3 image(size:100*100)</</label>
                                         <input type="file" class="form-control required" id="banner_image" name="pro3_images">
										<img src="<?php echo  base_url();?>uploads/home/<?php echo $allData->pro3_images;?>" height="100px" width="200px">
                                    </div>
                                </div>
                            </div>
    
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
