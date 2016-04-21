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
 * Joomdle connection test to Joomla
 *
 * @package    auth_joomdle
 * @copyright  2009 Qontori Pte Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once dirname(dirname(dirname(__FILE__))) . '/config.php';
//require_once($CFG->libdir.'/authlib.php');
require_once($CFG->dirroot.'/auth/joomdle/auth.php');

// it gives a warning if no context set, I guess it does nor matter which we use
$PAGE->set_context(context_system::instance());

$joomla_url = get_config ('auth/joomdle', 'joomla_url');
$file_url = $joomla_url.'/components/com_joomdle/connection_test.php';

$auth = new auth_plugin_joomdle ();
echo $auth->get_file ($file_url);