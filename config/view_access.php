<?php
   $VIEW_ACCESS['sign'] = 'sign';
   if (isset($_SESSION[$CONFIG['host']]['access'])) {
     $VIEW_ACCESS['pools'] = 'pools';
     $VIEW_ACCESS['feedbacks'] = 'feedbacks';
   }

 ?>
