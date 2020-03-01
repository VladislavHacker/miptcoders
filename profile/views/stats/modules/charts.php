<!DOCTYPE html>
<html>
  <?php include_once('./template/head.php'); ?>
  <body>
    <?php include_once('./template/header.php'); ?>
    <main>
      <div class="selecter">
        <select name="department" id="department-select" class="Probl">
          <option> Выберите кафедру </option>
        </select>
        <select name="teacher" id="teachers-select" class="Probl">
          <option> Выберите препода </option>
        </select>
      </div>
      <div>
        <div class="chart">
          <canvas id="myChart" width="400" height="400"></canvas>
        </div>
      </div>
    </main>
    <?php include_once('./template/footer.php'); ?>
    <script src="./assets/js/Chart.js"></script>
    <script src="./assets/js/mycharts.js"></script>
    <script src="./assets/js/teachersloader3.js"></script>
  </body>
</html>
