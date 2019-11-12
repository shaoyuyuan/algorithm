<?php

/**
 * 字符集合：输入一个字符串，求出该字符串包含的字符集合，并按顺序排序（英文）
 * @author syy
 * @DateTime  2019-11-11T16:13:24+0800
 * @param     [string]                   $char [英文字母]
 * @return    [type]                         [description]
 */
function charSet($char)
{
	//字符串转数组
	$array = str_split($char);
	//去重
	$array = array_unique($array);
	//排序
	asort($array);
	
	return implode('', $array);
}

var_dump(charSet('fiauhfeua'));