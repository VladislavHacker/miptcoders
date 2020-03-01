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
        $url_after_update = "./?";

        foreach ($_GET as $key => $value) {
          $_GET[ $key ] = htmlspecialchars(strip_tags($value));

          if (strcmp($key, "cmd") != 0) {
            $url_after_update .= $key . '=' . $_GET[ $key ] . '&';
          }
        }

        $url_after_update = substr($url_after_update, 0, strlen($url_after_update) - 1);

        header('Location: ' . $url_after_update);
     }
   }

   if (isset($_GET['view'])) {
     if ($_GET['view'] == 'sign' && isset($_SESSION[$CONFIG['host']]['access'])) {
         include_once('./views/pools/index.php');
     } else {
         if (isset($VIEW_ACCESS[$_GET['view']])) {
            include_once('./views/'.$VIEW_ACCESS[$_GET['view']].'/index.php');
         } else {
            include_once("./views/404.php");
         }
     }
   } else {
     if (isset($_SESSION[$CONFIG['host']]['access'])) {
        include_once('./views/pools/index.php');
     } else {
        include_once('./views/sign/index.php');
     }
   }

 ?>
