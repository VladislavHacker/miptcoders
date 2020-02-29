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
          <div class="pool-info">
            <?php print $pool['name']; ?>
            <br>
            <?php print $pool['start_time'].' '.$pool['end_time']; ?>
          </div>
          <form enctype="multipart/form-data" action="./?cmd=pools&act=send&id=<?php print $pool['id']; ?>" method="post">
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
                <div class="pool-teacher">
                  <?php print $question['teacher_name'].' '.$question['teacher_lname'].' '.$question['teacher_patronymic']; ?>
                </div>
                <div class="markline">
                  <?php for ($j = 1; $j <= 10; $j++) { ?>
                    <input <?php print $j == 1 ? 'checked' : ''; ?> id="mark-id-<?php print $j.'-'.$i; ?>" value="<?php print $j; ?>" type="radio" name="mark[<?php print $i; ?>]" required>
                    <label for="mark-id-<?php print $j.'-'.$i; ?>">
                       <?php print $j; ?>
                    </label>
                  <?php } ?>
                </div>
                <div class="form-group">
                  <textarea placeholder="Коментарий" name="comment[<?php print $i; ?>]" required></textarea>
                </div>

          <?php
                $i++;
              }
            }
          ?>
             <div class="form-group">
                <input type="submit" value="Отправить">
             </div>
          </form>

      <?php } ?>
    </main>
    <?php include_once('./template/footer.php'); ?>
  </body>
</html>
