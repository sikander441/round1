<?php
  session_destroy();
  unset($_SESSION['email']);
  unset($_SESSION['name']);
  unset($_SESSION['number']);
  unset($_SESSION['emp_id']);
  $_SESSION = [];
  header('location:leaderboard.php');

?>
