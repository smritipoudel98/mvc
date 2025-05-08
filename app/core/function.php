<?php
function show($stu)
{
	echo "<pre>";
	print_r($stu);
	echo "</pre>";
}
function esc($str)
{
	return htmlspecialchars($str);
}