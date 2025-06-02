<?php
$pdo =new PDO ("mysql:host=loscahost;dbname=testdb", "root", "");
 $sql = "DROP TABLE products ";

 $pdo->exec($sql);
 
 echo"Table dropped succesfully";

}catch (PDOException $e) {
        echo $e->getMessage();
    }
?>