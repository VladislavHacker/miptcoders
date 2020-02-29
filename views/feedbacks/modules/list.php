<!DOCTYPE html>
<html>
  <?php include_once('./template/head.php'); ?>
  <body>
    <?php include_once('./template/header.php'); ?>
    <main>
      <a href="./?view=feedbacks&sect=new">Добавить отзыв</div>
      <?php
        $query = 'SELECT
                    `teachers`.`name` AS `teacher_name`,
                    `teachers`.`last_name` AS `teacher_lname`,
                    `teachers`.`patronymic` AS `teacher_patronymic`,
                    `status`
                  FROM `feedbacks`
                  INNER JOIN `teachers` ON `feedbacks`.`teacher` = `teachers`.`id`
                  WHERE `author`="'.$_SESSION[$CONFIG['host']]['id'].'"';
        $res = $mysqli->query($query);
        if ($res->num_rows != 0) {
          while ($feed = $res->fetch_assoc()) { ?>
            <a href="./?view=feedbacks&sect=view&id=<?php print $feed['id']; ?>">
              <?php print $feed['teacher_name'].' '.$feed['teacher_lname'].' '.$feed['teacher_patronymic']; ?>
            </a>
            <br>
   <?php  }
        }
      ?>
    </main>
    <?php include_once('./template/footer.php'); ?>
  </body>
</html>
