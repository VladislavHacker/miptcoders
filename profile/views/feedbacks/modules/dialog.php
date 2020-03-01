<!DOCTYPE html>
<html>
  <?php include_once('./template/head.php'); ?>
  <body>
    <?php include_once('./template/header.php'); ?>
    <main>
        <?php
          if (isset($_GET['feed'])) {
            $query = 'SELECT * FROM `messages` WHERE `feedback`="" ORDER BY `id` DESC';
            $res = $mysqli->query($query);
            if ($res->num_rows != 0) {
              while ($msg = $res->fetch_assoc()) {
                
              }
            }
          }
        ?>
    </main>
    <?php include_once('./template/footer.php'); ?>
    <script src="./assets/js/teachersloader.js"></script>
  </body>
</html>
