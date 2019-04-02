<?php
$user = $_POST['userid'];
$pass = $_POST['password'];

if (($user=='aei')&($pass=='kaitom')) {
  setcookie('id','aei',time()+3600);
  echo "<meta http-equiv='Refresh' content='1;url=gallery.php'>";
} else {
  echo "Nope";
  echo "<meta http-equiv='Refresh' content='3;url=login.html'>";
}
?>
