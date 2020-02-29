<?php
  if (isset($_GET['act'])){
    switch ($_GET['act']) {
      case 'send':
          include('modules/send.php');
        break;
      default:
          include('modules/send.php');
        break;
    }
  }
 ?>
