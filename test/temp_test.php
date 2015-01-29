<?php

/**
 * 测试multi_array_sort
 */
	include ('mylib\ArrayHelper.php');
	$tags[]=array("rank"=>1,"name"=>'zhang');
	$tags[]=array("rank"=>2,"name"=>'sa');
	$tags[]=array("rank"=>3,"name"=>'sx');
	$arr=ArrayHelper::multi_array_sort($tags, 'rank');
	print_r($arr);



