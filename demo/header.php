<?
$favicon = "data:image/png;base64,";
$favicon .= "iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAK6wAACusBgosNWgAAABZ0RVh0Q3JlYXRpb24gVGltZQAwMS8yMy8xNiCnhC4AAAAcdEVYdFNvZnR3YXJlAEFkb2JlIEZpcmV3b3JrcyBDUzbovLKMAAACZ0lEQVRIib2XTWgUMRTHfy0VVBAUFQ8WhIJKbaMBRVhdtCIoKPSmgpfgzaMHUfzAKoJYd/HgpYgoBvyAHrwJBRELFimiEs1BvCz25qGKliqI1elhMnScTmZ3p519EObl/V/mR5K3mWxbEATkNS3kBmCpsuZTs2Pbc1NDOwWU8wzMDdZCrnXgPS0FA5fds6yFbGsJWAvZBZx03S5gS0vAwLXE2P2Fg7WQvcCxRPhg4WDgekqspIVcVhhYC7kTOJwirQL6CgOTPtvI1hUC1kKWgX0euQY8LAQM3MjQLipr/iw6WAt5CCh5ZKuseezy+hcVDAxmaOcctBu412h11wVrIY8CvR75rbLmqfOvAKuBngWD3Rl8NSMlmu1W4IiL7V0wGDgBbPJoL5U1z5xficUbOj69YC1kB+Hy+ey0y9sFHIjFS1rIFbnBgAI6PdqIsua185OFt5Jwr5sHayE7gTMZ4866vD7m30AeKWs+5wID5/Hv7bCy5oPzKwltBrhQD5oFHga+p8T/MlfJ/cCOhH63kdl6wcqaUeBjivRAWVNzh0Tyg/GbuetQXevI0Mb4/5icAQacvx7oTuQPKWu+aCE3A8cJV+yOsmY67eVZVf080b+trJlwfs21yKaBAS1kD/AOuATcBEa0kGuaBY8Dv5z/k9gyKmv+AaOx3IqyZoqw2pfH4rvxfMO9YGXND+CN61aVNZOJlGhFJoGq89O2bklTYGdjhHtbTdFeueegsiZamVtA/D/Re8Kf5jzLKi6AF8A3T4FMAE+AoSigrBnXQm4nvIVOEdbF19Q3B0Hgbfd7t7XX0Tdm6VltFjtf+JlxpZ4PAAAAAElFTkSuQmCC";
?>
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

	<link rel="shortcut icon" href="<?= $favicon; ?>" type="image/x-icon" />
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