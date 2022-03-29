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
define( 'DB_NAME', 'lift_theme' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '4,HXNMZnPx.Ek(Hi|]JR#bA -x6_[6Br;5y1pCJi.fn@8MXSH%_n2 gY,H~^6&Iu' );
define( 'SECURE_AUTH_KEY',  'QL{tOxUNzzj5wG{pg.,v%5y{1/2-{%Iw9ek}n`<j|`9vRo0@}Tn1<f.[Sc,w7mh,' );
define( 'LOGGED_IN_KEY',    'whPZnaEGDYB!W&Y+q /UF6[5<a(=+J:NZ/P&Qf!S1!Wz7e}@%fP_OMTbZ,PB#`M1' );
define( 'NONCE_KEY',        '?;W>)r>i]UQzb<hJ&)u^`BmB<MuF%k2n.aBSs`]Ws<SPvN.LaRDdSNr=~)K~,-.-' );
define( 'AUTH_SALT',        'e160*`>GuPIg|;gr1oO(qhv<vov0wC&+k;0<s45,1X.JFf5M@<] Phw5v>kigA4a' );
define( 'SECURE_AUTH_SALT', 'pw-STP==#ai]1)*7d/ahujl2hBV&1{#,eMd@~BgN*;DH<hp8~wvW:-9!/nvO8Oth' );
define( 'LOGGED_IN_SALT',   'Zug[MAo`OK}kJm)cH?+rmPy5^S6b/_oGC>QQJV I8v/_2<Fo=h$m@fhR%x#V$]UZ' );
define( 'NONCE_SALT',       '{&f8+_ErM0x9$~z |4=;F.Qs>nb<#.><<TQ#3m|uj4VR,}UD$r4]-S?@#ml3nbQ;' );

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
