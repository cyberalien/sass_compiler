<?php
/**
 *
 * @package SCSS Compiler
 * Spanish translation by nextgen (Melvin García) (http://www.melvingarcia.com)
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
	'ACP_SASS_MODULE'			=> 'Compilar Temas',
	'ACP_RECOMPILE_THEMES'		=> 'Compilar Temas',
	'ACP_SCSS_COMPILER'			=> 'Compilador de Temas',

	// Styles list data
	'COMPILE_THEME'				=> 'Compilar Tema',
	'RECOMPILE_THEME'			=> 'Recompilar Tema',
	'SCSS_STATUS_OK'			=> 'Sus hojas de estilo estan actualizadss',
	'SCSS_STATUS_MISSING_CSS'	=> 'El archivo stylesheet.css no se encuentra! La Recompilación es requerída.',
	'SCSS_STATUS_RECOMPILE'		=> 'Los archivos SCSS han sido actualizados recientemente. Es necesario recompilar.',

	// Compilation notices
	'SCSS_MESSAGE_TITLE'		=> 'Compilando tema: ',
	'SCSS_COMPILED'				=> 'El Tema ha sido compilado correctamente.',

	// Error messages
	'ACP_SCSS_MISSING_CURL'		=> 'El soporte CURL no esta disponible en su instalación de PHP. Este módulo no puede funcionar sin el soporte CURL.',
	'ACP_SCSS_MISSING_JSON'		=> 'El soporte JSON no esta disponible en su instalación de PHP. Este módulo no puede funcionar sin el soporte JSON.',
	'STYLESHEET_ISNOT_WRITABLE'	=> 'File theme/stylesheet.css is not writable. Check file permissions.',
	'MISSING_STYLESHEET_SCSS'	=> 'No se puede leer el archivo theme/stylesheet.scss',
	'NOTHING_TO_COMPILE'		=> 'Nada para compilar.',
	'SERVER_RETURNED_EMPTY_RESULT'	=> 'El compilador Sass regreso un valor vacío.',
	'SERVER_RETURNED_INVALID_RESULT'	=> 'El compilador Sass regreso un valor inválido.',
));
