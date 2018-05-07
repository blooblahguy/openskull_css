<?php
	header('Content-Type: text/css');
	require_once 'scssphp/scss.inc.php';
	use Leafo\ScssPhp\Compiler;

	$scss = new Compiler();
	$scss->setImportPaths('');
	$scss->setSourceMap(Compiler::SOURCE_MAP_INLINE);
	$scss->setFormatter('Leafo\ScssPhp\Formatter\Compact');

	$data = $scss->compile('
		@import "_variables";
		@import "_reset";
		@import "_typography";
		@import "_helpers";
		@import "_ui";
		@import "_grid";
	');
	file_put_contents("openskull.css", $data);

	include("openskull.css");
?>