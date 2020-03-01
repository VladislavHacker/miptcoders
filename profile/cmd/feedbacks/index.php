<?php
  if (isset($_GET['act'])){
    switch ($_GET['act']) {
      case 'new':
          include('modules/new.php');
        break;
      case 'sendmsg':
          include('modules/sendmsg.php');
        break;
    }
  }
 ?>
