<?php 
if (!function_exists('excerpt')) {
	function excerpt($str, $limit=20) 
	{
		return preg_replace('/((\w+\W*){'. $limit .'}(\w+))(.*)/', '${1}', $str);
	}
}