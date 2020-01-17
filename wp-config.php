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
define( 'DB_NAME', 'land_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '(*^esf8GvNDnEXqbZsj6jWFzT+?{`(.?^.BLqXG:9,Xd4&,TS5p%oK_Pt)C*r2gc' );
define( 'SECURE_AUTH_KEY',  'eCZ?6MHR3B5h//U!r*66V5RxC(&exHKD8SL$kdEg]N~UEs]i(!R12=gTMkr+}4Qn' );
define( 'LOGGED_IN_KEY',    'i|Md_(Y@NlRY#6@P^30},aLfprh+|*0K/#:}bPB&<=K])03;#{g]@{b#=X>!pm(k' );
define( 'NONCE_KEY',        'V1}Z&`i(;@D{pBLbH:&Z~>b^r#W]H 2.%fjhnnZZG(=8na]ZYE`6|/nOkdAYay]t' );
define( 'AUTH_SALT',        ',h? #q7}1E6B.??P3Kmcb0qD({3RQf+&q={7VZms{3M1-s!o!C}}%A2pfZYMiY7=' );
define( 'SECURE_AUTH_SALT', 'uqS6LO)i^f4_u64BTK9?v:[~OL0B2K!xsw:08MHPFif T<gv/)mD{5]$r2HfOEwJ' );
define( 'LOGGED_IN_SALT',   'E!F@(_Jz2}dY7,[^OCuq{4):yMh@ !XbS}%k<jj5vDeD,4Z=+D%(zWCva5<N]Rxr' );
define( 'NONCE_SALT',       '%;`d&p=ELY7/P jEZ qcL*gQ,C$}$(~O#pI,Oe[#xeI{iMDR/&QKEwX$.WbR&+`w' );

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
