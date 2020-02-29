<?php
   require_once('./config/config.php');

   if ($CONFIG['mode'] == 'dev') {
     ini_set('error_reporting', E_ALL);
     ini_set('display_errors', 1);
     ini_set('display_startup_errors', 1);
   }

   require_once('./db/db.php');

   session_start();

   require_once('./config/cmd_access.php');
   require_once('./config/view_access.php');

   if (isset($_GET['cmd'])) {
     if (isset($CMD_ACCESS[$_GET['cmd']])) {
        include_once('./cmd/'.$CMD_ACCESS[$_GET['cmd']].'/index.php');
     }
   }

   if (isset($_GET['view'])) {
     if (isset($VIEW_ACCESS[$_GET['view']])) {
        include_once('./views/'.$VIEW_ACCESS[$_GET['view']].'/index.php');
     } else {
        
     }
   } else {
     if (isset($_SESSION[$CONFIG['host']]['access'])) {
        include_once('./views/pools/index.php');
     } else {
        include_once('./views/sign/index.php');
     }
   }

 ?>
