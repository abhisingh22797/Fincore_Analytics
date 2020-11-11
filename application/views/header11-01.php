<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?php echo  base_url(); ?>assets/frontend/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo  base_url(); ?>assets/frontend/css/style.css" rel="stylesheet">  
<link href="<?php echo  base_url(); ?>assets/frontend/css/custom-module--ecosystem-infographic.css" rel="stylesheet">
<link href="<?php echo  base_url(); ?>assets/frontend/css/font-awesome.css" rel="stylesheet">
<script src="<?php echo  base_url(); ?>assets/frontend/js/jquery.min.js"></script>
<script src="<?php echo  base_url(); ?>assets/frontend/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
				       $contact = $this->db->get_where('tbl_contact', array( 'id'=>1 ))->row_array();
				
				?>

<body>

<div class=" container-fluid banner">
    <?php if(date('Y-m-d H:i:s') <= $promos['date_created']  ): ?>
    <div class="row">
        <img src="http://insydindemo.tk/fiesttech/assets/frontend/img/flash-banner.png" class="img-responsive">
    </div>  
    <?php endif; ?>
</div>    
<div class="container-fluid top">
	<div class="row">
		<div class="container">
			<div class="col-lg-12">
				<ul class="pull-right">
                	<li><a href="">Resources</a></li>
                    <li><a href="">Corporate Training</a></li>
                	<li><a href="">Higher Education</a></li>
				</ul>
            </div>
         </div>
      </div>  
</div>


  <div class="container-fluid topbar">
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>/uploads/logo/<?=$contact['logo'];?>" width="170" /></a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle">All Course</a>
                                    <ul class="dropdown-menu">
                                        <ul class="menu">
                                        <h3>POPULAR COURSES</h3>
                                            <li><a href="#">Project Managment</a>
                                                <div class="megadrop">
														<div class="col">
                                                        <h3>POPULAR COURSES</h3>
                                                        <ul>
                                                            <li><a href="#">Digital Project Manager</a></li>
                                                <li><a href="#">PMP ® Certification </a></li>
                                                <li><a href="#">PRINCE2  Foundation and Practitioner </a></li>
                                                <li><a href="#">CAPM ® Certification </a></li>
                                                <li><a href="#">CBAP ®-Certified Business Analysis Professional </a></li>
                                                <li><a href="#">CCBA ®-Certification of Competency in Business Analysis </a></li>
                                                <li><a href="#">PMI-RMP ® Certification </a></li>
                                                <li><a href="#">PRINCE2 ® Foundation </a></li>
                                                <li><a href="#">MSP ® Foundation and Practitioner </a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col">
                                                        <h3>Masters program</h3>
                                                        <ul>
                                                        <div class="col-sm-3">
                                                        <img src="<?php echo base_url() ?>assets/frontend/img/icon.png" class="img-responsive" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                        	<h3>PMP® Plus</h3>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <li><a class="dropdown-item" href="#">Agile Scrum Master</a></li>
                                                        <li><a class="dropdown-item" href="#">DevOps Certification Training</a></li>
                                                        <li><a class="dropdown-item" href="#">AWS SysOps Associate</a></li>
                                                        <li><a class="dropdown-item" href="#">Puppet Training Course</a></li>
                                                        <li><a class="dropdown-item" href="#">Ansible 2.0 Training course</a></li>
                                                    </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li> <a href="#">Big data</a>
                                               
                                                <div class="megadrop">
														<div class="col">
                                                        <h3>POPULAR COURSES</h3>
                                                        <ul>
                                                            <li><a href="#">Big Data Hadoop and Spark Developer</a></li>
                                                          <li><a href="#">Big Data and Hadoop Administrator</a></li>
                                                          <li><a href="#">MongoDB Developer and Administrator</a></li>
                                                          <li><a href="#">Apache Spark and Scala</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col">
                                                        <h3>Masters program</h3>
                                                        <ul>
                                                        <div class="col-sm-3">
                                                        <img src="<?php echo base_url() ?>assets/frontend/img/icon.png" class="img-responsive" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                        	<h3>Big Data Engineer</h3>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <li><a href="#">Big Data Engineer</a></li>
                                                          <li><a href="#">Big Data Hadoop and Spark Developer</a></li>
                                                          <li><a href="#">Big Data and Hadoop Administrator</a></li>
                                                          <li><a href="#">MongoDB Developer and Administrator</a></li>
                                                            <li><a href="#">Apache Spark and Scala</a></li>
                                                            <li><a href="#">Integrated Program in Big Data and Data Science</a></li>
                                                            <li><a href="#">Apache Kafka</a></li>
                                                    </ul>
                                                    </div>
                                                </div>
                                               
                                            </li>
                                            <li> <a href="#">Data Science & Business Intelligence</a>
                                               
                                                <div class="megadrop">
														<div class="col">
                                                        <h3>POPULAR COURSES</h3>
                                                        <ul>
                                                            <li><a href="#">Data Analyst</a></li>
                                                          <li><a href="#">Data Science with Python</a></li>
                                                          <li><a href="#">Data Science Certification Training - R Programming</a></li>
                                                          <li><a href="#">Tableau Certification Training Course</a></li>
                                                          <li><a href="#">Business Analytics with Excel</a></li>
                                                          <li><a href="#">Introduction to Data Analytics</a></li>
                                                          <li><a href="#">Business Analyst</a></li>
                                                          <li><a href="#">Power BI</a></li>
                                                          <li><a href="#">Data Scientist</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col">
                                                        <h3>Masters program</h3>
                                                        <ul>
                                                        <div class="col-sm-3">
                                                        <img src="<?php echo base_url() ?>assets/frontend/img/icon.png" class="img-responsive" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                        	<h3>Data Scientist</h3>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <li><a href="#">Data Science Certification Training - R Programming</a></li>
                                                          <li><a href="#">Data Science with Python</a></li>
                                                          <li><a href="#">Machine Learning</a></li>
                                                          <li><a href="#">Tableau Desktop 10 Qualified Associate Training</a></li>
                                                            <li><a href="#">Big Data Hadoop and Spark Developer</a></li>
                                                            <li><a href="#">Big Data Hadoop and Spark Developer
