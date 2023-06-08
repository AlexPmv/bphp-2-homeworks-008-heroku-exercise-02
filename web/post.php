<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  session_start();
  
  $_SESSION['login'] = $_POST['loginName'];
  header('Location: /');
}
