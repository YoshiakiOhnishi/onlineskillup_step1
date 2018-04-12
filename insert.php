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
//プリペアドステートメントを作成　ユーザ入力を使用する箇所は?にしておく
$stmt = $mysqli->prepare("INSERT INTO data (name, mail, message, title) VALUES (?, ?, ?, ?)");
//$_POST["name"]に名前が、$_POST["message"]に本文が格納されているとする。
//?の位置に値を割り当てる
$stmt->bind_param('ssss', $_POST["name"], $_POST["mail"], $_POST["message"], $_POST["title"]);
//実行
$stmt->execute();
$mysqli->close();
header('Location: list.php');
?>