& 5 more courses</a></li>
                                                    </ul>
                                                    </div>
                                                </div>
                                               
                                            </li>
                                            <li> <a href="#">Ai & Machiene Learning</a>
                                                
                                                <div class="megadrop">
														<div class="col">
                                                        <h3>POPULAR COURSES</h3>
                                                        <ul>
                                                            <li><a href="#">Machine Learning</a></li>
                                                          <li><a href="#">Deep Learning with TensorFlow</a></li>
                                                          <li><a href="#">RPA Training using UiPath</a></li>
                                                          <li><a href="#">Automation Anywhere Certified Advanced RPA Professional Training Course</a></li>
                                                          <li><a href="#">Introduction to Artificial Intelligence</a></li>
                                                          <li><a href="#">Introduction to Robotic Process Automation (RPA)</a></li>
                                                          <li><a href="#">Artificial Intelligence Engineer</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col">
                                                        <h3>Masters program</h3>
                                                        <ul>
                                                        <div class="col-sm-3">
                                                        <img src="<?php echo base_url() ?>assets/frontend/img/icon.png" class="img-responsive" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                        	<h3>Artificial Intelligence Engineer</h3>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <li><a href="#">introduction to Artificial Intelligence</a></li>
                                                          <li><a href="#">Data Science with Python</a></li>
                                                          <li><a href="#">Machine Learning</a></li>
                                                          <li><a href="#">Deep Learning Fundamentals</a></li>
                                                            <li><a href="#">Deep Learning with TensorFlow
