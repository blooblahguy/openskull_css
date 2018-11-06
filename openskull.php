<?php
	header('Content-Type: text/css');
	require_once 'scssphp/scss.inc.php';
	use Leafo\ScssPhp\Compiler;

	error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

	$scss = new Compiler();
	$scss->setImportPaths('');
	// $scss->setSourceMap(Compiler::SOURCE_MAP_INLINE);
	$scss->setFormatter('Leafo\ScssPhp\Formatter\Compressed');
	// $scss->setFormatter('Leafo\ScssPhp\Formatter\Compact');

	$sheets = array();
	$sheets[] = "_variables.scss";
	$sheets[] = "openskull/_reset.scss";
	$sheets[] = "openskull/_colors.scss";
	$sheets[] = "openskull/_buttons.scss";
	$sheets[] = "openskull/_typography.scss";
	$sheets[] = "openskull/_helpers.scss";
	$sheets[] = "openskull/_borders.scss";
	$sheets[] = "openskull/_forms.scss";
	$sheets[] = "openskull/_ui.scss";
	$sheets[] = "openskull/_grid.scss";

	// cached updating
	$update = false;
	$cache_mod = filemtime("openskull.css");
	$this_mod = filemtime(__FILE__);
	foreach ($sheets as $sheet) {
		if (filemtime($sheet) > $cache_mod || $this_mod > $cache_mod) {
			$update = true;
			break;
		}
	}
	if ($update) {
		$data = $scss->compile("@import \"".ltrim(implode("\";\n@import \"",$sheets),"\";\n")."\";");
		file_put_contents("openskull.css", $data);
	}

	include("openskull.css");
?>