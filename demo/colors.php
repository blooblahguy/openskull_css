<div class="bg-black pady2">
	<div class="container">
		<h1>Colors</h1>
		<p class="text-muted">Brands tend to take their colors seriously. You can modify every scss variable or just use the helpers to get your desired colors. The colors can all be modified in the _variables.scss and they will update for the whole system.</p>
	</div>
</div>
<div class="section">
	<div class="container">
		<p>Now that we're through all of the layouts and typography, It's important to understand how to theme and use the colors in this library.</p>
		<h3>Default Colors</h3>
		<? 
		$colors = array(); 
		$colors[] = "primary";
		$colors[] = "secondary";
		$colors[] = "grey";
		$colors[] = "black";
		$colors[] = "success";
		$colors[] = "info";
		$colors[] = "warning";
		$colors[] = "error";
		?>
		<ul class="row g1 nolist pad0">
			<? foreach ($colors as $color) { ?>
				<div class="os-md-4 os-6">
					<li class="pad1 bg-<? echo $color; ?>">$<? echo $color; ?></li>
				</div>
			<? } ?>
		</ul>
		<h3>Color Classes</h3>
		<p>Once you know the colors, you can prefix any of them with a helper class to modify your content. For instance with <kbd>-primary</kbd>:</p>
			<div class="message-info"><kbd>.message-[color]</kbd> Creates a message display for the text</div>
			<div class="pad2 margb1 padl4"><kbd>.text-[color]</kbd> Changes the <span class="text-primary">color of the text</span></div>
			<div class="pad2 margb1 padl4"><kbd>.bg-[color]</kbd> Changes the <span class="bg-primary">background of the text</span></div>
			<div class="pad2 margb1 padl4"><kbd>.btn</kbd> Creates the <a href="#0" class="btn">Default Button</a> but <kbd>.btn-[color]</kbd> Creates a <a href="#0" class="btn-primary">Styled Button</a></div>
			<div class="pad2 margb1 padl4 bord bord-primary"><kbd>.bord</kbd> Creates a grey border but <kbd>.bord-[color]</kbd> creates / changes that border color.</div>

		<h3>Customizing</h3>
		<p>Generally the colors should be able to be left alone, with most developers only changing <kbd>$primary</kbd> to their brand primary, and <kbd>$secondary</kbd> to their brands secondary.</p>
		<p>From there you may opt to tweak the <kbd>$white</kbd> and <kbd>$black</kbd> to meet your needs. </p>
		<p class="message-warning">It's generally recommended you leave the <kbd>$success</kbd>, <kbd>$info</kbd>, <kbd>$warning</kbd>, and <kbd>$error</kbd> colors at their defaults for a consistent user experience.</p>
	</div>
</div>