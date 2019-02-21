<? header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Openskull framework</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="/demo/prettify.min.css"/>
	<link rel="stylesheet" href="/openskull.php"/>
</head>
<body id="body">
	<div class="wrapper">
		<div class="header_outer pad2 lg-pad0 text-right lg-text-left bg-black fixed t l r">
			<ul class="jump_nav bg-black container os_menu">
				<li><a href="#intro" class="text-primary">Openskull</a></li>
				<li><a href="#grid">Grid</a></li>
				<li><a href="#layout">Layout</a></li>
				<li><a href="#type">Typography</a></li>
				<li><a href="#forms">Forms</a></li>
				<li><a href="#tables">Tables</a></li>
				<li><a href="#colors">Colors</a></li>
				<li><a href="#elements">Elements</a></li>
			</ul>
			<? // doing both of these gives us javascript-less hamburger menus ?>
			<a href="#0" class="os_menu_button close">
				<span></span>
				<span></span>
			</a>
			<a href="#body" class="os_menu_button open">
				<span></span>
				<span></span>
				<span></span>
			</a>
		</div>
		
		<div class="main_content" style="padding-top: 48px">