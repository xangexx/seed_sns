<?php

$dsn='mysql:dbname=seed_sns;host=localhost';


// XAMPP環境下においてはuserはrootでパスワードは空
$user='root';
$password='';

// このプログラムが存在している場所と同じサーバーを指定している
$dbh = new PDO($dsn, $user, $password);
$dbh->query('SET NAMES utf8');

?>