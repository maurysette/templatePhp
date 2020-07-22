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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Cutt!ng2020' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '54SK}seo?>fU`_JA_9P$ivSo%]>~;@ZIsr+ciySI-QpH->RQ daZ(:vxK][7MsXY' );
define( 'SECURE_AUTH_KEY',  '5lAjxW}a-o?DV#q~GiB=cpA}lJoV9N)+~TDEvIuf=%x-TU-X`{Y&9V/m3g/C1,tK' );
define( 'LOGGED_IN_KEY',    '`FIVls:{_&i1okwZ.G$}~Y~%A+i]<jB EF H`8lE)vE/AG#j8<<4F@t`I?>gB3NZ' );
define( 'NONCE_KEY',        '8*<=3>2pgM.Tf(Vcz{od61n?6>?83:-DK%d-`szlLxtpT_11=CbYkk_c[`I|XEg>' );
define( 'AUTH_SALT',        'a_qQe553S[c}GEsG93X&rADBe)4C8>&/L>m=J)moh4_K@xj1[]p5(!9=HPE7%i)?' );
define( 'SECURE_AUTH_SALT', '0_:7_K6m`yI?=`LR$F4PgR$p!-^)ueE$d/E2@B{#E4Jm^An7]$%<1!<5k{wmY/Il' );
define( 'LOGGED_IN_SALT',   '-HevA]ZK@xs_f0d|F)rz-XbC|MSs+C.(5kN&G+]3[hgRk%,uqy-+!mTUiX[t9i2v' );
define( 'NONCE_SALT',       'jh$HXpkEa])yl-#V%-kRMC}QGf&4M;wgDNE6Om8q J5xIbBsQ@h_+nhS}uy;gFYQ' );

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
