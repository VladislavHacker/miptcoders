<?php

   $VIEW_ACCESS['sign'] = 'sign';

   if (isset($_SESSION[$CONFIG['host']]['access'])) {
       $VIEW_ACCESS['pools'] = 'pools';
       $VIEW_ACCESS['feedbacks'] = 'feedbacks';
       $VIEW_ACCESS['stats'] = 'stats';
   }

   if (isset($_SESSION[$CONFIG['host']]['access']) && $_SESSION[$CONFIG['host']]['access'] == 255) {
       $VIEW_ACCESS['admin'] = 'admin';
   }

 ?>
