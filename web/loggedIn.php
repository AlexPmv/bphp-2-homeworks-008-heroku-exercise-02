<?php

session_start();

$login = $_SESSION['login'];

echo "<div class='user-container'>
        <h3 class='user-name'>Привет, $login</h3>
        <a class='exit-link' href='./exit.php'>Выход</a>
      </div>";