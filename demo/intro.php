<div class="section padt0">
	<div class="bg-black pady4">
		<div class="container">
			<h1 class="text-center"><strong>Openskull CSS Framework</strong></h1>
			<h2 class="text-center margb4">You shouldn't have to fight against your CSS framework.</h2>
			<hr>
			<p>Openskull.css is a small, flexbox, mobile first, and rem based CSS library that aims to make web development fast and easy.</p>
			<p>Many popular CSS frameworks apply borders, font styles, border-radius, shadows, and more to their classes. This looks more pleasant out of the box, but it costs time and frustration when developers have to spend time "unstyling" the element.</p>
			<p>Instead, this framework is a collection of <strong>good defaults</strong> and <strong>helper classes</strong> that you can combine to get your desired style while minimizing the amount of CSS you need to <em>unwrite</em>. This can help save a lot of time in development. </p>

			<hr>
			<div class="row g1 content-middle margb1">
				<div class="os-md-3 os-12 text-center">
					<div class="row">
						<div class="os-12 padb1"><a href="https://github.com/blooblahguy/openskull_css" target="_blank" class="display-block btn-secondary">View on Github</a></div>
						<div class="os-12"><a href="/openskull.min.css" download class="display-block btn-primary">Download .css <small class="em muted"><? echo number_format(filesize("./openskull.min.css") / 1024, 1)."kb"; ?></small></a></div>
						<!-- <div class="os-12"><a href="/openskull.js" download class="display-block btn-secondary">Download JS</a></div> -->
					</div>
				</div>
				<div class="os">
					<p>This framework strives to set itself apart by being more lightweight than its alternatives without sacrificing useful functionality. Openskull.css tries to follow some of the standards that major libraries such as bootstrap have set forward, and developers who've used them will find openskull.css familiar.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container padt2">
		<h2>Using Openskull</h2>
		<p>Being an SCSS library you can either embed it without variable control with the minified .css file, or you can implement it using a SCSS generator and have full control over the library.</p>
		<h3>Plain CSS</h3>
		<pre><code><?= htmlentities('<link rel="stylesheet" href="openskull.min.css">'); ?></code></pre>

		<h3>SCSS</h3>
		<pre><code>
			@include openskull/_functions.scss;
			@include _variables.scss;
			@include openskull/_reset.scss;
			@include openskull/_colors.scss;
			@include openskull/_buttons.scss;
			@include openskull/_typography.scss;
			@include openskull/_helpers.scss;
			@include openskull/_forms.scss;
			@include openskull/_ui.scss;
			@include openskull/_grid.scss;
		</code></pre>

		<h3>Caching</h3>
		<p>The web should be fast, follow <a href="https://www.nngroup.com/articles/response-times-3-important-limits/" target="_blank">the 100ms rule</a>. If you automatically parse SCSS in your PHP app, you could do something like the following:</p>
		<pre><code>
			$out_file = "openskull.min.css";

			$sheets = array();
			$sheets[] = "openskull/_functions.scss";
			$sheets[] = "_variables.scss";
			$sheets[] = "openskull/_reset.scss";
			$sheets[] = "openskull/_colors.scss";
			$sheets[] = "openskull/_buttons.scss";
			$sheets[] = "openskull/_typography.scss";
			$sheets[] = "openskull/_helpers.scss";
			$sheets[] = "openskull/_forms.scss";
			$sheets[] = "openskull/_ui.scss";
			$sheets[] = "openskull/_grid.scss";
			$sheets[] = "style.scss";

			// DONT EDIT BELOW
			header('Content-Type: text/css');
			ini_set("display_errors", 1);

			// ONLY UPDATE IF CHANGED
			$update = false;
			$this_mod = filemtime(__FILE__);
			$cache_mod = filemtime($out_file);
			if (! $cache_mod) {
				$fh = fopen($out_file, 'w');
				$cache_mod = filemtime($out_file);
			}
			foreach ($sheets as $sheet) {
				if (filemtime($sheet) > $cache_mod || $this_mod > $cache_mod) {
					$update = true;
					break;
				}
			}

			if ($update) {
				require_once('scssphp/scss.inc.php');

				$scss = new Leafo\ScssPhp\Compiler();
				$scss->setImportPaths('');

				ob_start();
				foreach($sheets as $s) {
					require_once($s);
				}
				$css_all = ob_get_contents();
				ob_end_clean();

				$scss->setFormatter('Leafo\ScssPhp\Formatter\Compressed'); // minify
				$data = $scss->compile($css_all);
				file_put_contents($out_file, $data);
			}

			include($out_file);
		</code></pre>
	</div>
</div>