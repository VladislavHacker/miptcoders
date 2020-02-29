<!DOCTYPE html>
<html>
  <?php include_once('./template/head.php'); ?>
  <body>
    <?php include_once('./template/header.php'); ?>
    <main>
        <form action="./?cmd=feedbacks&act=new" method="post">
            <div class="bottom">
                <select id="department-select" class="Probl">
                 <option> Выберите кафедру </option>
                </select>
                <select id="teachers-select" class="Probl">
                 <option> Выберите препода </option>
                </select>
            </div>
          <div class="Text">
              <div class="text">
                 Напишите свой отзыв о данном преподователе
              </div>
          </div>
          <div class="A">
              <textarea class="Ar" placeholder="Помогите нам, поднять образование в МФТИ!"></textarea>
          </div>
          <div class="bottomdown">
               <input type="submit" class="Send" value="Отправить">
          </div>
        </form>
    </main>
    <?php include_once('./template/footer.php'); ?>
    <script src="./assets/js/teachersloader.js"></script>
  </body>
</html>
