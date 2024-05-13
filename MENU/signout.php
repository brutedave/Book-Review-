<?php
session_start();
session_destroy();
header("Location: ../HOME/home.php");
?>
