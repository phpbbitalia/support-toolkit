<?php
/**
*
* @package Support Toolkit - SQL Query
* @version $Id$
* @copyright (c) 2009 phpBB Group
* @copyright (c) 2011 phpBBItalia.net - translated on 2011-09-30
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ERROR_QUERY'					=> 'Query contenenti errori',

	'NO_RESULTS'					=> 'Nessun risultato',
	'NO_SQL_QUERY'					=> 'Devi inserire una query da eseguire.',

	'QUERY_RESULT'					=> 'Risultati query',

	'SHOW_RESULTS'					=> 'Mostra risultati',
	'SQL_QUERY'						=> 'Esegui query SQL',
	'SQL_QUERY_EXPLAIN'				=> 'Inserisci la query SQL che vuoi eseguire. L’opzione sostituirà il prefisso "phpbb_" con il prefisso delle tue tabelle.<br />Se "Mostra risultati" è selezionato, l’opzione mostrerà, <em>se ce ne sono</em>, i risultati della query.',

	'SQL_QUERY_LEGEND'				=> 'Query SQL',
	'SQL_QUERY_SUCCESS'				=> 'La query SQL è stata eseguita con successo!',
));
