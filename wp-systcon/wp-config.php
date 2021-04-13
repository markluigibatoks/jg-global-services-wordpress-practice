<?php
error_reporting(0);
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
define( 'DB_NAME', 'jgglobalservices' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('DISABLE_WP_CRON', 'true');

define('WPLOGIN_KEYWORD', 'authenticationlogin');

/* Recatpcha Access Key */
/* Update it using a working google Private key */
// define('RECAPTCHA_PRIVATEKEY', 'recaptcha_here');
/* Update it using a working google Site key */
// define('RECAPTCHA_SITEKEY',  'recaptcha_here');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2_C,@VLQC_yis<-P3]h8xbH$$r8[&PW.ggStY=5dMa8<Jp*TO9g j8gx^Gz;m:xl');
define('SECURE_AUTH_KEY',  ';W)nShu-o?@N4DP+T?/#=^YL$CKe~0e/|@}FWW(p#T{R?ck9oDd.=+T(TYK_mI%C');
define('LOGGED_IN_KEY',    '}K`9Kv`_.F4+,6,d;vrfSv|)%8Dw_K3.ti+:^X4tEg_hedkc`#f^i$9l<n2[rn*A');
define('NONCE_KEY',        'py:xaQCBlC;MpK/x36[++Ud`#xd5aqYrP<+|0Uqo(LS8VIX>DiRsOq-|^vf1F(Yr');
define('AUTH_SALT',        '%a~Qm+t6+dj+}7c-[{R<c@AzMK??o]PXsxSfX0!Z$.t$UP9+WV?T~{8|Z|.8VImD');
define('SECURE_AUTH_SALT', 'a&;Zuuawh[Iv~$YA(Q0|8},SN JH$F@lmDxrmN*`F1h_jKnxw>U|#*Ct3k]EvPXs');
define('LOGGED_IN_SALT',   'ipTmzxH{niu*o#I~2sL2}]OZSK-nk`H*f5Q$h.BHeOJou2)*q/9+65#aS6ezTwGb');
define('NONCE_SALT',       '&PLfj,j(zo|L|uQrHA]5%k2t/KM-vT~!I+HUskn;fedBf/S]_:T/x%13^uzB0Gjf');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jgglobalservices_';

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
define('DISALLOW_FILE_EDIT', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
// if ( ! defined( 'ABSPATH' ) ) {
// 	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
// }

/** Sets up WordPress vars and included files. */
require_once( SYSCONF_PATH . 'wp-settings.php' );
