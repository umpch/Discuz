<?php
/**
 * DiscuzX Convert
 *
 * $Id: config.php 10469 2010-05-11 09:12:14Z monkey $
 */

if(submitcheck()) {

	$home = array(
		'usergroup' => getgpc('targetgroup'),
		'extcredits' => getgpc('extcredits'),
		'forum' => getgpc('forum'),

		// bluelovers
		'domain' => getgpc('domain'),
		// bluelovers
	);
	save_process('home', $home);
} else {
	$sourcegroup = array();
	$targetoption = '';
	$query = $db_source->query("SELECT gid, grouptitle FROM ".$db_source->table('usergroup')." WHERE system!='0'");
	while($group = $db_source->fetch_array($query)) {
		$sourcegroup[$group['gid']] = $group['grouptitle'];
	}

//	$query = $db_target->query("SELECT groupid, grouptitle FROM ".$db_target->table('common_usergroup')." WHERE type!='member'");
	$query = $db_target->query("SELECT groupid, grouptitle FROM ".$db_target->table('common_usergroup')." WHERE type!='member' or type='member'");
	while($group = $db_target->fetch_array($query)) {
		$targetoption .= "<option value=\"$group[groupid]\">$group[grouptitle]</option>\n";
	}

	// bluelovers
	$targetoption_def = 10;
	if ($group = $db_target->fetch_first("SELECT groupid, grouptitle FROM ".$db_target->table('common_usergroup')." WHERE type='member' ORDER BY creditslower ASC LIMIT 1,1")) {
		$targetoption_def = $group['groupid'];
	}
	// bluelovers

	$extcredits = '';
	$sourcecredits = array('credit', 'experience');
	$tsetting = $db_target->fetch_first("SELECT * FROM ".$db_target->table('common_setting')." WHERE skey='extcredits'");

	$tsetting = @unserialize($tsetting['svalue']);
	if(!is_array($tsetting)) {
		showmessage("message_not_enabled_extcredit");
	} else {
		if(count($tsetting) < 8) {
			for($i = count($tsetting)+1; $i < 9; $i++) {
				$tsetting[$i] = $i;
			}
		}
		foreach($tsetting as $id => $value) {
			$extcredits .= "<option value=\"extcredits$id\">".(empty($value['title']) ? 'extcredits'.$id : $value['title'])."</option>\n";
		}
	}

	$forumarr = array();
	$forumoption = '';
//	$query = $db_target->query("SELECT fid, fup, type, name FROM ".$db_target->table('forum_forum')." WHERE status IN('1','2') ");
	$query = $db_target->query("SELECT fid, fup, type, name FROM ".$db_target->table('forum_forum')." WHERE status IN('1','2') ORDER BY fup = 0 DESC, (type='group') DESC, (type = 'forum') DESC, (type = 'sub') DESC, fup, `displayorder` ASC, fid ASC");
	while($forum = $db_target->fetch_array($query)) {
		if(!$forum['fup']) {
			$forumarr[$forum['fid']] = $forum;
		} elseif(isset($forumarr[$forum['fup']])) {
			$forumarr[$forum['fup']]['child'][$forum['fid']] = $forum;
		}
	}

	foreach($forumarr as $gid => $forum) {
		$forumoption .= "<optgroup label=\"$forum[name]\">\n";
		if(!empty($forum['child']) && is_array($forum['child'])) {
			foreach($forum['child'] as $fid => $value) {
				$forumoption .= "<option value=\"$fid\">$value[name]</option>\n";
			}
		}
		$forumoption .= "</optgroup>\n";
	}

	show_form_header();
	show_table_header();
	show_table_row(array(array('colspan="3"', lang('config_usergroup'))), 'header title');
	show_table_row(
		array(
			lang('config_from_usergroup'),
			array('class="bg1" width="10%" align="center"', '->'),
			lang('config_target_usergroup')
		)
	);
	foreach($sourcegroup as $key => $value) {
		$addmsg = $error && $key == 'dbhost' ? lang($error) : '';
		$key = intval($key);

		// bluelovers
		$_targetbbsgroup = $targetoption_def;

		switch ($key) {
			case 1:
				$_targetbbsgroup = 1;
				break;
			case 8:
			case 9:
				$_targetbbsgroup = 5;
				break;
			case 10:
				$_targetbbsgroup = 4;
				break;

		}
		// bluelovers

		show_table_row(
			array(
				array('class="bg2" width="45%"', $value),
				array('class="bg1" width="10%" align="center"', '->'),
//				array('class="bg2" width="45%"', '<select name="targetgroup['.$key.']">'.$targetoption.'</select>')
				array('class="bg2" width="45%"', '<select name="targetgroup['.$key.']">'.str_replace(' value="'.$_targetbbsgroup.'"', ' value="'.$_targetbbsgroup.'" selected="true"', $targetoption).'</select>')
			),'bg1'
		);
	}
	show_table_footer();
	echo '<br/>';

	show_table_header();
	show_table_row(array(array('colspan="3"', lang('config_extcredits'))), 'header title');
	show_table_row(
		array(
			lang('config_from_credit'),
			array('class="bg1" width="10%" align="center"', '->'),
			lang('config_target_credit')
		)
	);
	show_table_row(
		array(
			array('class="bg2" width="45%"', lang('config_credit')),
			array('class="bg1" width="10%" align="center"', '->'),
			array('class="bg2" width="45%"', '<select name="extcredits[credit]">'.$extcredits.'</select>')
		),'bg1'
	);
	show_table_row(
		array(
			array('class="bg2" width="45%"', lang('config_experience')),
			array('class="bg1" width="10%" align="center"', '->'),
			array('class="bg2" width="45%"', '<select name="extcredits[experience]">'.$extcredits.'</select>')
		),'bg1'
	);
	show_table_footer();
	echo '<br/>';

	show_table_header();
	show_table_row(array(array('colspan="3"', lang('config_convert_forum'))), 'header title');
	show_table_row(
		array(
			lang('config_from_data'),
			array('class="bg1" width="10%" align="center"', '->'),
			lang('config_target_forum')
		)
	);
	show_table_row(
		array(
			array('class="bg2" width="45%"', lang('config_poll')),
			array('class="bg1" width="10%" align="center"', '->'),
			array('class="bg2" width="45%"', '<select name="forum[poll]"><option value="0" selected>'.lang('config_auto_create').'</option>'.$forumoption.'</select>')
		),'bg1'
	);
	show_table_row(
		array(
			array('class="bg2" width="45%"', lang('config_event')),
			array('class="bg1" width="10%" align="center"', '->'),
			array('class="bg2" width="45%"', '<select name="forum[event]"><option value="0" selected>'.lang('config_auto_create').'</option>'.$forumoption.'</select>')
		),'bg1'
	);
	show_table_footer();

	// bluelovers
	show_table_header();
	show_table_row(array(array('colspan="3"', lang('config_convert_domain'))), 'header title');
	show_table_row(
		array(
			lang('config_domain_forum_data'),
			array('class="bg1" width="10%" align="center"', '->'),
			array('class="bg2" width="45%"', '<textarea name="domain[forum]" rows="5" style="width: 99%;"></textarea>')
		),'bg1'
	);
	show_table_row(
		array(
			lang('config_domain_home_data'),
			array('class="bg1" width="10%" align="center"', '->'),
			array('class="bg2" width="45%"', '<textarea name="domain[home]" rows="5" style="width: 99%;"></textarea>')
		),'bg1'
	);
	show_table_footer();
	// bluelovers

	show_form_footer('submit', 'config_convert');
	exit();
}
?>