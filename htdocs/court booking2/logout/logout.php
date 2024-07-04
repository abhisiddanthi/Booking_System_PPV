<?php

session_start();
session_unset();
session_destroy();
header("Location: ../homepage.php?successfully_logged_out");

?>