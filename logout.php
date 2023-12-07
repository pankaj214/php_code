<?php
unset($_SESSION[id]);
session_destroy();
echo"<script>window.location.href='welcome.php'</script>";
?>