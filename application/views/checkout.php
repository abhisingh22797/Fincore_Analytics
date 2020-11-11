<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>fiesttech </title>
   
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/course/style2.css" />
    <link href="<?php echo base_url(); ?>assets/frontend/css/custom-module--ecosystem-infographic.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/frontend/css/font-awesome.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/frontend/course/bootstrap.min.css" rel="stylesheet">
    
    
    <script src="<?php echo base_url(); ?>assets/frontend/course/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/course/js/bootstrap.min.js"></script>
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->
    <script id="bolt" src="https://checkout-static.citruspay.com/bolt/run/bolt.min.js" bolt-color="e34524" bolt-logo="<?php echo  base_url(); ?>uploads/logo/<?php echo $logo ; ?>"></script>
</head>
<body>
    <div class="container-fluid section">
    	<div class="row">
        	<img src="<?php echo  base_url(); ?>uploads/logo/<?php echo $logo ; ?>" width="300"/>
        </div>
    </div>
<div class="container-fluid course">
        <div class="row">
          	<div class="container">
            	<div class="col-lg-12">
                	<span id="numbe1" >1</span>
                    <h3>Course Summary</h3>
                </div>
                <div class="col-md-12 navneet" id="product_detail1">
                	<div class="col-sm-4">
                    	<h3>COURSE </h3>
                    </div>
                    <div class="col-sm-3">
                    	<h3>TYPE </h3>
                    </div>
                    <div class="col-sm-1">
                    	<h3>ACCESS <br>DAYS </h3>
                    </div>
                    <div class="col-sm-2">
                    	<h3> No. OF LEARNERS </h3>
                    </div>
                    <div class="col-sm-2">
                    	<h3>PRICE</h3>
                    </div>
                </div>
                <div class="col-md-12 navneet white">
                	<div class="col-sm-4">
                    	<p><?php echo $course['c_title'];  ?> </p>
                    </div>
                    <div class="col-sm-3">
                    	<p><?php echo $allData['c_title'];  ?></p>
                    </div>
                    <div class="col-sm-1">
                    	<p>180 days  </p>
                    </div>
                    <div class="col-sm-2">
                    	<p> 1 </p>
                    </div>
                    <div class="col-sm-2">
                    	<p>₹ <?php echo $allData['c_price'];  ?> </p>
                        <button class="btn-default pull-right" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> details</button>
                       
</div>
 <!--<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <ul>
  <?php echo $allData['c_description'];  ?> 
   </ul>
  </div>
                    </div>-->
                    
                    <div class="collapse" id="collapseExample">
<div class="card card-body">
    <div class="col-lg-9">
        <ul> You Get:
            <li> 25+ In-Demand Skills & Tools: 140+ instructor-led online classes for 2 years </li>
            <li> Masters Certification: Masters Certification on course completion </li>
            <li> Experience Certificate: Hands-on experience with 18+ Projects </li>
            <li> Rs.15 lacs - Rs.23 lacs: Annual average salary in India </li>
        </ul>
    </div>
    <div class="col-lg-3 ravinder pull-right">
        <div class="price-list"> <span class="price">Unit Price:</span> <span class="amount"> ?               <b class="individual_price_amount"> 34999.00</b>            </span> </div>
        <div class="mount"> <span class="price">Total :</span> <span class="amount">?               <b class="price_amount_span"> 34999.00</b>            </span> </div>
    </div>
</div>
</div>
                </div>
                
                
                
    <div class="col-md-3 navneet pull-right">
    <h3>Total : ₹ <?php
                                	   $gst =0;
                                	   $total = 0;
                                	  echo $allData['c_price'];  ?></h3>
    <div class="form-group">
        <input type="text" name="name" value="coupon">
        <button type="button" class="btn btn-info">Apply</button>
    </div>
    <h3>GST (18.00%) : ₹ <?php echo $gst= $allData['c_price']*18/100;  ?></h3>
    <h2>Grand Total : ₹ <?php echo  $total = $gst+ $allData['c_price'] ; ?></h2>
    <button class="btn-danger btn-lg" id="btn1">Procced</button>
