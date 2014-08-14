<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *		Translated by Kyehani - DiscuzVN.com
 *      $Id: install_lang.php 33770 2013-08-12 05:57:10Z nemohou $
 */

if(!defined('IN_COMSENZ')) {
	exit('Access Denied');
}

define('UC_VERNAME', 'Vietnamese');
$lang = array(
	'SC_GBK' => 'SC GBK',
	'TC_BIG5' => 'TC BIG5',
	'SC_UTF8' => 'SC UTF8',
	'TC_UTF8' => 'TC UTF8',
	'EN_ISO' => 'ENGLISH ISO8859',
	'EN_UTF8' => 'ENGLIST UTF-8',

	'title_install' => 'Cài đặt '.SOFT_NAME.'',
	'agreement_yes' => 'Đồng ý',
	'agreement_no' => 'Hủy bỏ',
	'notset' => 'Không giới hạn',

	'message_title' => 'Thông báo',
	'error_message' => 'Có lỗi',
	'message_return' => 'Quay lại',
	'return' => 'Quay lại',
	'install_wizard' => 'Cài đặt Discuz X3.2',
	'config_nonexistence' => 'Tập tin cấu hình không tồn tại',
	'nodir' => 'Thư mục không tồn tại',
	'redirect' => 'Trình duyệt sẽ tự động chuyển sang trang mới.<br>Nếu trình duyệt của bạn không hỗ trợ hãy bấm vào đây.',
	'auto_redirect' => 'Trình duyệt sẽ tự động chuyển sang trang mới',
	'database_errno_2003' => 'Không thể kết nối với CSDL vui lòng kiểm tra địa chỉ máy chủ CSDL',
	'database_errno_1044' => 'Không thể tạo CSDL mới, hãy kiểm tra tên CSDL là chính xác',
	'database_errno_1045' => 'Không thể kết nối với CSDL vui lòng kiểm tra tài khoản hoặc mật khẩu CSDL',
	'database_errno_1064' => 'Lỗi kết nối CSDL',

	'dbpriv_createtable' => 'Ko thể CREATE TABLE để tiếp tục cài đặt',
	'dbpriv_insert' => 'Ko thể INSERT để tiếp tục cài đặt',
	'dbpriv_select' => 'Ko thể SELECT để tiếp tục cài đặt',
	'dbpriv_update' => 'Ko thể UPDATE để tiếp tục cài đặt',
	'dbpriv_delete' => 'Ko thể DELETE để tiếp tục cài đặt',
	'dbpriv_droptable' => 'Ko thể DROP TABLE để tiếp tục cài đặt',

	'db_not_null' => 'CSDL đã được cài đặt Ucenter, tiếp tục cài đặt sẽ xóa dữ liệu gốc.',
	'db_drop_table_confirm' => 'Tiếp tục cài đặt CSDL cũ sẽ bị xóa hết. Bạn có chắc chắn muốn tiếp tục ?',

	'writeable' => 'Có thể viết',
	'unwriteable' => 'Ko thể viết',
	'old_step' => 'Quay lại',
	'new_step' => 'Tiếp theo',

	'database_errno_2003' => 'Không thể kết nối với CSDL vui lòng kiểm tra địa chỉ máy chủ CSDL',
	'database_errno_1044' => 'Không thể tạo CSDL mới, hãy kiểm tra tên CSDL là chính xác',
	'database_errno_1045' => 'Không thể kết nối với CSDL vui lòng kiểm tra tài khoản hoặc mật khẩu CSDL',
	'database_connect_error' => 'Lỗi kết nối CSDL',

	'step_title_1' => 'Môi trường',
	'step_title_2' => 'Ucenter',
	'step_title_3' => 'CSDL',
	'step_title_4' => 'Cài đặt',
	'step_env_check_title' => 'Bắt đầu cài đặt',
	'step_env_check_desc' => 'Kiểm tra môi trường cài đặt',
	'step_db_init_title' => 'Cài đặt cơ sở dữ liệu',
	'step_db_init_desc' => 'Đang chạy trình cài đặt cơ sở dữ liệu',

	'step1_file' => 'Tập tin',
	'step1_need_status' => 'Yêu cầu',
	'step1_status' => 'Hiện tại',
	'not_continue' => 'Xin vui lòng sửa đổi theo yêu cầu',

	'tips_dbinfo' => 'Điền thông tin CSDL',
	'tips_dbinfo_comment' => '',
	'tips_admininfo' => 'Điền thông tin quản trị',
	'step_ext_info_title' => 'Cài đặt thành công',
	'step_ext_info_comment' => 'Nhấn vào đây để nhập thông tin đăng nhập',

	'ext_info_succ' => 'Cài đặt thành công',
	'install_submit' => 'Tiếp tục',
	'install_locked' => 'Cài đặt đã bị khóa, nếu bạn thực sự muốn cài đặt lại, hãy vào máy chủ xóa <br /> '.str_replace(ROOT_PATH, '', $lockfile),
	'error_quit_msg' => 'Bạn phải giải quyết vấn đề trên, để việc cài đặt có thể tiếp tục',

	'step_app_reg_title' => 'Thiết lập môi trường',
	'step_app_reg_desc' => 'Kiểm tra máy chủ và Ucenter',
	'tips_ucenter' => 'Điền thông tin Ucenter',
	'tips_ucenter_comment' => 'Nếu bạn đã cài đặt Ucenter thì hãy điền vào các thông tin dưới đây, nếu chưa cài đặt bạn có thể tải Ucenter tại <a href="http://www.discuz.com/" target="blank">Comsenz</a>',

	'advice_mysql_connect' => 'Kiểm tra chắc chắn các module mysql ko bị lỗi',
	'advice_gethostbyname' => 'Để cài đặt cần mở chức năng gethostbyname',
	'advice_file_get_contents' => 'Sửa trong php.ini hàm allow_url_fopen sang On để có thể cài đặt',
	'advice_xml_parser_create' => 'Chức năng này yêu cầu có hỗ trợ XML trong PHP',
	'advice_fsockopen' => 'Sửa trong php.ini hàm allow_url_fopen sang On để có thể cài đặt',
	'advice_pfsockopen' => 'Cần bật hàm allow_url_fopen',
	'advice_stream_socket_client' => 'Whether the prohibition in the PHP configuration the stream_socket_client function',
	'advice_curl_init' => 'Whether banned curl_init function in PHP configuration',

	'ucurl' => 'URL UCenter',
	'ucpw' => 'Mật khẩu',
	'ucip' => 'IP UCenter',
	'ucenter_ucip_invalid' => 'Định dạng lỗi, vui lòng điền đúng định dạng IP',
	'ucip_comment' => 'Thường thì không phải điền',

	'tips_siteinfo' => 'Xin vui lòng điền vào các thông tin trang web',
	'sitename' => 'Tên trang web',
	'siteurl' => 'URL trang web',

	'forceinstall' => 'Bắt buộc cài đặt',
	'dbinfo_forceinstall_invalid' => 'CSDL này đã chứa dữ liệu, để cài đặt bạn có thể sửa các bảng tiền tố hoặc cài đè nên dữ liệu cũ.',

	'click_to_back' => 'Quay lại',
	'adminemail' => 'Admin Email',
	'adminemail_comment' => 'Dùng để báo lỗi chương trình',
	'dbhost_comment' => 'Thường là localhost',
	'tablepre_comment' => 'Điền vào nếu mún phân biệt bảng khi cài nhiều diễn đàn',
	'forceinstall_check_label' => 'Tôi sẽ cài đè dữ liệu cũ',

	'uc_url_empty' => 'Bạn chưa điền URL Ucenter.',
	'uc_url_invalid' => 'URL không hợp lệ',
	'uc_url_unreachable' => 'Sai URL Ucenter, vui lòng kiểm tra',
	'uc_ip_invalid' => 'Không thể dùng tên miền, vui lòng điền IP',
	'uc_admin_invalid' => 'Sai mật khẩu Ucenter',
	'uc_data_invalid' => 'Sai thông tin, vui lòng kiểm tra URL Ucenter ',
	'uc_dbcharset_incorrect' => 'Mã font Ucenter không trùng với Discuz X1.5, vui lòng kiểm tra',
	'uc_api_add_app_error' => 'Thêm ứng dụng vài Ucenter ko thành công',
	'uc_dns_error' => 'DNS Ucenter lỗi vui lòng dùng IP',

	'ucenter_ucurl_invalid' => 'Sai URL Ucenter',
	'ucenter_ucpw_invalid' => 'Sai mật khẩu Ucenter',
	'siteinfo_siteurl_invalid' => 'URL trang web trống hoặc sai định dạng',
	'siteinfo_sitename_invalid' => 'Tên trang web trống, vui lòng kiểm tra',
	'dbinfo_dbhost_invalid' => 'Sai tên máy chủ CSDL',
	'dbinfo_dbname_invalid' => 'Sai tài khoản',
	'dbinfo_dbuser_invalid' => 'Sai tài khoản CSDL, vui lòng kiểm tra',
	'dbinfo_dbpw_invalid' => 'Sai mật khẩu CSDL, vui lòng kiểm tra',
	'dbinfo_adminemail_invalid' => 'Email trống, vui lòng kiểm tra',
	'dbinfo_tablepre_invalid' => 'Bảng tiền tố trống hoặc sai định dạng, vui lòng kiểm tra',
	'admininfo_username_invalid' => 'Tên tài khoản trống hoặc sai định dạng, vui lòng kiểm tra',
	'admininfo_email_invalid' => 'Email trống, vui lòng kiểm tra',
	'admininfo_password_invalid' => 'Mật khẩu trống, vui lòng kiểm tra',
	'admininfo_password2_invalid' => 'Hai mật khẩu không giống nhau.',

	'install_dzfull' => '<br><label><input type="radio"'.(getgpc('install_ucenter') != 'no' ? ' checked="checked"' : '').' name="install_ucenter" value="yes" onclick="if(this.checked)$(\'form_items_2\').style.display=\'none\';" /> Cài mới cùng UCenter</label>',
	'install_dzonly' => '<br><label><input type="radio"'.(getgpc('install_ucenter') == 'no' ? ' checked="checked"' : '').' name="install_ucenter" value="no" onclick="if(this.checked)$(\'form_items_2\').style.display=\'\';" /> Cài với Ucenter sẵn có</label>',

	'username' => 'Tài khoản',
	'email' => 'Email',
	'password' => 'Mật khẩu',
	'password_comment' => 'Điền vào mật khẩu',
	'password2' => 'Nhập lại',

	'admininfo_invalid' => 'Sai thông tin, vui lòng kiểm tra lại',
	'dbname_invalid' => 'Tên CSDL trống, vui lòng điền lại',
	'tablepre_invalid' => 'Sai tiền tố hoặc trống, vui lòng kiểm tra',
	'admin_username_invalid' => 'Tên tài khoản không đúng, tối đa là 15 ký tự và ko có ký tự đặc biệt',
	'admin_password_invalid' => 'Hai mật khẩu không giống nhau',
	'admin_email_invalid' => 'Email lỗi, email đã được sử dụng hoặc sai định dạng.',
	'admin_invalid' => 'Thông tin lỗi, hãy nhập cẩn thận từng mục',
	'admin_exist_password_error' => 'Tên người sử dụng đã tồn tại, nếu bạn muốn thiết lập quản trị diễn đàn này, vui lòng nhập đúng mật khẩu cho người dùng, hoặc thay thế tên của người quản trị diễn đàn',

	'tagtemplates_subject' => 'Tiêu đề',
	'tagtemplates_uid' => 'Số ID',
	'tagtemplates_username' => 'Tài khoản',
	'tagtemplates_dateline' => 'Ngày',
	'tagtemplates_url' => 'Địa chỉ chủ đề',

	'uc_version_incorrect' => 'Phiên bản Ucenter đã quá cũ bạn cần cập nhật bản mới tại ：http://www.comsenz.com/ hoặc http://wwww.discuz.net',
	'config_unwriteable' => 'Ko cài đặt, bạn cần chmod tập tin config.inc.php = 0777',

	'install_in_processed' => 'Cài đặt ...',
	'install_succeed' => 'Cài đặt thành công, bấm vào đây để tiếp tục',
	'install_cloud' => 'Successful installation, welcomed the opening of the Discuz! Cloud platform <br> Powered by Discuz! Cloud platform is committed to help website owners increase traffic, enhance the ability of Web site operators to increase website revenue.<br>Discuz! Cloud platform is provided free of charge QQ Internet, Tencent, vertical and horizontal search, community QQ groups, roaming, SOSO expression services. Discuz! Cloud platform will continue to provide more quality services. <br> opened Discuz! platform, make sure your site (Discuz!, UCHome, or SupeSite) has been upgraded to Discuz! X2.5.',
	'to_install_cloud' => 'Opened to the background',
	'to_index' => 'Temporarily opened',

	'init_credits_karma' => 'Uy tín',
	'init_credits_money' => 'Tiền',

	'init_postno0' => 'Chủ thớt',
	'init_postno1' => 'Giật tem',
	'init_postno2' => 'Hạng 3',
	'init_postno3' => 'Hạng 4',

	'init_support' => 'Tốt',
	'init_opposition' => 'Kém',

	'init_group_0' => 'Thành viên',
	'init_group_1' => 'Quản trị viên',
	'init_group_2' => 'Siêu quản lý',
	'init_group_3' => 'Quản lý',
	'init_group_4' => 'Cấm phát ngôn',
	'init_group_5' => 'Cấm truy cập',
	'init_group_6' => 'Cấm IP',
	'init_group_7' => 'Khách',
	'init_group_8' => 'Chờ xác nhận',
	'init_group_9' => 'Khách/Chưa kích hoạt',
	'init_group_10' => 'Thành viên mới',
	'init_group_11' => 'Thành viên',
	'init_group_12' => 'Thành viên năng nổ',
	'init_group_13' => 'Thành viên nhiệt tình',
	'init_group_14' => 'Thành viên sáng giá',
	'init_group_15' => 'Thành viên gắn bó',

	'init_rank_1' => 'Tập viết',
	'init_rank_2' => 'Học sinh',
	'init_rank_3' => 'Sinh viên',
	'init_rank_4' => 'Tiến sĩ',
	'init_rank_5' => 'Giáo sư',

	'init_cron_1' => 'Xóa hết bài hôm nay',
	'init_cron_2' => 'Xóa thời gian online trong tháng',
	'init_cron_3' => 'Xóa hết dữ liệu ngày',
	'init_cron_4' => 'Thống kê email mừng sinh nhật',
	'init_cron_5' => 'Trả lời thông báo',
	'init_cron_6' => 'Xóa hết thông báo',
	'init_cron_7' => 'Xóa hết kế hoạch',
	'init_cron_8' => 'Làm sạch thúc đẩy diễn đàn',
	'init_cron_9' => 'Xóa hết chủ đề của tháng',
	'init_cron_10' => 'Cập nhật X-Space hàng ngày',
	'init_cron_11' => 'Chủ đề cập nhật hàng tuần',

	'init_bbcode_1' => 'Marquee',
	'init_bbcode_2' => 'Chèn Flash',
	'init_bbcode_3' => 'QQ',
	'init_bbcode_4' => 'Sup',
	'init_bbcode_5' => 'Sub',
	'init_bbcode_6' => 'Chèn file âm thanh',
	'init_bbcode_7' => 'Chèn file video',

	'init_qihoo_searchboxtxt' =>'Nhập từ khóa, Tìm nhanh diễn đàn này',
	'init_threadsticky' =>'Chú ý, Phân loại, Chú ý',

	'init_default_style' => 'Phong cách mặc định',
	'init_default_forum' => 'Diễn đàn mặc định',
	'init_default_template' => 'Mẫu mặc định',
	'init_default_template_copyright' => 'Comsenz (Bắc Kinh)',

	'init_dataformat' => 'j-n-Y',
	'init_modreasons' => 'Quảng cáo/SPAM\r\nVirus\r\nKhông dấu\r\nLạc đề\r\nTrùng bài\r\n\r\nĐồng tình\r\nBài hay\r\nTinh hoa',
	'init_userreasons' => 'Quảng cáo\r\nSPAM\r\nSEX\r\nLạc đề\r\nPhạm quy\r\n\r\nĐồng tình\r\nBài hay\r\nNguyên tác',
	'init_link' => 'Discuz! Diễn đàn chính thức thiết lập và trao đổi kỹ thuật',
	'init_link_note' => 'Cung cấp Discuz mới nhất! Tin tức sản phẩm, tải về và trao đổi kỹ thuật',

	'init_promotion_task' => 'Nhiệm vụ thưởng',
	'init_gift_task' => 'Nhiệm vụ nhận quà',
	'init_avatar_task' => 'Nhiệm vụ avatar',

	'license' => '<div class="license"><h1>Vui Lòng Đọc Quy Định Sử Dụng Mã Nguồn Disuz!X</h1>

<p> Copyright (c) 2001-2012, Beijing Sing-ups Technology Co., Ltd. All rights reserved. </p>

<p> Thank you for choosing Sing products. I hope that our efforts to provide you with a fast and efficient site solution, and a strong community forum solution. Sing Website http://www.comsenz.com product official forum site for http://www.discuz.net. </p>

<p> NOTICE TO USER: This Agreement is a legal agreement between you and Sing about your use of the Sing companies offer a variety of software products and services. Whether you are an individual or organization, profit or not, how to use (including for the purpose of study and research) must read this Agreement carefully, including the exclusion or limitation of Sing responsibility exemption clause and the right to restrict your. Please review and accept or not accept the Terms of Service. If you do not agree to the Terms of Service and / or Sing amendments, and at any time, you should not use or take the initiative to cancel the Sing Sing provide products. Otherwise, your registration of Sing product-related services, landing, download, view the use of behavior will be treated as you fully accept the Terms of Service All, including the acceptance of the Sing the Terms of Service at any time any changes made .
the <p> This Terms of Service change, Sing modifications will be published on a web page. Once the revised Terms of Service stage in the site management announced that an effective substitute for the original terms of service. You can always visit Kangsheng Guan Fang Forum access to the latest version of the Terms of Service. If you choose to accept the Terms, you agree to be bound by the agreement with the conditions. If you do not agree to the Terms of Service, you can not get the right to use this service. If you have to violate the provisions of this Article, Sing the right to the Company reserves the right to suspend or terminate your eligibility to use the Sing products and reserves the right to be investigated for legal responsibility. </p>
understanding, the consent and comply with all the terms of this agreement only after the Sing products. You may enter into another written agreement directly with the Sing company to supplement or replace all or any part of this Agreement. </p> </p>

<p> Sing with all intellectual property rights of this software. This software is for the license agreement, not sold. Sing only allow you to comply with the provisions of this Agreement, copy, download, install, use or otherwise benefit from the functionality or intellectual property rights of this software. </p>

of <h3> I. protocol licensing rights </h3>
<ol>
   <li> You can fully comply with the license agreement on the basis of the software used in non-commercial purposes, without having to pay the costs of software copyright licenses. </li>
   <li> You Sing the product source code (if provided) or interface style to suit your site requirements can be modified within the constraints and limits of agreement. </li>
   <li> you have to use this software to build the site membership information, articles and information about the ownership of and commitment to the audit of the site content and use this software to build an independent duty of care to ensure that it does not infringe the legitimate rights and interests of any person, independently assume full responsibility for the use Sing software and services, caused Sing or loss of customers, you should be all of the damages. </li>
   <li> if you need Sing software or service users for commercial purposes, you must separately obtain the written permission of Sing, after you get a commercial license, you can use the Software for commercial purposes, in accordance with the license type purchased determine the period of technical support, technical support methods and techniques to support content, since the purchase moment, the technical support within the period owned by the specified manner within the specified range of technical support services. Commercial users the power to reflect and put forward their views and relevant comments will be a primary consideration, but must be adopted no promise or guarantee. </li>
   <li> application center services you can provide from Sing the download for your web application, but should the application developer / owner to pay the appropriate fees. </li>
</ Ol>

<h3> II. agreement constraints and limitations </h3>
<ol>
   <li> without Sing written commercial license, the Software may not be used for commercial purposes (including but not limited to corporate websites, business websites, for commercial purpose or to achieve a profitable website). Buy a commercial license, please to visit http://www.discuz.com instructions can also call 8610-51282255 for more information. </li>
   <li> not a commercial license of the software or associated with rent, sell, mortgage or sublicense. </li>
   <li> In any case, regardless of purpose, whether modified or landscaping, how the degree of modification, as long as the whole or any part of the Sing products, without the written permission of the page footer at the Sing Product Name and Sing Company links to affiliated sites (http://www.comsenz.com, or http://www.discuz.net) must be preserved, but not to remove or modify. </li>
   <li> prohibited Sing products in whole or any part of the basis for the development of any derivative version, modified version or third-party version for redistribution. </li>
   <li> you download from the Application Center application, without the written permission of the owners of the application development / may not be reverse engineer, reverse assemble, reverse compile, etc., are not allowed to copy, modify, link reproduced, compile, publish, publishing, and development of the related derivative products, works. </li>
   <li> If you fail to comply with the terms of this Agreement, your license will be terminated, the licensing of rights to be resumed at the same time, you should bear corresponding legal responsibilities. </li>
</ Ol>

<h3> III. Limited Warranty and Disclaimer </h3>
<ol>
   <li> the software and accompanying documents as not to provide any explicit or implicit form of compensation or guarantee. </li>
   <li> user voluntary use of this software, you must understand the risks of using this software, have not yet purchased the product technical service, we do not undertake to provide any form of technical support, use of the warrant or assume any use of this software arising from issues related to responsibility. </li>
   <li> Sing the company does not use this software to build websites or forums, articles or information to take responsibility, full responsibility for your own risk. </li>
   <li> Sing can not be fully monitored by a third party to upload to the Application Center application does not guarantee the legitimacy of the application, security, integrity, authenticity or quality of; you download the application from the Application Center, agreed to evaluate, and bear all risks, rather than rely on in Sing. But in any case, Sing the right to all or part of the law to stop the application center and take appropriate action, including but not limited to, the related application to uninstall the service suspension to keep the relevant records to the report of the relevant authorities. Impact on you and the possible losses, Sing Company does not undertake any direct, indirect or consequential liability. </li>
   timeliness of software and services provided by the <li> Sing Sing, security, accuracy does not warrant, due to force majeure factors beyond the control of Sing (including hacker attacks, stopping power, etc.) caused by software suspend or terminate the use and services, while the damage caused to you, you agree to waive all rights investigated Sing corporate responsibility. 6. Sing in particular to draw your attention to in order to protect the autonomy of business development and adjustment, Sing Sing company has at any time with or without prior notice to modify the services, suspend or terminate the use of some or all of the software and services the right to modify will be published in Sing company website on the page, one without limitation this paragraph. Sing exercise to modify or suspend the right to terminate some or all of the software use and service losses, Sing without responsibility to you or any third party. </li>
</ Ol>

<p> For Sing end-user license agreement, details of commercial licensing and technical services, provided exclusively by Sing. Sing the company has the right to modify the license agreement and lists of services without prior notice, the revised agreement or price list with effect from the date of change of authorized users. </p>

<p> Once you start the installation Sing products, shall be deemed to fully understand and accept the terms of this Agreement, at the same time entitled to the above terms of the rights granted by the constraints and limitations. Agreement beyond the permitted behavior, will be a direct violation of the license agreement and constitutes copyright infringement, we have the right at any time terminate the authorization, shall be ordered to stop the damage, and retain the powers held responsible. </p>

<p> This license terms, interpretation, validity and disputes resolved, for the People Republic of China mainland law. </p>

<p> if you and Sing the event of any dispute or controversy, should first be settled through friendly consultations, the consultation fails, you hereby agree to submit the dispute or controversy Sing the location of the Haidian District People Court jurisdiction. Sing company has the right to interpret and the right to amend the above terms. </p>

<p align="right"> Sing </p>

</div>',

	'uc_installed' => 'Bạn đã cài đặt UCenter, nếu bạn muốn cài đặt lại vui lòng xóa tập tin data/install.lock',
	'i_agree' => 'Tôi đã đọc và đồng ý với các điều khoản',
	'supportted' => 'Hỗ trợ',
	'unsupportted' => 'Ko hỗ trợ',
	'max_size' => 'Hỗ trợ/Tối đa',
	'project' => 'Dự án',
	'ucenter_required' => 'Yêu cầu',
	'ucenter_best' => 'Discuz! X2.0',
	'curr_server' => 'Hiện tại',
	'env_check' => 'Kiểm tra',
	'os' => 'OS',
	'php' => 'Bản PHP',
	'attachmentupload' => 'Đính kèm',
	'unlimit' => 'Không giới hạn',
	'version' => 'Phiên bản',
	'gdversion' => 'Bản GD',
	'allow' => 'Hỗ trợ',
	'unix' => 'Unix',
	'diskspace' => 'Đĩa cứng',
	'priv_check' => 'Thư mục, tập tin',
	'func_depend' => 'Kiểm tra',
	'func_name' => 'Tên',
	'check_result' => 'Kết quả',
	'suggestion' => 'Khuyến nghị',
	'advice_mysql' => 'Kiểm tra chắc chắn các module mysql ko bị lỗi',
	'advice_fopen' => 'Chức năng này yêu cầu mở hàm allow_url_fopen trong php.ini.',
	'advice_file_get_contents' => 'Sửa trong php.ini hàm allow_url_fopen sang On để có thể cài đặt',
	'advice_xml' => 'Chức năng này yêu cầu có hỗ trợ XML trong PHP',
	'none' => 'Không có gì',

	'dbhost' => 'Máy chủ CSDL',
	'dbuser' => 'Tài khoản CSDL',
	'dbpw' => 'Mật khẩu CSDL',
	'dbname' => 'Tên CSDL',
	'tablepre' => 'Tiền tố',

	'ucfounderpw' => 'Mật khẩu',
	'ucfounderpw2' => 'Nhập lại',

	'init_log' => 'Khởi tạo Log',
	'clear_dir' => 'Thư mục trống',
	'select_db' => 'Chọn CSDL',
	'create_table' => 'Tạo bảng',
	'succeed' => 'Thành công ',

	'install_data' => 'Dữ liệu đang được cài đặt',
	'install_test_data' => 'Các dữ liệu đang được cài đặt',

	'method_undefined' => 'Không xác định phương pháp',
	'database_nonexistence' => 'CSDL không tồn tại',
	'skip_current' => 'Bỏ qua bước này',
	'topic' => 'Chủ đề',
'install_finish' => 'Diễn đàn của bạn đã được cài đặt, nhấn vào đây để truy cập',

);

$msglang = array(
	'config_nonexistence' => 'Tập tin global_config.php không tồn tại.',
);

?>