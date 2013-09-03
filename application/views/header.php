<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>{app_name} :: Impressions</title>
<link rel="stylesheet" href="<?php echo site_url('/css/bootstrap.min.css') ?>" />
<link rel="stylesheet" href="<?php echo site_url('/css/bootstrap-theme.min.css') ?>" />
<style>
body {
	padding-top: 70px;
	padding-bottom: 50px;
}

.half-center{
	width: 50%;
	margin-left: 25%;
}
.full-center{
	width: 100%;
	text-align: center;
}
</style>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <a class="navbar-brand" href="<?php echo site_url('/'); ?>">{app_name}</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
  
  <a href="<?php echo site_url('/session/login')?>" 
  	class="btn btn-default navbar-btn pull-right">Sign In</a>
  </div>
</nav>
