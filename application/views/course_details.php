<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>fiesttech </title>
    <link href="<?php echo base_url(); ?>assets/frontend/course/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/course/style2.css" />
    <link href="<?php echo base_url(); ?>assets/frontend/course/custom-module--ecosystem-infographic.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/frontend/course/font-awesome.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/frontend/course/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/course/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/course/js/mashable-menu.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/course/js/lockfixed.min.js"></script>
</head>
<body>
    <?php 
				       $contact = $this->db->get_where('tbl_contact', array( 'id'=>1 ))->row_array();
				
				?>
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
                                
                                    <a href="#" class="dropdown-toggle"> <i class="fa fa-th-large" aria-hidden="true"></i> All Courses</a>
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
                                                        <img src="img/icon.png" class="img-responsive" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                        	<h3>DevOps Engineer</h3>
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
                                                        <img src="img/icon.png" class="img-responsive" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                        	<h3>DevOps Engineer</h3>
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
                                                        <img src="img/icon.png" class="img-responsive" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                        	<h3>DevOps Engineer</h3>
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
                                            <li> <a href="#">Ai & Machiene Learning</a>
                                                
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
                                                        <img src="img/icon.png" class="img-responsive" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                        	<h3>DevOps Engineer</h3>
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
                                            
                                            <li> <a href="#">DIgital Marketing</a>
                                                
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
                                                        <img src="img/icon.png" class="img-responsive" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                        	<h3>DevOps Engineer</h3>
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
                                            
                                            <li> <a href="#">Ai & Machiene Learning</a>
                                                
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
                                                        <img src="img/icon.png" class="img-responsive" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                        	<h3>DevOps Engineer</h3>
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
                                            
                                            <li> <a href="#">Cloud Computing</a>
                                                
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
                                                        <img src="img/icon.png" class="img-responsive" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                        	<h3>DevOps Engineer</h3>
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
                                            <li> <a href="#">Devops</a>
                                                
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
                                                        <img src="img/icon.png" class="img-responsive" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                        	<h3>DevOps Engineer</h3>
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
                                             <li> <a href="#">Cyber Security</a>
                                                
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
                                                        <img src="img/icon.png" class="img-responsive" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                        	<h3>DevOps Engineer</h3>
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
                                            <li> <a href="#">Agile and Scrum</a>
                                                
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
                                                        <img src="img/icon.png" class="img-responsive" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                        	<h3>DevOps Engineer</h3>
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
                                            <li> <a href="#">It Service and Artitecture</a>
                                                
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
                                                        <img src="img/icon.png" class="img-responsive" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                        	<h3>DevOps Engineer</h3>
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
                                            <li> <a href="#">Software Development</a>
                                               
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
                                                        <img src="img/icon.png" class="img-responsive" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                        	<h3>DevOps Engineer</h3>
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
                                             <li> <a href="#">Sales Force</a>
                                                
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
                                                        <img src="img/icon.png" class="img-responsive" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                        	<h3>DevOps Engineer</h3>
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
                                             <li> <a href="#">Quality Managment</a>
                                               
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
                                                        <img src="img/icon.png" class="img-responsive" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                        	<h3>DevOps Engineer</h3>
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

