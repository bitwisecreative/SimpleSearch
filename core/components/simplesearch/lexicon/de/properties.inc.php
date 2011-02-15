<?php
/**
 * SimpleSearch
 *
 * Copyright 2010 by Shaun McCormick <shaun@modxcms.com>
 *
 * This file is part of SimpleSearch, a simple search component for MODx
 * Revolution. It is loosely based off of AjaxSearch for MODx Evolution by
 * coroico/kylej, minus the ajax.
 *
 * SimpleSearch is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * SimpleSearch is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * SimpleSearch; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package simplesearch
 */
/**
 * German Properties Lexicon Topic for SimpleSearch
 *
 * @package simplesearch
 * @subpackage lexicon
 * @language de
 */
$_lang['sisea.containertpl_desc'] = 'Gibt den Chunk an, der die Suchergebnisse, die Seitennavigation und die Meldung, wie viele Suchergebnisse gefunden wurden, enth�lt.';
$_lang['sisea.contexts_desc'] = 'Gibt die zu durchsuchenden Kontexte an. Ist kein Kontext angegeben, wird der aktuelle Kontext verwendet.';
$_lang['sisea.currentpagetpl_desc'] = 'Gibt den Chunk an, der f�r den aktuellen Seitennavigations-Links verwendet wird.';
$_lang['sisea.depth_desc'] = 'Wenn "idtype" auf "Eltern" gesetzt ist, gibt "depth" an, wie viele Ebenen des Ressourcen-Baums unterhalb der angegebenen IDs durchsucht werden.';
$_lang['sisea.documents'] = 'Dokumente';
$_lang['sisea.exclude_desc'] = 'Eine kommaseparierte Liste von Ressourcen-IDs, die von der Suche ausgeschlossen werden. Beispiel: "10,15,19" bedeutet, dass bei einer Suchanfrage die Ressourcen mit den IDs "10", "15" und "19" nicht durchsucht werden.';
$_lang['sisea.extractellipsis_desc'] = 'Gibt die Zeichenkette an, die den Auszug eines Suchergebnisses umschlie�t. Standardm��ig sind dies die Auslassungspunkte.';
$_lang['sisea.extractlength_desc'] = 'Gibt die Anzahl der Zeichen des Inhalts-Auszugs eines Suchergebnisses an.';
$_lang['sisea.get'] = 'get';
$_lang['sisea.hidemenu_desc'] = 'Filter zum Durchsuchen nicht in Men�s angezeigter Ressourcen. "0": Es werden nur sichtbare Ressourcen durchsucht, "1": es werden nur versteckte Ressourcen durchsucht, "2": es werden beide Arten von Ressourcen durchsucht.';
$_lang['sisea.hidemenu_visible'] = 'Nur sichtbare';
$_lang['sisea.hidemenu_hidden'] = 'Nur versteckte';
$_lang['sisea.hidemenu_both'] = 'Alle durchsuchen';
$_lang['sisea.highlightclass_desc'] = 'Gibt den Namen der CSS-Klasse an, die hervorgehobenen Begriffen in Suchergebnissen hinzugef�gt wird.';
$_lang['sisea.highlightresults_desc'] = 'Bestimmt, ob der Suchbegriff in Suchergebnissen hervorgehoben wird.';
$_lang['sisea.highlighttag_desc'] = 'Gibt das HTML-Tag an, das den hervorgehobenen Suchbegriff in Suchergebnissen umschlie�t.';
$_lang['sisea.ids_desc'] = 'Eine kommaseparierte Liste von Ressourcen-IDs, auf die Suche beschr�nkt wird. Beispiel: "10,15,19".';
$_lang['sisea.idtype_desc'] = 'Gibt an, auf welche Weise sich der Parameter "ids" auswirkt. Gibt man hier "parents" ein, werden alle Unterseiten der Ressourcen durchsucht, deren IDs im Parameter "ids" angegeben werden. Gibt man hier "documents" ein, werden nur die Ressourcen mit den im Parameter "ids" angegebenen IDs durchsucht.';
$_lang['sisea.includetvs_desc'] = 'Gibt an, ob die Werte der Template-Variablen in den Ressourcen-Templates zur Verf�gung stehen sollen. Standardwert ist "Nein".';
$_lang['sisea.landing_desc'] = 'Die Ressource, innerhalb derer das SimpleSearch-Snippet aufgerufen wird und die f�r die Anzeige der Suchergebnisse zust�ndig ist.';
$_lang['sisea.match'] = 'Match';
$_lang['sisea.maxwords_desc'] = 'Gibt die maximale Anzahl an W�rtern an, die bei der Suche einbezogen werden. Voraussetzung: "useAllWords" ist nicht aktiv.';
$_lang['sisea.method_desc'] = 'Gibt an, ob das Formular per POST oder GET versendet wird.';
$_lang['sisea.minchars_desc'] = 'Gibt die Mindestanzahl an Buchstaben f�r einen Suchbegriff an.';
$_lang['sisea.offsetindex_desc'] = 'Der Name des REQUEST-Parameters, der f�r den Seitennavigations-Offset verwendet wird.';
$_lang['sisea.pagetpl_desc'] = 'Gibt den Chunk an, der f�r die Seitennavigations-Links verwendet wird.';
$_lang['sisea.pagingseparator_desc'] = 'Gibt das Trennzeichen an, das die Seitennavigations-Links voneinander trennt.';
$_lang['sisea.parents'] = 'Eltern';
$_lang['sisea.partial'] = 'Partiell';
$_lang['sisea.perpage_desc'] = 'Gibt die maximale Anzahl der Suchergebnisse pro Seite an.';
$_lang['sisea.placeholderprefix_desc'] = 'Gibt das Pr�fix f�r globale Platzhalter an, die von diesem Snippet gesetzt werden.';
$_lang['sisea.post'] = 'post';
$_lang['sisea.processtvs_desc'] = 'Gibt an, ob Template-Variablen verarbeitet werden sollen, bevor sie ausgegeben werden, wie es bei der Anzeige der Ressource der Fall w�re, die hier zusammengefasst wird. Standardwert ist "Nein"';
$_lang['sisea.searchindex_desc'] = 'Der Name des REQUEST-Parameters, der f�r die �bergabe des Suchbegriff verwendet wird.';
$_lang['sisea.showextract_desc'] = 'Gibt an, ob ein Auszug des Inhalts jedes Suchergebnisses angezeigt werden soll.';
$_lang['sisea.tpl_desc'] = 'Gibt den Chunk an, der f�r die Anzeige der Inhalte der einzelnen Suchergebnisse verwendet wird.';
$_lang['sisea.tpl_form_desc'] = 'Gibt den Chunk an, der f�r die Darstellung des Suchformulars verwendet wird.';
$_lang['sisea.toplaceholder_desc'] = 'Gibt an, ob die Ausgabe direkt oder in einem Platzhalter mit diesem Namen erfolgen soll.';
$_lang['sisea.useallwords_desc'] = 'Wenn "useAllWords" aktiv ist, werden nur Suchergebnisse mit der genauen Wortkombination des Suchbegriffs angezeigt.';
$_lang['sisea.searchstyle_desc'] = 'Gibt an, ob entweder mit einer partiellen LIKE-Suche oder einer Relevanz-basierten MATCH-Suche gesucht wird (siehe MySQL-Manual).';
$_lang['sisea.andterms_desc'] = 'Gibt an, ob ein logisches UND zwischen den Suchworten eingef�gt werden soll oder nicht. Wird hier "Ja" gew�hlt, werden nur Ressourcen gefunden, in denen alle gesuchten Begriffe vorkommen.';
$_lang['sisea.matchwildcard_desc'] = 'W�hlen Sie hier "Ja", wird eine Platzhalter-Suche (Wildcard-Suche) durchgef�hrt. W�hlen Sie "Nein", wird nach dem genauen Suchbegriff gesucht.';
$_lang['sisea.docfields_desc'] = 'Eine kommaseparierte Liste von Ressourcen-Feldern, die durchsucht werden sollen. Beispiel: "pagetitle,longtitle,description".';