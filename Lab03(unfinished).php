<?php
	header('Access-Control_allow-Origin: *', false);
	
	function getParameter ($var) {
		if (isset ($_GET [$var])) {
			return $_GET[$var];
		}
		
		if (isset ($_POST [$var])) {
			return $_POST [$var];
		}
	}
	
	$NoNumbers = getparameter ("NoNumbers");
	$MinValue = getParameters ("MinValue");
	$MaxValue = getParameter ("MaxValue");
	
	$cl = 'python r2.py';
	