<!DOCTYPE html>
<html>
  <?php include_once('./template/head.php'); ?>
  <body>
    <?php include_once('./template/header.php'); ?>
    <main>
      <div class="pool-sect">
        <div class = "CreateBlock">
            <select id="SelectDepartment" name="Titel"></select>
            <select id="SelectTeacher" name="TitelTeacer"></select>
            <button id = "ButtonAdd" onclick="CreateNew()">Добавить</button>
        </div>
        <div class = "PoolElements">
            <div id='PoolContainer' class = "Dump">
            </div>
        </div>
        <div class ="FinishBlock">
            <label for="DataInput" id = "LabelForInput">Дата окончания:</label>
            <input type="date" id = "DataInput">
            <button id = "CreatePool">Создать опрос</button>
        </div>
      </div>
    </main>
    <?php include_once('./template/footer.php'); ?>
    <script src="./assets/js/teachersloader2.js"></script>
  </body>
</html>
