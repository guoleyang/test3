<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define( 'DB_NAME', 'fictional' );

/** MySQL数据库用户名 */
define( 'DB_USER', 'root' );

/** MySQL数据库密码 */
define( 'DB_PASSWORD', '' );

/** MySQL主机 */
define( 'DB_HOST', 'localhost' );

/** 创建数据表时默认的文字编码 */
define( 'DB_CHARSET', 'utf8mb4' );

/** 数据库整理类型。如不确定请勿更改 */
define( 'DB_COLLATE', '' );

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'TR4&d{(aGt;xBwE{bZJx<*H(G8%kmg/_gDzlC2T@5?EwSL<&Zih@dmc;q@x$X:I4' );
define( 'SECURE_AUTH_KEY',  'UEieWpz`gXbP(&CK(u-]SZq 896cjm`e)SP?o:iIN7c=vTz-1PUAWz!Y+,^z0,S5' );
define( 'LOGGED_IN_KEY',    ')Xzd-GgqT7ae%jO12?o?7=~[Ft]hRR9fgC><&d]o_7^~&yr?v?Q:Da<%=CCxve&!' );
define( 'NONCE_KEY',        'Mx4Q[|X4`gL_Rg2`+(yq1#hJo:Fq&~6;o$[*?W_{bWavnw3mDvZa{~C3lop@lL1R' );
define( 'AUTH_SALT',        '/m bWP[fs%0mGp2v-m9JZa%.6Ip/C#]E_@`_NLKN4Y?Rjjho~[Zt{Y#$1 @/(!S0' );
define( 'SECURE_AUTH_SALT', 'DM98 J7xiqw<?}dsmo^j6WK;VVCac(=dn}wwQL10SjA ]!Js.ar2Qpd]^u2I;lFq' );
define( 'LOGGED_IN_SALT',   'c*7gm}r +uS:Bp?vA6;*`dvvXEU3}w2.S=vvIsXiUzNQ0,ZVx/TcS$GME{F94+jL' );
define( 'NONCE_SALT',       '7j!vwPY/i-|k]dh!Xu6Ja<+A5(ASpRRLw%2A?-&Rme$4XC/mK!ER}]a3yMRgHm<W' );

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** 设置WordPress变量和包含文件。 */
require_once( ABSPATH . 'wp-settings.php' );
