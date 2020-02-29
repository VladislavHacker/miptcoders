<header>
  <div> Eduq</div>
  <nav>
     <a> Опросы </a>
     <a> Отзывы </a>
     <a> Статистика </a>
     <?php if ($_SESSION[$CONFIG['host']]['access'] == 255) { ?>
       <a> Конструктор опросов </a>
       <a> Персонал </a>
     <?php } ?>
     <a href="./?cmd=sign&act=out"> Выйти </a>
   </nav>
</header>
