<?php
session_start();
session_unset();
session_destroy();
header('Location: http://localhost/backend/full_website_by_suvo/'.'full_website - Copy.php');
?>
