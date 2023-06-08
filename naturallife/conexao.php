<?php
// ====== Arquivo dedicado exclusivamente à conexão com a base de dados ====== //
function conectar() {
    
    // Arquivo dedicado exclusivamente à conexão com o banco de dados

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "naturallife";

    try {
        $con = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $con;
    } catch(PDOException $e) {

        return "Falha na conexão: " . $e->getMessage();
    }

}
?>
