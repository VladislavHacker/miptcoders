<input type="checkbox" id="menu-opener">
<header>
  <div class="left-header">
    <label for="menu-opener" class="cake-menu" class="mobile-opener">
      <div class="cake"></div>
    </label>
    <a href="./" class="logo"> Eduq</a>
  </div>
  <nav>
     <a href="./?view=pools"> Опросы </a>
     <a href="./?view=feedbacks"> Отзывы </a>
     <a href="./?view=stats"> Статистика </a>
     <?php if ($_SESSION[$CONFIG['host']]['access'] == 255) { ?>
       <a href="./?view=admin&act=pool_construct"> Конструктор опросов </a>
     <?php } ?>
     <a href="./?cmd=sign&act=out"> Выйти </a>
   </nav>
</header>
