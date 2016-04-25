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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'student');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'BP0s-Gb><APN`(n@TMt(X7I2T,(=z@5,Q3;AcG.=!O$+|_>>Jd*>zYEood8/Sd5+');
define('SECURE_AUTH_KEY',  'wG%dZ,DZFu-[tF75:5E*.DooUqt]+N|*+k;%eO@:-]d)Z9uL67YJ*|5gpIu$mQd|');
define('LOGGED_IN_KEY',    'k_|SWxs]6RXL];USFRRF+X_tBa!bMRW_U`;~f`P]+oc-I7kpokZ?ij}26~uGQ3Nd');
define('NONCE_KEY',        '[|Z-h52C:4U?p1-|:xmku=zXT)C<.e9]U+F_Q^$VW+|.eiLBw8g.Y`7>AxE:|+Tf');
define('AUTH_SALT',        '2V7UJZ|VM=a.gZ[tzlI|-FK>dL.M3lv]0{vaQYnK|R5dEGg*Ys+DqdO.:a_4a24j');
define('SECURE_AUTH_SALT', '+|)d)K| a=m;<`i+H~+>Cq)seLo).n*!zByRs~|stz$89>0=P%Y4`D!fnJ_^Wh~S');
define('LOGGED_IN_SALT',   '3-3X~>w+fAOU.tVDrt5~e*-HAkj{LWw&=.YadI%-Pn?,m@P&[oc.ye-i=9Za%7eD');
define('NONCE_SALT',       'k98PXw|2=TvU Kym+[VTFJKeWeq6%;Q,EMXGQD6Nu8Wz+ZOD]Z6g;-fT+?|O^gr|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpphpkursus2016_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
