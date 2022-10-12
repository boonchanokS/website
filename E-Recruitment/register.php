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
		<link href='css.css?family=Kanit:300,600&subset=thai,latin' rel='stylesheet' type='text/css'>
		
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
		<script async="" src="gtag\js.js?id=UA-150641864-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-150641864-1');
		</script>		
		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets\css\bootstrap-duallistbox.min.css">
		<link rel="stylesheet" href="assets\css\bootstrap-multiselect.min.css">
		<link rel="stylesheet" href="assets\css\select2.min.css">


		<!-- ace styles -->
		<link rel="stylesheet" href="assets\css\ace.min.css" class="ace-main-stylesheet" id="main-ace-style">

		<script>
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
			
			function isEnglishchar(str){     
				var isEnglish=true;     
				if ( /[^A-Za-z0-9\.\_\-\@\d]/.test(str)) {  
					
					isEnglish=false;     
				}       
				return isEnglish;   
			}
	
			function checkBeforAccept() {
				
				
				if (document.regis.title.value=="") {
					alert('กรุณากรอกข้อมูลให้ครบ');
					document.regis.title1.focus() ;
					return false;
				}else if(document.regis.name.value=="") {
					alert("กรุณากรอกข้อมูลให้ครบด้วยครับ") ;
					document.regis.name.focus() ;
					return false;
				}else if(document.regis.lastname.value=="") {
					alert("กรุณากรอกข้อมูลให้ครบด้วยครับ") ;
					document.regis.lastname.focus() ;
					return false;
				}else if(document.regis.idcardno.value=="") {
					alert("กรุณากรอกข้อมูลให้ครบด้วยครับ") ;
					document.regis.idcardno.focus() ;
					return false;
				}else if(document.regis.pass.value=="") {
					alert("กรุณากรอกข้อมูลให้ครบด้วยครับ") ; 
					document.regis.pass.focus() ;
					return false;
				}else if(document.regis.repass.value=="") {
					alert("กรุณากรอกข้อมูลให้ครบด้วยครับ") ;
					document.regis.repass.focus() ;
					return false;
				}else if(document.regis.email.value=="") { 
					alert("กรุณากรอกข้อมูลให้ครบด้วยครับ") ;
					document.regis.email.focus() ;
					return false;
				}else if(!validateEmail(document.regis.email.value)){
					alert('กรุณากรอกอีเมลให้ถูกต้อง');
					document.regis.email.focus() ;
					return false;
				}else if(!isEnglishchar(document.regis.email.value)){
					alert('อีเมลไม่สามารถใช้ภาษาไทยได้ กรุณาตรวจสอบอีกครั้ง');
					document.regis.email.focus();
					return false;
				}else if(document.regis.position.value=="") {
					alert("กรุณากรอกข้อมูลให้ครบด้วยครับ") ;
					document.regis.position.focus() ;
					return false;
				}else if(!checkID(document.regis.idcardno.value)){
					alert('รหัสประชาชนไม่ถูกต้อง');
					document.regis.idcardno.focus() ;
					return false;
				}else if(document.regis.pass.value != "") {
					var a = isAlphanumeric( document.regis.pass.value );
					if (a == false){
						alert("กรุณากรอกรหัสผ่านเป็นภาษาอังกฤษและตัวเลขเท่านั้นครับ") ;
						document.regis.pass.focus() ;
						return false;
					}
					
				}else if(document.regis.pass.value != document.regis.repass.value) {
					alert("กรุณากรอก Password ให้เหมือนกันด้วยครับ") ;
					document.regis.repass.focus() ;
					return false;
				}else{
					return true;
					
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
					<a href="index.php"><img src="image\logomu4.png" width="193" height="45" alt=""></a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
					
						
						<li class="light-blue">
						
							<a href="handout.php">
								<i class="ace-icon fa fa-file"></i>คู่มือแนะนำการสมัครงาน 
							</a>
						
						</li>
					
						<li class="light-blue">
						
							
                        								<a href="login\login.php">
								<i class="ace-icon fa fa-user"></i>เข้าสู่ระบบ
							</a>

                            						</li>
						<li class="light-blue">
						
							<a href="index_en.php">
								<img src="image\eng.jpg" width="60%">
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
					
					<!--<li>					
						<a href="job.html">
							
							<i class="menu-icon fa fa-list red"></i>
							<span class="menu-text"> งานที่เปิดรับสมัคร </span>
							<b class="arrow fa fa-angle-down"></b> 
						</a>
					</li>

					<li>
						<a href="user\profile\register.html">
							<i class="menu-icon fa fa-suitcase orange"></i>
							<span class="menu-text">ระบบเพิ่มสมัครงาน </span>
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
								สมัครสมาชิก
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									 e-Recruitment Online
								</small> 
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
            <form class="form-horizontal" method="post" role="form" name="regis" id="regis" action="register_process.php" onsubmit="return checkBeforAccept();">
                        
                        	
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"> คำนำหน้า <span style="color:#F00"> *</span> </label> 
					<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="title" id="title1" value="นาย" checked="">นาย
					</label>
					
					<label class="radio-inline">
						<input type="radio" name="title" id="title3" value="นาง">นาง
					</label>
					
					<label class="radio-inline">
						<input type="radio" name="title" id="title2" value="นางสาว">นางสาว
					</label>
					</div>
				</div>

				<div class="form-group">
					
					<label class="col-sm-3 control-label no-padding-right"> ชื่อ <span style="color:#F00"> *</span></label> 
					<div class="col-sm-9">
					<input type="text" class="col-xs-10 col-sm-5" name="name" id="name">
					</div>
				</div>
				
				
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"> นามสกุล <span style="color:#F00"> *</span></label> 
					<div class="col-sm-9">
					<input type="text" class="col-xs-10 col-sm-5" name="lastname" id="lastname">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"> เลขประจำตัวประชาชน <span style="color:#F00"> *</span></label>
					<div class="col-sm-9">
					<input type="text" class="col-xs-10 col-sm-5" name="idcardno" id="idcardno" placeholder="(พิมพ์เลข 13 หลักไม่ต้องเว้นวรรค)">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"> รหัสผ่าน <span style="color:#F00"> *</span></label> 
					<div class="col-sm-9">
					<input type="password" class="col-xs-10 col-sm-5" name="pass" id="pass" placeholder="(ภาษาอังกฤษและตัวเลขเท่านั้น)">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"> ยืนยันรหัสผ่าน <span style="color:#F00"> *</span></label> 
					<div class="col-sm-9">
					<input type="password" class="col-xs-10 col-sm-5" name="repass" id="repass" placeholder="(ภาษาอังกฤษและตัวเลขเท่านั้น)">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"> อีเมล <span style="color:#F00"> *</span></label>
					<div class="col-sm-9">
					<input type="text" class="col-xs-10 col-sm-5" name="email" id="email" placeholder="abcdef@gmail.com">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"> ตำแหน่งงานที่สนใจ <span style="color:#F00"> *</span></label>
					<div class="col-sm-9">
					<select class="select2" name="position" id="position" data-placeholder="เลือก ...">   
						<option value="">&nbsp;</option>
						 
						<option value="1">Production Planning Control Officer</option> 
						 
						<option value="2">Engineer Factory Automation (IT Programmer)</option> 
						 
						<option value="3">Officer or Sr.Officer Accounting</option> 

						<option value="3">Staff OEM Sales</option> 
						 <option value="3"> Security Staff เจ้าหน้าที่ควบคุม ระบบรักษาความปลอดภัย</option> 
					</select> 
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right">  </label>
					<div class="col-sm-9">
					<label>
					<input name="accept" id="accept" type="checkbox" value="1" onchange="document.getElementById('bt_submit').disabled = !this.checked;" required="">
					<span class="lbl"> ข้าพเจ้ายอมรับ</span> <a href="rule.html" target="_blank">ข้อกำหนดและเงื่อนไขการสมัครสมาชิก </a>
					</label>
					</div>
				</div>
				
			
				
				<div class="clearfix form-actions">
				<div class="col-md-offset-3 col-md-9">
					<button class="btn btn-info" type="submit" id="bt_submit" disabled=""> 
						<i class="ace-icon fa fa-check bigger-110"></i>
						ลงทะเบียน
					</button>

					&nbsp; &nbsp; &nbsp;
					<button class="btn" type="reset">
						<i class="ace-icon fa fa-undo bigger-110"></i>
						ล้างข้อมูล
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
							<span class="blue bolder">Sumitomo Rubber Industries, Ltd.</span>
							 | e-Recruitment © 2020
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							
							<a href="MUHR.MAHIDOL\index.php" target="_blank">
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
		<!-- page specific plugin scripts -->
		<script src="assets\js\jquery.bootstrap-duallistbox.min.js"></script>
		<script src="assets\js\jquery.raty.min.js"></script>
		<script src="assets\js\bootstrap-multiselect.min.js"></script>
		<script src="assets\js\select2.min.js"></script>
		<script src="assets\js\typeahead.jquery.min.js"></script>
		<!--[if lte IE 8]> 
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="assets\js\jquery-ui.custom.min.js"></script>
		<script src="assets\js\jquery.ui.touch-punch.min.js"></script>
		<script src="assets\js\jquery.easypiechart.min.js"></script>
		<script src="assets\js\jquery.sparkline.min.js"></script>
		<script src="assets\js\jquery.flot.min.js"></script>
		<script src="assets\js\jquery.flot.pie.min.js"></script>
		<script src="assets\js\jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->
		<script src="assets\js\ace-elements.min.js"></script>
		<script src="assets\js\ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($){
			    var demo1 = $('select[name="duallistbox_demo1[]"]').bootstrapDualListbox({infoTextFiltered: '<span class="label label-purple label-lg">Filtered</span>'});
				var container1 = demo1.bootstrapDualListbox('getContainer');
				container1.find('.btn').addClass('btn-white btn-info btn-bold');
			
				/**var setRatingColors = function() {
					$(this).find('.star-on-png,.star-half-png').addClass('orange2').removeClass('grey');
					$(this).find('.star-off-png').removeClass('orange2').addClass('grey');
				}*/
				$('.rating').raty({
					'cancel' : true,
					'half': true,
					'starType' : 'i'
					/**,
					
					'click': function() {
						setRatingColors.call(this);
					},
					'mouseover': function() {
						setRatingColors.call(this);
					},
					'mouseout': function() {
						setRatingColors.call(this);
					}*/
				})//.find('i:not(.star-raty)').addClass('grey');
				
				
				
				//////////////////
				//select2
				$('.select2').css('width','350px').select2({allowClear:true})
				$('#select2-multiple-style .btn').on('click', function(e){
					var target = $(this).find('input[type=radio]');
					var which = parseInt(target.val());
					if(which == 2) $('.select2').addClass('tag-input-style');
					 else $('.select2').removeClass('tag-input-style');
				});
				
				//////////////////
				$('.multiselect').multiselect({
				 enableFiltering: true,
				 buttonClass: 'btn btn-white btn-primary',
				 templates: {
					button: '<button type="button" class="multiselect dropdown-toggle" data-toggle="dropdown"></button>',
					ul: '<ul class="multiselect-container dropdown-menu"></ul>',
					filter: '<li class="multiselect-item filter"><div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input class="form-control multiselect-search" type="text"></div></li>',
					filterClearBtn: '<span class="input-group-btn"><button class="btn btn-default btn-white btn-grey multiselect-clear-filter" type="button"><i class="fa fa-times-circle red2"></i></button></span>',
					li: '<li><a href="javascript:void(0);"><label></label></a></li>',
					divider: '<li class="multiselect-item divider"></li>',
					liGroup: '<li class="multiselect-item group"><label class="multiselect-group"></label></li>'
				 }
				});
				
				
				///////////////////
					
				//typeahead.js
				//example taken from plugin's page at: https://twitter.github.io/typeahead.js/examples/
				var substringMatcher = function(strs) {
					return function findMatches(q, cb) {
						var matches, substringRegex;
					 
						// an array that will be populated with substring matches
						matches = [];
					 
						// regex used to determine if a string contains the substring `q`
						substrRegex = new RegExp(q, 'i');
					 
						// iterate through the pool of strings and for any string that
						// contains the substring `q`, add it to the `matches` array
						$.each(strs, function(i, str) {
							if (substrRegex.test(str)) {
								// the typeahead jQuery plugin expects suggestions to a
								// JavaScript object, refer to typeahead docs for more info
								matches.push({ value: str });
							}
						});
			
						cb(matches);
					}
				 }
			
				 $('input.typeahead').typeahead({
					hint: true,
					highlight: true,
					minLength: 1
				 }, {
					name: 'states',
					displayKey: 'value',
					source: substringMatcher(ace.vars['US_STATES'])
				 });
					
					
				///////////////
				
				
				//in ajax mode, remove remaining elements before leaving page
				$(document).one('ajaxloadstart.page', function(e) {
					$('[class*=select2]').remove();
					$('select[name="duallistbox_demo1[]"]').bootstrapDualListbox('destroy');
					$('.rating').raty('destroy');
					$('.multiselect').multiselect('destroy');
				});
			
			});
		</script>
	</body>
</html>