<div class="container-fluid banner1" style="background-image: url(<?php echo base_url() ;?>uploads/course/<?php echo $allData['c_image']  ?>);
    background-size: cover;
    background-position: top;
    min-height: 391px;
    display: block;
    clear: both;" >
                             <div class="row">
                                <div class="container">
                                    <div class="col-lg-12">
                                        <div class="col-md-8">
                                           <img src="<?php echo base_url() ;?>uploads/course/<?php echo $allData['c_icon_image']  ?>" class="img-responsive">
                                           <h1><?php echo $allData['c_title']; ?></h1>
						                   <p>Based on Fiesttech – 10th Version</p>
                                           <i class="fa fa-star ratingcourse"></i>
                                           <i class="fa fa-star ratingcourse"></i>
                                           <i class="fa fa-star ratingcourse"></i>
                                           <i class="fa fa-star ratingcourse"></i>
                                           <i class="fa fa-star"></i>
                                           <span style="color:#fff;"> 16577 Ratings</span>
                                <p><?php echo $allData['c_short_desc']; ?></p>
                                    </div>
 						             <div class="col-md-4">
                                     </div>
                                  </div>
                             </div> 
                        </div>
                    </div>



   <!-- <div class="container-fluid state">
    	<div class="row">
        <div class="container">
                <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="17">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Key Feature</a></li>
                    <li><a href="#">Course Description</a></li>
                    <li><a href="#">Course Preview</a></li>
                    <li><a href="#">Exam & Certification</a></li>
                    <li><a href="#">Course Advisor</a></li>
                    <li><a href="#">Reviews</a></li>
                    <li><a href="#">FaQs</a></li>
                  </ul>
                </nav>
            </div>
    	</div>
    </div>-->
    
    <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
  <div class="container-fluid state">
  <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
    
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#section1">Key Feature</a></li>
          <li><a href="#section2">Course Description</a></li>
          <li><a href="#section3">Course Preview</a></li>
           <li><a href="#section3">Exam & Certification</a></li>
           <li><a href="#section3">Course Advisor</a></li>
           <li><a href="#section3">Reviews</a></li>
            <li><a href="#section3">FaQs</a></li>
          
        </ul>
        <button class="btn-danger pull-right">Enroll Now</button>
      </div>
    </div>
    </div>
  </div>
</nav>  


<div class="container-fluid certified">
	<div class="row">
    <div class="container">
    <h3><?php echo $allData['c_title']; ?> <b>Course Overview</b></h3>
            <div class="col-lg-8">
                
                <p> <?php echo $allData['c_overview']; ?></p>
                
                <div class="col-md-12">
               	 <span><?php echo $allData['c_title']; ?> Key Features</span>
                 <div class="clearfix"></div>
                 <?php echo $allData['c_keyfeature']; ?>
                </div>
            </div>
            
            <div class="col-lg-4">
            	<div class="col-md-12">
                	<div class="col-sm-4">
                    	<img src="<?php echo base_url(); ?>assets/frontend/course/img/Capturemx.png" class="img-responsive"/>
                    </div>
                     
                    <div class="col-sm-6">
                    	<h5>Watch</h5>
                        <h4>INTRO VIDEO</h4>
                    </div>
                    <div class="clearfix"></div>
                    <p>Skills Covered</p>
                </div>
                
                <div class="col-md-12">
                	<ul>
                    	  <?php echo $allData['c_points']; ?>
                    </ul>
                 
                </div>
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>
<div class="container-fluid benefits">
	<div class="row">
    	<div class="container">
    	<h3>Benefits</h3>
    	
        <p><?php echo $allData['c_benifit_des']; ?></p>
        
        <div class="col-lg-12">
        <div class="col-md-4">
            <!-- required for floating -->
            <!-- Nav tabs -->
            <ul class="nav nav-tabs tabs-left">
            <h3>Designation</h3>
                <li class="active"><a href="#ben1" data-toggle="tab">Project Director </a></li>
                <li><a href="#ben2" data-toggle="tab">Senior Project Manager </a></li>
                <li><a href="#ben3" data-toggle="tab">Project Management Officer (PMO)</a></li>
                <li><a href="#ben4" data-toggle="tab">Team Leads/Team Managers</a></li>
            </ul>
        </div>
        <div class="col-md-8">
            <div class="tab-content">
                <?php if($allBen): 
                      $i =1;
                      foreach( $allBen as $ben ): 
                
                ?>
                <div class="tab-pane <?php if($i ==1){ echo "active";} ?>" id="<?php echo 'ben'.$i; ?>">
                	<div class="col-sm-6">
                    	<h3>Designation</h3>
                        <img src="<?php echo base_url(); ?>uploads/salary/<?php echo $ben->sal_image; ?>" class="img-responsive"/>
                    </div>
                    <div class="col-sm-6 picture">
                    	<h3>Designation</h3>
                  <?php getBenImgs($ben->id); ?>
                    </div>
                </div>
                <?php 
                      $i++;
                      endforeach; 
                      endif;
                 ?>
               
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="container-fluid dics1">
                      <div class="row">
                        <div class="container">
                          <div class="col-lg-12">
                           <h3>Training Options</h3>
                           <?php if($allTra): 
                              $i= 0;
                              foreach( $allTra as $train):?>
                          <div class="col-md-4">
                          <div class="col-sm-12">
                           <h6><?php echo  $train->c_title ; ?></h6>
                           <?php if($i != 2):?>
                           <h6>₹ <?php echo  $train->c_price ; ?></h6>
                           <?php endif; ?>
                            <hr>
                            <label style="
    width: 82px;
    height: 20px;
    background: url('<?php echo base_url(); ?>assets/frontend/course/img/Sprite Image.svg') no-repeat;
    background-position-x: 0%;
    background-position-y: 0%;
    background-position: -130px -149px;
    margin: 0;
    display: block!important;
    margin-right: 0px;
    margin-top: -21px;
    margin-right: -20px;
    margin-bottom: 10px;
    float: right;
