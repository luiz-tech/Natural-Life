<?php
// ======== PRESETS DO CONTROLADOR =================== //
    
    //conexão com o banco de dados
    include("../conexao.php");
    
    
function buscarProdutos() {
    
    $con = conectar();
    
    //montagem da query
    $sql_select = "SELECT * FROM produtos";
    
    $rs = $con->query($sql_select);
	
	$listaProdutos = array();
    
    //verificação de integridade
    if (!empty($rs)) {
        
        while($row = $rs->fetch(PDO::FETCH_ASSOC))
        { 
    		$arraynovo = Array( "id"=>$row['id'],
                        		"nome"=>$row['nome'],
                        		"descricao"=>$row['descricao'],
                        		"linkimg"=>$row['linkimg'],
                        		"preco"=>$row['preco'],
                        		"estoque"=>$row['estoque']
            );
    		array_push($listaProdutos,$arraynovo);
        }
    }

   return $listaProdutos;
    
}


?>