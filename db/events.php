<?php
// This file is part of Ephorus
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

/*
* Observers
*/
$observers = array (
    array(
        'eventname' => '\assignsubmission_file\event\assessable_uploaded',
        'callback'  => 'plagiarism_ephorus_observer::assignsubmission_file_uploaded'
    ),
    array(
        'eventname' => '\assignsubmission_onlinetext\event\assessable_uploaded',
        'callback'  => 'plagiarism_ephorus_observer::assignsubmission_onlinetext_uploaded'
    ),
    array(
        'eventname' => '\mod_assign\event\assessable_submitted',
        'callback'  => 'plagiarism_ephorus_observer::assignsubmission_submitted'
    ),
    array(
        'eventname' => '\core\event\course_module_created',
        'callback'  => 'plagiarism_ephorus_observer::course_module_created'
    ),
    array(
        'eventname' => '\core\event\course_module_updated',
        'callback'  => 'plagiarism_ephorus_observer::course_module_updated'
    ),
    array(
        'eventname' => '\core\event\course_module_deleted',
        'callback'  => 'plagiarism_ephorus_observer::course_module_deleted'
    )
);
