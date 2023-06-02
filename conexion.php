<?php
$hostBD = "localhost";  
 $userBD = "root";  
 $passBD = "";  
 $dataBD = "eventos_rh";  
 $message = "";  
 try  
 {   
    $db = new PDO("mysql:host=$hostBD; dbname=$dataBD", $userBD, $passBD);  
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }
// define('_DB_DRIVER', 'mysqli');
// define('_DB_HOST', 'localhost');
// define('_DB_NAME', 'notas_php');
// define('_DB_USER', 'root');
// define('_DB_PASSWORD', '');
// define('_DB_CHARSET', 'utf8');
// //define ('_DB_PORT', 3306);
// try {
//     $db = new PDO('mysql:host=' . _DB_HOST . '; dbname=' . _DB_NAME, _DB_USER, _DB_PASSWORD);
//     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $db->exec('SET CHARACTER SET ' . _DB_CHARSET);
//     if ($db) {
//        echo "Correcto";
//     }
// } catch (PDOException $e) {
//     echo 'Error!:' . $e->getMessage();
//     die();
// }

// // $dbuser = "notas_php";
// // $userpass = "";
// // $db=""; $dbuser; $userpass;

// $dbs ='mysql:dbname=notas_php;host=localhost';
// $usuario='root';
// $pass='';

// try {
//     $base = new PDO($dbs, $usuario, $pass);
//     echo "Exito";
//     return $base;
// } catch (PDOException $e) {
//     echo'Falló la connect: ' . $e->getMessage();
//     //throw $th;
//}

?>