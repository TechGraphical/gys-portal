<?php
try{
// Create connection
$db = new PDO("mysql:host=localhost;dbname=gys;charset=utf8", "root", "");
} catch(Exception $e){
   echo $e->getMessage();
}