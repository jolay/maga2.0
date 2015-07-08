<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'magademodb');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'demo');

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
define('AUTH_KEY',         ':{15APU| =Y=E[B;mU1k|H:XD(iKE<sokH+/n#n_51+(lO<O{aW#Xou|J#bwuS<W');
define('SECURE_AUTH_KEY',  '=qs:Et,swa--;dfI97 J4`JhMPmzkh ?h JHeuKwHL[~B]4xB#4Wz:%-^:+0ky%~');
define('LOGGED_IN_KEY',    '$7(dR;S.)Ua?![=;+{.UdNn0 z<x^h !;F9~uFCv.Z|v51d9ru*+[l``pervG`Tf');
define('NONCE_KEY',        '&zS`/D0pM1}uEr|i|j/<II^P9S:wZWmFmRF$EBW1=Jb)R6i{m]h@$ohHVg9Q+VL3');
define('AUTH_SALT',        'kp@CN}xYq=J|l:f:1,D@*XVd]6/,R(DY+I|gFYL]!QkRGd[r)u/{g-P+cxz|_smx');
define('SECURE_AUTH_SALT', 'Tr6R}>WD<}CHxJo>XA|wqw8 Ehh^x|VFR|AstvmYkU*<8Zzf+mXg~ZLYgk`U&vuO');
define('LOGGED_IN_SALT',   '056P+#&.>,]>LXr80mnr+_K/,ERqE`pLhX2B{K^8+}Dp!-]DlI}OHzW-vPWE`_|)');
define('NONCE_SALT',       'LT_Qe.F3Ev=kg_A|!O+#D$A1)QS|(zzJjoL3.by9n6iIqZA}iu;E *DO2Z#GT[ZF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
