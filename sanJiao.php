<?php

/**
 * 杨辉三角
 * @author syy
 * @DateTime  2019-11-08T12:00:04+0800
 * @param     [type]                   $num [description]
 * @return    [type]                        [description]
 */
function sanJiao($num) {
	//整理数组
	$array = [];
	//行
	for ($i=0; $i < $num; $i++) {
		//列
		for ($x=0; $x < $i+1; $x++) {
			//每一列的第一位和最后一位都为1
			if(isset($array[$i-1][$x-1]) && isset($array[$i-1][$x])) {
				$array[$i][$x] = $array[$i-1][$x-1] + $array[$i-1][$x];
			}else{
				$array[$i][$x] = 1;
			}
		}
	}
	//打印杨辉三角
	
	for ($i=0; $i < $num; $i++) {
		//列
		for ($x=0; $x < $i+1; $x++) {
			//每一列的第一位和最后一位都为1
			if(isset($array[$i-1][$x-1]) && isset($array[$i-1][$x])) {
				$array[$i][$x] = $array[$i-1][$x-1] + $array[$i-1][$x];

				echo "&nbsp;";
			}elseif($x == 0) {
				//第一列
				$array[$i][$x] = 1;
				$y = 0;
				$j = $num - $i;
				while ( $y <= $j) {
					echo "&nbsp;";
					$y++;
				}
			}else{
				$array[$i][$x] = 1;
				echo "&nbsp;";

			}
			echo $array[$i][$x] . "&nbsp;";
					
		}
		echo "<br />";
	}
}

sanJiao(7);



/* 默认输出十行，用T(值)的形式可改变输出行数 */
class sanjiao{
  private $num;
  public function __construct($var=7) {
    if ($var<3) die("值太小啦！");
    $this->num=$var;
  }
  public function display(){
    $n=$this->num;
    $arr=array();
  //$arr=array_fill(0,$n+1,array_fill(0,$n+1,0));
    $arr[1]=array_fill(0,3,0);
    $arr[1][1]=1;
    echo str_pad("&nbsp;",$n*12,"&nbsp;");
    printf("%3d",$arr[1][1]);
    echo "<br/>";
    for($i=2;$i<=$n;$i++){
      $arr[$i]=array_fill(0,($i+2),0);
      for($j=1;$j<=$i;$j++){
        if($j==1)
          echo str_pad("&nbsp;",($n+1-$i)*12,"&nbsp;");
        printf("%3d",$arr[$i][$j]=$arr[$i-1][$j-1]+$arr[$i-1][$j]);
        echo "&nbsp;&nbsp;";
      }
      echo"<br/>";
    }
  }
}
$yh=new sanjiao(); //$yh=new T(数量);
$yh->display();