"></label>
                             <?php echo  $train->c_description ; ?>
                          <?php if($i != 2):?>
                          <button class="btn btn-primary"> <a href="#"> ENROLL NOW</a></button>
                          <?php else: ?>
                           <button class="btn btn-secondry"> <a href="#request"> Contact us</a></button>
                          <?php endif; ?>
                          </div>
                          </div>
                          <?php $i++;
			                   endforeach;
			                   endif; ?>
                         
                          </div>
                        </div>
                    </div>
                 </div>
<div class="container-fluid description" id="sidebar">
	<div class="row">
    	<div class="container">
        	<h3>Course Description</h3>
            <div class="col-lg-8">
            	<?php echo $allData['c_description']; ?> 
                <img src="<?php echo base_url();?>uploads/course/<?php echo $allData['c_desimage']; ?>" class="img-responsive"/>
                
                <div class="col-sm-12">
                <?php echo $allData['c_syllabus']; ?>
                  </div>
                
                
                <button class="btn btn-default">Download Syllabus</button>
                </div>
            
            <div class="col-lg-4" id="request">
            	<div class="col-sm-12">
                	<h3>Contact Us</h3>
                    <h4> <i class="fa fa-phone"></i> +91 <?php echo $contact['phone']; ?> | +91 <?php echo $contact['phone']; ?></h4>
                    <span> ( Toll Free ) </span>
                </div>
                	
                <div class="col-sm-12 promo">
                	<h4>Request more information</h4>
                     <?php
				          $attributes = array('id' => 'f_form1','method' => 'post','class' => 'form_horizontal');
				          echo form_open_multipart('course/submitRequest', $attributes); 
					  ?>
                      <div class="form-group">
                       
                        <input type="email" class="form-control" id="Name" name="mname" placeholder="Name" required>
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" id="pwd"  name="email" placeholder="Email" required>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="pwd" name="phone" placeholder="Phone No" required>
                      </div>
                      
                      <div class="form-group">
        		    <textarea class="form-control" id="message-text" name="message" placeholder="Message*" required></textarea>
        			  </div>
                      <div class="checkbox">
                        <label><input type="checkbox" required> By providing your contact details, you agree to our Privacy Policy</label>
                      </div>
                      <span id="f_error1"></span>
                       <input type="submit" class="btn btn-default btn-lg btn-block" id="f_submit1" value="SUBMIT">
                         <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid exam">
	<div class="row">
        <div class="container">
        	
            <div class="col-lg-8">
                
                
                <div class="panel-group">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">                  <a data-toggle="collapse" href="#collapse1">About Guidewire Software and P&C Insurance</a>                  <a href="#" class="pull-right"><i class="fa fa-angle-down rotate-icon"></i></a>                </h4> </div>
        <div id="collapse1" class="panel-collapse collapse">
            <p>Guidewire Software Inc., commonly Guidewire, is a software publisher based in Foster City, California. It offers core back-end software for property and casualty (P&C) insurance carriers in the U.S. and worldwide, as well as the Guidewire Live suite of online analytics services for P&C insurers. They are a recurring revenue software company as they sell term licenses. Its three main software products are Claim Center, Policy Center, and Billing Center, each servicing a major component of a P&C insurance carrier. There are a number of add-on modules, as well as an increasing number of value-added online services provided via Guidewire Live. Guidewire develops the Gosu programming language, it released as open source in 2010</p>
             <table class="table">
                  The Requirements For <?php echo $allData['c_title']; ?> Certification
      <thead>
        <tr>
          <th scope="col">Certification Name</th>
          <th scope="col">Work Experience</th>
          <th scope="col">Fiesttech Education</th>
        </tr>
      </thead>
      <tbody>
           <?php if($allCert): 
                                
                foreach($allCert as $cert ):   ?>
                     <tr>

                     <td><?php echo $cert->certi_name; ?></td>
                     <td><?php echo $cert->work_exp; ?></td>
                     <td><?php echo $cert->guide_edu; ?></td>
                      </tr>
                    <?php endforeach;
                          endif; ?>
        
        
      </tbody>
    </table>
        </div>
    </div>
