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
	'ACP_SASS_MODULE'			=> 'Compila stili',
	'ACP_RECOMPILE_THEMES'		=> 'Compila stili',
	'ACP_SCSS_COMPILER'			=> 'Compilatore stili',

	// Styles list data
	'COMPILE_THEME'				=> 'Compila stile',
	'RECOMPILE_THEME'			=> 'Ricompila stile',
	'SCSS_STATUS_OK'			=> 'Foglio di stile aggiornato',
	'SCSS_STATUS_MISSING_CSS'	=> 'File <samp>stylesheet.css</samp> mancante! Ricompilazione necessaria.',
	'SCSS_STATUS_RECOMPILE'		=> 'File SCSS aggiornati di recente, potrebbe essere necessaria la ricompilazione.',

	// Compilation notices
	'SCSS_COMPILED'				=> 'Stile compilato con successo.',

	// Error messages
	'ACP_SCSS_MISSING_CURL'		=> 'Supporto CURL non disponibile nella propria installazione di PHP. Questo modulo non può funzionare senza supporto a CURL.',
	'ACP_SCSS_MISSING_JSON'		=> 'Supporto JSON non disponibile nella propria installazione di PHP. Questo modulo non può funzionare senza supporto a JSON.',
	'STYLESHEET_ISNOT_WRITABLE'	=> 'File <samp>theme/stylesheet.css</samp> non accessibile in scrittura, controllare i permessi del file.',
	'MISSING_STYLESHEET_SCSS'	=> 'Impossibile leggere il file <samp>theme/stylesheet.scss</samp>',
	'NOTHING_TO_COMPILE'		=> 'Non c’è nulla da compilare.',
	'SERVER_RETURNED_EMPTY_RESULT'	=> 'Il compilatore SASS ha restituito dati vuoti.',
	'SERVER_RETURNED_INVALID_RESULT'	=> 'Il compilatore SASS ha restituito dati non validi.',
));
