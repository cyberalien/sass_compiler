<?php
/**
 *
 * @package SCSS Compiler
 * @author Arty (Vjacheslav Trushkin) cyberalien@gmail.com
 * @copyright (c) 2015 artodia.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	// Module name
	'ACP_SASS_MODULE'			=> 'Compilar estilos',
	'ACP_RECOMPILE_THEMES'		=> 'Compilar Estilos',
	'ACP_SCSS_COMPILER'			=> 'Compilador de Estilos',

	// Styles list data
	'COMPILE_THEME'				=> 'Compilar estilo',
	'RECOMPILE_THEME'			=> 'Recompilar estilo',
	'SCSS_STATUS_OK'			=> 'La hoja de estilo está actualizada',
	'SCSS_STATUS_MISSING_CSS'	=> '¡El stylesheet.css está perdido! La recompilación es requerida.',
	'SCSS_STATUS_RECOMPILE'		=> 'Los archivos SCSS han sido actualizados recientemente. Es necesario la recompilación.',

	// Compilation notices
	'SCSS_COMPILED'				=> 'Estilo compilado correctamente.',

	// Error messages
	'ACP_SCSS_MISSING_CURL'		=> 'Soporte CURL no está disponible en su instalación PHP. Este módulo no puede funcionar sin soporte CURL.',
	'ACP_SCSS_MISSING_JSON'		=> 'Soporte JSON no está disponible en su instalación PHP. Este módulo no puede funcionar sin soporte JSON.',
	'STYLESHEET_ISNOT_WRITABLE'	=> 'En el archivo theme/stylesheet.css no se puede escribir. Compruebe los permisos del archivo.',
	'MISSING_STYLESHEET_SCSS'	=> 'No se puede leer el archivo theme/stylesheet.scss',
	'NOTHING_TO_COMPILE'		=> 'Nada para compilar.',
	'SERVER_RETURNED_EMPTY_RESULT'	=> 'El compilador Sass devuelve datos vacíos.',
	'SERVER_RETURNED_INVALID_RESULT'	=> 'El compilador Sass devuelve datos no válidos.',
));
