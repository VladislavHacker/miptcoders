<?php
  if (isset($_GET['sect'])) {
    switch ($_GET['sect']) {
      case 'pool_constructor':
          include('modules/pool_constructor.php');
        break;
        break;
      default:
          include('modules/pool_constructor.php');
        break;
    }
  } else {
    include('modules/pool_constructor.php');
  }
 ?>
