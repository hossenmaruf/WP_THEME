<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'g|ZE|i r7<@yKms|u+KdYibc4(EZ5`U8J:TJ#`lrvL1;yE}I4(PGDn(bml+tJ*^i' );
define( 'SECURE_AUTH_KEY',  '#1h98^q,Ex%1^PvdUtTn[?DR9!UC[Zx g>/OUwlxW;fS6jx$(&lm]ZFK:.O,>>p(' );
define( 'LOGGED_IN_KEY',    '?hh_@KiO<5M=A:4vMQEa%TWGr`[}=LBq|cFA3$A?U5=]#=fO{&n D|N$>cdPCU,f' );
define( 'NONCE_KEY',        'ZnIbo#f?tETE*M*Y?Vn&[n/rtK:XA8Q|Nx~i;-sN4<`$>k;a`h|z=QOJ,n`B=4(w' );
define( 'AUTH_SALT',        'k$Z3mWJ|P!$d:/k%D$/~Z9{dS5#%57pjGB*FP jX0<$R+YdbuOq`!dCzc(LSO5Bi' );
define( 'SECURE_AUTH_SALT', '0kx;xHGXe#lF &K9z6Mm.I3v(yZhf+T?[Uj;]*GTti/,c*A>XPtID|c0/k[Awf{o' );
define( 'LOGGED_IN_SALT',   'W2Rk){4ZU>6oAk}raqxdYSIP^WW)Qcp5KX;Ur2HtO9snnx sqN|H8|eQLm9h]V%2' );
define( 'NONCE_SALT',       'yZ/i0CYQC,0kY]7@^_)mLvh(X[:u`&>tKDuQD.tD^C*-s|p)#WH.zRV2cS[C[kjU' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
