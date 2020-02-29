<header>
  <div> Eduq</div>
  <nav>
     <a href="./?view=pools"> Опросы </a>
     <a href="./?view=feedbacks"> Отзывы </a>
     <a href="./?view=stats"> Статистика </a>
     <?php if ($_SESSION[$CONFIG['host']]['access'] == 255) { ?>
       <a> Конструктор опросов </a>
       <a> Персонал </a>
     <?php } ?>
     <a href="./?cmd=sign&act=out"> Выйти </a>
   </nav>
</header>
