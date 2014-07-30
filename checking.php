<?php
session_start();

$checkcode = $_SESSION['Checknum'];

echo "这是正确的验证码: $checkcode";
echo "<br>";

$user = $_POST ['username'];
echo "这是输入的用户名：$user";
echo "<br>";

$passwd = $_POST ['password'];
echo "这是输入的密码：$passwd";
echo "<br>";

$passcode = $_POST ['passcode'];
echo "这是输入的验证码：$passcode";
echo "<br>";

?>
