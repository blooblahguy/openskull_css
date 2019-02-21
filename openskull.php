<?php
	// EDIT THESE
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
	error_reporting(E_ALL);

	// cached updating, check's the changetime on the included $sheets
	$update = false;
	$cache_mod = filemtime($out_file);
	if (! $cache_mod) {
		$fh = fopen($out_file, 'w');
	}
	$this_mod = filemtime(__FILE__);
	foreach ($sheets as $sheet) {
		if (filemtime($sheet) > $cache_mod || $this_mod > $cache_mod) {
			$update = true;
			break;
		}
	}

	use Leafo\ScssPhp\Compiler;
	if ($update) {
		require_once('scssphp/scss.inc.php');

		$scss = new Compiler();
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
?>