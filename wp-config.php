<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'nutrisau');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '/+8{Ckt(?f=~6?T5Knmr[*SKwgxiWy^TWN*d27!{`ffQ8s`qAQ_s%m&_|v|]R[GR');
define('SECURE_AUTH_KEY', 'QEG<,)zyGt9lrqyTwP=OXh<dUc^X[FeD]$MgM4gc)8 .k4<VW,q,pzal:#u]v,U0');
define('LOGGED_IN_KEY', 'hU*d[6 -VBq+1A)t{bcZ=~W|KZ;jgL{LBHys[/RuuDl3#q0K=vN_9%w`Cpqdn6C^');
define('NONCE_KEY', '(/*,dldM.,+qyD.1Rql>=(hwgg4!g,pU 8axfR7;O{c[?b[Cf=a}~t*,;LO@f*{a');
define('AUTH_SALT', 'dE6Hq+Q^=u;Fq<S&{5VF>LUHdy9hxCK<xym[VJ%KCUy?!|;MHg(lQO5U71A.EEt@');
define('SECURE_AUTH_SALT', 'I4R}F}1_zO9JKe{<oObB${}9T(<c{p0 y4R]`|Vlk=L|d/d`rD_%)`P:&30.q Pr');
define('LOGGED_IN_SALT', ')=)Lx14zps`Ry3/a&ZDZ12}m+j~:FH1C,ghZjPGKME|27a64T,g]u/{Gpq -L}+b');
define('NONCE_SALT', 'Z+B,,N/mpAcc0mjGlA& O(Vq$k[_A!e29Z1N?D{BfWB27@pqTU!{x{+8`C3;m%A$');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

