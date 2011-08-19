<?php

/**
 *	  [Discuz!] (C)2001-2099 Comsenz Inc.
 *	  This is NOT a freeware, use is subject to license terms
 *
 *	  $Id: lang_admincp_cloud.php 23933 2011-08-17 03:21:14Z yexinhao $
 */

$extend_lang = array
(
	'header_cloud' => '雲平台',
	'header_navcloud' => 'Discuz!雲平台',
	'nav_cloud' => 'Discuz!雲平台',

	'menu_cloud_open' => '開通Discuz!雲平台',
	'menu_cloud_upgrade' => '開通Discuz!雲平台',
	'menu_cloud_applist' => '平台首頁',
	'menu_cloud_siteinfo' => '站點信息',
	'menu_cloud_doctor' => '診斷工具',

	'menu_setting_manyou' => '漫遊應用設置',
	'menu_setting_qqconnect' => 'QQ互聯設置',

	'menu_cloud_manyou' => '漫遊應用',
	'menu_cloud_connect' => 'QQ互聯',
	'menu_cloud_search' => '縱橫搜索',
	'menu_cloud_stats' => '騰訊分析',
	'menu_cloud_security' => '雲安全',
	'menu_cloud_smilies' => 'SOSO表情',
	'menu_cloud_qqgroup' => '社區QQ群',
	'menu_cloud_union' => '廣告聯盟',

	'close' => '關閉',
	'continue' => '繼續',
	'message_title' => '提示信息',
	'jump_to_cloud' => '您即將轉向Discuz!雲平台（http://cp.discuz.qq.com）完成開通流程',

	'cloud_status_error' => '出了點小錯，由於站點ID/通信KEY等關鍵信息丟失導致Discuz!雲平台服務出現異常，使用<a href="admin.php?action=cloud&operation=doctor">診斷工具</a>檢測站點ID和KEY，如有疑問請訪問<a href="http://www.discuz.net/forum-3926-1.html" target="_blank">官方論壇</a>尋求幫助',

	'cloud_introduction' => '查看介紹',
	'cloud_confirm_open' => '確認開通',
	'cloud_confirm_upgrade' => '確認升級',
	'cloud_page_loading' => '頁面加載中...',
	'cloud_time_out' => '您無法訪問Discuz!雲平台，請嘗試<a href="javascript:;" onClick="location.reload()">刷新</a>。',
	'cloud_unknown_dns' => '您的站點目前無法連接Discuz!雲平台，請檢查您服務器網絡設置，使用<a href="admin.php?action=cloud&operation=doctor">診斷工具</a>檢測DNS解析和接口連通性。<a href="http://cp.discuz.qq.com/faq?fId=1305690058&ADTAG=CP.CLOUD.FAQ.FID" target="_blank">查看幫助</a>，如有疑問請訪問<a href="http://www.discuz.net/forum-3926-1.html" target="_blank">官方論壇</a>求助',

	'cloud_category' => '設置站點分類',
	'cloud_site_name' => '站點名稱',
	'cloud_site_url' => '站點URL',
	'cloud_site_category' => '站點分類',
	'cloud_select' => '請選擇',
	'cloud_agree_protocal' => '我已仔細閱讀並同意',
	'read_protocal' => '《Discuz!雲平台服務使用協議》',
	'cloud_will_open' => '我要開通',
	'cloud_will_upgrade' => '我要升級',
	'cloud_protocal' => 'Discuz!雲平台服務協議',
	'cloud_select_category' => '請選擇站點分類',
	'cloud_select_sub_category' => '請選擇二級分類',
	'cloud_select_return' => '請選擇站點分類，返回',
	'cloud_open_success' => 'Discuz!雲平台開通成功 ',
	'cloud_upgrade_success' => 'Discuz!雲平台升級成功 ',
	'cloud_network_busy' => '網絡繁忙，稍後請重新操作，原因：<br />{errMessage} (ERRCODE:{errCode})',
	'cloud_turnto_applist' => '您的站點已開通Discuz!雲平台，現跳轉到平台首頁',
	'cloud_site_id' => '站點ID',
	'cloud_api_ip_btn' => '設置雲平台接口IP',
	'cloud_api_ip' => '雲平台接口IP',
	'cloud_api_ip_comment' => '若站點服務器由於DNS解析問題無法連接到雲平台接口，請填寫api.discuz.qq.com的IP地址，使用<a href="admin.php?action=cloud&operation=doctor">診斷工具</a>檢測，<a href="http://cp.discuz.qq.com/faq?fId=1304068911&ADTAG=CP.CLOUD.FAQ.FID" target="_blank">查看幫助</a>',
	'cloud_manyou_ip' => '漫遊接口IP',
	'cloud_manyou_ip_comment' => '若站點服務器由於DNS解析問題無法連接到漫遊接口，請填寫api.manyou.com的IP地址，使用<a href="admin.php?action=cloud&operation=doctor">診斷工具</a>檢測，<a href="http://faq.comsenz.com/viewnews-400" target="_blank">查看幫助</a>',
	'cloud_ipsetting_success' => '雲平台接口IP設置成功 ',
	'cloud_open_first' => '請先開通Discuz!雲平台',
	'cloud_sync' => '同步站點信息',
	'cloud_sync_success' => '站點信息同步成功 ',
	'cloud_sync_failure' => '站點信息同步失敗，原因：<br />{errMessage} (ERRCODE:{errCode})<br /><br />如有疑問，請訪問<a href="http://www.discuz.net/forum-3926-1.html" target="_blank">官方論壇</a>尋求幫助',
	'cloud_resetkey' => '更換站點KEY',
	'cloud_reset_success' => '站點KEY更換成功 ',

	'cloud_siteinfo_tips' => '<li>如果站點名稱或者站點URL有變動，請點擊「同步站點信息」按鈕。</li><li>站點KEY是站點與雲平台通信的驗證密鑰，若近期有危險操作洩漏站點KEY等信息，請點擊「更換站點KEY」按鈕。<span style="color:red;">請謹慎使用此功能。</span></li>',

	'cloud_doctor_tips' => '<li>Discuz!雲平台診斷工具是幫助您分析站點上的狀況，是否能與雲平台正常通信等功能。</li>
		<li>站點ID是您的站點在雲平台的唯一標識，請勿和其他站點共用一套站點ID和站點通信KEY</li>',

	'cloud_doctor_setidkey' => '修改Discuz!上的站點ID和KEY',
	'cloud_doctor_setidkey_tips' => '<li style="color:red">修改Discuz!上的站點ID和KEY，可能會導致通信錯誤、簽名錯誤以及其他的故障，請勿在沒有官方人員指導的情況下修改。</li>
		<li style="color:red">修改ID、KEY和狀態前，請先備份論壇的common_setting表。</li>',
	'cloud_site_key' => '站點通信KEY',
	'cloud_site_key_safetips' => '(出於安全考慮，部分隱藏)',
	'cloud_site_key_comment' => '站點通信KEY請勿對外公佈',
	'cloud_site_status' => '狀態',
	'cloud_idkeysetting_success' => '站點ID/KEY狀態設置成功 ',
	'cloud_idkeysetting_siteid_failure' => '站點ID必須為純數字，請勿隨意修改。如有必要，請在客服人員協助下修改。',
	'cloud_idkeysetting_sitekey_failure' => '站點通信KEY必須為32位，請勿隨意修改。如有必要，請在客服人員協助下修改。',

	'cloud_doctor_result_success' => '<img align="absmiddle" src="static/image/admincp/cloud/right.gif" />',
	'cloud_doctor_result_failure' => '<img align="absmiddle" src="static/image/admincp/cloud/wrong.gif" /> ',

	'cloud_doctor_api_test_other' => '測試雲平台其他接口IP',
	'cloud_doctor_manyou_test_other' => '測試漫遊其他接口IP',
	'cloud_doctor_api_test_success' => '%s 請求接口 %s 成功，耗時 %01.3f 秒 %s',
	'cloud_doctor_api_test_failure' => '%s 請求接口 %s 失敗，請咨詢空間商 %s',
	'cloud_doctor_status_0' => '尚未開通雲平台',
	'cloud_doctor_status_1' => '已開通雲平台',
	'cloud_doctor_status_2' => '註冊雲平台，等待完成',

	'cloud_doctor_title_status' => '系統狀態',
	'cloud_doctor_modify_siteidkey' => '手動修改站點ID/KEY',
	'cloud_doctor_close_yes' => '是 (前台Connect將不顯示)',

	'cloud_site_version' => '產品版本',
	'cloud_site_release' => '產品發佈日期',

	'cloud_doctor_title_result' => '檢測結果(<a href="#" onClick="self.location.reload();">重新檢測</a>)',

	'cloud_doctor_php_ini_separator' => 'URL分隔符',
	'cloud_doctor_php_ini_separator_true' => '空或&',
	'cloud_doctor_php_ini_separator_false' => 'php.ini 的 arg_separator.output 設置成非&值 或 ini_get 函數被禁用，請聯繫空間商',

	'cloud_doctor_fsockopen_function' => 'fsockopen函數',
	'cloud_doctor_gethostbyname_function' => 'DNS解析函數',
	'cloud_doctor_function_disable' => '函數被禁用，請聯繫空間商',

	'cloud_doctor_dns_api' => '雲平台域名解析',
	'cloud_doctor_dns_api_test' => '雲平台主接口測試',
	'cloud_doctor_other_api_test' => '雲平台其他接口測試',
	'cloud_doctor_dns_manyou' => '漫遊域名解析',
	'cloud_doctor_dns_manyou_test' => '漫遊主接口測試',
	'cloud_doctor_other_manyou_test' => '漫遊其他接口測試',

	'cloud_doctor_setting_ip' => '手動設置的IP：',

	'cloud_doctor_dns_success' => '%s DNS解析的IP：%s %s <a href="javascript:;" onClick="showWindow(\'cloudApiIpWin\', \'%s?action=cloud&operation=siteinfo&anchor=cloud_ip&callback=doctor\'); return false;">設置接口IP</a>',
	'cloud_doctor_dns_failure' => '<img align="absmiddle" src="static/image/admincp/cloud/wrong.gif" /> %s DNS解析失敗 %s <a href="javascript:;" onClick="showWindow(\'cloudApiIpWin\', \'%s?action=cloud&operation=siteinfo&anchor=cloud_ip&callback=doctor\'); return false;">設置接口IP</a>',

	'cloud_doctor_title_plugin' => '系統插件檢測',
	'cloud_doctor_system_plugin_status' => '系統插件狀態',
	'cloud_doctor_system_plugin_list' => '<a href="admin.php?action=plugins">查看插件列表和版本</a>',
	'cloud_doctor_system_plugin_status_false' => ' 系統插件未初始化 (左側菜單不顯示) <a href="misc.php?mod=initsys" target="_doctor_initframe" onClick="$(\'_doctor_initframe\').onload = function () {self.location.reload();};">點擊修復</a><iframe id="_doctor_initframe" name="_doctor_initframe" src="" width="0" height="0" style="display:none;"></iframe>',
	'cloud_doctor_plugin_module_error' => 'common_plugin表modules字段值不正確',

	'cloud_doctor_title_connect' => 'QQ互聯檢測',
	'cloud_doctor_connect_app_id' => 'QQ互聯appid',
	'cloud_doctor_connect_app_key' => 'QQ互聯appkey',
	'cloud_doctor_connect_reopen' => '當前站點appid/appkey丟失，請<a href="admin.php?action=cloud&operation=applist">重新開通</a>QQ互聯',

	'cloud_application_close' => '您的站點未開啟此項雲服務，請到Discuz!後台雲平台標籤下開啟',
	'cloud_application_disable' => '您的站點已被禁止使用此項雲服務，如果有疑問請訪問<a href="http://www.discuz.net/forum.php?gid=3923" target="_blank">官方論壇</a>尋求幫助',

	'cloud_search_tips' => '<li>開啟漫遊搜索功能後，用戶可以使用基於漫遊的搜索功能。</li>',

	'cloud_stats' => '騰訊分析',
	'cloud_stats_tips' => '<li>選擇的樣式會顯示在論壇底部的右下方。</li>',
	'cloud_stats_status' => '啟用騰訊分析',
	'cloud_stats_icon_set' => '選擇樣式（圖標或文字將顯示在論壇右下角）',
	'cloud_stats_icon_none' => '不顯示圖標和文字',
	'cloud_stats_icon_word9' => '騰訊分析',
	'cloud_stats_icon_word10' => '網站統計',
	'cloud_stats_setting' => '設置圖標',
	'cloud_stats_summary' => '網站概況',

	'cloud_smilies' => 'SOSO表情',
	'cloud_smilies_tips' => '<li>搜盡天下表情，為網站帶來無窮的樂趣與體驗。</li>
		<li>省略繁瑣的上傳表情流程，無縫「偷渡」QQ表情到您的網站，論壇表情變得不再單調無味。</li>',

	'cloud_smilies_status' => '啟用SOSO 表情',

	'setting_manyou' => '漫遊應用設置',
	'setting_manyou_tips' => '<li>開啟漫遊應用功能後，用戶可以自由選擇各種不同的應用(諸如德克薩斯撲克、彈彈堂、十年一劍......)在站內進行使用。</li>
		<li>漫遊應用功能由 <a target="_blank" href="http://www.manyou.com/www/">MYOP開放平台</a> 提供， Manyou Open Platform(Manyou開放平台/MYOP)服務是由 Comsenz 公司為應用開發者提供的開放平台，啟用漫遊服務前，<a href="http://wiki.developer.manyou.com/wiki/index.php?title=MYOP%E7%BD%91%E7%AB%99%E6%9C%8D%E5%8A%A1%E5%8D%8F%E8%AE%AE&printable=yes" target="_blank">請先閱讀MYOP網站服務協議</a></li>',
	'setting_manyou_base' => '基本設置',
	'setting_manyou_base_status' => '啟用漫遊應用',
	'setting_manyou_base_status_comment' => '選擇是否開啟漫遊應用。如果關閉漫遊應用，您的網站用戶將不能使用任何基於漫遊的應用',
	'setting_manyou_search_status' => '啟用漫遊搜索',
	'setting_manyou_search_status_comment' => '漫遊搜索是專為 Discuz! 產品量身定做的高效、全文搜索服務，無須網站的 MySQL 資源',
	'setting_manyou_search_invite' => '漫遊搜索邀請碼',
	'setting_manyou_search_invite_comment' => '目前處於測試階段，需要輸入邀請碼方可開通漫遊搜索，<a href="http://www.discuz.net/thread-1669366-1-1.html" target="_blank">點擊這裡申請邀請碼</a>',
	'setting_manyou_base_status_no' => '尚未開啟漫遊功能，不能進行此管理。',
	'setting_manyou_base_ip' => '漫遊應用的 IP',
	'setting_manyou_base_ip_comment' => '默認為空。如果您的服務器因 DNS 解析問題無法使用漫遊應用服務，請填寫漫遊應用的 IP 地址。<a href="http://faq.comsenz.com/viewnews-400" target="_blank">查看漫遊應用的 IP</a>',
	'setting_manyou_base_close_prompt' => '關閉漫遊應用的更新提示',
	'setting_manyou_base_close_prompt_comment' => '您的站點開啟了漫遊應用多應用服務後，當平台有了新的信息的時候漫遊應用會自動提示給管理員。關閉本功能後，您將不再獲取更新提示。',
	'setting_manyou_base_open_app_prompt' => '開啟漫遊應用公告',
	'setting_manyou_base_open_app_prompt_comment' => '當平台有了新的應用公告時，用戶打開瀏覽器的時候會彈出窗口提示，類似漫遊應用更新提示',
	'setting_manyou_base_refresh' => '同步漫遊信息',
	'setting_manyou_base_refresh_comment' => '如果更改了導航名稱、搜索設置等，請同步漫遊信息。',
	'setting_manyou_base_showgift_comment' => '如果您開啟了漫遊應用平台的禮物應用後，可以在首頁顯示「推薦禮物」。',
	'setting_manyou_manage' => '漫遊應用管理',
	'setting_manyou_search_manage' => '漫遊搜索管理',

	'connect_menu_setting' => '基本設置',
	'connect_menu_service' => '其他',
	'connect_menu_stat' => '數據統計',
	'connect_setting_allow' => '開啟QQ註冊/綁定/登錄服務',
	'connect_setting_allow_comment' => '開啟後，用戶可以通過QQ帳號登錄站點，以及進行更多和QQ相關的操作',
	'connect_setting_siteid' => 'QQ綁定站點ID',
	'connect_setting_sitekey' => 'QQ綁定站點密鑰',
	'connect_setting_feed_allow' => '開啟發帖同步推送到QQ空間動態',
	'connect_setting_feed_allow_comment' => '開啟後，用戶發帖可以同步推送到QQ空間動態，展現給用戶的QQ空間好友',
	'connect_setting_feed_fids' => '允許推送的論壇版塊',
	'connect_setting_feed_group' => '群組是否允許推送',
	'connect_setting_feed_group_comment' => '設置在群組發表的主題是否可以推送到QQ空間動態',
	'connect_setting_t_allow' => '開啟發帖同步推送到騰訊微博',
	'connect_setting_t_allow_comment' => '開啟後，用戶發帖可以同步推送到騰訊微博，展現給用戶的微博聽眾',
	'connect_setting_t_fids' => '允許推送的論壇版塊',
	'connect_setting_t_group' => '群組是否允許推送',
	'connect_setting_t_group_comment' => '設置在群組發表的主題是否可以推送到騰訊微博',
	'connect_setting_like_allow' => '顯示本站QQ認證空間喜歡的鏈接',
	'connect_setting_like_allow_comment' => '用戶點擊本站QQ認證空間喜歡的鏈接，將立即成為本站QQ認證空間的粉絲，隨時收取認證空間的動態',
	'connect_setting_like_url' => '認證空間QQ號碼',
	'connect_setting_like_url_comment' => '設置認證空間的 QQ 號碼，提交認證申請請<a href="http://opensns.qq.com/" target="_blank">點擊這裡</a>',
	'connect_setting_turl_allow' => '顯示本站官方微博快速收聽按鈕',
	'connect_setting_turl_allow_comment' => '用戶點擊本站官方微博快速收聽按鈕，將立即成為您所設置的騰訊微博帳號聽眾，隨時收取微博的動態',
	'connect_setting_turl_qq' => '官方微博QQ號碼',
	'connect_setting_turl_qq_comment' => '設置官方微博的QQ號碼',
	'connect_setting_turl_qq_failed' => '官方微博QQ號碼設置失敗，請確保該QQ號的有效性',
	'connect_member_info' => '用戶信息',
	'connect_member_bindlog' => 'QQ綁定日誌',
	'connect_member_bindlog_type' => '操作',
	'connect_member_bindlog_username' => '用戶名',
	'connect_member_bindlog_date' => '日期',
	'connect_member_bindlog_type_1' => '綁定',
	'connect_member_bindlog_type_2' => '解除綁定',
	'connect_member_bindlog_uin' => 'QQ帳號綁定日誌',
	'connect_member_bindlog_uid' => '用戶帳號綁定日誌',

	'qqgroup_menu_list' => '綁定管理',
	'qqgroup_menu_manager' => '設置名稱',
	'qqgroup_menu_block' => '推送信息',
	'qqgroup_menu_history' => '推送歷史',

	'qqgroup_msg_deficiency' => '請至少推送一條頭條主題和一條列表主題',
	'qqgroup_msg_save_succeed' => '恭喜，信息成功推送到QQ群',
	'qqgroup_msg_upload_succeed' => '圖片上傳成功 ',
	'qqgroup_msg_upload_failure' => '圖片上傳失敗，請選擇長寬為75*75的圖片，支持JPG、GIF、PNG格式，文件小於5M，並檢查服務器是否開啟GD庫',
	'qqgroup_msg_remote_exception' => '抱歉，出了點小錯。錯誤原因：{errmsg} 錯誤代號：{errno}',
	'qqgroup_msg_unknown_dns' => '抱歉，出現未知錯誤，請檢查您的服務器與Discuz!雲平台連接',
	'qqgroup_msg_remote_error' => '抱歉，服務器出錯了。請稍後再試',

	'qqgroup_search_order_views' => '瀏覽數倒序',
	'qqgroup_search_order_replies' => '回複數倒序',
	'qqgroup_search_order_heats' => '熱度倒序',
	'qqgroup_search_order_dateline' => '發佈時間倒序',
	'qqgroup_search_order_lastpost' => '最後回復倒序',
	'qqgroup_search_order_recommends' => '主題評價倒序',

	'qqgroup_search_dateline_1' => '1小時內發佈的主題',
	'qqgroup_search_dateline_2' => '24小時內發佈的主題',
	'qqgroup_search_dateline_3' => '7天內發佈的主題',
	'qqgroup_search_dateline_4' => '1個月內發佈的主題',
	'qqgroup_search_dateline_0' => '不限制',

	'qqgroup_search_tid' => '主題ID:',
	'qqgroup_search_button' => '搜索',
	'qqgroup_search_threadslist' => '主題列表',
	'qqgroup_search_inforum' => '所在版塊',
	'qqgroup_search_operation' => '操作',

	'qqgroup_search_loading' => '加載中...',
	'qqgroup_search_nothreads' => '未找到指定條件的主題，請嘗試更換篩選條件重新搜索',

	'qqgroup_ctrl_add_miniportal_topic' => '推送到頭條',
	'qqgroup_ctrl_add_miniportal_normal' => '推送到列表',
	'qqgroup_ctrl_up' => '向上移動',
	'qqgroup_ctrl_down' => '向下移動',
	'qqgroup_ctrl_edit' => '編輯',
	'qqgroup_ctrl_remove' => '移出',
	'qqgroup_ctrl_upload_image' => '上傳圖片',
	'qqgroup_ctrl_choose_image' => '選擇圖片：',
	'qqgroup_ctrl_choose_image_tips' => '請選擇長寬為75*75的圖片，支持JPG、GIF、PNG格式，文件小於5M。',
	'qqgroup_ctrl_close' => '關閉',

	'qqgroup_preview_tips_topic' => '點擊左側 <img src="static/image/admincp/cloud/qun_op_top.png" align="absmiddle" /> 將信息推送到頭條',
	'qqgroup_preview_tips_normal' => '點擊左側 <img src="static/image/admincp/cloud/qun_op_list.png" align="absmiddle" /> 將信息推送到列表',
	'qqgroup_preview_more' => '更多',
	'qqgroup_preview_shortname' => '頁卡標題',
	'qqgroup_preview_button' => '推送信息',
	'attach_img' => '圖片附件',

);

$GLOBALS['admincp_actions_normal'][] = 'cloud';

?>