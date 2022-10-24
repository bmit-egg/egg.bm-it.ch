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
define( 'DB_NAME', 'wp_twqdq' );

/** MySQL database username */
define( 'DB_USER', 'wp_58nr5' );

/** MySQL database password */
define( 'DB_PASSWORD', '56rHi*k2nA~U2ff4' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'L-5NvWpxf/BO85ZM+FE#Xv2v2AO]p0-6y-g8r!4)L7*RLhS*9z8%L8@C%;JL80BF');
define('SECURE_AUTH_KEY', '*j8&tt1*m1&w3A~3bT)3y%3C#cm22@6R7Wp&6S9t86q-zS7(2|0aEy|13d-mS6cE');
define('LOGGED_IN_KEY', '27n8o147%:BBPj4hl6[/A&0#59S6x5~(PY)2/Yee1U+2s-1fgh(+)8mt9WC!NyOI');
define('NONCE_KEY', 'ROf8Xa4XV+&@U7l#N-/)%Pq)0k5yx]DS4cf0tfO/0L~&%t45:Plh7EP8H:L5SuAM');
define('AUTH_SALT', '896RwH34qdd2e6-H9M]StM;X5K:YG*gEH5Ej6hx]1lZQ9sfX8)86OrHn/2JeV7+-');
define('SECURE_AUTH_SALT', 'qYOH7jOi(w|98U;3+1h6E[+A*!2%K[Tud7)5%6SH9:+%(e23SECl-oa8D(2817[2');
define('LOGGED_IN_SALT', '7mN7KF9~U(vE7+b1Y4@9LKBO5+Z0V~(Ojs37soq~E1Jfe7h)I]Xcr5Wl#ybGCE(8');
define('NONCE_SALT', '5|20ab22l87pc9(/d5V0:&~/!5X-z4i95%6Fik#yOp4j7*(J&_gVNuKlUxdfOHTG');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '8cQVWVj_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
