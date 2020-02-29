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
          while ($pool = $res->fetch_assoc()) { ?>
            <a href="./?view=pools&sect=view">
              <?php print $pool['name']; ?>
            </a>
            <br>
   <?php  }
        }
      ?>
    </main>
    <?php include_once('./template/footer.php'); ?>
  </body>
</html>
