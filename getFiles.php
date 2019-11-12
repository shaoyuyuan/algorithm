<?php

/**
 * 遍历一个文件下的所有文件和子文件夹下的文件
 * @author
 * @DateTime  2019-11-11T16:25:16+0800
 * @param     [type]                   $url [description]
 * @return    [type]                        [description]
 */
function getFiles($url)
{
	//文件夹是否存在
	if(true === is_dir($url)) {
		$folders = [];
		//获取文件夹下所有文件及文件夹
		$files = scandir($url);
		foreach ($files as $key => $value) {
			//过滤获取到的'.'和'..'根目录
			if('.' != $value && '..' != $value) {
				$newUrl = $url . '\\' . $value;
				if(true === is_dir($newUrl)) {
					//递归查找文件
					$folders[$value] = getFiles($newUrl);
				} else {
					$folders[] = $value;
				}
			}
		}
		return $folders;
	} else {
		return "没有找到文件夹";
	}
}

var_dump(getFiles('C:\Users\Administrator\Desktop'));