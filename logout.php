<?php
session_unset();
session_destroy();
header("Location: Home.html");
exit(0);
?>