& 6 more courses</a></li>
                                                    </ul>
                                                    </div>
                                                </div>
                                              
                                            </li>
                                            
                                            <li> <a href="#">DIgital Marketing</a>
                                                
                                                <div class="megadrop">
														<div class="col">
                                                        <h3>POPULAR COURSES</h3>
                                                        <ul>
                                                          <li><a href="#">Digital Marketing Associate</a></li>
                                                         <li><a href="#">Advanced Search Engine Optimization (SEO) Certification Program</a></li>
                                                          <li><a href="#">Advanced Social Media Certification Program</a></li>
                                                          <li><a href="#">Advanced Pay Per Click (PPC) Certification Program</a></li>
                                                          <li><a href="#">Advanced Content Marketing</a></li>
                                                          <li><a href="#">Advanced Email Marketing</a></li>
                                                          <li><a href="#">Advanced Mobile Marketing</a></li>
                                                          <li><a href="#">Advanced Website Conversion Rate Optimization</a></li>
                                                          <li><a href="#">Digital & Social Selling Certified Associate Training Program</a></li>
                                                          <li><a href="#">Complete Google AdWords Professional</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col">
                                                        <h3>Masters program</h3>
                                                        <ul>
                                                        <div class="col-sm-3">
                                                        <img src="<?php echo base_url() ?>assets/frontend/img/icon.png" class="img-responsive" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                        	<h3>Digital Marketing Specialist</h3>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <li><a href="#">Fundamentals of Marketing</a></li>
                                                          <li><a href="#">Demystifying Digital Channels</a></li>
                                                          <li><a href="#">Conversion and Strategy</a></li>
                                                          <li><a href="#">Advanced Web Analytics</a></li>
                                                           <li><a href="#">Advanced Search Engine Optimization (SEO)& 6 more courses</a></li>
                                                            
                                                    </ul>
                                                    </div>
                                                </div>
                                               
                                            </li>
                                            
                                           
                                            
                                            <li> <a href="#">Cloud Computing</a>
                                                
                                                <div class="megadrop">
														<div class="col">
                                                        <h3>POPULAR COURSES</h3>
                                                        <ul>
                                                          <li><a href="#">AWS Solutions Architect</a></li>
                                                          <li><a href="#"> AWS Developer Associate</a></li>
                                                          <li><a href="#"> AWS SysOps Associate</a></li>
                                                          <li><a href="#">Microsoft Azure Architect Technologies: AZ-300</a></li>
                                                          <li><a href="#">Microsoft Azure Architect Design: AZ-301</a></li>
                                                          <li><a href="#">Microsoft Certified Azure Developer Associate: AZ-203</a></li>
                                                          <li><a href="#">Microsoft Certified: Azure Administrator Associate AZ-103</a></li>
                                                          <li><a href="#">AWS Technical Essentials</a></li>
                                                          <li><a href="#">Microsoft Azure Fundamentals</a></li>
                                                          <li><a href="#"></a>Blockchain Developer</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col">
                                                        <h3>Masters program</h3>
                                                        <ul>
                                                        <div class="col-sm-3">
                                                        <img src="<?php echo base_url() ?>assets/frontend/img/icon.png" class="img-responsive" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                        	<h3>Cloud Architect (AWS & Azure)</h3>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <li><a href="#"> AWS Technical Essentials</a></li>
                                                          <li><a href="#">AWS Developer Associate</a></li>
                                                          <li><a href="#">Microsoft Certified Azure Developer Associate: AZ:203</a></li>
                                                          <li><a href="#"> AWS Solutions Architect</a></li>
                                                          <li><a href="#"> Microsoft Azure Architect Technologies: AZ:300
    & 7 more courses</a></li>
                                                    </ul>
                                                    </div>
                                                </div>
                                             
                                            </li>
                                            <li> <a href="#">Devops</a>
                                                
                                                <div class="megadrop">
														<div class="col">
                                                        <h3>POPULAR COURSES</h3>
                                                        <ul>
                                                          <li><a href="#">DevOps Certification Training</a></li>
                                                          <li><a href="#">Docker Compose in Depth</a></li>
                                                          <li><a href="#">Puppet Training Course</a></li>
                                                          <li><a href="#">  Salt Training Course</a></li>
                                                          <li><a href="#">Certified Kubernetes Administrator</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col">
                                                        <h3>Masters program</h3>
                                                        <ul>
                                                        <div class="col-sm-3">
                                                        <img src="<?php echo base_url() ?>assets/frontend/img/icon.png" class="img-responsive" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                        	<h3>DevOps Engineer</h3>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <li><a href="#">Agile Scrum Master</a></li>
                                                          <li><a href="#">DevOps Certification Training</a></li>
                                                          li><a href="#">AWS SysOps Associate</a></li>
                                                          <li><a href="#">Puppet Training Course</a></li>
                                                          <li><a href="#">  Ansible 2.0 Training course
    & 11 more courses</a></li>
                                                    </ul>
                                                    </div>
                                                </div>
                                                
                                            </li>
                                             <li> <a href="#">Cyber Security</a>
                                                
                                                <div class="megadrop">
														<div class="col">
                                                        <h3>POPULAR COURSES</h3>
                                                        <ul>
                                                          <li><a href="#"> CEH (v10)- Certified Ethical Hacker</a></li>
                                                          <li><a href="#"> CISSP®- Certified Information Systems Security Professional</a></li>
                                                          <li><a href="#"> CISA®- Certified Information Systems Auditor</a></li>
                                                          <li><a href="#"> CCSP-Certified Cloud Security Professional</a></li>
                                                          <li><a href="#"> Introduction to Cyber Security</a></li>
                                                          <li><a href="#"> CompTIA Security+ 501</a></li>
                                                          <li><a href="#"> CISM®- Certified Information Security Manager</a></li>
                                                          <li><a href="#">COBIT®5- Control Objectives for Information and Related Technologies</a></li>
                                                          <li><a href="#">   Cyber Security Expert</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col">
                                                        <h3>Masters program</h3>
                                                        <ul>
                                                        <div class="col-sm-3">
                                                        <img src="<?php echo base_url() ?>assets/frontend/img/icon.png" class="img-responsive" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                        	<h3>Cyber Security Expert</h3>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <li><a href="#"> Introduction to Cyber Security</a></li>
                                                          <li><a href="#"> CompTIA Security+ 501</a></li>
                                                          <li><a href="#">CEH (v10)- Certified Ethical Hacker CISM®</a></li>
                                                          <li><a href="#"> CISSP® Training & 2 more courses</a></li>
                                                            
                                                    </ul>
                                                    </div>
                                                </div>
                                                
                                            </li>
                                            <li> <a href="#">Agile and Scrum</a>
                                                
                                                <div class="megadrop">
														<div class="col">
                                                        <h3>POPULAR COURSES</h3>
                                                        <ul>
                                                            <li><a href="#">Certified ScrumMaster® (CSM)</a></li>
                                                          <li><a href="#"> Agile Scrum Master</a></li>
                                                          <li><a href="#">PMI-ACP® Certification</a></li>
                                                          <li><a href="#"> Certified Scrum Product Owner® (CSPO)</a></li>
                                                           <li><a href="#">Professional Scrum Product Owner</a></li>
                                                          <li><a href="#">Professional Scrum Master</a></li>
                                                          <li><a href="#">Certified Scrum Developer</a></li>
                                                          <li><a href="#"> SAFe® Agilist Certification Training</a></li>
                                                          <li><a href="#">IC Agile Certified Professional-Agile Testing (ICP-TST) online course</a></li>
                                                          <li><a href="#">Kanban Management Professional (KMP)-1 Kanban System Design course</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col">
                                                        <h3>Masters program</h3>
                                                        <ul>
                                                        
                                                        <div class="col-sm-8">
                                                        	<h3></h3>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <li><a href="#"> Introduction to TKP (Team Kanban Practitioner) Online Course</a></li>
                                                         <li><a href="#"> ICP-ACC (ICAgile Certified Agile Coaching) course</a></li>
                                                         <li><a href="#">Agile Scrum Foundation</a></li>
                                                         <li><a href="#">Advanced Certified ScrumMaster (A-CSM)</a></li>
                                                         <li><a href="#">SAFe Scrum Master</a></li>
                                                         <li><a href="#">SAFe Product Owner/Product Manager (POPM) Certification Training</a></li>
                                                    </ul>
                                                    </div>
                                                </div>
                                               
                                            </li>
                                            <li> <a href="#">It Service and Artitecture</a>
                                                
                                                <div class="megadrop">
														<div class="col">
                                                        <h3>POPULAR COURSES</h3>
                                                        <ul>
                                                            <li><a href="#">ITIL® 4 Foundation</a></li>
                                                          <li><a href="#">TOGAF® 9 Combined level 1 and level 2 training course</a></li>
                                                          <li><a href="#">ITIL 4 Managing Professional Transition Module Training</a></li>
                                                          <li><a href="#">ITIL® 4 Strategist: Direct, Plan, and Improve</a></li>
                                                          <li><a href="#">ITIL® 4 Specialist: Create, Deliver, and Support</a></li>
                                                          <li><a href="#"> ITIL® Intermediate SO</a></li>
                                                          <li><a href="#">ITIL® Intermediate SS</a></li>
                                                          <li><a href="#">ITIL® Intermediate CSI</a></li>
                                                          <li><a href="#">ITIL® Intermediate OSA</a></li>
                                                          <li><a href="#">ITIL® Intermediate PPO</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col">
                                                        <h3>Masters program</h3>
                                                        <ul>
                                                        <div class="col-sm-3">
                                                        <img src="<?php echo base_url() ?>assets/frontend/img/icon.png" class="img-responsive" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                        	<h3>ITIL® Lifecycle Expert Program</h3>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <li><a href="#">ITIL® Intermediate CSI</a></li>
                                                          <li><a href="#">ITIL® Intermediate SD</a></li>
                                                          <li><a href="#">ITIL® Intermediate SO</a></li>
                                                          <li><a href="#">ITIL® Intermediate SS</a></li>
                                                            <li><a href="#">ITIL® Intermediate ST & 1 more courses</a></li> 
                                                    </ul>
                                                    </div>
                                                </div>
                                                
                                            </li>
                                            <li> <a href="#">Software Development</a>
                                               
                                                <div class="megadrop">
														<div class="col">
                                                        <h3>POPULAR COURSES</h3>
                                                        <ul>
                                                            <li><a href="#">Angular Training</a></li>
                                                          <li><a href="#">Selenium 3.0 Training</a></li>
                                                          <li><a href="#">Java Certification Training</a></li>
                                                          <li><a href="#">Introduction to IoT</a></li>
                                                          <li><a href="#"> Node.js Training</a></li>
                                                          <li><a href="#">Certified Android App Developer</a></li>
                                                          <li><a href="#">Python Training</a></li>
                                                          <li><a href="#">Javascript Certification training</a></li>
                                                          <li><a href="#">React.js</a></li>
                                                          <li><a href="#"> Full Stack Web Developer - MEAN Stack</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col">
                                                        <h3>Masters program</h3>
                                                        <ul>
                                                        <div class="col-sm-3">
                                                        <img src="<?php echo base_url() ?>assets/frontend/img/icon.png" class="img-responsive" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                        	<h3>Full Stack Web Developer - MEAN Stack</h3>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <li><a href="#">Javascript Certification training</a></li>
                                                         <li><a href="#">Complete HTML and CSS Training Course</a></li>
                                                         <li><a href="#"> Node.js Training</a></li>
                                                         <li><a href="#">Angular Training</a></li>
                                                         <li><a href="#">MongoDB Developer and Administrator & 2 more courses</a></li>
                                                         
                                                    </ul>
                                                    </div>
                                                </div>
                                                
                                            </li>
                                             <li> <a href="#">Sales Force</a>
                                                
                                                <div class="megadrop">
														<div class="col">
                                                        <h3>POPULAR COURSES</h3>
                                                        <ul>
                                                            <li><a href="#">Salesforce Administrator & App Builder</a></li>
                                                          <li><a href="#">Salesforce Administrator</a></li>
                                                          <li><a href="#">Salesforce Platform App Builder</a></li>
                                                           <li><a href="#">Salesforce Platform Developer I (Apex and Visualforce)</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col">
                                                        <h3></h3>
                                                        <ul>
                                                        
                                                        <div class="col-sm-8">
                                                        	<h3></h3>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        
                                                    </ul>
                                                    </div>
                                                </div>
                                                
                                            </li>
                                             <li> <a href="#">Quality Managment</a>
                                               
                                                <div class="megadrop">
														<div class="col">
                                                        <h3>POPULAR COURSES</h3>
                                                        <ul>
                                                            <li><a href="#">Certified Lean Six Sigma Green Belt</a></li>
                                                          <li><a href="#">  Certified Lean Six Sigma Black Belt</a></li>
                                                          <li><a href="#">Lean Management</a></li>
                                                          <li><a href="#"> Lean Six Sigma Expert</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col">
                                                        <h3>Masters program</h3>
                                                        <ul>
                                                        <div class="col-sm-3">
                                                        <img src="<?php echo base_url() ?>assets/frontend/img/icon.png" class="img-responsive" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                        	<h3>Lean Six Sigma Experts</h3>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <li><a href="#">Lean Management</a></li>
                                                        <li><a href="#"> Certified Lean Six Sigma Green Belt</a></li>  
                                                        <li><a href="#"> Minitab®</a></li>
                                                        <li><a href="#">   Certified Lean Six Sigma Black Belt & 2 more courses</a></li> 
                                                    </ul>
                                                    </div>
                                                </div>
                                                
                                            </li>
                                        </ul>
                                    </ul>
                                </li>
                                <li>
                                    <form class="form-inline my-2">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                        <input class="form-control mr-sm-2" type="search" placeholder="What do you Want to learn ?" aria-label="Search">
                                    </form>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="#">Log in</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>



