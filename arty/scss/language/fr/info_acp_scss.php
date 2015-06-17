<?php
/**
*
* SCSS Compiler extension for the phpBB Forum Software package.
* French translation by Galixte (http://www.galixte.com)
*
* @copyright (c) Arty (Vjacheslav Trushkin) cyberalien@gmail.com <artodia.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

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
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	// Module name
	'ACP_SASS_MODULE'			=> 'Compiler des thèmes',
	'ACP_RECOMPILE_THEMES'		=> 'Compiler des thèmes',
	'ACP_SCSS_COMPILER'			=> 'Compilateur de thèmes',

	// Styles list data
	'COMPILE_THEME'				=> 'Compiler le thème',
	'RECOMPILE_THEME'			=> 'Recompiler le thème',
	'SCSS_STATUS_OK'			=> 'La feuille de style est à jour',
	'SCSS_STATUS_MISSING_CSS'	=> 'Le fichier stylesheet.css est manquant ! Ce fichier est nécessaire pour la recompilation.',
	'SCSS_STATUS_RECOMPILE'		=> 'Les fichiers SCSS ont été récemment mis à jour. Une recompilation pourrait être nécessaire.',

	// Compilation notices
	'SCSS_COMPILED'				=> 'Le thème a été compilé avec succès.',

	// Error messages
	'ACP_SCSS_MISSING_CURL'		=> 'Sur votre serveur, l’installation de PHP ne dispose pas du language CURL. Cette extension ne peut pas fonctionner sans le support de ce language.',
	'ACP_SCSS_MISSING_JSON'		=> 'Sur votre serveur, l’installation de PHP ne dispose pas du language JSON. Cette extension ne peut pas fonctionner sans le support de ce language.',
	'STYLESHEET_ISNOT_WRITABLE'	=> 'Le fichier theme/stylesheet.css n’a pas de permission en écriture. Vérifiez ses permissions.',
	'MISSING_STYLESHEET_SCSS'	=> 'Impossible de lire le fichier theme/stylesheet.scss',
	'NOTHING_TO_COMPILE'		=> 'Il n’y a rien à compiler.',
	'SERVER_RETURNED_EMPTY_RESULT'	=> 'Le compilateur Sass a retourné des données vides.',
	'SERVER_RETURNED_INVALID_RESULT'	=> 'Le compilateur Sass a retourné des données invalides.',
));
