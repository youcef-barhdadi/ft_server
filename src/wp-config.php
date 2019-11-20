<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );
/** MySQL database username */
define( 'DB_USER', 'wpark' );
/** MySQL database password */
define( 'DB_PASSWORD', '1234' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'UErjPuX@D|D5T*zYlOAe4UInK]Z=6O_!x9d|CN8NE9f,0knMMgfK>h*YM4>.eY&L' );
define( 'SECURE_AUTH_KEY',  '^xM=X=OkWUc&A6;YqQGK6?}P3#vpnhjDOCOLm{si+TyAp#i0 66SCGA#FgR8m9>^' );
define( 'LOGGED_IN_KEY',    'gOd$9UQ|r+*(5u}0yn[|2>3V:Cb;CGy^B.l,443VL)F6.MXLVz:^c*DoUCIa}L2+' );
define( 'NONCE_KEY',        '3F-ZFB/$Xi5{O6yye*.v=:!P3hjFO/eC QVxXte_Cr_tP$AuRfN(or^gkQ)p v%Y' );
define( 'AUTH_SALT',        '){>9;P@t+wzYq@$}lRvvV`E*Khu-xjfFO#EM4Fk`&h?sCHce!p)$e [ATze%`.n%' );
define( 'SECURE_AUTH_SALT', '>uwZThX|,K[hgr2xP&fK@>TSY[:/Qe+,lbi=4(7Em+Y9Gg*g XxwwTn-=inqwYlM' );
define( 'LOGGED_IN_SALT',   '%Vd#Cq,`tS&1.f07!1)#3?=. C#r,M?lu>bMHj;EFI;FPg2n;={8;+vvVVxXl`Z{' );
define( 'NONCE_SALT',       'ipjqQZ1^kxlpT6B_Y#>&{CX].^q~FOE+S)(;052FD!TzG:!20F`j3dl^=w*{!?^ ' );
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );