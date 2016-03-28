<?php

// $Id: config.inc.php 2799 2014-01-09 12:44:22Z cimorrison $

/**************************************************************************
 *   MRBS Configuration File
 *   Configure this file for your site.
 *   You shouldn't have to modify anything outside this file.
 *
 *   This file has already been populated with the minimum set of configuration
 *   variables that you will need to change to get your system up and running.
 *   If you want to change any of the other settings in systemdefaults.inc.php
 *   or areadefaults.inc.php, then copy the relevant lines into this file
 *   and edit them here.   This file will override the default settings and
 *   when you upgrade to a new version of MRBS the config file is preserved.
 **************************************************************************/

/**********
 * Timezone
 **********/
 
// The timezone your meeting rooms run in. It is especially important
// to set this if you're using PHP 5 on Linux. In this configuration
// if you don't, meetings in a different DST than you are currently
// in are offset by the DST offset incorrectly.
//
// Note that timezones can be set on a per-area basis, so strictly speaking this
// setting should be in areadefaults.inc.php, but as it is so important to set
// the right timezone it is included here.
//
// When upgrading an existing installation, this should be set to the
// timezone the web server runs in.  See the INSTALL document for more information.
//
// A list of valid timezones can be found at http://php.net/manual/timezones.php
// The following line must be uncommented by removing the '//' at the beginning
//$timezone = "Europe/London";
$timezone = "Asia/Shanghai";

$strftime_format['date']         = "%Y-%m-%d %A" ;  // Used in Day view
$strftime_format['monthyear']    = "%B %Y";        // Used in Month view

/*******************
 * Database settings
 ******************/
// Which database system: "pgsql"=PostgreSQL, "mysql"=MySQL,
// "mysqli"=MySQL via the mysqli PHP extension
$dbsys = "mysql";
// Hostname of database server. For pgsql, can use "" instead of localhost
// to use Unix Domain Sockets instead of TCP/IP. For mysql/mysqli "localhost"
// tells the system to use Unix Domain Sockets, and $db_port will be ignored;
// if you want to force TCP connection you can use "127.0.0.1".
$db_host = "localhost";
// If you need to use a non standard port for the database connection you
// can uncomment the following line and specify the port number
// $db_port = 1234;
// Database name:
$db_database = "mrbs";
// Schema name.  This only applies to PostgreSQL and is only necessary if you have more
// than one schema in your database and also you are using the same MRBS table names in
// multiple schemas.
//$db_schema = "public";
// Database login user name:
$db_login = "mrbs";
// Database login password:
$db_password = 'mrbs';
// Prefix for table names.  This will allow multiple installations where only
// one database is available
$db_tbl_prefix = "mrbs_";
// Uncomment this to NOT use PHP persistent (pooled) database connections:
// $db_nopersist = 1;


/* Add lines from systemdefaults.inc.php and areadefaults.inc.php below here
   to change the default configuration. Do _NOT_ modify systemdefaults.inc.php
   or areadefaults.inc.php.  */

/*********************************
 * Site identification information
 *********************************/
#$auth['only_admin_can_book'] = TRUE;
$mrbs_admin = "宗琳";
$mrbs_admin_email = "zonglin@renrendai.com";
$auth['admin'][] = 'zhengzhijie';
$auth['admin'][] = 'zonglin';
$auth['admin'][] = 'liujiajia';
$mrbs_company = "人人贷";

/**********
 * Language
 **********/
$disable_automatic_language_changing = 1;
$default_language_tokens = "zh-cn";

// The beginning of the first slot of the day (DEFAULT VALUES FOR NEW AREAS)
$morningstarts         = 9;   // must be integer in range 0-23
$morningstarts_minutes = 0;   // must be integer in range 0-59

// The beginning of the last slot of the day (DEFAULT VALUES FOR NEW AREAS)
$eveningends           = 19;  // must be integer in range 0-23
$eveningends_minutes   = 00;   // must be integer in range 0-59

// Allows bookings to be marked as "tentative", ie not yet 100% certain,
// and confirmed later.   Useful if you want to reserve a slot but at the same
// time let other people know that there's a possibility it may not be needed.
$confirmation_enabled = false;

$min_book_ahead_enabled = FALSE;    // set to TRUE to enforce a minimum advance booking time
$max_book_ahead_enabled = true;    // set to TRUE to enforce a maximum advance booking time

$min_book_ahead_secs = 0;           // (seconds) cannot book in the past
$max_book_ahead_secs = 60*60*24*30;  // (seconds) no more than 30 days ahead


$auth['only_admin_can_select_multiroom'] = true;

$display_calendar = FALSE;


// Trailer type.   FALSE gives a trailer complete with links to days, weeks and months before
// and after the current date.    TRUE gives a simpler trailer that just has links to the
// current day, week and month.
$simple_trailer = true;

// should areas be shown as a list or a drop-down select box?
$area_list_format = "select";

$auth["type"] = "imap";
$imap_host = "owa.ucredit.com";
// Use TLS
$auth["imap_php"]["tls"] = TRUE;
# The IMAP server ports in the same order as the hosts
$imap_port = "143";


$is_private_field['entry.name'] = false;
$is_private_field['entry.description'] = false;
$is_private_field['entry.create_by'] = false;
$is_mandatory_field['entry.department'] = true;
$is_mandatory_field['entry.booker_name'] = true;
$vocab_override['zh-cn']['entry.department'] = "预订部门";
$vocab_override['zh-cn']['entry.booker_name'] = "会议组织者";

$mail_settings['organizer'] = '';