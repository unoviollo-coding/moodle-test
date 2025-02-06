<?php
///////////////////////////////////////////////////////////////////////////
//                                                                       //
// Moodle configuration file                                             //
//                                                                       //
// This file should be renamed "config.php" in the top-level directory   //
//                                                                       //
///////////////////////////////////////////////////////////////////////////
//                                                                       //
// NOTICE OF COPYRIGHT                                                   //
//                                                                       //
// Moodle - Modular Object-Oriented Dynamic Learning Environment         //
//          http://moodle.org                                            //
//                                                                       //
// Copyright (C) 1999 onwards  Martin Dougiamas  http://moodle.com       //
//                                                                       //
// This program is free software; you can redistribute it and/or modify  //
// it under the terms of the GNU General Public License as published by  //
// the Free Software Foundation; either version 3 of the License, or     //
// (at your option) any later version.                                   //
//                                                                       //
// This program is distributed in the hope that it will be useful,       //
// but WITHOUT ANY WARRANTY; without even the implied warranty of        //
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the         //
// GNU General Public License for more details:                          //
//                                                                       //
//          http://www.gnu.org/copyleft/gpl.html                         //
//                                                                       //
///////////////////////////////////////////////////////////////////////////
unset($CFG);  // Ignore this line
global $CFG;  // This is necessary here for PHPUnit execution
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'db';
$CFG->dbname    = 'db';
$CFG->dbuser    = 'db';
$CFG->dbpass    = 'db';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array(
    'dbpersist' => false,       
    'dbsocket'  => false,
    'dbport'    => '',         
    'dbhandlesoptions' => false,
    'dbcollation' => 'utf8mb4_unicode_ci', 
);

$publicDir = '/var/www/html/public';

$CFG->dirroot   = $publicDir;
$CFG->libdir   = $publicDir;
$CFG->dataroot  = '/var/www/html/moodledata';
$CFG->wwwroot   = 'http://moodle.ddev.site';

$CFG->routerconfigured = false;

$CFG->directorypermissions = 02777;

$CFG->admin = 'admin';