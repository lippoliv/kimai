<?php
/**
 * This file is part of
 * Kimai - Open Source Time Tracking // http://www.kimai.org
 * (c) 2006-2009 Kimai-Development-Team
 *
 * Kimai is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; Version 3, 29 June 2007
 *
 * Kimai is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Kimai; If not, see <http://www.gnu.org/licenses/>.
 */

if (!isset($_REQUEST['revision'])) die();
if (is_array($_REQUEST['revision'])) die();
if (is_array($_REQUEST['lang'])) die();
if ($_REQUEST['revision']=="") die();
if ($_REQUEST['lang']=="") die();
if (strlen($_REQUEST['lang'])>2) die();

$revision = (int)strip_tags($_REQUEST['revision']);
$lang     = $_REQUEST['lang'];

if ($revision < 130) die();

$message = array();

$update = "<a href='http://www.kimai.de/download_d.html' target='_blank'>zu aktualisieren</a>";

$message[0]['de'] = "
							Es gibt eine neue offizielle Version, die gravierende Fehler behebt.
							Es wird dringend empfohlen ${update}!
";

$message[1]['de'] = "
							Es gibt eine neue offizielle Version, die gravierende Fehler behebt und wichtige Neuerungen enth&auml;lt.
							Es wird dringend empfohlen ${update}!
";

$message[2]['de'] = "
							Es gibt eine neue offizielle Version, die wichtige Neuerungen enth&auml;lt.
							Es wird empfohlen ${update}!
";

$message[3]['de'] = "
							Es gibt eine neue offizielle Version, die kleinere Fehler behebt und/oder Neuerungen enth&auml;lt.
							Es ist nicht wichtig aber dennoch empfohlen ${update}.
";

$message[4]['de'] = "
							Es gibt eine neue nightly Version. Bei Interesse bitte vom Wiki aus laden.
							NICHT F&Uuml;R ECHTE PROJEKTE VERWENDEN!
";

$message[5]['de'] = "
							<span style='color:#0C0'>
								Ihre Version ist auf dem neusten Stand!
							</span>
";


$update = "<a href='http://www.kimai.de/download_d.html' target='_blank'>update</a>";

$message[0]['en'] = "
							<span style='color:red'>
								A new official version is available. 
								We fixed critical bugs so it's strongly suggested to ${update}!
							</span>
";

$message[1]['en'] = "
							A new official version is available.
							We fixed critical bugs and implemented important new features so it's strongly suggested to ${update}!
";

$message[2]['en'] = "
							A new official version is available.
							We implemented important new features so it's suggested to ${update}.
";

$message[3]['en'] = "
							A new official version is available which corrects minor bug or/and has minor new features.
							It is not important but though suggested to ${update}.
";

$message[4]['en'] = "
							New nightly build available.
							If you are interested you can dowload it from the wiki-page. 
							DO NOT USE FOR REAL PROJECTS!
";

$message[5]['en'] = "
							<span style='color:#0C0'>
								You are running the latest version!
							</span>
";


// 0 -> critical bugs fixed. update!
// 1 -> critical bugs & new features. update!
// 2 -> new features. update.
// 3 -> min0r bugfixes. update.
// 4 -> nightly build available.
// 5 -> latest version.


if ($revision > 136) $i = 1;
if ($revision < 138) $i = 4;
if ($revision == 139) $i = 5;
//if ($revision == 139) $i = 0;


if ($lang == "de") {
    echo $message[$i]['de'];
} else {
    echo $message[$i]['en'];
}

//echo "I:" .$i . " R:" .$revision;

?>