<?php
/**
 *
 * Best Answer. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, kinerity, https://www.layer-3.org
 * Nederlandse vertaling @ Solidjeuh <https://www.muziekpromo.net>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
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
	'ANSWERS'	=> 'Antwoorden',

	'BEST_ANSWER'	=> 'Beste antwoord',
	'BUTTON_MARK'	=> 'Markeer antwoord',
	'BUTTON_UNMARK'	=> 'Markering opheffen',

	'ENABLE_BEST_ANSWER'			=> 'Schakel beste antwoord in',
	'ENABLE_BEST_ANSWER_EXPLAIN'	=> 'Indien ingeschakeld, kunnen de onderwerp starter (indien toegestaan) en moderators (waar toegestaan) een onderwerp antwoord markeren als het beste antwoord.',

	'FULL_POST'	=> 'GA NAAR VOLLEDIGE POST',

	'INVALID_FILTER'	=> 'De filter parameter is ongeldig. Controleer of deze variabele correct is.',

	'LOG_MARK_ANSWER'	=> '<strong>Gemarkeerd bericht als beste antwoord</strong><br />» %1$s door %2$s',
	'LOG_UNMARK_ANSWER'	=> '<strong>Markering als beste antwoord opgeheven</strong><br />» %1$s door %2$s',

	'MARK_ANSWER'			=> 'Markeer bericht als beste antwoord',
	'MARK_ANSWER_CONFIRM'	=> 'Weet je zeker dat je dit bericht als het beste antwoord wilt markeren??',

	'SEARCH_USER_ANSWERS'	=> 'Doorzoek de antwoorden van gebruikers',

	'TOPIC_FIRST_POST'	=> 'Je kunt dit bericht niet markeren als het beste antwoord omdat deze het eerste bericht van het onderwerp is.',
	'TOTAL_ANSWERS'	=> 'Totale antwoorden',

	'UNMARK_ANSWER'			=> 'Verwijder het bericht als beste antwoord',
	'UNMARK_ANSWER_CONFIRM'	=> 'Weet je zeker dat je dit bericht niet wilt markeren als beste antwoord?',
));
