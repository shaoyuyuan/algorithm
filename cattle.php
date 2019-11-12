<?php

/**
 * 有一母牛，到4岁可生育，每年一头，所生均是一样的母牛，到15岁绝育，不再能生，20岁死亡，问n年后有多少头牛。
 * @author syy
 * @DateTime  2019-11-08T11:59:45+0800
 * @param     [type]                   $year [description]
 * @return    [type]                         [description]
 */
function cattle($year)
{
	//第一年
	$i = 1;
	//年龄为1的牛
	$array = [1];
	while ( $i <= $year) {
		foreach ($array as $k => $val) {
			$newAge = $val + 1;
			//牛增加一岁
			$array[$k] = $newAge;
			//生一头母牛
			if($val >= 4 && $val < 15) {
				//到15岁绝育，不再能生
				array_push($array, 1);
			}
			//20岁死亡
			if($val == 20) {
				unset($array[$k]);
			}
		}
		$i++;
	}

	return sizeof($array);
}

var_dump(cattle(20));

//其他解答
function niu($y){

    static $num= 1;                 //定义静态变量;初始化牛的数量为1

    for ($i=1; $i <=$y ; $i++) {     

        if($i>=4 && $i<15){         //每年递增来算，4岁开始+1，15岁不能生育

        	$num++;
        	
            niu($y-$i);             //递归方法计算小牛$num，小牛生长年数为$y-$i
        }else if($i==20){           

        	$num--;                          //20岁死亡减一
        }
	}
    return $num;
}

var_dump(niu(20));