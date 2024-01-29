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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'berbagisetup');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '[1Hbcr4hg#Tvm*c5D)o6J!(?:uWNGT@3 oJ]cap>UB^y*~,?DOlk/?KaOg]W7+>}');
define('SECURE_AUTH_KEY',  '9uS}#Es^wk~V!;1c@$@H;eP6,(E2V2V}3iOZNd_9d45WULIu&|.(T%x$s2e(5/Uq');
define('LOGGED_IN_KEY',    'j5{##zpr&;`@GTOC55FRt=Gcm0g`#Z|NJ3R:+co#<T;]fmEEzU0#KD~hF2`fZ9p=');
define('NONCE_KEY',        'B1Cijl:Rt<LwxGUUn%sdT:lx},glpPg@vcMvwR*z>7f5w!=uH~8fr2Rh6/vY3vzu');
define('AUTH_SALT',        'DXK#b[?n<CQFQ33%ba@h9nplBk=`twMATsJAp@4kDbtLGr.tqZ7;uC{(^nsuAoZ|');
define('SECURE_AUTH_SALT', '@GV2n !uDefs$bqs@1p#Xis=B?q1g9 tos,>Ra&S=?)|/0TVwb`00RPeTR|=*rBq');
define('LOGGED_IN_SALT',   '`^djTywI;oF8r@ct+$`&$oao%nRG:I2;nPUq)jwx4~NPv8uX4:unZ=;N4%MUaP%z');
define('NONCE_SALT',       'ypLwY8=IPt?<Fv:i}YECrtq./+[8pUmm_Dakqrc0FoiWN$XhsV9r/tu_b>HqY/8F');

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
