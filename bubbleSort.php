<?php

/**
 * 冒泡排序
 * @author syy
 * @DateTime  2019-11-08T13:58:38+0800
 * @param     [type]                   $array [description]
 * @return    [type]                          [description]
 */
function bubbleSort($array)
{
	for ($i=0; $i < sizeof($array); $i++) { 
		
		for ($j=0; $j < sizeof($array); $j++) { 
			$temp = $array[$i];
			if($array[$i] < $array[$j]) {
				$array[$i] = $array[$j];
				$array[$j] = $temp;
			}
		}
	}
	return $array;
}

var_dump(bubbleSort([6,2,12,56,23,67]));


function maopao($arr){

    $len = count($arr); 

    for($k=0;$k<=$len;$k++)

    {

        for($j=$len-1;$j>$k;$j--){

          if($arr[$j]<$arr[$j-1]){

            $temp = $arr[$j];

            $arr[$j] = $arr[$j-1];

            $arr[$j-1] = $temp;

          }

        }

    }

    return $arr;

}