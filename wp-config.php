<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'orthodontist_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'DSMjS+c={cKpIp/z isZlv^k|VGc`Y-4ZorY1z5WsAae%BE+`Eh#rpiDfRzQ]hEd' );
define( 'SECURE_AUTH_KEY',  '{<S-f};Xiz6IP.*$BC!m}RpAD`s;v%&IarB>=)v0]|ky3^UK*tjfga]/lTlA)Fd,' );
define( 'LOGGED_IN_KEY',    'Y-b%kt<F}w{OGf7Uo)9C>jFm#~,Nm:^8_QM`~QH];mMRE3lu*+04Js1*xO2>f5WX' );
define( 'NONCE_KEY',        'r+t{[2~GnleFjQ]`1x~Z?Mf8XE .D,T}uM7i2mR01r[Imh&`gm])<YDko[}}!.EB' );
define( 'AUTH_SALT',        'UfT{`CA72$J@A4gIp~~,il~ZQQ*CdD b 2H@iD{7NO#YPnB6e(OlxB7MF/z$cGz,' );
define( 'SECURE_AUTH_SALT', 'qq%v|@2dmuC,{Zsrl4Xp]~lkhe@g=qZF0IQqi8q1Gtr]*wvk79h])i LSg-DwekT' );
define( 'LOGGED_IN_SALT',   'F?U9@6Y^u7r&L_3Zc%4I4xdJ!:yPTPPcR<bBpyYLk8|Ql.My,0UrQ_)aB#TeQFo1' );
define( 'NONCE_SALT',       'r8.:d5#|.&U~CNQIHc[8Li;^=NGlq(=S/J+ftg/=dh]|TxMLWSMv#>}^}6v:@TeG' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
