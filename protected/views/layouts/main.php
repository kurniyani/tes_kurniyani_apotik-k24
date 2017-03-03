<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Informasi K-24</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<meta charset="utf-8">
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> 
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> 
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/ionicons.min.css" rel="stylesheet" type="text/css" /> 
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/AdminLTE.min.css" rel="stylesheet" type="text/css" /> 
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css" /> 	
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery-ui.css" rel="stylesheet" type="text/css"/>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-2.1.3.min.js" type="text/javascript"></script> 
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js" type="text/javascript"></script> 
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.cookie.js" type="text/javascript"></script> 
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/app.min.js" type="text/javascript"></script> 
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/fastclick.min.js" type="text/javascript"></script> 
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/Chart.min.js" type="text/javascript"></script> 
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/notify.min.js" type="text/javascript"></script> 
	
	<style type="text/css">
		.ratakanan{
			text-align: right;
		}
		.ratatengah{
			text-align: center;
		}
		.ratakiri{
			text-align: center;
		}
		.star-on{
			width:24px;
		    height:16px;
		    line-height:16px;
		    padding:1px 22px 1px 0; /* 1px FireFox fix */
		    background:url(<?php echo Yii::app()->request->baseUrl; ?>/stars.png) no-repeat -22px 0;
		}
		.star-off{
			width:24px;
		    height:16px;
		    line-height:16px;
		    padding:1px 22px 1px 0; /* 1px FireFox fix */
		    background:url(<?php echo Yii::app()->request->baseUrl; ?>/stars.png) no-repeat -0px 0;
		}
		.adminlevel{
			text-align: center;
		}
		.navbar-nav > .user-menu > .dropdown-menu > li.user-header {
			height: 190px;
		}
			table {
		table-layout: fixed;
	   word-break: break-all;
	   word-wrap: break-word;
		}
		.break-word {
			word-break: break-word; 
		}
	</style>
  </head>
  <body class="skin-blue">
    <div class="wrapper">
			<header class="main-header">
				<a href="#" class="logo">Apotik K-24</a>
				<nav class="navbar navbar-static-top" role="navigation">
					<!-- Sidebar toggle button-->
					<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
						<span class="sr-only">Toggle navigation</span>
					</a>
					<!-- Navbar Right Menu -->
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							<!-- User Account Menu -->
							<li class="dropdown user user-menu">
								<!-- Menu Toggle Button -->
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<!-- The user image in the navbar-->
									<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/avatar3.png" class="user-image imageprofile" alt="User Image"/>
									<!-- hidden-xs hides the username on small devices so only the image appears. -->
									<span class="hidden-xs">Admin K-24</span>
								</a>
								<ul class="dropdown-menu">
									<!-- The user image in the menu -->
									<li class="user-header">
										<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/avatar3.png" class="img-circle imageprofile" alt="User Image" />
										<p>
											<span class="Session_NamaAdmin">Admin</span>

											<small>Apotik K-24</small>
										</p>
									</li>
									<!-- Menu Footer-->
									<li class="user-footer">
										<div class="pull-right">
											<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/logout" class="btn btn-primary btn-flat">Sign out</a>
										</div>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
			</header>
		
			<aside class="main-sidebar">
				<section class="sidebar">
					<div class="user-panel">
						<div class="pull-left image">
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/avatar3.png" class="img-circle imageprofile" alt="User Image" />
						</div>
						<div class="pull-left info">
							<p><span class="Session_NamaAdmin">Admin K-24</span></p>
							<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
						</div>
					</div>
					<ul class="sidebar-menu">
						<li class="header" id="MG-Home"><i class="fa fa-home"></i> <span>HOME</span></li>
						<li class="treeview" id="MG-Data">
							<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/member/allmember"><i class="fa fa-list-alt"></i> <span>Pendaftaran Member</span></a>
							<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/user/alluser"><i class="fa fa-list-alt"></i> <span>Login User</span></a>
						</li>
						
					</ul>
				</section>
			</aside>


			<div class="content-wrapper">
				<section class="content-header">
					<h1>INFO Apotik K-24 <small>Member Dan User</small></h1>
					<ol class="breadcrumb">
						<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
						<li class="active">Info K-24</li>
					</ol>
				</section>
				<section class="content">

					<?php echo $content; ?>


				</section><!-- /.content -->
			</div>
			<footer class="main-footer">
				<div class="pull-right hidden-xs">Anything you want</div>
				<strong>Copyright &copy; 2017 <a href="#">Apotik K-24</a>.</strong> All rights reserved.
			</footer>
	</div><!-- ./wrapper -->


	
  </body>
</html>