</div>
                <!--<div class="col-md-3 navneet pull-right">
                	<h3>Total : ₹ <?php
                                	   $gst =0;
                                	   $total = 0;
                                	  echo $allData['c_price'];  ?></h3>
                    <h3>GST (18.00%) : ₹ <?php echo $gst= $allData['c_price']*18/100;  ?></h3>
                    <h3>Total : ₹ <?php echo  $total = $gst+ $allData['c_price'] ; ?></h3>
                    <form >
                    <input type="text" placeholder="Coupon">
                    </form>
                    <h2>Grand Total : ₹ <?php echo  $total = $gst+ $allData['c_price'] ;?></h2>
                    <button class="btn-danger btn-lg" id="btn1">Procced</button>
                </div>-->
            </div>  
        </div>
	</div>
    
    <div class="container-fluid course2">
        <div class="row">
        <?php  $attributes = array('class' => 'email', 'id' => 'payment_form');
         echo form_open('#', $attributes);?>
          	<div class="container">
            	<div class="col-lg-12">
                	<span>2</span>
                    <h3>Details</h3>
                </div>
                <div class="col-md-8 col-sm-offset-2">
                	<form>
                      <div class="form-group">
                       <input type="text" class="form-control"  value="<?= $total?>" id="amt" name="amt"  readonly>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control"  placeholder="Name" id="fname" required name="fname">
                      </div>
                       <div class="form-group">
                        <input type="email" class="form-control"  placeholder="Email id" id="email" name="email" required>
                      </div>
                       <!--<div class="form-group">
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Email id">
                      </div>-->
                      
                      <div class="form-group">
                      	<div class="col-sm-2">
                        <select class="form-control" id="exampleFormControlSelect1" name="country" required>
                          <option>IN</option>
                          <option>Delhi</option>
                          <option>Goa</option>
                          <option>Gujrat</option>
                          <option>Haryana</option>
                        </select>
                        </div>
                        
                       
                        <div class="col-sm-10">
                        	  <input type="tel" class="form-control" id="exampleInputPassword1" id="mobile"  placeholder="Mobile/ Cell Number" name="mobile" required>
                        </div>
                      </div>
                      </br>
                      <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1" name="state" required>
                          <option value="" >Himachal Pradesh</option>
                          <option>Delhi</option>
                          <option>Goa</option>
                          <option>Gujrat</option>
                          <option>Haryana</option>
                        </select>
                      </div>
                      <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">I have a GST Number (Optional)</label>
                      </div>
                    </form>
                </div>
                <div class="col-md-3 pull-right">
                  
                    <!--<input type="submit" class="btn-danger btn-lg" name="submit" value="Procced">-->
                    <button type="submit" class="btn-danger paybtn" value="Pay" onclick="launchBOLT(); return false;">PROCEED</button>
                    <input type="hidden" id="salt" name="salt" placeholder="Merchant Salt" value="JkDpdXR52B" />
                    <input type="hidden" id="udf5" name="udf5" value="BOLT_KIT_PHP7" />
                   <input type="hidden" id="key" name="key" placeholder="Merchant Key" value="zK42PdmI" />
                     <input type="hidden" id="pinfo" name="pinfo"  value="<?php echo $course['c_title'];  ?> " />
                     <input type="hidden" id="txnid" name="txnid" placeholder="Transaction ID" value="<?php echo $rand = 'FIES'.random_string('alnum',5); ?>" />
                     <input type="hidden" id="hash" name="hash" value=""/>
		             <input type="hidden" id="surl" name="surl" value="<?php echo base_url(); ?>checkout/success" />
		             <span id="f_error1"></span>
                </div>
                </form>
            </div>  
        </div>
	</div>
    	
   

    
    <div class=" container-fluid last"></div>
    <script>
  $('#btnNext').click(function(){
  $('.nav-tabs > .active').next('li').find('a').trigger('click');
});

  $('#btnPrevious').click(function(){
  $('.nav-tabs > .active').prev('li').find('a').trigger('click');
});
</script>

<script>
$("#btn1").click(function(){


  $('#numbe1').html('<i class="fa fa-check" aria-hidden="true"></i>');

  $('#numbe1').css('padding', '2px 10px 2px 10px');

  $('.navneet').hide();

  $('.course2').show();


});
</script>


