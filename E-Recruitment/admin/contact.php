<!DOCTYPE html>
<html lang="en">
	<head>
        
			<link rel="shortcut icon" href="https://www.muhr.mahidol.ac.th/MUlogo.ico">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    
        <title>e-Recruitment | SRT</title>

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets\css\bootstrap.min.css">
		<link rel="stylesheet" href="assets\font-awesome\4.2.0\css\font-awesome.min.css"> 
		<link href='..\..\css.css?family=Kanit:300,600&subset=thai,latin' rel='stylesheet' type='text/css'>
		
		<!-- page specific plugin styles -->
		
		
		<!-- text fonts -->
		<!--<link rel="stylesheet" href="https://muhr.mahidol.ac.th/E-Recruitment/user/assets/fonts/fonts.googleapis.com.css" />-->
		<link rel="stylesheet" href="assets\css\font.css"> 
		
		<!-- ace styles -->
		<link rel="stylesheet" href="assets\css\ace.min.css" class="ace-main-stylesheet" id="main-ace-style">

		
		
                
        <!-- Custom CSS -->

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="user/assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="user/assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets\js\ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="user/assets/js/html5shiv.min.js"></script>
		<script src="user/assets/js/respond.min.js"></script>
		<![endif]-->
		
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async="" src="..\..\gtag\js.js?id=UA-150641864-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-150641864-1');
		</script>		
		<!-- page specific ckeditor-->
		<script src="..\admin\assets\js\ckeditor\ckeditor.js"></script>
		
	</head>

	<body class="no-skin textnalmal">
		<div id="navbar" class="navbar navbar-default">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.php"><img src="..\image\logomu4.png" width="193" height="45" alt=""></a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
					
						
						<li class="light-blue">
						
							<a href="handout.php">
								<i class="ace-icon fa fa-file"></i>คู่มือแนะนำการสมัครงาน 
							</a>
						
						</li>
					
						<li class="light-blue">
						
							
                        								<a href="..\login\login.php">
								<i class="ace-icon fa fa-user"></i>เข้าสู่ระบบ
							</a>

                            						</li>
						<li class="light-blue">
						
							<a href="index_en.php">
								<img src="..\image\eng.jpg" width="60%">
							</a>
						
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<!--<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>-->
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<!--<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>-->
					</div>
				</div><!-- /.sidebar-shortcuts -->



				<ul class="nav nav-list">
					 
					
					<li>
					
						<a href="index.php"><!-- class="dropdown-toggle"-->
							<i class="menu-icon fa fa-home blue"></i>
							<span class="menu-text"> หน้าแรก </span>

							<!--<b class="arrow fa fa-angle-down"></b> -->
						</a>
					</li>
					<!--
					<li>					
						<a href="..\job.html">


							<i class="menu-icon fa fa-list red"></i>
							<span class="menu-text"> ประกาศ </span>

							

						</a>
					</li>
					
					
										<li>
						<a href="profile\register.html">
							<i class="menu-icon fa fa-suitcase orange"></i>
							<span class="menu-text"> สมัครสมาชิก </span>
						</a>

						<b class="arrow"></b>
					</li>
					-->
					
                    					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-file-o blue"></i>
							<span class="menu-text"> ลิงค์ที่เกี่ยวข้อง </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<!--<li class="">
								<a href="https://muhr.mahidol.ac.th/E-Recruitment/user/document.php">
									<i class="menu-icon fa fa-caret-right"></i>
									<span class="menu-text"> เอกสารประกอบ </span>
								</a>

								<b class="arrow"></b>
							</li>-->

	
							<li class="">
								<a href="#" target="_blank">
									<i class="menu-icon fa fa-caret-right"></i>
									<span class="menu-text"> JobBB </span>
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="#" target="_blank"> 
									<i class="menu-icon fa fa-caret-right"></i>
									<span class="menu-text"> Jobthai </span>
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					
                    <li>
						<a href="contact.php">
							<i class="menu-icon fa fa-envelope green"></i>
							<span class="menu-text"> ติดต่อเรา </span>
						</a>

						<b class="arrow"></b>
					</li>
                    					

					
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
			</div>		
		

			<div class="main-content">
				<div class="main-content-inner">
					

					<div class="page-content">
						
						<div class="page-header">
							<h1>
								ติดต่อเรา
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									 e-Recruitment Online
								</small> 
							</h1>
						</div><!-- /.page-header -->
						
						

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
                                
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<div class="widget-box transparent">
						<div class="widget-header widget-header-large">
							<h3 class="widget-title grey lighter">
								<i class="ace-icon fa fa-leaf green"></i>
								แผนกทรัพยากรบุคคลและธุรการ
							</h3>

							
						</div>

						<div class="widget-body">
							<div class="widget-main padding-24">
								<div class="row">
									
									
									<div class="col-sm-4">
										<div class="row">
											<div class="col-sm-11 label label-lg label-success arrowed-in arrowed-right">
												ติดต่อสอบถาม
											</div>
										</div>

										<div>
											<ul class="list-unstyled  spaced">

												<li><i class="ace-icon fa fa-caret-right green"></i>
													สอบถามเกี่ยวกับรายละเอียดตำแหน่งงาน
												</li>
												
												<li>
													<i class="ace-icon fa fa-caret-right green"></i>Email: sumitomorubber_171@trustmail.jobthai.com
												</li>
												
												<li><i class="ace-icon fa fa-caret-right green">
												</i>Phone:<b class="red"> 038-953000 </b>
												</li> 
											</ul>
										</div>
										
										<br>
										
										<div class="row">
											<div class="col-xs-11 label label-lg label-info arrowed-in arrowed-right">
												ที่อยู่
											</div>
										</div>

										<div>
											<ul class="list-unstyled spaced">
												<li>
													<i class="ace-icon fa fa-caret-right blue"></i>แผนกทรัพยากรบุคคลและธุรการ
												</li>
												<li>
													<i class="ace-icon fa fa-caret-right blue"></i>
													Sumitomo Rubber (Thailand) Co.,Ltd.
												</li>
												
												<li>
													<i class="ace-icon fa fa-caret-right blue"></i> 7/232 หมู่ 6 ซอยพรประภา นิคมอุตสาหกรรมอมตะซิตี้
												</li>

												<li>
													<i class="ace-icon fa fa-caret-right blue"></i>ตำบลมาบยางพร
												</li>

												<li>
													<i class="ace-icon fa fa-caret-right blue"></i>อำเภอปลวกแดง
												</li>
												
												<li>
													<i class="ace-icon fa fa-caret-right blue"></i>จังหวัดระยอง 21140
												</li>

											
											</ul>
										</div>
										
									</div>
									<!-- /.col --> 
										
									<div class="col-sm-8">
										<div class="row">
									<div class="col-sm-12">
										<div>
											<div align="center">
												<a href="#"><img class="img-responsive" src="..\image\FAQ\FAQ.png" width="60%"></a>
											</div>  
											<div class="widget-header" style="border-radius:20px;">
												<h4 class="widget-title">ติดต่อเจ้าหน้าที่ </h4> 												
											</div> 

											<div class="widget-body"> 
												<div class="widget-main no-padding">
													<form class="form-horizontal" name="contact" method="post" action="save/saveContact.php" enctype="multipart/form-data"> 
														<!-- <legend>Form</legend> -->
														<fieldset>
														
																														
															<label>ชื่อ-นามสกุล </label>
															<div class="input-icon block col-xs-12 no-padding">
																	<input class="col-sm-12" id="name" name="name" type="text" placeholder="กรุณาระบุชื่อ และนามสกุลของท่าน...">																	
																	<i class="ace-icon fa fa-user"></i>
																</div>
															<span class="help-block"><br></span>
															
																	
															<label>E-mail </label>
															<div class="input-icon block col-xs-12 no-padding">
																	<input class="col-sm-12" id="email" name="email" type="text" placeholder="กรุณาระบุ Email..." required/="">																	
																	<i class="ace-icon fa fa-envelope"></i>
																</div>
															<span class="help-block"><br></span>
															
															<label>เบอร์โทรศัพท์ </label>
															<div class="input-icon block col-xs-12 no-padding">
																<input class="col-sm-12" id="phoneNumber" name="phoneNumber" type="text" placeholder="กรุณาระบุเบอร์โทรศัพท์..." required/=""> 
																<i class="ace-icon fa fa-phone"></i>
															</div>
															<span class="help-block"><br></span>
															
															<label>หัวข้อ </label>
																<div class="input-icon block col-xs-12 no-padding">
																	<input maxlength="100" id="header" name="header" type="text" class="col-xs-12" name="subject" id="form-field-subject" placeholder="หัวข้อสอบถาม..." requireds="">
																	<i class="ace-icon fa fa-comment-o"></i>
																</div>
															<span class="help-block"><br></span>
														</fieldset>

														<div class="form-actions center" style="border-radius:20px;">
															<button type="submit" class="btn btn-sm btn-success" style="border-radius:20px;"> 
																ส่งข้อความ
																<i class="fa fa-envelope" aria-hidden="true"></i>
															</button>
														</div>
														<br><br><br>
													</form>
												</div>
											</div>

									</div><!-- /.col -->

									
								</div><!-- /.row -->

								<div class="space"></div>

								 

								<div class="space-6"></div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
                                            
                                

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			
			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Sumitomo Rubber Industries, Ltd.</span>
							 | e-Recruitment © 2020
						</span>

						&nbsp; &nbsp;
						<br>
						<span class="small">
						This Website Compatible With Firefox and Google Chrome
						</span>
					</div>
				</div>
			</div>
			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		
		
								
								
	
		
		
	<!--[if !IE]> -->
		<script src="assets\js\jquery.2.1.1.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets\js\bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="assets\js\ace-elements.min.js"></script>
		<script src="assets\js\ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				$('.modal.aside').ace_aside();
				
				$('#aside-inside-modal').addClass('aside').ace_aside({container: '#my-modal > .modal-dialog'});
				
				$(document).one('ajaxloadstart.page', function(e) {
					//in ajax mode, remove before leaving page
					$('.modal.aside').remove();
					$(window).off('.aside')
				});
			})
		</script> 
		
	</div></body>
</html>
