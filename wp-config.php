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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'fxrs6K6rdACH4mU_6d(WHlEI{Iz9~_pHaI>>aY3Et-uz*Q|lMY^!}j7a:i`]!O`D' );
define( 'SECURE_AUTH_KEY',  '>KB.<-q+(m]pb{lh@[rxTJG{5W*1`)^]D39I(1?jqu+c>3:3Z/+ K!${~5lM^9w@' );
define( 'LOGGED_IN_KEY',    '32JGKPfM,8HDFEheD#zoXn;5JIR6~mnb*LNz!-u+bVRz=k@Xhs6ll#l}w7R3!kjT' );
define( 'NONCE_KEY',        'Ow)9VfqTh_.g|Dft]wm8mV{EjQ<yKbFq`<~GCR;sya?<)T!6Ph,1Y,n(y&oiB54H' );
define( 'AUTH_SALT',        '!0%]iW~n,SS:#2/QniI%)8MNc]dca[Au-$tn$Gh&7b`W{!L2F:kiNZsA5Lvip;J?' );
define( 'SECURE_AUTH_SALT', '<x2Wa&a{>aJ(SFlg5=7Nyx|9}qXad #H2O*~AaUoy~FAk@ec3{(v=a-Su:lf_s6Q' );
define( 'LOGGED_IN_SALT',   'G_.Bii*on`-4hOkU5/}5)|d_0Fbux.J9S83/Ay^RztKPG_U9toMr F6*]0]/%aT~' );
define( 'NONCE_SALT',       '6 LheH.ciTczt;2m4&LuGd[$eL8Yx?*B]gQ+agJ~ZLV%dgdTe[kv,=K99<mS64vr' );

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
