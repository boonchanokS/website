<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        
    
        <title>e-Recruitment | SRT</title>

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets\css\bootstrap.min.css">
		<link rel="stylesheet" href="assets\font-awesome\4.2.0\css\font-awesome.min.css"> 
		<link href='../css.css?family=Kanit:300,600&subset=thai,latin' rel='stylesheet' type='text/css'>
		
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
		<script async="" src="..\gtag\js.js?id=UA-150641864-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-150641864-1');
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
					
					<a href="index.php"><img src="..\image\logomu4.png" width="193" height="45" alt=""></a>
					
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="light-blue">
							<a href="user/คู่มือแนะนำการสมัครงาน.pdf">
								<i class="ace-icon fa fa-file"></i>คู่มือแนะนำการสมัครงาน 
							</a>
						</li>
						<li class="light-blue">
                        	<a href="#">
								<i class="ace-icon fa fa-user"></i>คุณบุญชนก ศิริโส
							</a>
						</li>
						<li class="light-blue">
                        	<a href="../login/logout.php">
								<i class="ace-icon fa fa-sign-out"></i>ออกจากระบบ
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
					<li>					
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list red"></i>
							<span class="menu-text"> งานที่เปิดรับ </span>
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
								<a href="user_job\insertwork.php" target="_blank">
									<i class="menu-icon fa fa-caret-right"></i>
									<span class="menu-text"> เพิ่มตำแหน่งงาน </span>
								</a>

								<b class="arrow"></b>
							</li>
							<!--
							<li class="">
								<a href="#" target="_blank"> 
									<i class="menu-icon fa fa-caret-right"></i>
									<span class="menu-text"> Jobthai </span>
								</a>

								<b class="arrow"></b>
							</li>
								-->
						</ul>
					</li>
				
				<!--
					<li>
						<a href="user_job\insertwork.php">
							<i class="menu-icon fa fa-suitcase orange"></i>
							<span class="menu-text">เพิ่มตำแหน่งงาน </span>
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
									<span class="menu-text"> JobDB </span>
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
							<h1 class="textnalmal">
								รายชื่อผู้สมัครงาน
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									 e-Recruitment Online
								</small> 
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
    <div class="row" style="margin-left: 10px;">

		<div class="col-sm-12">
			<div class="tabbable">
			<br>
				<ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
					<li class="active">
						<a data-toggle="tab" href="#home4"><i class="fa fa-user" aria-hidden="true"></i>
รายชื่อผู้สมัครงาน</a>
					</li>
					<!--
					<li>
						<a data-toggle="tab" href="#profile4"><i class="fa fa-user" aria-hidden="true"></i>
ผู้มีสิทธิ์สอบข้อเขียนและสอบสัมภาษณ์</a>
					</li> 

					<li>
						<a data-toggle="tab" href="#dropdown14"><i class="fa fa-user" aria-hidden="true"></i>
