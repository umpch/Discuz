<?php
$scriptlang['tools'] = array(
	'index' => '工具箱',
	'setadmin' => '找回管理員',
	'setadmindes' => '此功能可以重置創始人以及副站長密碼，在忘記密碼無法進入後台的時候使用。<br/>密碼留空為不重置密碼，只設置管理員。',
	'setadminsuccess' => '操作成功：設置 {username} 為管理員，並添加到管理團隊。',
	'setadminallow' => '未填寫用戶名或者 UID',
	'closesite' => '關閉站點',
	'closesitedes' => '此處可以進行站點「關閉/打開」的操作。',
	'success' => '操作成功 ',
	'emptypw' => '操作錯誤：密碼為空，請重新在後台或者tools.php中設置密碼',
	'loginsuccess' => '登陸成功 ',
	'error' => '密碼錯誤無法登陸',
	'noperm' => '非站點創始人無權修改 Tools 密碼設置',
	'forward' => '：返回查看數據表狀態',
	'repair' => '修複單表結果：',
	'successconfig' => '<font color=red>配置文件驗證正確，請等待跳轉到正常頁面</font>',
	'updatecache' => '更新緩存',
	'updatecachedes' => '如果由於站點緩存出現問題而無法進入後台，那麼可以從這裏更新緩存。',
	'config' => 'UCenter 配置',
	'configdes' => '可以監控測試站點的數據庫連接情況，同時可以對配置文件進行修改。<br/>注：修改配置文件前要保證配置文件可寫。',
	'configerror' => '>>>>系統數據庫出錯<<<<',
	'configerrorcontent' => '錯誤內容：',
	'dblinkerror' => '數據庫連接錯誤<br/>',
	'dbnameerror' => '數據庫名稱錯誤<br/>',
	'modiconfig' => '配置文件可寫，可以在此修改配置信息為正確的配置信息<br/>',
	'editconfig' => '<br/>配置文件不可寫，請手動編輯 config/config_global.php 文件，保證配置信息正確',
	'repairdb' => '修複數據庫',
	'repairdbdes' => '嘗試使用 repair table 命令修複數據庫，如果無法修複，那麼請在服務器上以命令行模式進行修複。',
	'login' => '驗證',
	'logindes' => '請輸入插件後台中設置的 Tools 密碼，如果忘記密碼而且無法進入站點後台，請查看說明文件。',
	'defaultindex' => '默認首頁',
	'indextips' => '修改站點打開的時候默認的首頁為哪個模塊',
	'domaintips' => '修改各個模塊單獨的域名，格式如：forum.discuz.net，不需要加 http//:',
	'moddomain' => '模塊域名綁定',
	'submit' => '修改',
	'nowindex' => '當前首頁',
	'forum' => '論壇',
	'group' => '群組',
	'home' => '家園',
	'portal' => '門戶',
	'file' => '文件鎖',
	'iffilelock' => '是否啟用文件鎖',
	'use' => '使用',
	'nouse' => '不使用',
	'pass' => '密碼鎖',
	'password' => '密碼',
	'toostips' => '此密碼為 tools 外部訪問接口訪問密碼，請妥善保管。<br/> Tools 外部接口是在站點無法訪問的時候應急處理站點問題的入口，請保存好這個密碼，不要透露給任何人。<br/>第一次使用無密碼，請自行設置。',
	'filetips' => '選擇啟用，將返回一段隨機字串，以此字串為文件名（不需要擴展名）新建文件上傳到站點根目錄中，才可以正常使用 Tools 外部接口',
	'keyname' => '文件鎖文件名（不需要增加擴展名）：',
	'nokeyfile' => '文件鎖文件不存在或錯誤，請重新上傳文件鎖文件',
	'logout' => '退出',
	'convert' => '轉換編碼',
	'nohave' => '此功能將於下個版本推出！',
	'profilefield' => '個人資料字段',
	'exportsuccess' => '導出成功，請右鍵另存為：<a href="{url}">{url}</a>',
	'closesecode' => '關閉驗證碼',
	'closesecodedes' => '如果驗證碼顯示不正確，或者無法通過驗證造成無法進入後台，可以從這裏關閉驗證碼。',
	'gender0' => '保密',
	'gender1' => '男',
	'gender2' => '女',
	'nouser' => '沒有這個用戶',
	'cleardb' => '清理數據庫冗餘',
	'clearpost' => '清理貼子表冗餘',
	'clearthread' => '清理主題表冗餘',
	'clearattachment' => '清理附件表冗餘',
	'clearmembers' => '清理用戶表冗餘',
	'clearalbum' => '清理家園相冊表冗餘',
	'clearpic' => '清理家園圖片表冗餘',
	'repairmf' => '檢查用戶信息表完整',
	'cleardbtips' => '<ul><li>清理貼子表冗餘：清理對應主題已經不存在的回複</li>
	<li>清理主題表冗餘：清理 post 無對應記錄的主題，同時修複正常主題的標題，回複，附件，最後回複等參數</li>
	<li>清理附件表冗餘：清理對應主題已經不存在的附件記錄，並刪除附件文件</li>
	<li>清理家園相冊表冗餘：清理相冊下已經沒有圖片的相冊，並刪除封面圖片</li>
	<li>清理家園圖片表冗餘：清理無對應相冊存在了的圖片，並刪除圖片文件</li>
	<li>檢查用戶信息表完整：如果您發現無法對某個用戶辦法勳章或者無法記錄部分用戶的隱私設置，請執行此項</li></ul>',
	'keyhasexpire' => '文件鎖已經過期，請重新上傳',
	'notsupportcheck' => '內存表不支持檢查',
	'jump' => '每次跳轉循環量',
	'district_backup' => '地區信息備份',
	'backup' => '備份',
	'district_renew' => '地區信息恢複',
	'renew' => '恢複',
	'district_renew_of' => '安裝官方地區信息',
	'setup' => '安裝',
	'backup_file' => '備份文件',
	'district_hold' => '現有備份文件',
	'bk_file_miss' => '該文件不存在',
	'district_tips' => '<li>注意：恢複地區選項將現有數據，請做好備份！</li>',
	'recoverdb' => '恢複數據庫',
	'recoverdbdes' => '當站點無法打開，後台恢複數據庫不成功的時候，可以使用 tools 恢複數據庫',
	'recoversuccess' => '恢複備份成功，請查看論壇，如果數據不同步，請檢查數據庫前綴。',
	'filenoexists' => '備份文件不存在。',
	'noread' => '備份文件不可讀取。',
	'wrongver' => '備份文件版本錯誤，不能恢複。',
	'recoveing' => '正在恢複分卷：',
	'nodicsql' => '地區SQL文件不存在，請重新上傳安裝包中的 install 目錄',
	'successinstall' => '成功恢複地區數據，為確保安全，請刪除 install 目錄下的 index.php',
	'censor_admin' => '過濾詞彙管理',
	'censorsearch' => '搜索過濾詞',
	'find' => '不良詞語',
	'tips' => '現有過濾詞條數：',
	'filter' => ' 按照以下分類查看：',
	'censor_ext' => '過濾詞彙增強',
	'censor_scanbbs' => '掃描帖子數據',
	'censor_scanhome' => '掃描家園數據',
	'censor_scanprotal' => '掃描門戶數據',
	'censor_scangroup' => '掃描群組數據',
	'censor_exit' => '返回',
	'censor_banned' => '禁止關鍵詞',
	'censor_mod' => '審核關鍵詞',
	'censor_re' => '替換關鍵詞',
	'censor_all' => '所有關鍵詞',
	'censor_view' => '查看關鍵詞',
	'censor_bbsinfo' => '帖子數據概況',
	'censor_homeinfo' => '家園數據概述',
	'censor_groupinfo' => '群組數據概況',
	'censor_protalinfo' => '門戶數據信息',
	'censor_threadcount' => '現有主題數(主表)：',
	'censor_postcount' => '現有回複數：',
	'censor_newthreadcount' => '自上次掃描主題數增加：',
	'censor_newpostcount' => '自上次掃描回複數增加：',
	'censor_scan' => '按照過濾詞彙掃描帖子',
	'censor_scantype' => '選擇掃描方法',
	'censor_addscan' => '增量掃描',
	'censor_allscan' => '全部重新掃描',
	'censor_beginscan' => '開始掃描',
	'censor_scanlog' => '上次掃描',
	'censor_scantips' => '增量掃描：只掃描上次掃描之後更新的帖子<br/>全部重新掃描：掃描所有帖子',
	'censor_scantime' => '掃描時間',
	'censor_scancount' => '掃描總數',
	'censor_scanuser' => '掃描人',
	'censor_scanrep' => '替換',
	'censor_scanmod' => '審核',
	'censor_scanban' => '回收',
	'censor_noneedtoscan' => '自上次掃描無帖子更新，不需要掃描',
	'censor_jumpinto' => '當前分表 {id} 不需要掃描，進入下個分表',
	'censor_scanstart' => '正在使用 {wordstart} 到 {wordend} 個關鍵詞<br/>掃描分表：{posttableid} 中<br/>第 {start} 至 {end} 條數據',
	'censor_homescanstart' => '正在使用 {wordstart} 到 {wordend} 個關鍵詞<br/>掃描第 {start} 至 {end} 條數據',
	'censor_scanresult' => '掃描結束，共處理 {count} 條數據',
	'censor_jumpposttable' => '分表 {id} 掃描結束，進入下一個分表',
	'censor_blogcount' => '家園博文統計',
	'censor_commontcount' => '家園評論留言統計',
	'censor_docommentcount' => '家園心情評論統計',
	'censor_doingcount' => '家園心情統計',
	'censor_homemod' => '需要處理的內容',
	'censor_hometype' => '信息類型',
	'censor_homelink' => '跳轉鏈接',
	'censor_articlecount' => '文章總數',
	'censor_acommontcount' => '文章評論總數',
	'home_blog' => '博文',
	'home_comment' => '評論/留言',
	'home_article' => '文章',
	'home_acomment' => '文章評論',
	'synusername' => '同步用戶名',
	'clrnotice' => '清除未發送通知',
	'clrfeed' => '清理曆史 FEED',
	'synuid' => '同步UID',
	'synusername_tip' => '<li>同步ucenter與discuz之間的用戶名，主要修複由於更新產生的用戶名顯示問題。用戶名將以ucenter為主。</li>',
	'clrnotice_tip' => '<li>清除ucenter未發送的通知。</li>',
	'synuid_tip' => '<li>同步ucenter與discuz之間的用戶名，主要修複由於更新產生的uid問題。</li>',
	'clrfeed_tip' => '<li>該操作會自動清空 3 個月之前的存放在 UCenter 數據庫中的feed，以減少 UCenter 數據庫大小。</li>',
	'uc_config_no_exist' => 'ucenter配置文件不存在！',
	'step_1' => '共有',
	'step_2' => '步，現在進行到第',
	'step_3' => '步',
	'synuid_success' => '以下UID的會員的密碼被重置為：1 UID:',
	'replacetid' => ' 整理主題 tid',
	'replacepid' => ' 整理回複 pid',
	'nowreplace' => '正在整理中，請勿關閉瀏覽器，整理進度：{percent}/9',
	'replacesuccess' => '整理完畢',
	'ucenter' => 'UCenter 相關',
	'uc_config_no_db' => 'UCenter 與 DiscuzX 使用的數據庫不在同台服務器，無法進行操作',
	'uc_pm' => '短消息管理',
	'uc_viewpm' => '查詢用戶短消息',
	'uc_viewsend' => '查詢發信人：',
	'uc_viewto' => '查詢收信人：',
	'uc_clearpm' => '清空某人短消息：',
	'uc_pmhis' => ' 用戶發出的短消息記錄',
	'uc_pmfrom' => '來自',
	'uc_pmtoer' => '接收人',
	'uc_pmcontent' => '內容',
	'uc_pmtime' => '時間',
	'file_search' => '指定關鍵字搜索',
	'file_keyword' => '要搜索的關鍵字',
	'file_keywordtip' => '可使用通配符 * 來模糊搜索',
	'file_searchdir' => '要搜索的目錄',
	'file_searchdirtip' => '如果選擇的是 ./ 目錄的話，考慮到性能問題將不搜索子目錄，選擇其他目錄將搜索子目錄',
	'file_nokeyword' => '沒有指定關鍵詞',
	'file_nodir' => '沒有選擇搜索目錄，請返回選擇',
	'file_realpath' => '服務器上的文件路徑',
	'file_keyrows' => '關鍵詞所在行數',
	'file_result' => '搜索的內容：',
	'file_php' => '可疑文件檢查',
	'template_php' => '搜索模板目錄的 php 文件',
	'attachment_php' => '搜索附件目錄的 php 文件',
	'static_php' => '搜索靜態文件目錄的 php 文件',
	'other_php' => '搜索其他目錄的 php 文件',
	'file_php_result' => '可疑文件搜索結果，請確認是否是自己的文件',
	'file_path' => 'php 文件服務器上的路徑',
	'file_hack' => '掃描惡意代碼',
	'nocheck' => '搜索結果為空',
	'file_hackresult' => '惡意代碼所在行數，請立即檢查刪除！',
	'file_phptip' => '<li>下面列出的目錄正常情況下都不會存在 php 文件，若存在，則有可能是後門程序</li><li>當附件目錄中文件較多的時候將會耗費更多時間</li>',
	'file_hacktip' => '<li>本功能不會搜索附件目錄與模板目錄中的文件，請先使用「可疑文件檢查」來檢索這些目錄中是否有PHP文件。</li><li>下面列出的是惡意代碼匹配的正則，直接點擊搜索即可。</li><li>所有搜索結果肯定為風險文件，請仔細檢查！以免對自己的站點造成損失！</li>',
	'replacetidtip' => '此功能將改變整站的主題 tid，如果您不知道此功能的作用，請不要使用，否則後果自負',
	'replacepidtip' => '此功能將改變整站的回複 pid，如果您不知道此功能的作用，請不要使用，否則後果自負',
	'file_hackupdate' => '更新掃描規則',
	'moudle_homedomain' => '二級域名配置',
	'moudle_domain' => '是否開啟家園二級域名',
	'moudle_root' => '二級域名根域名',
	'moudle_holddomain' => '保留的二級域名',
	'moudle_holddomaintip' => '所有綁定到其他模塊與專題的二級域名都需要填寫在這裏，逗號間隔，例如：www,home,forum',
	'motion_threadclick' => '修改某個帖子點擊數',
	'motion_allthreadclick' => '增加所有帖子點擊數',
	'motion_tid' => '需要修改的主題的 tid',
	'motion_views' => '需要修改為的點擊數',
	'motion_addviews' => '需要全局增加的點擊數',
	'motion_addviews_comment' => '過多帖子會消耗過多時間，謹慎操作！', 
	'motion_error' => 'tid 與點擊數都必須為整數', 
	'motion_hiserror' => '填寫的值需要為整數',
	'motion_emptytid' => '不存在這個tid',
	'motion_success' => '修改成功 ',
	'motion_hispost' => '修改今日發帖數',
	'motion_forumpost' => '版塊今日發帖數',
	'motion_forumfid' => '需要修改的版塊fid',
	'motion_nofid' => '不存在這個版塊',
);

