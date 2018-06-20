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
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'a' );

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
define( 'AUTH_KEY',         '`CpFI7vs2mLU2}R*~kZlkZn$L[RT99]BR.NaVnE:=jK~h>BCDXF1-KPzF.b7 mQh' );
define( 'SECURE_AUTH_KEY',  '~*s=tK31aB/v!GnSG3bi4D2)IIx8?<rF<)GGB$]=.Cb1M8posO(.WO$-FV,:TjO|' );
define( 'LOGGED_IN_KEY',    '{? ^|L,a}Sx_nZaRd^fz!@%{)%xx6_A{T874hh_a|13bVbfjtv&2MTOfNLesAzaj' );
define( 'NONCE_KEY',        '8@5+pDDnKJ+CZjnGsAVsWZ]=Z{<WNN-Yz!N@LjgeWK#l6c>41SZ~JGjyO.3#Af3b' );
define( 'AUTH_SALT',        '06`^sYZ@kEng57jvrAFa@JV3V Q=Sv|~<e%R]TUGag!rG LtcSFj.)xQ@IH6O+PR' );
define( 'SECURE_AUTH_SALT', 'FY,cz{-KsubNFbJ/:<(wbkGS@-~L_2~C?M9#=rVh{c%<Z.fhyJ94?xQl|[d#1H-R' );
define( 'LOGGED_IN_SALT',   'w8D!sqkhAT?P$e4hOeT|*M[b*^ :qmkw-5)Qf+D@_RLq2Wo$D5=.iVtki!ckynpU' );
define( 'NONCE_SALT',       ';](4jnHMtuzx,ipC1=J,pD`~?o<)F,0$UpgcU,(B!ok/!sv<?$NDQpQ^NaeV|=$X' );

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

