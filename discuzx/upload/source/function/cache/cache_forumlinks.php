<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: cache_forumlinks.php 21773 2011-04-12 02:35:37Z monkey $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

function build_cache_forumlinks() {
	global $_G;

	$data = array();
	$query = DB::query("SELECT * FROM ".DB::table('common_friendlink')." ORDER BY displayorder");

	//BUG:搭配 cachedata 的 hook 即時更新緩存時會造成讀取不到 $_G['setting']
	/**
	 * 原因在於更新 forumlinks 時，setting 尚未載入
	 **/
	if($_G['setting']['forumlinkstatus']) {
		$tightlink_content = $tightlink_text = $tightlink_logo = $comma = '';

		// bluelovers
		$_onerror = ' onerror="this.onerror=\'\';this.src=\''.STATICURL.'image/logo/demo/logo_88_31.png\';" ';
		// bluelovers

		while($flink = DB::fetch($query)) {
			if($flink['description']) {
				if($flink['logo']) {
					$tightlink_content .= '<li class="lk_logo mbm bbda cl"><img src="'.$flink['logo'].'"'.$_onerror.' border="0" alt="'.strip_tags($flink['name']).'" /><div class="lk_content z"><h5><a href="'.$flink['url'].'" target="_blank">'.$flink['name'].'</a></h5><p>'.$flink['description'].'</p></div>';
				} else {
					$tightlink_content .= '<li class="mbm bbda"><div class="lk_content"><h5><a href="'.$flink['url'].'" target="_blank">'.$flink['name'].'</a></h5><p>'.$flink['description'].'</p></div>';
				}
			} else {
				if($flink['logo']) {
					$tightlink_logo .= '<a href="'.$flink['url'].'" target="_blank"><img src="'.$flink['logo'].'"'.$_onerror.' border="0" alt="'.strip_tags($flink['name']).'" /></a> ';
				} else {
					$tightlink_text .= '<li><a href="'.$flink['url'].'" target="_blank" title="'.strip_tags($flink['name']).'">'.$flink['name'].'</a></li>';
				}
			}
		}
		$data = array($tightlink_content, $tightlink_logo, $tightlink_text);
	}

	save_syscache('forumlinks', $data);
}

?>