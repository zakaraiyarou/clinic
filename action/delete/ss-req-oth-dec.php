<?php
    include ('../../conn/connection.php');
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $stmt = $conn->prepare("DELETE FROM prodian_apr_oth_dec WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        if($stmt->rowCount() == 1){
            session_start();
            $_SESSION['delete'] = 1;
            header("Location:../../ss/ss-req-list.php");
        }
    }
?>