<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * This file is used to export attempts in csv format. Called from gview.php (View All Grades).
 *
 * @package    mod_mootyper
 * @copyright  2011 Jaka Luthar (jaka.luthar@gmail.com)
 * @copyright  2016 onwards AL Rachels (drachels@drachels.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later.
 */
require_once(dirname(dirname(dirname(__FILE__))).'/config.php');
require_once(dirname(__FILE__).'/lib.php');
require_once(dirname(__FILE__).'/locallib.php');

require_login(0, true, null, false);
/**
 * The function for exporting results data from this MooTyper.
 *
 * @param array $array
 * @param string $filename
 * @param string $delimiter
 * @return array, false if none.
 */
function array_to_csv_download($array, $filename = "export.csv", $delimiter=";") {
    header('Content-Type: application/csv');
    header('Content-Disposition: attachement; filename="'.$filename.'";');
    header("Pragma: no-cache");
    header("Expires: 0");
    $f = fopen('php://output', 'w');
    $headings = array(get_string('student', 'mootyper'),
                      get_string('fexercise', 'mootyper'),
                      get_string('vmistakes', 'mootyper'),
                      get_string('timeinseconds', 'mootyper'),
                      get_string('hitsperminute', 'mootyper'),
                      get_string('fullhits', 'mootyper'),
                      get_string('precision', 'mootyper'),
                      get_string('timetaken', 'mootyper'),
                      get_string('wpm', 'mootyper'));
    fputcsv($f, $headings, $delimiter);
    foreach ($array as $gr) {
        $fields = array($gr->firstname.' '.$gr->lastname,
                        $gr->exercisename,
                        $gr->mistakes,
                        format_time($gr->timeinseconds),
                        format_float($gr->hitsperminute),
                        $gr->fullhits,
                        format_float($gr->precisionfield).'%',
                        date(get_config('mod_mootyper', 'dateformat'),
                        $gr->timetaken), $gr->wpm);
        fputcsv($f, $fields, $delimiter);
    }
    fclose($f);
}

$mid = optional_param('mootyperid', 0, PARAM_INT);
$misexam = optional_param('isexam', 0, PARAM_INT);
if ($misexam) {
    $grds = get_typergradesfull($mid, 2, 0);
} else {
    $grds = get_typer_grades_adv($mid, 0, 0, 2, 0);
}
array_to_csv_download($grds, get_string('gradesfilename', 'mootyper'));
