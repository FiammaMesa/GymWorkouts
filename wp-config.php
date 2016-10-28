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
define('DB_NAME', 'miweb');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY', 'P1g&-)X GCx,0n{y|No4{DdwhmWzL8kN{nS;Bv3V]~=RJT|Z1?-2jnzSNz!+{1$*');
define('SECURE_AUTH_KEY', 'l/i^Vi!o75R4;Cz[GiOPcI1L3-vmYo+f`^XO^ZQ4kW#=!2c[h-{m-_b</m9kH-<m');
define('LOGGED_IN_KEY', '496RYFt_.|M]aJS+-40 45|mF+`wJLi]+I11;UWQ<2G#>WegsVCY(jkaJJz <.Ur');
define('NONCE_KEY', '=8L7:1~7[ZZ5L58iDA^Vdg5gf2.m2_xm.w5t#qch.IiI~c>m]E(,y~.w<zHksW8^');
define('AUTH_SALT', 'mSHf`%E  9K2HQQ~YTNR&IC[S`CVm(ZgcpwX,fJh)WE69{%f-g$oD,4iu{ 7T_JZ');
define('SECURE_AUTH_SALT', 'RW>2|,9CRO;=9nQ7(rgOI_ht;gVBFOh$xd2:k!3`Rf=pRC`6M$1@Q (=!9WcTMEU');
define('LOGGED_IN_SALT', 'njJhW$@*~SG*<[.?*!h^P,U|JBkMlV&9%gCLfr~khNL_*/=!lToBA8W:!.NasW6=');
define('NONCE_SALT', '4-`gjRZXO`JXYwv]%3GIPf84!hC_me[f 3<5mZxOjfuE|?n5mT=)6WWI l-r6uB|');

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

define('FS_METHOD','direct');
