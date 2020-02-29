<!DOCTYPE html>
<html>
  <?php include_once('./template/head.php'); ?>
  <body>
    <?php include_once('./template/header.php'); ?>
    <main>
      <section class="pools-section">
        <div class="Header-block">
          <div class="borderName">
            Имя
          </div>
          <div class="borderBegin">
            Начало
          </div>
          <div class="borderEnd">
            Конец
          </div>
        </div>
        <?php
          $query = 'SELECT * FROM `pools` ORDER BY `id` DESC';
          $res = $mysqli->query($query);
          if ($res->num_rows != 0) {
            while ($pool = $res->fetch_assoc()) { ?>
              <a href="./?view=pools&sect=view&id=<?php print $pool['id']; ?>" class="Header-block">
                <div class="listborderName">
                 <?php print $pool['name']; ?>
                </div>
                <div class="listborderBegin">
                  <?php print $pool['start_time']; ?>
                </div>
                <div class="listborderEnd">
                  <?php print $pool['end_time']; ?>
                </div>
              </a>
     <?php  }
          }
        ?>
      </section>

    </main>
    <?php include_once('./template/footer.php'); ?>
  </body>
</html>
