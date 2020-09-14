<?php
define( 'WP_CACHE', true ) ;
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
define( 'DB_NAME', 'u616650744_SEGYh' );

/** MySQL database username */
define( 'DB_USER', 'u616650744_hYebI' );

/** MySQL database password */
define( 'DB_PASSWORD', 'xF3Uwb5l05' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '+FG1^Y;CH&4wHX-uN*#*i`t6g8_fU/T1>%pGSd?*:g!UB2HbWR~psL9@9vc}nH3&' );
define( 'SECURE_AUTH_KEY',   'xV,d2%$mG&6TmxBcyX:%z;Jz$tTLL;F8<J|OW13ly,]E% O_0,I+M(DCIDT8 I5%' );
define( 'LOGGED_IN_KEY',     '@uVD1SHXf6MP6,/9:YJ;Ci4seaz;(uYcJK)5Sun?IB9&*mIrT!h*,AlTN5=/RLJw' );
define( 'NONCE_KEY',         '4KmSDRrYO}vlbn>|y_fzS+S<mwA/?=V+8*zT;Qje@1Ed]$i&1yU.mP&f]7tuN;J<' );
define( 'AUTH_SALT',         '$6C&E [klg9p7E$.-/[>5DiH->C>r<U}~IYF@&b@#I4?k+]oH$/lB2bBzno_9tgH' );
define( 'SECURE_AUTH_SALT',  '46Ooc=40YzuIFt?[jYj4;s.TE>C6=40_|b]yrO?$gGPH|2l_w*)DH0-|WHV[Zn~0' );
define( 'LOGGED_IN_SALT',    '?1,(lc#jd*72p-)6.4lHK;f~J92e7E]ByR&wOVKeDo=K9.s((bLv,oFXGqF:^0q?' );
define( 'NONCE_SALT',        'eiCLE<5}oWMx{bcI&aa@RUp7J0d2$!okG#3w2Ib,8[!r0Yyd0wth.L~i6)PSrk.y' );
define( 'WP_CACHE_KEY_SALT', ')=%w-x!B1q|eaS2cu}=tmdr2)tF.M?Wr_(+xwy_ui7}EA#n<$sU91q`xxdrD7 v4' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