$templatelang['tools'] = array(
	'nowadminer' => '現有管理員（副站長）：',
	'nowfounder' => '現有創始人',
	'username' => '用戶名',
	'passwordtip' => '請輸入密碼',
	'issecquesreset' => '是否清除安全提問',
	'yes' => '是',
	'no' => '否',
	'submit' => '提交',
	'sitestatu' => '站點當前狀態',
	'open' => '打開',
	'close' => '關閉',
	'closereason' => '關閉理由',
	'updatedata' => '更新數據緩存',
	'updatetemplates' => '更新模板緩存',
	'updatedatatip' => '模板顯示錯位問題請更新模板緩存',
	'updatetemplatestip' => '站點無法打開，或者設置未生效，可以嘗試更新數據緩存',
	'sitedbstatu' => '站點數據庫連接',
	'sitedbext' => '站點數據庫',
	'ucapi' => 'UCenter 地址：',
	'ucdbstatu' => 'UCenter 數據庫連接',
	'ucdbext' => 'UCenter 數據庫',
	'ext' => '<span class=green>存在</span>',
	'noext' => '<span class=red>不存在</span>',
	'right' => '<span class=green>正常</span>',
	'failed' => '<span class=red>失敗</span>',
	'dbhost' => 'Mysql 地址：',
	'dbuser' => 'Mysql 賬號：',
	'dbpw' => 'Mysql 密碼：',
	'dbname' => '站點數據庫名稱：',
	'dbpre' => '站點數據庫表前綴：',
	'ucdbhost' => 'UCenter 數據庫地址：',
	'ucdbuser' => 'UCenter 數據庫賬號：',
	'ucdbpw' => 'UCenter 數據庫密碼：',
	'ucdbname' => 'UCenter 數據庫名稱：',
	'ucdbpre' => 'UCenter 數據庫表前綴：',
	'ucip' => 'UCenter IP：',
	'password' => '密碼：',
	'nopassword' => '未設置 Tools 密碼，請設置密碼後訪問。',
	'toolswelcome' => '歡迎使用 Tools 工具外部接口，請從右側選擇需要設置的項目。',
	'suggest' => '對 Tools 有更好的意見與建議，請反饋到官方論壇。',
	'gotodiscuz' => '跳轉到 Discuz! 官方論壇',
	'secodestatu' => '當前驗證碼狀態',
	'closesecode' => '關閉驗證碼',
	'nosecode' => '提示：當前站點未啟用驗證碼。',
	'havesecode' => '提示：當前站點使用了驗證碼。',
	'tablename' => '表名',
	'tablesize' => '大小',
	'allcheck' => '全部檢查',
	'allrepair' => '全部修複',
	'check' => '檢查',
	'repair' => '修複',
	'baktiem' => '備份項目',
	'version' => '版本',
	'time' => '時間',
	'type' => '類型',
	'total' => '文件總數',
	'import' => '導入',
	'authtypeb' => '當前驗證模式為安全模式，密碼為在站點後台插件面板中設置的密碼。<br/>當前後台可以啟用密鑰驗證',
	'authtypea' => '當前驗證模式為臨時模式，密碼為 tools.php 文件中的設置的密碼。請在使用後修改。',
);

$installlang['tools'] = array(
	'menu_exttools_pw' => '密碼設置',
	'menu_exttools_moudle' => '模塊相關設置',
	'menu_exttools_cleardb' => '清理數據庫冗餘',
	'menu_exttools_exportdata' => '導出個人信息',
	'menu_exttools_district' => '地區備份/恢複',
	'menu_exttools_censor' => '敏感詞管理',
	'menu_exttools_ucenter' => 'UCenter相關',
	'menu_exttools_safe' => '安全工具',
	'menu_exttools_motion' => '運營工具',
);

?>