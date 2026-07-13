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
define( 'DB_NAME', 'gymfitness' );

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
define( 'AUTH_KEY',         ',0T!w%kqQ~&|w8Q]b5Yzl]BH[Bl<AU(K=X}s8I_5lm:_ib/2<I)ieVh#Ib&6Ude7' );
define( 'SECURE_AUTH_KEY',  '6-4)_f$bdKX[-#z+Q<F8sFd}}1mZ`GwU1{Zh(Utr`!! Yo(Vzxa+nYzU,S@S?9d4' );
define( 'LOGGED_IN_KEY',    'UAq)CFEh yBdz4I{[6Q@U]VxKQ-s`3#&eYWv=y{r F:gCeKdlM!6O+lp1ef#h5M_' );
define( 'NONCE_KEY',        'A:Y9G:9}2U&Sa03VNKjN_C/5J;1@ o]qCHQ[mHrVH[>Dz@.jKUm]lH(q7$$E~4a>' );
define( 'AUTH_SALT',        'x|9Dsp8o&eJ&rh56UI` Kk)0`q8xw<tD>sXl$>nZ3Dsf)#`Ha!1M8ee+EDhb^yDL' );
define( 'SECURE_AUTH_SALT', '.Nhm.~WNCkg{|Dj ]3.wwU^-d!k:)&q&XKR`M-D#3SVJ[+L%FjjO&hy+rw*7#`)#' );
define( 'LOGGED_IN_SALT',   'wUGUZ/7>p&.<o=vYmoX?V<U3HcnVrp9!=8BC$!Q`(ZhE70l`4a@^TwPXD0mVB*VC' );
define( 'NONCE_SALT',       'PETRh>8+oB~p_fTB{MTe8$UoYTx NaKA7O#]:^M2Us[D%nY|xBaj@A?5$0oy_C*%' );

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
