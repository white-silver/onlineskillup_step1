<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>PHPのサンプル</title>
  </head>
  <body>
    <?php
      //nameがPOSTされているなら
      if(isset($_POST["name"]) or isset($_POST["comment"])){
        $name = htmlspecialchars($_POST["name"]);
        if(isset($_POST["comment"])){
              //escape
              $comment = htmlspecialchars($_POST["comment"]);
            print("コメントは「 ${comment} 」です。");
          } else {
            print("ようこそ${name}さんコメントしてください。");
            ?>
              <form method="POST" action="index.php">
              <input name="comment" />
              <input type="submit" value="送信" />
              </form>
    <?php
          }
      } else {
    ?>
        <p>名前を入力してください。</p>
        <form method="POST" action="index.php">
          <input name="name" />
          <input type="submit" value="送信" />
        </form>
    <?php
      }  
    ?>
  </body>
</html>
