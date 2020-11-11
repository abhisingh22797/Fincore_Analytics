<script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-money"></i>Mutual Funds
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Add Mutual Funds </h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                     <?php
                          $attributes = array('id' => 'addfunds','method' => 'post','class' => 'form_horizontal');
                          echo form_open_multipart('admin/mutualfund/addfunds', $attributes); 
                      ?>
                    
                   
                        <div class="box-body">
                            <div class="row">
							 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control required " id="title" value="<?php echo set_value('title'); ?>" name="title"  required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image">Add image</label>
                                        <input type="file" class="form-control required " id="image" value="<?php echo set_value('image'); ?>" name="image"  required>
                                    </div>
                                </div>
                            </div>
							<div class="row">
							  <div class="col-md-6">
								<div class="form-group">
									<label for="role">Select Type</label>
									<select name="type" id="type" class="form-control required">
										<option value="Equity">Equity</option>
										<option value="Debt">Debt</option>
									</select>
								</div>
                              </div> 

							  <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="role">Select Tenure</label>
								<select name="tenure" id="tenure" class="form-control required">
									<option value="1">1 year</option>
									<option value="2">2 year</option>
									<option value="3">3 year</option>
									<option value="4">4 year</option>
									<option value="5">5 year</option>
									<option value="6">6 year</option>
									<option value="7">7 year</option>
									<option value="8">8 year</option>
									<option value="9">9 year</option>
									<option value="10">10 year</option>
									<option value="11">11 year</option>
									<option value="12">12 year</option>
									<option value="13">13 year</option>
									<option value="14">14 year</option>
									<option value="15">15 year</option>
									<option value="16">16 year</option>
									<option value="17">17 year</option>
									<option value="18">18 year</option>
									<option value="19">19 year</option>
									<option value="20">20 year</option>
								</select>
								    </div>
                                </div> 

							
							</div>
							
							<div class="row">
							
								<div class="col-md-6">
									<div class="form-group">
                                        <label for="returns">returns</label>
                                        <input type="text" class="form-control required " id="returns" value="<?php echo set_value('returns'); ?>" name="returns"  required>
									</div>
								</div>
								
								<div class="col-md-6">
									<div class="form-group">
                                        <label for="investors">investors</label>
                                        <input type="text" class="form-control required " id="investors" value="<?php echo set_value('investors'); ?>" name="investors"  required>
                                    </div>
                                </div>
								
							</div>
							
							<div class="row">
							
								<div class="col-md-6">
									<div class="form-group">
                                        <label for="desc">description</label>
                                         <textarea class="form-control required " id="desc" name="desc" ></textarea>
									</div>
								</div>
								
								<div class="col-md-6">
									<div class="form-group">
                                        <label for="provider">provider</label>
                                        <input type="text" class="form-control required " id="provider" value="<?php echo set_value('provider'); ?>" name="provider"  required>
                                    </div>
                                </div>
								
							</div>
							
							
                         
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" name="submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
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
        </div>    
    </section>
    
</div>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>
<script type="text/javascript">
		CKEDITOR.replace( 'desc' );
	</script>
