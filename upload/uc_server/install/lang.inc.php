<?php

define('UC_VERNAME', 'Việt hóa');

$lang = array(

	'SC_GBK' => 'GBK',
	'TC_BIG5' => 'BIG5',
	'SC_UTF8' => 'UTF8',
	'TC_UTF8' => 'UTF8',
	'EN_ISO' => 'ENGLISH',
	'EN_UTF8' => 'ENGLIST UTF-8',

	'title_install' => SOFT_NAME.' CÀI ĐẶT',
	'agreement_yes' => 'Đồng ý',
	'agreement_no' => 'Không',
	'notset' => 'Không hạn chế',

	'message_title' => 'Tin nhắn',
	'error_message' => 'Thông báo lỗi',
	'message_return' => 'Trở lại',
	'return' => 'Trở lại',
	'install_wizard' => 'Quá trình cài đặt',
	'config_nonexistence' => 'Tập tin cấu hình không tồn tại',
	'nodir' => 'Thư mục không tồn tại',
	'short_open_tag_invalid' => 'Xin hãy bật hàm php.ini và hàm short_open_tag thành On,để hoàn tất quá trình cài đặt.',
	'redirect' => 'Trình duyệt sẽ tự động chuyển trang.<br>Nếu trình duyệt không tự động chuyển vui lòng nhấn vào đây.',

	'database_errno_2003' => 'Không thể kết nối với cơ sở dữ liệu, kiểm tra xem cơ sở dữ, IP máy chủ có được nhập chính xác.',
	'database_errno_1044' => 'Không thể tạo ra một cơ sở dữ liệu mới, xin vui lòng điền vào tên cơ sở dữ liệu có được nhập chính xác.',
	'database_errno_1045' => 'Không thể kết nối với cơ sở dữ liệu, kiểm tra tên người dùng hoặc mật khẩu cơ sở dữ liệu có được nhập chính xác.',
	'database_errno_1064' => 'Lỗi cú pháp SQL',

	'dbpriv_createtable' => 'Không thể CREATE TABLE nên không thể tiếp tục quá trình cài đặt.',
	'dbpriv_insert' => 'Không thể INSERT nên không thể tiếp tục quá trình cài đặt.',
	'dbpriv_select' => 'Không thể SELECT nên không thể tiếp tục quá trình cài đặt.',
	'dbpriv_update' => 'Không thể UPDATE nên không thể tiếp tục quá trình cài đặt.',
	'dbpriv_delete' => 'Không thể DELETE nên không thể tiếp tục quá trình cài đặt.',
	'dbpriv_droptable' => 'Không thể DROP TABLE nên không thể tiếp tục quá trình cài đặt.',

	'db_not_null' => 'Cơ sở dữ liệu đã được cài đặt cho UCenter, Nếu tiếp tục cài đặt, dữ liệu cũ sẽ bị xóa.',
	'db_drop_table_confirm' => 'Nếu tiếp tục cài đặt sẽ xóa tất cả các dữ liệu ban đầu, bạn chắc chắn rằng bạn muốn tiếp tục?',

	'writeable' => 'Có thể ghi được',
	'unwriteable' => 'Không thể viết',
	'old_step' => 'Trước',
	'new_step' => 'Tiếp theo',

	'database_errno_2003' => 'Không thể kết nối với cơ sở dữ liệu, kiểm tra xem cơ sở dữ liệu bắt đầu có được nhập chính xác.',
	'database_errno_1044' => 'Không thể tạo ra một cơ sở dữ liệu mới, xin vui lòng điền chính xác tên cơ sở dữ liệu.',
	'database_errno_1045' => 'Không thể kết nối với cơ sở dữ liệu, kiểm tra tên người dùng hoặc mật khẩu cơ sở dữ liệu có được nhập chính xác.',

	'step_env_check_title' => 'Nhấn để bắt đầu quá trình cài đặt.',
	'step_env_check_desc' => 'Cho phép kiểm tra các tập tin môi trường.',
	'step_db_init_title' => 'Cài đặt cơ sở dữ liệu',
	'step_db_init_desc' => 'Đang thực hiện cài đặt cơ sở dữ liệu',

	'step1_file' => 'Thư mục tập tin ',
	'step1_need_status' => 'Cần có',
	'step1_status' => 'Tình trạng',
	'not_continue' => 'Không thể tiếp tục quá trình cài đặt.',

	'tips_dbinfo' => 'Điền vào các thông tin cơ sở dữ liệu',
	'tips_dbinfo_comment' => '',
	'tips_admininfo' => 'Điền thông tin quản trị viên',
	'tips_admininfo_comment' => 'Hãy nhớ tên đăng nhập UCenter và mật khẩu.',
	'step_ext_info_title' => 'Cài đặt thành công ',
	'step_ext_info_desc' => 'Bấm vào để nhập tên đăng nhập',

	'ext_info_succ' => 'Cài đặt thành công ',
	'install_locked' => 'Cài đặt, và nếu bạn muốn gỡ bỏ cài đặt đi đến máy chủ. <br /> '.str_replace(ROOT_PATH, '', $lockfile) 'Và xóa file install_locked' ,
	'error_quit_msg' => 'Bạn phải giải quyết những vấn đề trên, việc cài đặt có thể tiếp tục',

	'step_app_reg_title' => 'Thiết lập môi trường',
	'step_app_reg_desc' => 'Môi trường máy chủ đã được thiết lập',
	'tips_ucenter' => 'Xin vui lòng điền vào các thông tin liên quan đến UCenter',
	'tips_ucenter_comment' => 'UC là công cụ quản lý diễn đàn cũng một số ứng dụng khác của nó.<a href="http://www.discuzvn.com/" target="blank">DCV</a> đã việt hóa bản UC này.',

	'advice_mysql_connect' => 'Vui lòng kiểm tra mysql đã điền đúng.',
	'advice_fsockopen' => 'Chức năng này cần php.ini trong allow_url_fopen phải được bật lên.Hãy liên hệ với nhà cung cấp host để được hỗ trợ.',
	'advice_gethostbyname' => 'Cấu hình php bị cấm chức năng gethostbyname.',
	'advice_file_get_contents' => 'Chức năng này cần php.ini trong allow_url_fopen phải được bật lên.Hãy liên hệ với nhà cung cấp host để được hỗ trợ.',
	'advice_xml_parser_create' => 'Chức năng này cần PHP hỗ trợ XML。 Hãy liên hệ với nhà cung cấp host để được hỗ trợ.',

	'ucurl' => 'UCenter URL',
	'ucpw' => 'Mật khẩu UCenter',

	'tips_siteinfo' => 'Xin vui lòng điền thông tin trang web',
	'sitename' => 'Tên trang web',
	'siteurl' => 'Nhập URL',

	'forceinstall' => 'Cài đặt bắt buộc',
	'dbinfo_forceinstall_invalid' => 'Bạn nên sửa đổi tên tiền tố bảng nếu muốn cài đặt hai UC chung một database.',

	'click_to_back' => 'Nhấn vào đây để quay trở lại',
	'adminemail' => 'Hệ thống Email',
	'adminemail_comment' => 'Gửi báo cáo lỗi',
	'dbhost_comment' => 'Nhập địa chỉ máy chủ, thường là localhost',
	'tablepre_comment' => 'Khi bạn muốn cài diễn đàn trên cũng một database, vui lòng sửa tiền tố bảng để tránh trùng nhau.',
	'forceinstall_check_label' => 'Xóa các dữ liệu này, và tiến hành cài đặt !!!',

	'uc_url_empty' => 'Bạn không cần phải điền URL UCenter',
	'uc_url_invalid' => 'URL không đúng',
	'uc_url_unreachable' => 'Địa chỉ URL của Uc nhập không chính xác, xin vui lòng kiểm tra',
	'uc_ip_invalid' => 'Không thể tìm thấy tên miền này, vui lòng điền IP của trang web.</font>',
	'uc_admin_invalid' => 'Mật khẩu admin UC không chính xác.Vui lòng kiểm tra lại. ',
	'uc_data_invalid' => 'URL của UC nhập không đúng. Vui lòng kiểm tra lại. ',
	'ucenter_ucurl_invalid' => 'URL UC không được điền, hoặc lỗi định dạng, hãy kiểm tra',
	'ucenter_ucpw_invalid' => 'Mật khẩu UC không được điền, hoặc lỗi định dạng, hãy kiểm tra',
	'siteinfo_siteurl_invalid' => 'URL của trang web không được điền, hoặc lỗi định dạng, hãy kiểm tra',
	'siteinfo_sitename_invalid' => 'Tên trang web không được điền, hoặc lỗi định dạng, hãy kiểm tra',
	'dbinfo_dbhost_invalid' => 'Các máy chủ cơ sở dữ liệu không được điền, hoặc lỗi định dạng, hãy kiểm tra',
	'dbinfo_dbname_invalid' => 'Dataname không được điền, hoặc lỗi định dạng, hãy kiểm tra',
	'dbinfo_dbuser_invalid' => 'Datauser không được điền, hoặc lỗi định dạng, hãy kiểm tra ',
	'dbinfo_dbpw_invalid' => 'Mật khẩu data không được điền, hoặc lỗi định dạng, hãy kiểm tra',
	'dbinfo_adminemail_invalid' => 'Email admin không được điền, hoặc lỗi định dạng, hãy kiểm tra',
	'dbinfo_tablepre_invalid' => 'Tên tiền tố không được điền, hoặc lỗi định dạng, hãy kiểm tra',
	'admininfo_username_invalid' => 'Tên đăng nhập không được điền, hoặc lỗi định dạng, hãy kiểm tra',
	'admininfo_email_invalid' => 'Email quản trị viên không được điền, hoặc lỗi định dạng, hãy kiểm tra',
	'admininfo_ucfounderpw_invalid' => 'Mật khẩu quản trị không được để trống.',
	'admininfo_ucfounderpw2_invalid' => 'Hai mật khẩu không phù hợp, xin vui lòng kiểm tra',

	'username' => 'Tài khoản admin',
	'email' => 'Email',
	'password' => 'Mật khẩu',
	'password_comment' => 'Mật khẩu quản trị viên không thể để trống',
	'password2' => 'Nhập lại mật khẩu',

	'admininfo_invalid' => 'Tài khoản admin chưa được điền đầy đủ và chính xác vui lòng kiểm tra lại.',
	'dbname_invalid' => 'Vui lòng điền vào tên cơ sở dữ liệu',
	'admin_username_invalid' => 'Tên người dùng không thể vượt quá 15 ký tự.',
	'admin_password_invalid' => 'Mật khẩu không phù hợp',
	'admin_email_invalid' => 'Địa chỉ email này đã được sử dụng, hãy thay thế địa chỉ khác',
	'admin_invalid' => 'Thông tin admin không được điền chính xác. Vui lòng nhập lại.',
	'admin_exist_password_error' => 'Người sử dụng đã tồn tại, nếu bạn muốn thiết lập sử dụng tài khoản này là quản trị viên của diễn đàn, vui lòng nhập đúng mật khẩu cho người dùng.',

	'tagtemplates_subject' => 'Tiêu đề',
	'tagtemplates_uid' => 'ID',
	'tagtemplates_username' => 'Tác giả',
	'tagtemplates_dateline' => 'Ngày đăng',
	'tagtemplates_url' => 'Url',

	'uc_version_incorrect' => 'Phiên bản UC của bạn đã quá cũ vui lòng truy cập http://www.discuzvn.com/ để được tải bản mới nhất. 。',
	'config_unwriteable' => 'Không thể viết file config.inc.php vào thư mục. Vui lòng chmod cho thư mục thành (777)',

	'install_in_processed' => 'Đang cài đặt...',
	'install_succeed' => 'Cài đặt thành công bấm vào đây để sử dụng các bước tiếp theo.',
	'license' => '<div class="license"><h1>Cài đặt Uc 1.6.0</h1>

<p>Bản việt hóa do discuzvn.com thực hiện.</p>

<p>Vui lòng không xóa bản quyền, và mọi thứ liên quan.</p>

<p>Nếu có điều gì thắc mắc vui lòng truy cập discuzvn.com để được giải đáp.</p>

<p>Thân: admin dcv</p>',

	'uc_installed' => 'Bạn đã cài đặt UCenter，nếu bạn muốn cài đặt lại vui lòng vào đường dẫn data/ và xóa file install.lock. ',
	'i_agree' => 'Tôi đã đọc và đồng ý với các điều khoản của dcv.',
	'supportted' => 'Hỗ trợ',
	'unsupportted' => 'Không được hỗ trợ',
	'max_size' => 'Hỗ trợ/Tối đa',
	'project' => 'Dự án',
	'ucenter_required' => 'Cấu hình mà UCenter mong muốn là:',
	'ucenter_best' => 'UCenter ',
	'curr_server' => 'Máy chủ',
	'env_check' => 'Kiểm tra môi trường',
	'os' => 'Hệ điều hành',
	'php' => 'PHP Phiên bản',
	'attachmentupload' => 'Upload đính kèm',
	'unlimit' => 'Không giới hạn',
	'version' => 'Phiên bản',
	'gdversion' => 'GD',
	'allow' => 'Cho phép ',
	'unix' => 'Unix',
	'diskspace' => 'Disk Space',
	'priv_check' => 'Tập tin được phép kiểm tra',
	'func_depend' => 'Kiểm tra hàm',
	'func_name' => 'Tên hàm',
	'check_result' => 'Kết quả kiểm tra',
	'suggestion' => 'Đề nghị',
	'advice_mysql' => 'Vui lòng kiểm tra mysql đã điền đúng.',
	'advice_fopen' => 'Chức năng này cần php.ini trong allow_url_fopen phải được bật lên.Hãy liên hệ với nhà cung cấp host để được hỗ trợ.',
	'advice_file_get_contents' => 'Chức năng này cần php.ini trong allow_url_fopen phải được bật lên.Hãy liên hệ với nhà cung cấp host để được hỗ trợ.',
	'advice_xml' => 'Chức năng này cần PHP hỗ trợ XML。 Hãy liên hệ với nhà cung cấp host để được hỗ trợ.',
	'none' => 'Không',

	'dbhost' => 'Máy chủ',
	'dbuser' => 'Tên đăng nhập cơ sở dữ liệu',
	'dbpw' => 'Mật khẩu cơ sở dữ liệu',
	'dbname' => 'Tên cơ sở dữ liệu',
	'tablepre' => 'Tiền tố bảng',

	'ucfounderpw' => 'Mật khẩu',
	'ucfounderpw2' => 'Nhập lại mật khẩu',

	'create_table' => 'Tạo bảng mới ',
	'succeed' => 'Thành công ',
);