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
//プリペアドステートメントを作成
$stmt = $mysqli->prepare("INSERT INTO data (name, mail, message, title) VALUES (?, ?, ?, ?)");
//?の位置に値を割り当てる
$stmt->bind_param('ssss', $_POST["name"], $_POST["mail"], $_POST["message"], $_POST["title"]);
//実行
$stmt->execute();
$mysqli->close();
header('Location: list.php');
?>

