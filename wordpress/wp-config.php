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
define( 'AUTH_KEY',          'L$7?VydV$TJ?y0=7Aw*>lC(_PV3xeNnHIpDH*N6rq3}b>0}xqNp1~]wA/@C%kUo9' );
define( 'SECURE_AUTH_KEY',   'uyHVmJ$3TWclas*z=*2,je46(=/uk2wN9tiNJJf6(_~sb#HZkPC$Glwz vi_T/h^' );
define( 'LOGGED_IN_KEY',     '+uD*[.PKs3!GNDxHs{[UxqX%?qs 1Ijm(=t:W?u{SrSA[odtZma, KPVW.`?@UKc' );
define( 'NONCE_KEY',         'j{B&:^6+J?M[fp`KBfhfs6()b5j}9b!FI])<(p` owhQD=Kyc3&ogeFi^2W*QCa+' );
define( 'AUTH_SALT',         '|(#(uWJ(XrSt/8CrxnG-],-ULS6/0KHN*?qG %S.@M&g&,&7I~cc;.=:NdR_u[,|' );
define( 'SECURE_AUTH_SALT',  '#]z5^kP/5_6qV +x +4!e`2S$Bm#&O7PeJjso<}E0)z<eBPN+K%~CZ`4C}p zRAc' );
define( 'LOGGED_IN_SALT',    'Sr<9q7lES.Id:8Ra/:kqf74),;FMz::E(2ft=L{8`{|X8gnOTy)T<*ais|V4G/LX' );
define( 'NONCE_SALT',        '[*sd(0%~Ut}wbr +~D0A&ezbgBu}Q.PdfcvY0~IlFTO>7L*~>=~A!8Q3X-Fx*qPU' );
define( 'WP_CACHE_KEY_SALT', 'p{4.$PFJ,QpZRc:H(HHB<MnpU<cfv+ 9nn,CIJhtS:ee/)b~duR9NiL~]C:m,@Ta' );

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
