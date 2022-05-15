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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '9X**s0/3,3-q.2ia%-0aqf@1WM%9~Qn[?2;.P-1rhvz%i(7~<j*%iW#rTv,+*ah;' );
define( 'SECURE_AUTH_KEY',  'cu(|lRixMA15$05mV0a%9/3!@WHX7hEo3MiIarZJ5?s^/blE;hn`#}MuOco4#K75' );
define( 'LOGGED_IN_KEY',    'N&t@RP<T#7uP}1:?Ub&vZ#5$Me]]]z5dWQ8jUzMT}Vln~ngkN~/ZfpuW>IY<.9~{' );
define( 'NONCE_KEY',        '^j(*=TJ$@`ML:}.d;GI<e{6y:J@Q_Dg[A@b+UD~~/xN-GUMA`S7 lw_LP4:8Mm}j' );
define( 'AUTH_SALT',        'yhdcY5SP^wgh;3X!Da/,80}<,c)o)7t~zYN0boPgwD`mGu= H@W?UgAG#!xX7u8>' );
define( 'SECURE_AUTH_SALT', 'aZ_YqHe(SAj3S8(raDM>;N}N<0&axZ[nH@7p]3Xr.MJ/]AwmsDz^9w^<1WDmH[|~' );
define( 'LOGGED_IN_SALT',   'a8O%;w`#Mm0=-RVF0KKmuuc9Py$^nAx1X8kaaC>&:H)yrkpzoc!Eyod8OB/dPjZg' );
define( 'NONCE_SALT',       'X5*:nB:v+Q>#J|QxafjC{gLy/m,W.N+H@{%jWlXuI/uy$>;6UsAN9u*PMP3[#b)n' );

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
