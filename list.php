<html>
  <head>
    <meta charset="UTF-8" />
    <title>投稿リスト</title>
  </head>
  <body>
    <table border="1">
      <tr><th>名前</th><th>メールアドレス</th><th>タイトル</th><th>本文</th><th>投稿時間</th><th>削除</th><tr>
      <?php
      //mysqliクラスのオブジェクトを作成
      if($_SERVER['SERVER_NAME'] == "localhost") {
        //ローカルの接続設定
        $mysqli = new mysqli('localhost', 'root', '', 'board');
      } else {
        //XREAサーバの接続設定
        $mysqli = new mysqli('localhost', 'oniyoshi', 'Ohnishi6', 'oniyoshi');
      }
      //エラーが発生したら
      if ($mysqli->connect_error){
        print("接続失敗：" . $mysqli->connect_error);
        exit();
      }
      $result = $mysqli->query("SELECT * FROM data ORDER BY created DESC");

      if($result){
        //1行ずつ取り出し
        while($row = $result->fetch_object()){
          //エスケープして表示
          $name = htmlspecialchars($row->name);
          $mail = htmlspecialchars($row->mail);
          $title = htmlspecialchars($row->title);
          $message = htmlspecialchars($row->message);
          $created = htmlspecialchars($row->created);
          $message = nl2br($message);
          print('<tr>');
          print('<td>'.$name.'</td>');
          print('<td>'.$mail.'</td>');
          print('<td>'.$title.'</td>');
          print('<td>'.$message.'</td>');
          print('<td>'.$created.'</td>');
          //削除を押したレコードを削除
          print('<td><a href="delete.php?name='.$name.'&created='.$created.'">削除</a></td>');
          print('</tr>');
        }
      }
      $mysqli->close();
      ?>
    </table>
    <a href="post.html">投稿画面ヘ移動</a>
  </body>
</html>