<!DOCTYPE html>
<html>
  <?php include_once('./template/head.php'); ?>
  <body>
    <?php include_once('./template/header.php'); ?>
    <main>
      <?php
        $query = 'SELECT * FROM `pools` WHERE `id`="'.(int)$_GET['id'].'"';
        $res = $mysqli->query($query);
        if ($res->num_rows != 0) {
          $pool = $res->fetch_assoc();
        ?>
          <div>
            <?php print $pool['name']; ?>
          </div>
          <br>
          <form>
         <?php
            $query = 'SELECT
                            `teachers`.`name` AS `teacher_name`,
                            `teachers`.`last_name` AS `teacher_lname`,
                            `teachers`.`patronymic` AS `teacher_patronymic`
                      FROM `pool_questions`
                      INNER JOIN `teachers` ON `teachers`.`id` = `pool_questions`.`teacher`
                      WHERE `pool`="'.$pool['id'].'"';
            $res = $mysqli->query($query);
            $i = 0;
            if ($res->num_rows != 0) {
              while ($question = $res->fetch_assoc()) { ?>
                <div>
                  <?php print $question['teacher_name'].' '.$question['teacher_lname'].' '.$question['teacher_patronymic']; ?>
                </div>
                <div>
                  <?php for ($j = 1; $j <= 10; $j++) { ?>
                    <label>
                       <?php print $j; ?>
                       <input type="radio" name="comment[<?php print $i; ?>]">
                    </label>
                  <?php } ?>
                </div>
                <input type="text" placeholder="Коментарий" name="comment[<?php print $i; ?>]">
                <br>
          <?php
                $i++;
              }
            }
          ?>
             <input type="submit">
          </form>

      <?php } ?>
    </main>
    <?php include_once('./template/footer.php'); ?>
  </body>
</html>