</div>
  			  <?php echo $allData['c_faqs']; ?>
            
			</div>
            <div class="col-lg-4">
            	<img src="<?php echo base_url(); ?>uploads/course/<?php echo $allData['c_cert_img']; ?>" class="img-responsive"/>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid somethings"> 
                <div class="row">
                <div class="container">
                <div class="col-lg-12 ">
                
                 <h3> <?php echo $allData['c_title']; ?> Course<b> Reviews </b></h3>
                 <?php if($allTest): 
                                
                       foreach($allTest as $test ):   ?>
                 
                 <div class="col-md-6">
                 <div class="col-sm-12">
                  <div class="col-sm-3">
					<img src="<?php echo base_url().'uploads/testimonial/'.$test->image; ?>" class="img-responsive">
                </div>
                  <div class="col-sm-9">
                         <h4> <?php echo $test->author; ?></h4>
                         <h6><?php echo $test->designation; ?></h6>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
						 <i class="fa fa-star"></i>
                         
                    </div>
                    <div class="clearfix"></div>
                     <p><?php echo $test->content; ?></p>
               </div>
               </div>
                  <?php endforeach;
                        endif; ?>
               
               
	 </div>
	</div>
</div>
</div>
<div class="container-fluid coure">
    <div class="row">
        <div class="container">
            <div class="col-lg-12">
                <h2>Related Courses</h2>
                <div class="col-md-4">
                    <div class="projj1">
                        <div class="Related1"> <img src="<?php echo base_url(); ?>assets/frontend/img/icon.png" class="img-responsive"> </div>
                        <p> Analyze the requirements of developing a telecom application with billing feature for a SaaS organization.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="proud3">
                        <div class="Related2"> <img src="<?php echo base_url(); ?>assets/frontend/img/icon.png" class="img-responsive"> </div>
                        <p> Analyze the requirements of developing a telecom application with billing feature for a SaaS organization.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="proud">
                        <h5> Application With Billing</h5> </div>
                    <div class="telecomm">
                        <div class="proud1">
                            <h5>Developing a Telecom</h5> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
$("#f_submit1").click(function()
    {
    
    $("#f_form1").submit(function(e)
    {
    
    $("#f_error1").html("<img src='http://localhost/birjuflower/assets/images/loading.gif' alt='Loading'/>");
    var postData = $(this).serializeArray();
    var formURL = $(this).attr("action");
    $.ajax(
    {
    url     : formURL,
    type    : "POST",
    data    : postData,
    success :function(data, textStatus, jqXHR) 
    {       
    if($.trim(data)=="Success")
    {
        $("#f_error1").html('<p><span class="prettyprintS" style="color:#00ff00;"> Successfully submitted. </span></p>');        
         $('input[type="text"],textarea').val('');
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
     e.preventDefault();    //STOP default action
     e.unbind();
    });
    
    });
});
</script>
<script> $(document).scroll(function() {
    var y = $(this).scrollTop();
    if (y > 400) {
        $('.state .btn-danger').fadeIn();
    } else {
        $('.state .btn-danger').fadeOut();
    }
}); </script>

<script>(function($) {
    $.lockfixed("#sidebar .menu", {
        offset: {
            top: 10, bottom: 20
        }
    }
    );
    $.lockfixed("#sidebar .promo", {
        offset: {
            top: 80, bottom: 1520
        }
    }
    );
}

)(jQuery);
</script>
<script> $('.panel-title > a').click(function() {
    $(this).find('i').toggleClass('fa-plus fa-minus').closest('panel').siblings('panel').find('i').removeClass('fa-minus').addClass('fa-plus');
}); </script>

<?php include('footer.php');?>


