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
      <div class="chart-container">
        <div class="chart">
          <canvas id="myChart"></canvas>
        </div>
        <div class="chart">
          <canvas id="myChart2"></canvas>
        </div>
      </div>
    </main>
    <?php include_once('./template/footer.php'); ?>
    <script src="./assets/js/Chart.js"></script>
    <script src="./assets/js/mycharts.js"></script>
  </body>
</html>
