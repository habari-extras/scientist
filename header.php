<!DOCTYPE html>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	
	<title><?php echo $title; ?></title>
	
	<?php echo $theme->header(); ?>
	
</head>
<body class="<?php echo Utils::slugify($page_title); ?>">
	
	<header>
		<h3 id="owner"><a href="<?php echo $owner['url']; ?>" rel="me"><?php echo $owner['name']; ?></a></h3>
		
		<h2 id="site"><a href="<?php echo Site::get_url('habari'); ?>"><?php echo Options::get('title'); ?></a></h2>

	</header>
	
	<div id="primary">
		<h1 id="page"><?php echo $page_title; ?></h1>