<?php

/**
 * 快速排序
 * @author syy
 * @DateTime  2019-11-08T14:34:24+0800
 * @param     [type]                   $array [description]
 * @return    [type]                          [description]
 */
function quickSort($array)
{
	if(sizeof($array) <= 0){
		return $array;
	}
	//无序入参，顺便取一个值
	$middle = $array[0];
	//左侧数组
	$left   = [];
	//右侧数组
	$right  = [];
	for ($i=1; $i < sizeof($array); $i++) { 
		if($array[$i] >= $middle) {
			$right[] = $array[$i];
		}else{
			$left[]  = $array[$i];
		}

	}

	$left  = quickSort($left);
	$right = quickSort($right);
	return array_merge($left, [$middle], $right);
}

var_dump(quickSort([2,212,35,12,435,23,66,232]));