รายชื่อผู้ได้รับการคัดเลือก</a>
					</li>
					-->
				</ul>

				<div class="tab-content">
					<div id="home4" class="tab-pane in active">
									<div class="clearfix">
				
			</div>
			<div class="widget-box widget-color-blue">  
				<div class="widget-header">
					<h3 class="widget-title bigger lighter textnalmal">
					
					
					
					Production Planning Control Officer					</h3> 
				</div>
			</div>

			<!-- div.table-responsive -->

			<!-- div.dataTables_borderWrap -->
			<div>
				<table id="dynamic-table" class="table table-striped table-bordered table-hover" >
					<thead>
						<tr>
							<th class="center"> ลำดับ </th>
							<th><i class="ace-icon fa fa-suitcase bigger-110 hidden-480 red"></i> ชื่อ-นามสกุล</th>
							<th class="hidden-480"><i class="ace-icon fa fa-user bigger-110 hidden-480 green"></i>  ที่อยู่</th>
							<th><i class="ace-icon fa fa-university bigger-110 hidden-480 blue"></i>สถาบันการศึกษา</th>
							
							<th class="hidden-480">
								<i class="ace-icon fa fa-clock-o bigger-110 hidden-480 orange"></i> เกรดเฉลี่ย							</th>
							<th>
								<i class="ace-icon fa fa-clock-o bigger-110 hidden-480 orange2"></i> วันที่สมัคร							</th>

							<th class="hidden-480"></th>
							<th class="hidden-480"></th>
							
						</tr>
					</thead>
					<tbody>
										
						<tr>
							<td class="center">
								1							
						</td>
						<td>
							<a href="user_job\view.php?id=3252">นายกิตติพงษ์ นามธรรม</a>
							</td>
						<td class="hidden-480 center">
								103/5 หมู่3 ต.หนองตาเสี่ียง อ.หนองละลอก จ.ระยอง 21120	
						</td> 
						<td>
							การจัดการทั่วไป <br> สถาบัน : มหาวิทยาลัยบูรพา
						</td>
						<td class="hidden-480 center">
								2.20							
							</td>
							<td class="center">
								10 กรกฎาคม 2563							
							</td>

							<td class="hidden-480">
								<div class="hidden-sm hidden-xs action-buttons">
									<a href="01256.pdf">
										<span class="blue">
											<i class="ace-icon fa fa-search-plus bigger-120"></i>
										</span>
										</a>
								</div>
								<div class="hidden-md hidden-lg">
									<div class="inline pos-rel">
										<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
											<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
										</button>

										<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
											<li>
												<a href="user\job\view.php?id=3252">
													<span class="blue">
														<i class="ace-icon fa fa-search-plus bigger-120"></i>
													</span>
													</a>
													</li>
										</ul>
									</div>
								</div>
							</td>
							<td class="hidden-480">
								<div class="hidden-sm hidden-xs action-buttons">
									<a href="user_job\view.php?id=3252">
										<span class="red">
											<i class="ace-icon fa fa-paper-plane bigger-120"></i>
										</span>
										</a>
								</div>
								<div class="hidden-md hidden-lg">
									<div class="inline pos-rel">
										<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
											<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
										</button>

										<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
											<li>
												<a href="user\job\view.php?id=3252">
													<span class="red">
														<i class="ace-icon fa fa-paper-plane bigger-120"></i>
													</span>
													</a>
											</li>
										</ul>
									</div>
								</div>
							</td>
							
						</tr>

					
										
						<tr>
							<td class="center">
								2							</td>
							<td>
								<a href="user\job\view-1.html?id=3251">นายแดง อินทาง</a>
							</td>
							<td class="hidden-480 center">
								120/5 อ.ปลวกแดง จ.ระยอง 21120							
							</td> 
							<td>
								การงานอาชีพ <br> สถาบัน : เทคนิคระยอง
							</td>
							
							<td class="hidden-480 center">
								2.00						</td>
							<td class="center">
								31 กรกฎาคม 2563							</td>

							<td class="hidden-480">
								<div class="hidden-sm hidden-xs action-buttons">
																			<a href="user\job\view-1.html?id=3251">
										<span class="blue">
											<i class="ace-icon fa fa-search-plus bigger-120"></i>
										</span>
										</a>
									
								</div>

								<div class="hidden-md hidden-lg">
									<div class="inline pos-rel">
										<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
											<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
										</button>

										<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
											<li>
												
																									<a href="user\job\view-1.html?id=3251">
													<span class="blue">
														<i class="ace-icon fa fa-search-plus bigger-120"></i>
													</span>
													</a>
													
																							</li>

										</ul>
									</div>
								</div>
							</td>
							<td class="hidden-480">
								<div class="hidden-sm hidden-xs action-buttons">
									<a href="user_job\view.php?id=3252">
										<span class="red">
											<i class="ace-icon fa fa-paper-plane bigger-120"></i>
										</span>
										</a>
								</div>
								<div class="hidden-md hidden-lg">
									<div class="inline pos-rel">
										<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
											<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
										</button>

										<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
											<li>
												<a href="user\job\view.php?id=3252">
													<span class="red">
														<i class="ace-icon fa fa-paper-plane bigger-120"></i>
													</span>
													</a>
											</li>
										</ul>
									</div>
								</div>
							</td>
							
						</tr>

					
										
						


								</tbody>
							</table>
						</div>					
					</div>
				</div>	
				
				
			</div>
		</div><!-- /.col -->
	</div><!-- /.row -->
   








	   

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

		<!-- basic scripts -->
		
		<!--[if !IE]> -->
		<script src="assets\js\jquery.2.1.1.min.js"></script> 

		<!-- <![endif]-->

		<!--[if IE]>
