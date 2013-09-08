<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>{app_name} :: Impressions</title>
<link rel="stylesheet" href="<?php echo site_url('/css/bootstrap.min.css') ?>" />
<link rel="stylesheet" href="<?php echo site_url('/css/smoothness/jquery-ui-1.10.3.custom.min.css')?>"/>
<link rel="stylesheet" href="<?php echo site_url('/css/impressions.css')?>" />
<script src="<?php echo site_url('/js/jquery-1.9.1.js') ?>"></script>
<script src="<?php echo site_url('/js/jquery.uploadify.min.js') ?>"></script>
<script src="<?php echo site_url('/js/jquery-ui-1.10.3.custom.min.js') ?>"></script>
<script src="<?php echo site_url('/js/jquery.validate.min.js') ?>"></script>
<script src="<?php echo site_url('/js/bootstrap.min.js') ?>"></script>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
	<div class="navbar-header">
   		<a class="navbar-brand" href="<?php echo site_url('/'); ?>">{app_name}</a>
	</div>
   		<ul class="nav navbar-nav">
   			<li class="{galleries_active}"><a href="<?php echo site_url('/gallery') ?>">Galleries</a></li>
   			<li class="{myprofile_active}"><a href="<?php echo site_url('/profile') ?>">My Profile</a></li>
   		</ul>
   	 <?php if($this->session->userdata('logged_in')): ?>
   	 <a href="<?php echo site_url('/session/logout') ?>" class="btn btn-default navbar-btn pull-right">Sign Out</a>
   	 <p class="navbar-text pull-right">Welcome, {username}</p>
   	 <?php else: ?>
	  <a href="<?php echo site_url('/session/login')?>" class="btn btn-default navbar-btn pull-right">Sign In</a>
	  <?php endif; ?>
</nav>
