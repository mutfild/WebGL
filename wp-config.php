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
define('DB_NAME', 'exampleDBthbs0');

/** MySQL database username */
define('DB_USER', 'exampleDBthbs0');

/** MySQL database password */
define('DB_PASSWORD', 'r1wFAq71IF');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3^Y7GOR[swpdl:_][R4s-dg@w~s8C|:8!|RGOVYBJ!krnvY08@,@szGJ}8F>}ZgVc');
define('SECURE_AUTH_KEY',  'PDptWipOW_]*hoOV_w~-!kCK:1[~#SZ9GG5ClsVowZc[0||[szR4C18![hKONVKw@');
define('LOGGED_IN_KEY',    ';mqTbfIP$^ju$bi6{29*#TaPPW5DpemeiLT]u+x*iAH];5]1ehKSSGO-~hltWa#;');
define('NONCE_KEY',        'sw>rvBJ}7F>}kNUNR4BzckgnR>0v@,{^MQ3BM7jnQYcFMv$grycf}^>3AyjbjIQ');
define('AUTH_SALT',        'CGG4CosVdhKR~_lw~dk18:4C!>VcRRV8F@gockN|:wzzovCG[0J}0ckNYgJMz^vnv');
define('SECURE_AUTH_SALT', 'lpH]2#;.PT6DP29ipe]1x~W9HDK:ltSaah9_#:_|dGKV5swhlS#--~h9G#:G|:kNV');
define('LOGGED_IN_SALT',   'DH6;2+TbEHHGO19xahdlO#:t-thp59_]5~_OW9RZCGs-oosVd5~|~_wDK:119:ZhG');
define('NONCE_SALT',       'EI{bjYXfEMynuy*iqI{2;6*XeHLEMAmuTbbPX.<qy]txDL;9H];mPWPT6D+eiiqe');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
