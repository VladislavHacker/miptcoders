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
              <div class="sandbox">
                 <p> Выберите кафедру и преподавателя из списков и нажмите "Добавить", чтобы они появились в опросе =)</p>
                 <p> Затем выберите время окончания опроса </p>
                 <p> Когда вы выберите всех преподавателей, которых хотите включить в опрос нажмите кнопку "Создать опрос" </p>
              </div>
            </div>
        </div>
        <div class ="FinishBlock">
          <div>
            <label for="DataInput" id = "LabelForInput">Дата окончания:</label>
            <input type="date" id = "DataInput">
          </div>
          <button id = "CreatePool" onclick="sendPool()">Создать опрос</button>
        </div>
      </div>
    </main>
    <?php include_once('./template/footer.php'); ?>
    <script src="./assets/js/teachersloader2.js"></script>
  </body>
</html>
