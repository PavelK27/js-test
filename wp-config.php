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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'js-test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'mXE,]]&a@Oyg3DfD[S?zTAd8q9>Q1qb#t/!feWR~I+xBV?;inQ+QWA<%3-Jy:s6|');
define('SECURE_AUTH_KEY',  '?^lkt{9({R~+1xj+W%X6|DY]O2=FcmMJ5RLX4s[[{}8;4cV66Nv6?+t+-^{VE<tf');
define('LOGGED_IN_KEY',    '0?WH] ub&Z4s>~vOB/sQc}lpJ-tzA!4PJChUe7[Rg| q{Easd]x  mm-?/;z:aiH');
define('NONCE_KEY',        'tubIRQgWux[(d9k+H1?[4c=Z-C(UQ}S/#><*~98{mmvBI@f3xy<_%)a,$P(:e@sM');
define('AUTH_SALT',        'E@F>B_.eEK=(Wrzd;&iZ#p.~uy!vus1dTC2l_6!obuPxKcn/+?)v%_;|wV_ygpb0');
define('SECURE_AUTH_SALT', '_QpwjDR#%vQeZI4V~IEj|W5jU2JB<|-j>|j6(eycPPV0)$Ofhs&h99afn~%Ff~bt');
define('LOGGED_IN_SALT',   ')5F-!h4H_`T-[%j_?DM5!isO?T1k,O-8rn_ 9cY@=[/|4!IYwaLPm}+W`7|!YQTl');
define('NONCE_SALT',       'K59j,mOSI#7N|/<tO}+:h{Vp&sPD[g$+gd+}_<0b`@)zal;QFnJ;}6OOb/gk!`]i');

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
