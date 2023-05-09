<?php

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].DS.'OnlineGradingSystem');

defined('LIB_PATH') ? null : define ('LIB_PATH',SITE_ROOT.DS.'includes');


require_once(LIB_PATH.DS."config.php");
require_once(LIB_PATH.DS."functions.php");
require_once(LIB_PATH.DS."session.php");
require_once(LIB_PATH.DS."member.php");
require_once(LIB_PATH.DS."student.php");
require_once(LIB_PATH.DS."student_details.php");
require_once(LIB_PATH.DS."student_requirements.php");
require_once(LIB_PATH.DS."department.php");
require_once(LIB_PATH.DS."sy.php");
require_once(LIB_PATH.DS."instructor.php");
require_once(LIB_PATH.DS."instructorclasses.php");
require_once(LIB_PATH.DS."studSubjects.php");
require_once(LIB_PATH.DS."grades.php");
require_once(LIB_PATH.DS."room.php");
require_once(LIB_PATH.DS."database.php");



?>