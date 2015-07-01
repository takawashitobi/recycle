<?php
//データベース接続
$db = new mysqli("localhost", "root", "root", "recycle");

if ($db->connect_errno) {
    echo "MySQLの接続に失敗しました: (" . $db->connect_errno . ") " . $db->connect_error;
}
?>