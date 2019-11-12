<?php

/**
 * 从一个标准的Url提取出文件的扩展名
 * @author syy
 * @DateTime  2019-11-11T16:47:04+0800
 * @param     [type]                   $url [description]
 * @return    [type]                        [description]
 */
function getExt($url)
{
	//解析url
	$array = parse_url($url);

	//是否有文件路径
	if(true === isset($array['path'])) {
		$file = explode('.', $array['path']);
		if(sizeof($file) > 1) {
			//最后一个值为扩展名
			$ext  = $file[sizeof($file)-1];
			return $ext;
		} else {
			return "没有相应的扩展名";
		}
	} else {
		return "没有文件内容";
	}

}

var_dump(getExt("https://www.php.cn/course/1075.html"));