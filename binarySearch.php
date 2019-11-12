<?php

/**
 * 二分查找法
 * @author syy
 * @DateTime  2019-11-11T14:11:55+0800
 * @param     [array]                   $array  [目标数组]
 * @param     [int]                   $search [查找值]
 * @return    [type]                           [description]
 */
function binarySearch($array, $search)
{
	//左侧
	$left = 0;
	//右侧
	$right = sizeof($array);

	while ($left < $right) {
		//中间值
		$mid = intval(($left + $right)/2);

		if ($array[$mid] > $search) {

			$right = $mid - 1;

		} elseif ($array[$mid] < $search) {

			$left = $mid + 1;

		} else {

			return $mid;

		}

	}

	return false;
}

$array = [3, 24, 45, 65, 345, 644, 3456, 6534, 6535, 7641, 7834];
var_dump(binarySearch($array, 7834));
/*
function binsearch($x,$a){

    $c=count($a);

    $lower=0;

    $high=$c-1;

    while($lower<=$high){

        $middle=intval(($lower+$high)/2);

        if($a[$middle]>$x){

            $high=$middle-1;

        } elseif($a[$middle]<$x){

            $lower=$middle+1;

        } else{

            return $middle;

        }

    }

    return false;

}

$array = [3, 24, 45, 65, 345, 644, 3456, 6534, 6535, 7641, 7834];
var_dump(binsearch(3456,$array));*/