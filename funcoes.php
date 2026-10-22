<?php
   function redirecionar($destino, $msg = "") {
      $msg = htmlspecialchars($msg);
      header("Location: $destino?msg=$msg");
      exit();
   } 
?>