<script src="user/assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='user/assets/js/jquery.min.js'>"+"<"+"/script>");
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
		<script src="assets\js\jquery.dataTables.min.js"></script>
		<script src="assets\js\jquery.dataTables.bootstrap.min.js"></script>
		<script src="assets\js\dataTables.tableTools.min.js"></script>
		<script src="assets\js\dataTables.colVis.min.js"></script>

		<!-- ace scripts -->
		<script src="assets\js\ace-elements.min.js"></script>
		<script src="assets\js\ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				//initiate dataTables plugin
				var oTable1 = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.dataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null, null,null, null, null,
					  { "bSortable": false }
					],
					"aaSorting": [],
			
					//,
					//"sScrollY": "200px",
					//"bPaginate": false,
			
					//"sScrollX": "100%",
					//"sScrollXInner": "120%",
					//"bScrollCollapse": true,
					//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
					//you may want to wrap the table inside a "div.dataTables_borderWrap" element
			
					//"iDisplayLength": 50
			    } );
				//oTable1.fnAdjustColumnSizing();
			
			
				//TableTools settings
				TableTools.classes.container = "btn-group btn-overlap";
				TableTools.classes.print = {
					"body": "DTTT_Print",
					"info": "tableTools-alert gritter-item-wrapper gritter-info gritter-center white",
					"message": "tableTools-print-navbar"
				}
			
				//initiate TableTools extension
				var tableTools_obj = new $.fn.dataTable.TableTools( oTable1, {
					"sSwfPath": "assets/swf/copy_csv_xls_pdf.swf",
					
					"sRowSelector": "td:not(:last-child)",
					"sRowSelect": "multi",
					"fnRowSelected": function(row) {
						//check checkbox when row is selected
						try { $(row).find('input[type=checkbox]').get(0).checked = true }
						catch(e) {}
					},
					"fnRowDeselected": function(row) {
						//uncheck checkbox
						try { $(row).find('input[type=checkbox]').get(0).checked = false }
						catch(e) {}
					},
			
					"sSelectedClass": "success",
			        "aButtons": [
						
						
			        ]
			    } );
				//we put a container before our table and append TableTools element to it
			    $(tableTools_obj.fnContainer()).appendTo($('.tableTools-container'));
				
				//also add tooltips to table tools buttons
				//addding tooltips directly to "A" buttons results in buttons disappearing (weired! don't know why!)
				//so we add tooltips to the "DIV" child after it becomes inserted
				//flash objects inside table tools buttons are inserted with some delay (100ms) (for some reason)
				setTimeout(function() {
					$(tableTools_obj.fnContainer()).find('a.DTTT_button').each(function() {
						var div = $(this).find('> div');
						if(div.length > 0) div.tooltip({container: 'body'});
						else $(this).tooltip({container: 'body'});
					});
				}, 200);
				
				
				
				//ColVis extension
				var colvis = new $.fn.dataTable.ColVis( oTable1, {
					"buttonText": "<i class='fa fa-search'></i>",
					"aiExclude": [0, 6],
					"bShowAll": true,
					//"bRestore": true,
					"sAlign": "right",
					"fnLabel": function(i, title, th) {
						return $(th).text();//remove icons, etc
					}
					
				}); 
				
				//style it
				$(colvis.button()).addClass('btn-group').find('button').addClass('btn btn-white btn-info btn-bold')
				
				//and append it to our table tools btn-group, also add tooltip
				$(colvis.button())
				.prependTo('.tableTools-container .btn-group')
				.attr('title', 'Show/hide columns').tooltip({container: 'body'});
				
				//and make the list, buttons and checkboxed Ace-like
				$(colvis.dom.collection)
				.addClass('dropdown-menu dropdown-light dropdown-caret dropdown-caret-right')
				.find('li').wrapInner('<a href="javascript:void(0)" />') //'A' tag is required for better styling
				.find('input[type=checkbox]').addClass('ace').next().addClass('lbl padding-8');
			
			
				
			
				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				
				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			
			})
			
			
			//************** tab 2 ********************************
			jQuery(function($) {
				//initiate dataTables plugin
				var oTable1 = 
				$('#dynamic-table2')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.dataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null, null,null, null, null,
					  { "bSortable": false }
					],
					"aaSorting": [],
			
					//,
					//"sScrollY": "200px",
					//"bPaginate": false,
			
					//"sScrollX": "100%",
					//"sScrollXInner": "120%",
					//"bScrollCollapse": true,
					//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
					//you may want to wrap the table inside a "div.dataTables_borderWrap" element
			
					//"iDisplayLength": 50
			    } );
				//oTable1.fnAdjustColumnSizing();
			
			
				//TableTools settings
				TableTools.classes.container = "btn-group2 btn-overlap2";
				TableTools.classes.print = {
					"body": "DTTT_Print",
					"info": "tableTools-alert gritter-item-wrapper gritter-info gritter-center white",
					"message": "tableTools-print-navbar"
				}
			
				//initiate TableTools extension
				var tableTools_obj = new $.fn.dataTable.TableTools( oTable1, {
					"sSwfPath": "assets/swf/copy_csv_xls_pdf.swf",
					
					"sRowSelector": "td:not(:last-child)",
					"sRowSelect": "multi",
					"fnRowSelected": function(row) {
						//check checkbox when row is selected
						try { $(row).find('input[type=checkbox]').get(0).checked = true }
						catch(e) {}
					},
					"fnRowDeselected": function(row) {
						//uncheck checkbox
						try { $(row).find('input[type=checkbox]').get(0).checked = false }
						catch(e) {}
					},
			
					"sSelectedClass": "success",
			        "aButtons": [
						
						
			        ]
			    } );
				//we put a container before our table and append TableTools element to it
			    $(tableTools_obj.fnContainer()).appendTo($('.tableTools-container'));
				
				//also add tooltips to table tools buttons
				//addding tooltips directly to "A" buttons results in buttons disappearing (weired! don't know why!)
				//so we add tooltips to the "DIV" child after it becomes inserted
				//flash objects inside table tools buttons are inserted with some delay (100ms) (for some reason)
				setTimeout(function() {
					$(tableTools_obj.fnContainer()).find('a.DTTT_button').each(function() {
						var div = $(this).find('> div');
						if(div.length > 0) div.tooltip({container: 'body'});
						else $(this).tooltip({container: 'body'});
					});
				}, 200);
				
				
				
				//ColVis extension
				var colvis = new $.fn.dataTable.ColVis( oTable1, {
					"buttonText": "<i class='fa fa-search'></i>",
					"aiExclude": [0, 6],
					"bShowAll": true,
					//"bRestore": true,
					"sAlign": "right",
					"fnLabel": function(i, title, th) {
						return $(th).text();//remove icons, etc
					}
					
				}); 
				
				//style it
				$(colvis.button()).addClass('btn-group').find('button').addClass('btn btn-white btn-info btn-bold')
				
				//and append it to our table tools btn-group, also add tooltip
				$(colvis.button())
				.prependTo('.tableTools-container .btn-group')
				.attr('title', 'Show/hide columns').tooltip({container: 'body'});
				
				//and make the list, buttons and checkboxed Ace-like
				$(colvis.dom.collection)
				.addClass('dropdown-menu dropdown-light dropdown-caret dropdown-caret-right')
				.find('li').wrapInner('<a href="javascript:void(0)" />') //'A' tag is required for better styling
				.find('input[type=checkbox]').addClass('ace').next().addClass('lbl padding-8');
			
			
				
			
				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				
				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			
			})
			
			//**************** Tab3 *************************************
			
			jQuery(function($) {
				//initiate dataTables plugin
				var oTable1 = 
				$('#dynamic-table3')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.dataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null, null,null, null, null,
					  { "bSortable": false }
					],
					"aaSorting": [],
			
					//,
					//"sScrollY": "200px",
					//"bPaginate": false,
			
					//"sScrollX": "100%",
					//"sScrollXInner": "120%",
					//"bScrollCollapse": true,
					//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
					//you may want to wrap the table inside a "div.dataTables_borderWrap" element
			
					//"iDisplayLength": 50
			    } );
				//oTable1.fnAdjustColumnSizing();
			
			
				//TableTools settings
				TableTools.classes.container = "btn-group btn-overlap";
				TableTools.classes.print = {
					"body": "DTTT_Print",
					"info": "tableTools-alert gritter-item-wrapper gritter-info gritter-center white",
					"message": "tableTools-print-navbar"
				}
			
				//initiate TableTools extension
				var tableTools_obj = new $.fn.dataTable.TableTools( oTable1, {
					"sSwfPath": "assets/swf/copy_csv_xls_pdf.swf",
					
					"sRowSelector": "td:not(:last-child)",
					"sRowSelect": "multi",
					"fnRowSelected": function(row) {
						//check checkbox when row is selected
						try { $(row).find('input[type=checkbox]').get(0).checked = true }
						catch(e) {}
					},
					"fnRowDeselected": function(row) {
						//uncheck checkbox
						try { $(row).find('input[type=checkbox]').get(0).checked = false }
						catch(e) {}
					},
			
					"sSelectedClass": "success",
			        "aButtons": [
						
						
			        ]
			    } );
				//we put a container before our table and append TableTools element to it
			    $(tableTools_obj.fnContainer()).appendTo($('.tableTools-container'));
				
				//also add tooltips to table tools buttons
				//addding tooltips directly to "A" buttons results in buttons disappearing (weired! don't know why!)
				//so we add tooltips to the "DIV" child after it becomes inserted
				//flash objects inside table tools buttons are inserted with some delay (100ms) (for some reason)
				setTimeout(function() {
					$(tableTools_obj.fnContainer()).find('a.DTTT_button').each(function() {
						var div = $(this).find('> div');
						if(div.length > 0) div.tooltip({container: 'body'});
						else $(this).tooltip({container: 'body'});
					});
				}, 200);
				
				
				
				//ColVis extension
				var colvis = new $.fn.dataTable.ColVis( oTable1, {
					"buttonText": "<i class='fa fa-search'></i>",
					"aiExclude": [0, 6],
					"bShowAll": true,
					//"bRestore": true,
					"sAlign": "right",
					"fnLabel": function(i, title, th) {
						return $(th).text();//remove icons, etc
					}
					
				}); 
				
				//style it
				$(colvis.button()).addClass('btn-group').find('button').addClass('btn btn-white btn-info btn-bold')
				
				//and append it to our table tools btn-group, also add tooltip
				$(colvis.button())
				.prependTo('.tableTools-container .btn-group')
				.attr('title', 'Show/hide columns').tooltip({container: 'body'});
				
				//and make the list, buttons and checkboxed Ace-like
				$(colvis.dom.collection)
				.addClass('dropdown-menu dropdown-light dropdown-caret dropdown-caret-right')
				.find('li').wrapInner('<a href="javascript:void(0)" />') //'A' tag is required for better styling
				.find('input[type=checkbox]').addClass('ace').next().addClass('lbl padding-8');
			
			
				
			
				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				
				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			
			}) 
		</script>
	</body>
</html>