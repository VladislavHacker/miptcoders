<!DOCTYPE html>
<html>
  <?php include_once('./template/head.php'); ?>
  <body>
    <?php include_once('./template/header.php'); ?>
    <main>
        <?php
          if (isset($_GET['feed'])) {
            $query = 'SELECT * FROM `messages` WHERE `feedback`="'.(int)$_GET['feed'].'" ORDER BY `id` DESC';
            $res = $mysqli->query($query);
            if ($res->num_rows != 0) {
              while ($msg = $res->fetch_assoc()) {
                print $msg['text'];
              }
            }
          }
        ?>
        <div class="send-form">
          <form action="./?view=feedbacks&sect=dialog&feed=<?php print $_GET['feed']; ?>&cmd=feedbacks&act=sendmsg">
            <textarea>
            </textarea>
            <input type="submit">
          </form>
        </div>
    </main>
    <?php include_once('./template/footer.php'); ?>
    <script src="./assets/js/teachersloader.js"></script>
  </body>
</html>
