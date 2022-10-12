<!DOCTYPE html>
<html lang="en">
	<head>
			<link rel="shortcut icon" href="https://www.muhr.mahidol.ac.th/MUlogo.ico">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="Author" content="กองทรัพยากรบุคคล มหาวิทยาลัยมหิดล (MUHR)">
        <meta name="description" content="สมัครงาน , มหาวิทยาลัย , สมัครงานออนไลน์ , ตำแหน่งงานว่าง , หางาน , หางานราชการ , มหาวิทยาลัยมหิดล, มหิดล, กองทรัพยากรบุคคล , งาน , งานมหาวิทยาลัย">
        <meta name="keywords" content="Human Resource, HR, Administrator, MUHR, , Mahidol, Thailand, Salaya, Thai University, Training Development, Succession Plan, Talent Management, ">
        <meta name="Keywords" content="สมัครงาน , มหาวิทยาลัย , สมัครงานออนไลน์ , ตำแหน่งงานว่าง , หางาน , หางานราชการ , มหาวิทยาลัยมหิดล, มหิดล, กองทรัพยากรบุคคล , งาน , งานมหาวิทยาลัย" lang="th">
    
        <title>ระบบสมัครงานออนไลน์ มหาวิทยาลัยมหิดล กองทรัพยากรบุคคล</title>

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="..\assets\css\bootstrap.min.css">
		<link rel="stylesheet" href="..\assets\font-awesome\4.2.0\css\font-awesome.min.css"> 
		<link href='..\..\..\css.css?family=Kanit:300,600&subset=thai,latin' rel='stylesheet' type='text/css'>
		
		<!-- page specific plugin styles -->
		
		
		<!-- text fonts -->
		<!--<link rel="stylesheet" href="https://muhr.mahidol.ac.th/E-Recruitment/user/assets/fonts/fonts.googleapis.com.css" />-->
		<link rel="stylesheet" href="..\assets\css\font.css"> 
		
		<!-- ace styles -->
		<link rel="stylesheet" href="..\assets\css\ace.min.css" class="ace-main-stylesheet" id="main-ace-style">

		
		
                
        <!-- Custom CSS -->

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="user/assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="user/assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="..\assets\js\ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="user/assets/js/html5shiv.min.js"></script>
		<script src="user/assets/js/respond.min.js"></script>
		<![endif]-->
		
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async="" src="..\..\..\gtag\js.js?id=UA-150641864-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-150641864-1');
		</script>		<script>
			function isAlphanumeric( str ) {
				return /^[0-9a-zA-Z]+$/.test(str);
			}
			
			function checkID(id){
				if(id.length != 13) return false;
				for(i=0, sum=0; i < 12; i++)
				sum += parseFloat(id.charAt(i))*(13-i); 
				if((11-sum%11)%10!=parseFloat(id.charAt(12))) return false; return true;
			}
			
			function validateEmail(email) {
				var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
				return re.test(email);
			}
	
			function checkBeforAccept() {
				
				
				if(document.form1.idcardno.value=="") {
					alert("กรุณากรอกข้อมูลให้ครบด้วยครับ") ;
					document.form1.idcardno.focus() ;
					return false;
				}else if(document.form1.email.value=="") {
					alert("กรุณากรอกข้อมูลให้ครบด้วยครับ") ;
					document.form1.email.focus() ;
					return false;
				}else if(!checkID(document.form1.idcardno.value)){
					alert('รหัสประชาชนไม่ถูกต้อง');
					document.form1.idcardno.focus() ;
					return false;
				}else if(!validateEmail(document.form1.email.value)){
					alert('อีเมลไม่ถูกต้อง');
					document.form1.email.focus() ;
					return false;
				}
				return true;
			}
		</script>
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
					<a href="..\..\index.html"><img src="..\..\image\logomu.png" width="193" height="45" alt=""></a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
					
						
						<li class="light-blue">
						
							<a href="..\handout.html">
								<i class="ace-icon fa fa-file"></i>คู่มือแนะนำการสมัครงาน 
							</a>
						
						</li>
					
						<li class="light-blue">
						
							
                        								<a href="..\..\login\login.html">
								<i class="ace-icon fa fa-user"></i>เข้าสู่ระบบ
							</a>

                            						</li>
						<li class="light-blue">
						
							<a href="..\..\index_en.html">
								<img src="..\..\image\eng.jpg" width="60%">
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
					
						<a href="..\..\index.html"><!-- class="dropdown-toggle"-->
							<i class="menu-icon fa fa-home blue"></i>
							<span class="menu-text"> หน้าแรก </span>

							<!--<b class="arrow fa fa-angle-down"></b> -->
						</a>
					</li>
					<li>					
						<a href="..\..\job.html"><!-- class="dropdown-toggle"-->
							<i class="menu-icon fa fa-list red"></i>
							<span class="menu-text"> ประกาศ </span>

							<!--<b class="arrow fa fa-angle-down"></b> -->
						</a>
					</li>
					
					
										<li>
						<a href="register.html">
							<i class="menu-icon fa fa-suitcase orange"></i>
							<span class="menu-text"> สมัครสมาชิก </span>
						</a>

						<b class="arrow"></b>
					</li>
					
					
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
								<a href="..\..\..\orpr\index.htm" target="_blank">
									<i class="menu-icon fa fa-caret-right"></i>
									<span class="menu-text"> กองทรัพยากรบุคคล </span>
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="..\..\..\th\index.htm" target="_blank"> 
									<i class="menu-icon fa fa-caret-right"></i>
									<span class="menu-text"> มหาวิทยาลัยมหิดล </span>
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					
                    <li>
						<a href="..\contact.html">
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
								ขอ e-mail ยืนยันการสมัครใหม่
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									 e-Recruitment Online
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
            <form class="form-horizontal" method="post" role="form" name="form1" id="form1" action="req_process.php" onsubmit="return checkBeforAccept();"> 
                        
                

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"> เลขประจำตัวประชาชน </label>
					<div class="col-sm-9">
					<input type="number" maxlength="13" class="col-xs-10 col-sm-5" name="idcardno" id="idcardno" placeholder="(เฉพาะตัวเลขเท่านั้น)">
					
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"> อีเมล <span style="color:#F00"> *</span></label> 
					<div class="col-sm-9">
					<input type="text" maxlength="50" class="col-xs-10 col-sm-5" name="email" id="email">
					</div>
				</div>
				
				<div class="clearfix form-actions">
				<div class="col-md-offset-3 col-md-9">
					<button class="btn btn-info" type="submit"> 
						<i class="ace-icon fa fa-check bigger-110"></i>
						Submit
					</button>

					&nbsp; &nbsp; &nbsp;
					<button class="btn" type="reset">
						<i class="ace-icon fa fa-undo bigger-110"></i>
						Reset
					</button>
				</div>
				</div>


			</form>

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
							<span class="blue bolder">Mahidol University</span>
							 | e-Recruitment © 2016
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							
							<a href="..\..\..\MUHR.MAHIDOL\index.htm" target="_blank">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

						</span><br>
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

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="..\assets\js\jquery.2.1.1.min.js"></script>
		

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='../assets/js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='../assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="..\assets\js\bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<!-- page specific plugin scripts -->
		<script src="..\assets\js\jquery.bootstrap-duallistbox.min.js"></script>
		<script src="..\assets\js\jquery.raty.min.js"></script>
		<script src="..\assets\js\bootstrap-multiselect.min.js"></script>
		<script src="..\assets\js\select2.min.js"></script>
		<script src="..\assets\js\typeahead.jquery.min.js"></script>
		<!--[if lte IE 8]> 
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="..\assets\js\jquery-ui.custom.min.js"></script>
		<script src="..\assets\js\jquery.ui.touch-punch.min.js"></script>
		<script src="..\assets\js\jquery.easypiechart.min.js"></script>
		<script src="..\assets\js\jquery.sparkline.min.js"></script>
		<script src="..\assets\js\jquery.flot.min.js"></script>
		<script src="..\assets\js\jquery.flot.pie.min.js"></script>
		<script src="..\assets\js\jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->
		<script src="..\assets\js\ace-elements.min.js"></script>
		<script src="..\assets\js\ace.min.js"></script>

		<!-- inline scripts related to this page -->
		
	</body>
</html>
