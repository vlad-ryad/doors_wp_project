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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-store-doors' );

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
define( 'AUTH_KEY',         'nS^gyy-#>A~1>sO!DE.xLG_>u5Bz0@bbGkcWqz0mquw`t2+g3A$}(_+9Kc>_5J9V' );
define( 'SECURE_AUTH_KEY',  'zEhv0=tvcp@lp?QySqA3!wKOo#{YBGj7PY=VN*-Wr`thn )vl,Dk#i]8A}u/`v[$' );
define( 'LOGGED_IN_KEY',    'u#M3e>uSjw<_g`_Ea.M{nYA]Wj.hqe1Vb3G%#F$iOE[&Mp3&~d zNP{W&2DWrz]%' );
define( 'NONCE_KEY',        'C)KcYQb@Q^K9`SqFD1(DABp>GB/K3|`kjbKgz_hi:&=&>?XKButh[,maDL/oS-%4' );
define( 'AUTH_SALT',        'riX$qv-b=jv91D=H}#*s8J4.jgv<v/@`,!H::I6St$1aY7ECy5gkSN{_RwfY4uhp' );
define( 'SECURE_AUTH_SALT', 'g?0|Xajx%IRG.+uj7J5W02[q_[98379@hN`Y_WXvQZ%x34aJ,*?F|LPj0`>r,P}T' );
define( 'LOGGED_IN_SALT',   'l6yy?|0Lr<m&+6vJ;XuySj z8p7R}$+;_]D6{u1I0Q=sb5{ra)(4-fqRbZv<oe]B' );
define( 'NONCE_SALT',       '7+|y:[dmfy$p[EgvFE%y/mP1;i~SEF>]K02k_YjoXZoPy:_xdem`UIS{bq,ChK9u' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
