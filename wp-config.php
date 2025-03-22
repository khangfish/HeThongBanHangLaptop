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
define( 'DB_NAME', 'khang' );

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
define( 'AUTH_KEY',         '9[~E5jZZVnIn7i6QDXJ:50h/HZ9u+0giU:LaDcIb.9(E3gyg,^!2HFFZu[wa<%5c' );
define( 'SECURE_AUTH_KEY',  'VSe09pmd3x*[{mq&Gn)B<!<4yIColPb$$e-_M*tN=[Pe5LHn1~{.T44c@Tbr-*p!' );
define( 'LOGGED_IN_KEY',    '28u|cL<CD|KQKb7!#PI+|qqaEatJJO<2!3{rdig-ZdB*|I~*}j7|eP EblrkU7.q' );
define( 'NONCE_KEY',        'N9A1}m{h7Az#+l^P oq,|.-pd>Cis^^zP,X*m<7Jx>I(^wa[%qqg`P~^|#9+re@j' );
define( 'AUTH_SALT',        'FpF$NgxcF$$C3x.b!vk7AhlH2vDC1ev|@(>O14YvT2)6WxWhe> uKK|4oq0Zf`Kz' );
define( 'SECURE_AUTH_SALT', '.h]ZAvSnbZ;TEo*rm/SANps9QMvwkrzc#5<eDtqYH~f:,TwdEd=bOW4Wdkzc*W?N' );
define( 'LOGGED_IN_SALT',   '7_s.M=$L3 ~MPAqFrJ+&EqyO25RA9Nx%`?wC=mqYf4W9Z$~q}:mE^Fx,>2%LDA0d' );
define( 'NONCE_SALT',       ']WcRf5Z:xBdx1FCZa8dP9Hj6o#it9oDQ5S_d6[3}-NTL3=R.GguG/m;7i e7c3,u' );

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
