<?php 
session_destroy();
$_SESSION['user']=null
?>
<script>
            window.location.replace("inicio.php");
        </script>