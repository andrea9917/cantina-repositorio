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
define('DB_NAME', 'wp_db');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'wp_user');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'pgWE98GrcC');

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
define('AUTH_KEY', 'f[=n[|CKK=A?`j_St^Wl~=(.S81}44ln3&^26 <dR?{8$.4J5zP/3lzU28]SpmBt');
define('SECURE_AUTH_KEY', 's_)[Snn|7fiI-1Y*q{~TS)@~X-W:ifC%0I&/b}nJs}4w[P+>XC9K(n[6fo}|WVJ-');
define('LOGGED_IN_KEY', 'j!b,eQf;<P3n)Wfd5p(jwAV*S XQ>w8i%91Y]$qfQW$+@_5NWQ4rvae|QdL(ekDD');
define('NONCE_KEY', '@,C,w|`OHUz]0PsU#f.Hy {m6Riaf55;EvG6Bt]a|#I=PX4&q6%:oIQ/adK0<#:=');
define('AUTH_SALT', '9Q4`7?rU=<Zb#ew oQDA6=fqM=PF8-<MRoD|~=J|YHfOh[CQmnKh-;qv)P2/N<@[');
define('SECURE_AUTH_SALT', '[>S[j/mz/9}p0raydpHxA98tOOyPox*qd5KPKv7c+!*poVA9XM-@}N9!UKj$-I_M');
define('LOGGED_IN_SALT', 'VU_[HDeDP#AT}~Z`)vU{c[qm#N8_oNyufni$IZZTr[DI]FH`;46@hjYB+e>?{Q`[');
define('NONCE_SALT', 'mpV$B%v>tE%FtQ9JF9#+AC]Y?B4*)v&3l;3QUOFwjJXIC]Mb`|?q-(Kn$#D$F=5b');

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

