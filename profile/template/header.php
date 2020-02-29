<header>
  <div> Eduq</div>
  <nav>
     <a href="./?view=pools"> Опросы </a>
     <a href="./?view=feedbacks"> Отзывы </a>
     <a href="./?view=stats"> Статистика </a>
     <?php if ($_SESSION[$CONFIG['host']]['access'] == 255) { ?>
       <a href="./?view=admin&act=pool_construct"> Конструктор опросов </a>
       <a> Администрирование </a>
     <?php } ?>
     <a href="./?cmd=sign&act=out"> Выйти </a>
   </nav>
</header>
