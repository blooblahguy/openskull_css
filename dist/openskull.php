<?php
	header('Content-Type: text/css');
	ini_set("display_errors", 1);
	error_reporting(E_ALL);

	$out_file = "openskull.min.css";

	$sheets = array();
	$sheets[] = "../openskull/_functions.scss";
	$sheets[] = "../openskull/_variables.scss";
	$sheets[] = "../openskull/_reset.scss";
	$sheets[] = "../openskull/_colors.scss";
	$sheets[] = "../openskull/_buttons.scss";
	$sheets[] = "../openskull/_typography.scss";
	$sheets[] = "../openskull/_helpers.scss";
	$sheets[] = "../openskull/_forms.scss";
	$sheets[] = "../openskull/_ui.scss";
	$sheets[] = "../openskull/_grid.scss";
	$sheets[] = "../openskull/style.scss";

	require "build.php";
?>