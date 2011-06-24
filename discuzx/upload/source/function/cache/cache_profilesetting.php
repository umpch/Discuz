<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: cache_profilesetting.php 17210 2010-09-26 09:20:47Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

function build_cache_profilesetting() {
	$data = array();
	$query = DB::query("SELECT * FROM ".DB::table('common_member_profile_setting')." WHERE available='1' ORDER BY displayorder");

	while($field = DB::fetch($query)) {
		// bluelovers
		if ($field['choices']) {
			$field['choices'] = str_replace("\r\n", "\n", $field['choices']);
			$choices = array();
			foreach(explode("\n", $field['choices']) as $item) {
				$item = trim($item);
				array_push($choices, $item);
			}
			$field['choices'] = join("\n", $choices);
		}
		// bluelovers
		$data[$field['fieldid']] = $field;
	}

	save_syscache('profilesetting', $data);
}

?>