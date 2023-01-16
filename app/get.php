<?php
session_start();
if (
  isset($_POST['username']) && isset($_POST['pwd'])
  && $_POST['username'] === 'aaa'
  && $_POST['pwd'] === 'kuresento4'
) {
  $_SESSION['user'] = [
    'username' => $_POST['username'],
    'pwd' => $_POST['pwd']
  ];
}

if (!empty($_SESSION['user'])) {
  echo 'ログイン成功' . '<br>';
  echo 'ユーザー名' . $_SESSION['user']['username'] . '<br>';
  echo 'パスワード' . $_SESSION['user']['pwd'];
} else {
  echo 'ログイン失敗' . '<br>';
}
