<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $dbname = "clinic_database";  
      
    try{
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } 
    catch (PDOException $e) {
        echo "Connected Failed:" . $e->getMessage();
    }
?>