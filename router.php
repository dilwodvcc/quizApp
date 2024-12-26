<?php
 use Sourse\Router;


 if(Router::isApiCall()){
     require 'routers/api.php';
     exit();
 }
 require 'routers/web.php';