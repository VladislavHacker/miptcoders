<!DOCTYPE html>
<html>
  <?php include_once('./template/head.php'); ?>
  <body>
    <?php include_once('./template/header.php'); ?>
    <main>
      <a href="./?view=feedbacks&sect=new">Добавить отзыв</a>
      <div class="review">
         <div class="review-block-Date">
           Дата
         </div>
         <div class="review-block-Prep">
           Преподователь
         </div>
         <div class="review-block-Status">
           Статус
         </div>
      </div>
      <?php
        $query = 'SELECT
                    `feedbacks`.`id` AS `id`,
                    `teachers`.`name` AS `teacher_name`,
                    `teachers`.`last_name` AS `teacher_lname`,
                    `teachers`.`patronymic` AS `teacher_patronymic`,
                    `status`
                  FROM `feedbacks`
                  INNER JOIN `teachers` ON `feedbacks`.`teacher` = `teachers`.`id`
                  WHERE `author`="'.$_SESSION[$CONFIG['host']]['id'].'" ORDER BY `id` DESC';
        $res = $mysqli->query($query);
        if ($res->num_rows != 0) {
          while ($feed = $res->fetch_assoc()) { ?>
            <a href="./?view=feedbacks&sect=dialog&id=<?php print $feed['id']; ?>" class="review">
               <div class="Date1">
                 Дата1
               </div>
               <div class="Prep1">
                 <?php print $feed['teacher_name'].' '.$feed['teacher_lname'].' '.$feed['teacher_patronymic']; ?>
               </div>
               <div class="Status">
                 <span class="StatusOpen">Open</span>
               </div>
            </a>
   <?php  }
        }
      ?>
    </main>
    <?php include_once('./template/footer.php'); ?>
  </body>
</html>
