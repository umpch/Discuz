﻿<?php
/**
 *      借助geegle api生成。
 *     作者QQ：21365421，不接受任何咨询，仅表示版权。
 *
 *
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}
class plugin_mpdcode{
	function plugin_mpdcode() {
		global $_G;

//		$this->title = $_G['cache']['plugin']['myapp']['showtitle'];
		$this->wh = intval($_G['cache']['plugin']['mpdcode']['widhtHeight']);
		if(empty($this->wh)) {
				$this->wh = '100';
			}
	}
}
class plugin_mpdcode_forum extends plugin_mpdcode{
	function viewthread_posttop_output() {
		global $postlist;

		$_post = reset($postlist);

		if (!$_post['first']) return array();

		$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		$url ='http://'.$url;

		if (strpos($chl, '?') === false) {
			$url .= '?';
		} else {
			$url .= '&';
		}
		$url .= 'mobile=yes';

		$chl = urlencode($url);
//		$widhtHeight ='150';
		$EC_level='L';
		$margin='0';
		$return.= '<div class="y">手机二维码访问：<br/><a href="'.dhtmlspecialchars($url).'" target="_blank"><img src="http://chart.apis.google.com/chart?chs='.$this->wh.'x'.$this->wh.'&cht=qr&chld='.$EC_level.'|'.$margin.'&chl='.$chl.'" alt="QR code"/></a></div>';

		$ret = array();
		$ret[0] = $return;

		return $ret;
}
}
?>