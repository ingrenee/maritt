<?php
define('WP_HOME','http://www3.incredibleamericas.com');
define('WP_SITEURL','http://www3.incredibleamericas.com');
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
define('DB_NAME', 'wordpress_maritt');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', '?VQ]TGi?=n?V1rHfx`bRZjKtUI]TviL9H&(G4  nE-  *QEd2>HXyM>U2l-1no6}'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', ';-#HMHXU03y/|6&9r?&jPnNV_>^T,jy?L[9F9CRmnqjIvtl*(RG/RGB!*f6+p4yW'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'c8+@#i%Us9[,I_t+JLw3>MSnQnYKdjxq<FM-!`}X-wcVU_JQRO1#9zh{3?R5yKq0'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', '%1]ltz&mzfQ=z!-scE8;ddf)cM.Ibl9,*{MrE<^a%aA6LAgL(ab~Y?Kwwz:oEf9n'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'tk1x/6Ov$Hw=Ahx`ZAeMU;BO8(KGAl[fLU&A+psmG.VZ;njw[y!}Eft<QJB8#g(^'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'S#q 4IPN{a^g<[r-^Akp[F&1dI.O(7E,*raTIUrR={yFh454oT/[r:WD[~zc]({Z'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', '%&(d~-HDDcw@(EWUJ+ER{YCY}EfjhVH37eh+ui&y[#BE`b-@YRt5jIZCE1Kr<$,g'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', '99c8Y2A9`i(h-<q>q$C^X)OyT^A<UN#Enyw9ZvG6,yI)vrepxmn0NM,w-gbi5u>V'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_ma_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

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

