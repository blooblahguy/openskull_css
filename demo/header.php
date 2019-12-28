<? header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-136145917-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-136145917-1');
	</script>

	<title>Openskull framework</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="/demo/prettify.min.css"/>
	<link rel="stylesheet" href="/dist/openskull.php"/>
</head>
<body id="body">
	<div class="wrapper">
		<div class="header_outer pad2 lg-pad0 bg-black fixed t w100">
			<div class="container">
				<div class="row md-content-center content-justify">
					<div class="os-min pad1">
						<a href="#intro" class="text-primary strong">Openskull</a>
					</div>
					<ul class="order-last bg-black os-12 os_menu os-md-min mobile_menu">
						<li><a href="#grid">Grid</a></li>
						<li><a href="#layout">Layout</a></li>
						<li><a href="#type">Typography</a></li>
						<li><a href="#forms">Forms</a></li>
						<li><a href="#tables">Tables</a></li>
						<li><a href="#colors">Colors</a></li>
						<li><a href="#elements">Elements</a></li>
					</ul>
					<? // doing both of these gives us javascript-less hamburger menus ?>
					<div class="os pad1">
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
				</div>
			</div>
			
			
		</div>
		
		<div class="main_content" style="padding-top: 48px">