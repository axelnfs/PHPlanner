<?php
session_start();
session_destroy();

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <p>Sesion cerrada, redireccionando</p>
     <META HTTP-EQUIV="REFRESH" CONTENT="5;index.php">
   </body>
 </html>
