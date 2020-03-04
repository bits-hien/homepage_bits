<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'bits' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'w[ZO d^MTLN]%On8m%4|~ai-,KoGr}jmw1O$+(K~hBhub[)##2<DlJ}Cge Tkk>1' );
define( 'SECURE_AUTH_KEY',  '=<*C3a`(fQ*<P6qL1[.1[VJZ.;#P hOvM:sUk[+^l3-UYHP!gr`n(~-fM!AqT>=B' );
define( 'LOGGED_IN_KEY',    '^PbX<pj>k/4(`t&@EP>[O7PH?b78o7w<$`=rUcRd>mq<?k)o27nS57ObFl9)5#;G' );
define( 'NONCE_KEY',        '$3+^C>p3Kh8pEe,NbS^>Id 0lAHF9_$GPtRf^,*V?Bsh8U@/k&7P;ea1SFGj}[x<' );
define( 'AUTH_SALT',        '+:B1UE-r@U;7vGM1Zj;JxOL9X{FE<0E1Z0%EP-CKQ?@.m3-MWgnEg`V4rOHBxh.u' );
define( 'SECURE_AUTH_SALT', 'N]E5&B5@f&[=Nc?M/O@Amr5,j+x3<waFt9_P2x!94y22?+`B235J!LtGokxaDjXY' );
define( 'LOGGED_IN_SALT',   'eSJdy-1O9~D 9}SA(e]Y5?F%lb4T{9r9O;#!w6SP{!.T|,X,[)J*ai|8GZe=35pF' );
define( 'NONCE_SALT',       '2A}<.PZ&{nAf6.1ci,1cV^]H=8Q|nV)Mo&YI[h^ @%FA$pI&Iw4j.$:sWWnuYqD^' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
