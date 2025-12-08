<?php
session_start();
session_destroy();
setcookie("Usuario","",time()-1,"/");
header("Location: login.html");
exit;
?>