<div class="container-fluid slid" style="background-image: url(<?php echo base_url(); ?>uploads/home/<?php echo $allHome['banner_image']?>);
    padding: 40px;
    background-repeat: no-repeat;">
   <div class="row">
      <div class="container">
      	`<h1><?php echo $allHome['b_title']?></h1>
        <p><?php echo $allHome['b_short']?></p>
         <div class="col-lg-12">
        	<h2><?php echo $allHome['p_title']?></h2>
            <p><?php echo $allHome['p_des']?></p>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>

  <div class="carousel-inner">
  <?php if($allSlider) :
	  $i=0;
          foreach( $allSlider as $slider ) :
  ?>
    <div class="item <?php if($i==0){echo "active";}?>">
    <div class="col-lg-10 col-sm-offset-1">
         <div class="col-md-6">
            <img src="<?php echo base_url()?>assets/frontend/img/pdp-slider_1.jpg" class="img-responsive"/>
         </div>
          <div class="col-md-6">
            <h4><?php echo  $slider->title; ?></h4>
            <?php echo  $slider->description; ?>
            <div class="col-sm-3">
            	<img src="<?php echo base_url()?>uploads/slider/<?php echo  $slider->img_bottom; ?>" class="img-responsive"/>
            </div>
             <div class="col-sm-6">
            	<h3><?php echo  $slider->title_bottom; ?></h3>
            </div>
         </div>
     </div>
    </div>
	<?php
	$i++;
	endforeach;
	endif;?>
   
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 </div>
  <div class="col-lg-12">
        	<h2><?php echo $allHome['l_title']?></h2>
            <p><?php echo $allHome['l_des']?></p>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>

  <div class="carousel-inner">
      <?php if($learnPath) : ?>
      <?php foreach( $learnPath as $learn) : ?>
    <div class="item active">
    <div class="col-lg-10 col-sm-offset-1">
        
         <div class="col-md-3">
         	<div class="col-sm-12 grid4">
          	  <img src="<?php echo base_url()?>assets/frontend/img/master_badge_white.svgz.svg" class="img-responsive"/>
            </div>
            <div class=" white">
          	 	<h2><?= $learn->cat_name; ?></h2>
                <p><?= $learn->course; ?> Courses</p>
            </div>
         </div>
     </div>
    </div>
    <?php endforeach; ?>
        <?php endif; ?>
    
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
              <div class="col-lg-10 col-sm-offset-1">
                       <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#home">Popular Courses</a></li>
              <li><a data-toggle="tab" href="#menu1">Trending Courses</a></li>
              
            </ul>
            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <div class="col-sm-3">
                	<h2>PMP</h2>
                    <img src="<?php echo base_url()?>assets/frontend/img/11.png" class="img-responsive"/>
                </div>
                <div class="col-sm-3">
                	<h2>PMP</h2>
                     <img src="<?php echo base_url()?>assets/frontend/img/11.png" class="img-responsive"/>
                </div>
                <div class="col-sm-3">
                	<h2>PMP</h2>
                     <img src="<?php echo base_url()?>assets/frontend/img/11.png" class="img-responsive"/>
                </div>
                <div class="col-sm-3">
                	<h2>PMP</h2>
                     <img src="<?php echo base_url()?>assets/frontend/img/11.png" class="img-responsive"/>
                </div>
                <div class="col-sm-3">
                	<h2>PMP</h2>
                     <img src="<?php echo base_url()?>assets/frontend/img/11.png" class="img-responsive"/>
                </div>
                <div class="col-sm-3">
                	<h2>PMP</h2>
                     <img src="<?php echo base_url()?>assets/frontend/img/11.png" class="img-responsive"/>
                </div>
              </div>
              <div id="menu1" class="tab-pane fade">
                 <div class="col-sm-3">
                	<h2>PMP</h2>
                    <img src="<?php echo base_url()?>assets/frontend/img/11.png" class="img-responsive"/>
                </div>
                <div class="col-sm-3">
                	<h2>PMP</h2>
                     <img src="<?php echo base_url()?>assets/frontend/img/11.png" class="img-responsive"/>
                </div>
                <div class="col-sm-3">
                	<h2>PMP</h2>
                     <img src="<?php echo base_url()?>assets/frontend/img/11.png" class="img-responsive"/>
                </div>
                <div class="col-sm-3">
                	<h2>PMP</h2>
                     <img src="<?php echo base_url()?>assets/frontend/img/11.png" class="img-responsive"/>
                </div>
                <div class="col-sm-3">
                	<h2>PMP</h2>
                     <img src="<?php echo base_url()?>assets/frontend/img/11.png" class="img-responsive"/>
                </div>
                <div class="col-sm-3">
                	<h2>PMP</h2>
                     <img src="<?php echo base_url()?>assets/frontend/img/11.png" class="img-responsive"/>
                </div>
              </div>
             
            </div> 
              </div>
         </div>
      </div>
    </div>
  </div>