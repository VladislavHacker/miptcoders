<!DOCTYPE html>
<html>
  <?php include_once('./template/head.php'); ?>
  <body>
    <?php include_once('./template/header.php'); ?>
    <main>
      <div>
        <form action="./?cmd=feedbacks&act=new" method="post">
          <div>
            <select>
              <option>v</option>
            </select>
            <select>
              <option>g              </option>
            </select>
          </div>
          <div class="form-group">
            <div class="form-description">
              Напишите все что вы думаете, и если у вас есть идеи как можно улучшить ситуацию
            </div>
            <textarea>
            </textarea>
          </div>
          <div class="right-form-group">
            <input type="submit" value="Отправить">
          </div>
        </form>
      </div>
    </main>
    <?php include_once('./template/footer.php'); ?>
  </body>
</html>
