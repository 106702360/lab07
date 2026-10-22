<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'Afnan' && $password == '106702360') {
 $_SESSION['user'] = $username;
 header('Location: welcome.php');
} else {
 echo "Invalid login. <a href='login.php'>Try again</a>";
}
?>