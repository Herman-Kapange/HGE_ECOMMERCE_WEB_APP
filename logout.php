<?php

//ending session
session_destroy();

//redirect to login page
header("Location: login.php");

?>