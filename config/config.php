<?php
/**
* Project Config
*
* @package MajorDoMo
* @author Serge Dzheigalo <jey@tut.by> http://smartliving.ru/
* @version 1.1
*/

Define('DB_HOST', '10.36.96.103');
Define('DB_NAME', 'db_terminal');
Define('DB_USER', 'root');
Define('DB_PASSWORD', 'rootpsw');

Define('DIR_TEMPLATES', "./templates/");
Define('DIR_MODULES', "./modules/");
Define('DEBUG_MODE', 1);
Define('UPDATES_REPOSITORY_NAME', 'smarthome');

Define('PROJECT_TITLE', 'MajordomoSL');
Define('PROJECT_BUGTRACK', "bugtrack@smartliving.ru");

date_default_timezone_set('UTC');

if (isset($_ENV["COMPUTERNAME"]) && $_ENV["COMPUTERNAME"])
{
   Define('COMPUTER_NAME', strtolower($_ENV["COMPUTERNAME"])); 
} 
else 
{
   // Your computer name (optional)
   Define('COMPUTER_NAME', 'mycomp');                       
}

 Define('DOC_ROOT', dirname(__FILE__));              // Your htdocs location (should be detected automatically)

 Define('SERVER_ROOT', '/var/www');
 Define('PATH_TO_PHP', 'php');
 Define('PATH_TO_MYSQLDUMP', "mysqldump");

 
if (isset($_ENV["S2G_BASE_URL"]) && $_ENV["S2G_BASE_URL"])
{
   Define('BASE_URL', $_ENV["S2G_BASE_URL"]);
}
else 
{
   // Your base URL:port (!!!)
   Define('BASE_URL', 'http://127.0.0.1:80');              
}

Define('ROOT', DOC_ROOT."/");
Define('ROOTHTML', "/");
Define('PROJECT_DOMAIN', $_SERVER['SERVER_NAME']);

// 1-wire OWFS server
//Define('ONEWIRE_SERVER', 'tcp://localhost:8234');    

/*
   Define('HOME_NETWORK', '192.168.0.*');                  // home network (optional)
   Define('EXT_ACCESS_USERNAME', 'user');                  // access details for external network (internet)
   Define('EXT_ACCESS_PASSWORD', 'password');
*/

/// (Optional)
//Define('DROPBOX_SHOPPING_LIST', 'c:/data/dropbox/list.txt');  

 $restart_threads=array(
                       'cycle_execs.php', 
                       'cycle_main.php', 
                       'cycle_ping.php', 
                       'cycle_scheduler.php', 
                       'cycle_states.php', 
                       'cycle_webvars.php');

 //Define('USE_PROXY', '127.0.0.1:8888');               //PROXY SERVER DETAILS (optional)
 //Define('USE_PROXY_AUTH', 'user:password');           //PROXY SERVER AUTH (optional)

 //Define('HISTORY_NO_OPTIMIZE', 1);


 Define('MASTER_UPDATE_URL', 'https://github.com/sergejey/majordomo/archive/master.tar.gz'); // master update URL (https://github.com/sergejey/majordomo/archive/alpha.tar.gz)