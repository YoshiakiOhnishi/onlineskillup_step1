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
    //削除を押したレコードを削除
    $stt = $mysqli->prepare("DELETE FROM data WHERE name = ? and created = ?");
    $stt->bind_Param('ss', $_GET['name'], $_GET['created']);
    $stt->execute();
    header('Location: list.php');
?>
