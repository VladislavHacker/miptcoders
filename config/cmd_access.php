<?php

  $CMD_ACCESS['sign'] = 'sign';

  if (isset($_SESSION[$CONFIG['host']]['access'])) {
    $CMD_ACCESS['pools'] = 'pools';
    $CMD_ACCESS['feedbacks'] = 'feedbacks';
  }

 ?>
