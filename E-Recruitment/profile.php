<script language="JavaScript">alert('กรุณา Login เข้าสู่ระบบ');window.location='https://muhr.mahidol.ac.th/E-Recruitment/login/login.php' </script><!DOCTYPE html>
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
		</script>		
		
		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="..\assets\css\jquery-ui.custom.min.css">
		<link rel="stylesheet" href="..\assets\css\chosen.min.css">
		<link rel="stylesheet" href="..\assets\css\datepicker.min.css">
		<link rel="stylesheet" href="..\assets\css\bootstrap-timepicker.min.css">
		<link rel="stylesheet" href="..\assets\css\daterangepicker.min.css">
		<link rel="stylesheet" href="..\assets\css\bootstrap-datetimepicker.min.css">
		<link rel="stylesheet" href="..\assets\css\colorpicker.min.css">
		<link rel="stylesheet" href="..\assets\css\select2.min.css">
		<link rel="stylesheet" href="../assets/css/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style">
		<!-- text fonts -->
		<!-- ace styles -->
		<link rel="stylesheet" href="..\assets\css\ace.min.css" class="ace-main-stylesheet" id="main-ace-style">
		
        
        <!-- tab styles 
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">-->
        <link rel="stylesheet" href="..\assets\css\w3.css">
		
		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="..\assets\css\dropzone.min.css">
		<script src="..\..\admin\assets\js\ckeditor\ckeditor.js"></script>
		<script type="text/javascript">
			function chkFileSize()
			{
				var size = document.getElementById('picPersonal').files[0].size;
				if (size >= 204800){
					alert("รูปประจำตัวขนาดต้องไม่เกิน 200kb ครับ");
				}
			} 
		</script>
		
		<script type="text/javascript">
			function chksubmit(){
				// tab 1 
				if(document.getElementById('name_th').value == ''){
					alert('กรุณากรอกชื่อ');
					openCitynext('tabh1', 'tab1');
					document.getElementById('name_th').focus();
					return false;
				}else if(document.getElementById('lastname_th').value == ''){
					alert('กรุณากรอกนามสกุล');
					openCitynext('tabh1', 'tab1');
					document.getElementById('lastname_th').focus();
					return false;
				}else if(document.getElementById('title1_en').checked == false && document.getElementById('title2_en').checked == false && document.getElementById('title3_en').checked == false){
					alert('กรุณากรอกคำนำหน้า');
					openCitynext('tabh1', 'tab1');
					document.getElementById('title1_en').focus();
					return false;
				}else if(document.getElementById('name_en').value == ''){
					alert('กรุณากรอกชื่อ (อังกฤษ)');
					openCitynext('tabh1', 'tab1');
					document.getElementById('name_en').focus();
					return false;
				}else if(document.getElementById('lastname_en').value == ''){
					alert('กรุณากรอกนามสกุล (อังกฤษ)');
					openCitynext('tabh1', 'tab1');
					document.getElementById('lastname_en').focus();
					return false;
				}else if(document.getElementById('birth_date').value == ''){
					alert('กรุณากรอกวันเกิด ');
					openCitynext('tabh1', 'tab1');
					document.getElementById('birth_date').focus();
					return false;
				}else if(document.getElementById('birth_month').value == ''){
					alert('กรุณากรอกเดือนเกิด');
					openCitynext('tabh1', 'tab1');
					document.getElementById('birth_month').focus();
					return false;
				}else if(document.getElementById('birth_year').value == ''){
					alert('กรุณากรอกปีเกิด');
					openCitynext('tabh1', 'tab1');
					document.getElementById('birth_year').focus();
					return false;
				}else if(document.getElementById('blood_type').value == ''){
					alert('กรุณากรอกกรุ๊ปเลือด ');
					openCitynext('tabh1', 'tab1');
					document.getElementById('blood_type').focus();
					return false;
				}else if(document.getElementById('race').value == ''){
					alert('กรุณากรอกเชื้อชาติ ');
					openCitynext('tabh1', 'tab1');
					document.getElementById('race').focus();
					return false;
				}else if(document.getElementById('nationality').value == ''){
					alert('กรุณากรอกสัญชาติ ');
					openCitynext('tabh1', 'tab1');
					document.getElementById('nationality').focus();
					return false;
				}else if(document.getElementById('religion').value == ''){
					alert('กรุณากรอกศาสนา ');
					openCitynext('tabh1', 'tab1');
					document.getElementById('religion').focus();
					return false;
				}else if(document.getElementById('province').value == ''){
					alert('กรุณากรอกสถานที่เกิด ');
					openCitynext('tabh1', 'tab1');
					document.getElementById('province').focus();
					return false;
				}else if(document.getElementById('idcardno').value == ''){
					alert('กรุณากรอกเลขประจำตัวประชาชน ');
					openCitynext('tabh1', 'tab1');
					document.getElementById('idcardno').focus();
					return false;
				}else if(document.getElementById('exp_date').value == ''){
					alert('กรุณากรอกวันหมดอายุของบัตรประชาชน');
					openCitynext('tabh1', 'tab1');
					document.getElementById('exp_date').focus();
					return false;
				}else if(document.getElementById('exp_month').value == ''){
					alert('กรุณากรอกวันหมดอายุของบัตรประชาชน');
					openCitynext('tabh1', 'tab1');
					document.getElementById('exp_month').focus();
					return false;
				}else if(document.getElementById('exp_year').value == ''){
					alert('กรุณากรอกวันหมดอายุของบัตรประชาชน');
					openCitynext('tabh1', 'tab1');
					document.getElementById('exp_year').focus();
					return false;
				}else if(document.getElementById('military_status1').checked == false && document.getElementById('military_status5').checked == false &&  document.getElementById('military_status3').checked == false){
					alert('กรุณากรอกสถานภาพทางทหาร ');
					openCitynext('tabh1', 'tab1');
					document.getElementById('military_status1').focus();
					return false;
				}else if(document.getElementById('dad_name_th').value == ''){
					alert('กรุณากรอกชื่อ (บิดา)');
					openCitynext('tabh1', 'tab1');
					document.getElementById('dad_name_th').focus();
					return false;
				}else if(document.getElementById('dad_lastname_th').value == ''){
					alert('กรุณากรอกชื่อ (บิดา)');
					openCitynext('tabh1', 'tab1');
					document.getElementById('dad_lastname_th').focus();
					return false;
				}else if(document.getElementById('mom_name_th').value == ''){
					alert('กรุณากรอกชื่อ (มารดา)');
					openCitynext('tabh1', 'tab1');
					document.getElementById('mom_name_th').focus();
					return false;
				}else if(document.getElementById('mom_lastname_th').value == ''){
					alert('กรุณากรอกขื่อ (มารดา)');
					openCitynext('tabh1', 'tab1');
					document.getElementById('mom_lastname_th').focus();
					return false;
				}else if(document.getElementById('marital_status').value == ''){
					alert('กรุณากรอกสถานภาพการสมรส ');
					openCitynext('tabh1', 'tab1');
					document.getElementById('marital_status').focus();
					return false;
				}else if(document.getElementById('address').value == ''){
					alert('กรุณากรอกที่อยู่ปัจจุบัน ');
					openCitynext('tabh1', 'tab1');
					document.getElementById('address').focus();
					return false;
				}else if(document.getElementById('phonenumber').value == ''){
					alert('กรุณากรอกโทรศัพท์มือถือ ');
					openCitynext('tabh1', 'tab1');
					document.getElementById('phonenumber').focus();
					return false;
				}else if(document.getElementById('email').value == ''){
					alert('กรุณากรอกอีเมล ');
					openCitynext('tabh1', 'tab1');
					document.getElementById('email').focus();
					return false;
				}
				
				// tab 2
				
				if(document.getElementById('levelEducation').value == ''){
					alert('กรุณากรอกคุณวุฒิ ');
					openCitynext('tabh2', 'tab2');
					document.getElementById('levelEducation').focus();
					return false;
				}else if(document.getElementById('branch').value == ''){
					alert('กรุณากรอกข้อมูลสาขาวิชา');
					openCitynext('tabh2', 'tab2');
					document.getElementById('branch').focus();
					return false;
				}else if(document.getElementById('grade').value == ''){
					alert('กรุณากรอกข้อมูลเกรดเฉลี่ย ');
					openCitynext('tabh2', 'tab2');
					document.getElementById('grade').focus();
					return false;
				}else if(document.getElementById('schoolName').value == ''){
					alert('กรุณากรอกข้อมูลสถานศึกษา ');
					openCitynext('tabh2', 'tab2');
					document.getElementById('schoolName').focus();
					return false;
				}else if(document.getElementById('graduate').value == ''){
					alert('กรุณากรอกข้อมูลปีจบการศึกษา');
					openCitynext('tabh2', 'tab2');
					document.getElementById('graduate').focus();
					return false;
				}
				
				// tab 3
				
				if(document.getElementById('m_work1').checked == false && document.getElementById('m_work2').checked == false){
					alert('กรุณากรอกข้อมูลให้ครบด้วยครับ');
					openCitynext('tabh3', 'tab3');
					document.getElementById('m_work1').focus();
					return false;
				}
				/*if(document.getElementById('m_work1').checked == true){
					if(document.getElementById('m_divisionID').value == ''){
						alert('กรุณากรอกข้อมูลให้ครบด้วยครับ');
						openCitynext('tabh3', 'tab3');
						document.getElementById('m_divisionID').focus();
						return false;
					}else if(document.getElementById('m_type_personnel1').checked == false && document.getElementById('m_type_personnel2').checked == false && document.getElementById('m_type_personnel3').checked == false && document.getElementById('m_type_personnel4').checked == false){
						alert('กรุณากรอกข้อมูลให้ครบด้วยครับ');
						openCitynext('tabh3', 'tab3');
						document.getElementById('m_type_personnel1').focus();
						return false;
					}else if(document.getElementById('m_position').value == ''){
						alert('กรุณากรอกข้อมูลให้ครบด้วยครับ');
						openCitynext('tabh3', 'tab3');
						document.getElementById('m_position').focus();
						return false;
					}else if(document.getElementById('m_salary').value == ''){
						alert('กรุณากรอกข้อมูลให้ครบด้วยครับ');
						openCitynext('tabh3', 'tab3');
						document.getElementById('m_salary').focus();
						return false;
					}else if(document.getElementById('m_startDate_date').value == ''){
						alert('กรุณากรอกข้อมูลให้ครบด้วยครับ');
						openCitynext('tabh3', 'tab3');
						document.getElementById('m_startDate_date').focus();
						return false;
					}else if(document.getElementById('m_startDate_month').value == ''){
						alert('กรุณากรอกข้อมูลให้ครบด้วยครับ');
						openCitynext('tabh3', 'tab3');
						document.getElementById('m_startDate_month').focus();
						return false;
					}else if(document.getElementById('m_startDate_year').value == ''){
						alert('กรุณากรอกข้อมูลให้ครบด้วยครับ');
						openCitynext('tabh3', 'tab3');
						document.getElementById('m_startDate_year').focus();
						return false;
					}else if(document.getElementById('m_finishDate_date').value == ''){
						alert('กรุณากรอกข้อมูลให้ครบด้วยครับ');
						openCitynext('tabh3', 'tab3');
						document.getElementById('m_finishDate_date').focus();
						return false;
					}else if(document.getElementById('m_finishDate_month').value == ''){
						alert('กรุณากรอกข้อมูลให้ครบด้วยครับ');
						openCitynext('tabh3', 'tab3');
						document.getElementById('m_finishDate_month').focus();
						return false;
					}else if(document.getElementById('m_finishDate_year').value == ''){
						alert('กรุณากรอกข้อมูลให้ครบด้วยครับ');
						openCitynext('tabh3', 'tab3');
						document.getElementById('m_finishDate_year').focus();
						return false;
					}else if(document.getElementById('m_LeavingEXReason').value == ''){
						alert('กรุณากรอกข้อมูลให้ครบด้วยครับ');
						openCitynext('tabh3', 'tab3');
						document.getElementById('m_LeavingEXReason').focus();
						return false;
					}else if(document.getElementById('m_commutation1').checked == false && document.getElementById('m_commutation2').checked == false){
						alert('กรุณากรอกข้อมูลให้ครบด้วยครับ');
						openCitynext('tabh3', 'tab3');
						document.getElementById('m_commutation1').focus();
						return false;
					}
				}*/
				if(document.getElementById('n_has_worked1').checked == true){ 
					if(document.getElementById('n_companyName').value == ''){
						alert('กรุณากรอกสถานที่ทำงานด้วยครับ');
						openCitynext('tabh3', 'tab3');
						document.getElementById('n_companyName').focus();
						return false;
					}else if(document.getElementById('n_phoneWorking').value == ''){
						alert('กรุณากรอกข้อมูลเบอร์โทรศัพท์ที่ทำงาน');
						openCitynext('tabh3', 'tab3');
						document.getElementById('n_phoneWorking').focus();
						return false;
					}else if(document.getElementById('n_position').value == ''){
						alert('กรุณากรอกข้อมูลตำแหน่ง ');
						openCitynext('tabh3', 'tab3');
						document.getElementById('n_position').focus();
						return false;
					}else if(document.getElementById('n_salary').value == ''){
						alert('กรุณากรอกข้อมูลเงินเดือน ');
						openCitynext('tabh3', 'tab3');
						document.getElementById('n_salary').focus();
						return false;
					}else if(document.getElementById('n_startDate_date').value == ''){
						alert('กรุณากรอกข้อมูลระยะเวลาทำงาน');
						openCitynext('tabh3', 'tab3');
						document.getElementById('n_startDate_date').focus();
						return false;
					}else if(document.getElementById('n_startDate_month').value == ''){
						alert('กรุณากรอกข้อมูลระยะเวลาทำงาน');
						openCitynext('tabh3', 'tab3');
						document.getElementById('n_startDate_month').focus();
						return false;
					}else if(document.getElementById('n_startDate_year').value == ''){
						alert('กรุณากรอกข้อมูลระยะเวลาทำงาน');
						openCitynext('tabh3', 'tab3');
						document.getElementById('n_startDate_year').focus();
						return false;
					}
				}
				if(document.getElementById('n_has_worked2').checked == true){
					if(document.getElementById('n_period').value == ''){
						alert('กรุณากรอกระยะเวลาที่ว่างงานด้วยครับ');
						openCitynext('tabh3', 'tab3');
						document.getElementById('n_period').focus();
						return false;
					}else if(document.getElementById('n_LeavingEXReason').value == ''){
						alert('กรุณากรอกสาเหตุการว่างงานด้วยครับ');
						openCitynext('tabh3', 'tab3');
						document.getElementById('n_LeavingEXReason').focus();
						return false;
					}
				}
				
				// tab 5
				
				if(document.getElementById('typeSkillThai').value == ''){
					alert('กรุณากรอกข้อมูลพิมพ์ดีดไทย ');
					document.getElementById('typeSkillThai').focus();
					return false;
				}else if(document.getElementById('typeSkillEng').value == ''){
					alert('กรุณากรอกข้อมูลพิมพ์ดีดอังกฤษ ');
					document.getElementById('typeSkillEng').focus();
					return false;
				}else if(document.getElementById('speak_en1').checked == false && document.getElementById('speak_en2').checked == false&& document.getElementById('speak_en3').checked == false){
					alert('กรุณากรอกข้อมูลการพูดภาษาอังกฤษ ');
					document.getElementById('speak_en3').focus();
					return false;
				}else if(document.getElementById('read_en1').checked == false && document.getElementById('read_en2').checked == false&& document.getElementById('read_en3').checked == false){
					alert('กรุณากรอกข้อมูลการอ่านภาษาอังกฤษ');
					document.getElementById('read_en3').focus();
					return false;
				}else if(document.getElementById('write_en1').checked == false && document.getElementById('write_en2').checked == false&& document.getElementById('write_en3').checked == false){
					alert('กรุณากรอกข้อมูลการเขียนภาษาอังกฤษ');
					document.getElementById('write_en3').focus();
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
								ฝากประวัติ 
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									 e-Recruitment Online <span style="color:red;">(ระบบไม่รองรับการใช้งานด้วยโปรแกรม Internet Explorer)</span>
								</small> 
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
<script>alert('ขออภัยไม่พบข้อมูลผู้ใช้งานนี้ กรุณาติดต่อเจ้าหน้าที่'); window.location='https://muhr.mahidol.ac.th/E-Recruitment/user/index.php' </script></div></div></div></div></div></div></body></html>