<script type="text/javascript">

$('#payment_form').bind('keyup blur', function(){
    
   var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
	csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';


    var key = $('#key').val();
	var salt = $('#salt').val();
    var txnid =  $('#txnid').val();
	var amount = $('#amt').val();
	var pinfo = $('#pinfo').val();
    var fname = $('#fname').val();
	var	email=  $('#email').val();
	var	mobile= $('#mobile').val();
	var	udf5= $('#udf5').val();

   jQuery.ajax({
    url     : "<?php echo base_url(); ?>checkout/json",
    type    : "POST",
    data    : {key : key,salt:salt,txnid:txnid,amount:amount,pinfo:pinfo,fname:fname,email:email,mobile:mobile,udf5:udf5},
    success :function(data, textStatus, jqXHR) 
    {    
        
    
    if(jQuery.trim(data))
    {
         $("#hash").val(data);             
    }                   
    else{       
           $("#f_error1").html('<p><span class="prettyprint" style="color:#ff0000;">'+data+'</span></p>');             
        }   
    },
    error: function(jqXHR, textStatus, errorThrown) 
    {
    $("#f_error1").html('<pre><code class="prettyprint" style="color:#ff0000;">AJAX Request Failed<br/> textStatus='+textStatus+', errorThrown='+errorThrown+'</code></pre>');
    }
    }); 

            

        
});



</script>

<script type="text/javascript">

function launchBOLT()

{
 
	bolt.launch({

	key: $('#key').val(),

	txnid: $('#txnid').val(), 

	hash: $('#hash').val(),

	amount: $('#amt').val(),

	firstname: $('#fname').val(),

	email: $('#email').val(),

	phone: $('#mobile').val(),

	productinfo: $('#pinfo').val(),

	udf5: $('#udf5').val(),

	surl : $('#surl').val(),

	furl: $('#surl').val(),

	mode: 'dropout'	

},{ responseHandler: function(BOLT){

	console.log( BOLT.response.txnStatus );		

	if(BOLT.response.txnStatus != 'CANCEL')

	{

		//Salt is passd here for demo purpose only. For practical use keep salt at server side only.

		var fr = '<form action=\"'+$('#surl').val()+'\" method=\"post\">' +

		'<input type=\"hidden\" name=\"key\" value=\"'+BOLT.response.key+'\" />' +

		'<input type=\"hidden\" name=\"salt\" value=\"'+$('#salt').val()+'\" />' +

		'<input type=\"hidden\" name=\"txnid\" value=\"'+BOLT.response.txnid+'\" />' +

		'<input type=\"hidden\" name=\"amount\" value=\"'+BOLT.response.amount+'\" />' +

		'<input type=\"hidden\" name=\"productinfo\" value=\"'+BOLT.response.productinfo+'\" />' +

		'<input type=\"hidden\" name=\"firstname\" value=\"'+BOLT.response.firstname+'\" />' +

		'<input type=\"hidden\" name=\"email\" value=\"'+BOLT.response.email+'\" />' +

		'<input type=\"hidden\" name=\"udf5\" value=\"'+BOLT.response.udf5+'\" />' +

		'<input type=\"hidden\" name=\"mihpayid\" value=\"'+BOLT.response.mihpayid+'\" />' +

		'<input type=\"hidden\" name=\"status\" value=\"'+BOLT.response.status+'\" />' +

		'<input type=\"hidden\" name=\"hash\" value=\"'+BOLT.response.hash+'\" />' +

		'</form>';

		var form = jQuery(fr);

		jQuery('body').append(form);								

		form.submit();

	}

},

	catchException: function(BOLT){

 		alert( BOLT.message );

	}

});

}



</script>
<style>
.card-body ul li::before {
    background: url(<?php echo base_url(); ?>assets/frontend/course/img/eee.png);
    background-color: rgba(0, 0, 0, 0);
    width: 19px;
    height: 18px;
    display: inline-block;
    content: "";
    vertical-align: middle;
    background-color: #62cf82;
    border-radius: 5px;
    margin-right: 14px;
}
</style>
