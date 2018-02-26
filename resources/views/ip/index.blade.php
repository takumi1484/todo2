<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Script-Type" content="text/javascript" />
  <meta http-equiv="Content-Style-Type" content="text/css" />
  <title>PHPサンプル</title>
</head>

<body>

↓これがあなたのIPアドレスです<br />
<?php
    // IPアドレスを取得して変数にセットする
    $ipAddress = $_SERVER["REMOTE_ADDR"];
    print $ipAddress;
?>
<br /><br />
↓数値にするとこんな感じです<br />
<?php
    // IPアドレスを数値として取得する場合
    $ipLong = ip2long($ipAddress);
    print $ipLong;
?>

</body>

</html>
