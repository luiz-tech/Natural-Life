<?php 
// ====== Arquivo dedicado excluisvamente à conexão com a base de dados ====== //
function conectar() {
    $con = new PDO("mysql:host=localhost;dbname=devimpulsionarte_trabalho;charset=utf8","devimpulsionarte_dev", "ole20Oly$");
    
    return $con;
 }

?>