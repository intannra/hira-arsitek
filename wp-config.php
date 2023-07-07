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
define( 'DB_NAME', 'hira-arsitek' );

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
define( 'AUTH_KEY',         '}v|E&iO;#U/]e)Ck,5P5qgKg(]OvYjbQ+7-FL*3Q,NVx NbZ7iJU|]BL.(rVPsIr' );
define( 'SECURE_AUTH_KEY',  'A-SVj@b{&OXc]GQ1J eK58Q:k]N[(gcnRZL`aao ;19bpg0IKbDWdn-ziuy{d0$7' );
define( 'LOGGED_IN_KEY',    '&RcRYhO([=V^BRFxhg~yQH y)HasQ27,9rQnI8U*X#~~Ti`-d6k&=GZT9],$ Im0' );
define( 'NONCE_KEY',        '@T*:&C+)2}x8jGYNAT=j(I,KJU5VdTEV;CxxAiBGZgO3zS2;CK}czzy AV{A,uBn' );
define( 'AUTH_SALT',        ' Sfs~P@H@Kl-x`W?>uvVmxe8DcEfdo$#qyaZcf@/{lGI6aw#X 2A=,xQuEnn7X<V' );
define( 'SECURE_AUTH_SALT', 'wEU 7xAMZ@PzV6yD@?F3e5bx-+F.vr.+6K`PyV@F;J2rb2)0[hdVN4lD|IvPs~{8' );
define( 'LOGGED_IN_SALT',   'TVv,b(SFa0tUaU}XsmLC@#o1/lO5n`^7Bg]$a)=UIwNZY&@MJqbgwpb1@>BeU}Lm' );
define( 'NONCE_SALT',       'C!Y7kE^ubbak?a4+sxHes&T$0=>mR0@?>#4:?jB^czMBUz4C~AAzhy9(5bm4ynJ ' );

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
