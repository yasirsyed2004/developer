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
define( 'DB_NAME', 'developer' );

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
define( 'AUTH_KEY',         'sXbY!5IiFfM|rIgb 3tmdo|F<yy R!`/y;({0ph5(Lm[ZE+ <qX jIAf8zFx&osh' );
define( 'SECURE_AUTH_KEY',  '}h( fuef=/vVYTFI,D BV-,6_}?bO0/P|Wp&zj/xwU2ZI2vnnGla_KsK;e`U>,C]' );
define( 'LOGGED_IN_KEY',    'bhYT@MB9?7P[y0E@]yX?KAim7*!cyhIli73iPc>u>Oj,N&>o6d6oAebVH;WgK65X' );
define( 'NONCE_KEY',        'r 6mEa+`Fupn4jDtMV>h[ZZQ`e8:AO^?FC}g9xk.9CG@7.M+o~R+|J7t6jkkrk(G' );
define( 'AUTH_SALT',        '3?wt8%Zjjy^^Q:p#IiNp6F1J|xG yEYm4ID[>6LYRYJ19=>:`lxq^4jxhi97=1tS' );
define( 'SECURE_AUTH_SALT', 'cS9EeBWz0GN4nvI9zLG=T2ZL uoD=3jv=5ZUX;j<>,SH%K/#r!Ot7OL14n%Xnk;d' );
define( 'LOGGED_IN_SALT',   'Rm %Ncwjf!>[RbVonVLL`;V(}En(QA#wp9|2Z!<YvV*z%H~o`s(ScUsS.E2O90<F' );
define( 'NONCE_SALT',       'xUOAiJ3.(+tHR.UXIR,psjU?/u@tLtwK?IJfuS6Y0i`z>9/Z5hOatpi}<fS_4KpM' );

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
