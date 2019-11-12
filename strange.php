<?php

/**
 * php奇异算法（PHP7以下的版本返回的是 6，PHP7版本返回5 ）
 * @author syy
 * @DateTime  2019-11-11T16:12:24+0800
 * @return    [type]                   [description]
 */
function strange()
{
	$a=1;

	$b=&$a;

	echo (++$a)+(++$a);
}

strange();