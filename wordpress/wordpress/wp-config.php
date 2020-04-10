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
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'O;r9(pph!R]g2yS973Ra}[,YMSuGZ [wxO{/cSA$kBD~kqUTCMqe,(~?65LUrPAE' );
define( 'SECURE_AUTH_KEY',   'A;_:4%Y2G}1TM?D1Qp4 YV[0|Eg{9esP_car#ZtY?K{ZK.{![qD^fc-8Z@eCqi@ ' );
define( 'LOGGED_IN_KEY',     '~@PB>-$kq@sW{,CdJ<V&Nbuf!8 vCnVNXMM(7(0V^MS-{^Q820NSS0EFi%Cr*PVA' );
define( 'NONCE_KEY',         '~zO?-*?P-.,`k;c9Fdar}Cpb/k|JM{A(laf@WFFo5zWI`]19[__WTaZ#ik_5]`)o' );
define( 'AUTH_SALT',         '+Y43KVo#%W-(8TM NbDiWSDn+iQN30MuVo)I!wEnR&V.m$azUi.WOQQWB &!}HwH' );
define( 'SECURE_AUTH_SALT',  'a :W)Rsp5h*C@DDMjJZsecadmarI9NIHb@nexc%Dt?5bZwXpRs]Rmt#5W]!5w#r;' );
define( 'LOGGED_IN_SALT',    '#d)2sED#EeRV4BFPn.+^H:py4e;d^ d,hR(g>1rC1.4AA!]SbOH;(pqfec~qm#V ' );
define( 'NONCE_SALT',        '>f/-xY$wgCa1-+mu[1w?sJzvNII.qa7kgr)zr#-4*InV-*3Y!l4*iwk$`DWw|jjs' );
define( 'WP_CACHE_KEY_SALT', '{EypSpky)e_0p{)kk7k{RjfgFZ<?!|u>n)9X:PQ9}eMc}9@@A>c?d5why2QTy!GV' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_jua_';


define( 'JETPACK_DEV_DEBUG', True );
define( 'WP_DEBUG', True );
define( 'FORCE_SSL_ADMIN', False );
define( 'SAVEQUERIES', False );

// Additional PHP code in the wp-config.php
// These lines are inserted by VCCW.
// You can place additional PHP code here!


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
