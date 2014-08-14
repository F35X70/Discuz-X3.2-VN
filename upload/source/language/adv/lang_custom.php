<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *		Việt hóa bởi DiscuzVN (discuzvn.com)
 *      $Id: lang_custom.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'custom_name' => 'Tùy chọn',
	'custom_desc' => 'Thêm HTML quảng cáo , các tập tin HTML, có thể được thêm vào bất kỳ trang nào trong trang web quảng cáo. Áp dụng đối với các webmaster biết kiến thức về HTML đơn giản.<br /><br />
		<a href="javascript:;" onclick="prompt(\'Sao chép (CTRL+C)Sau khi thêm vào theme hãy chọn không gian quảng cáo\', \'<!--{ad/custom_'.$_GET['customid'].'}-->\')" />Sử dụng bên trong</a>&nbsp;
		<a href="javascript:;" onclick="prompt(\'Sao chép(CTRL+C)Sau khi thêm vào theme hãy chọn không gian quảng cáo\', \'&lt;script type=\\\'text/javascript\\\' src=\\\''.$_G['siteurl'].'api.php?mod=ad&adid=custom_'.$_GET['customid'].'\\\'&gt;&lt;/script&gt;\')" />Dùng toàn bộ</a>',
	'custom_id_notfound' => 'Quảng cáo không tồn tại',
	'custom_codelink' => 'Code Nội bộ',
	'custom_text' => 'Mã tùy chọn',
);

?>