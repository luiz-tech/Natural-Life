<?php
session_start();

    //incluindo arquivo de conexão com o banco de dados
    include('conexao.php');
    if(isset($_POST)) 
    {   
        $method = $_POST['metodo'];
        
        switch($method)
        {
            case "login":
                loginUser($_POST['email'],$_POST['senha']);
                break;
                
            case "login-google":
                echo json_encode(loginUserGoogle($_POST['email']));
                break;
                
            case "sair":
                //echo json_encode(logoutUser());
                session_destroy();
                echo json_encode(200);
                break;
                    
            case "autocadastro":
                autoCadastro($_POST['nome'],$_POST['email'],$_POST['senha'],$_POST['telefone'],$_POST['cpf'],$_POST['termos']);
                break;
                
        }
        
    } else {
        
    }

// Função de Autenticação dos Usuários
function loginUser($email,$senhahash) 
{
    $con = conectar();
    
    $sql_auth = "SELECT * FROM usuarios u WHERE email = '".$email."' LIMIT 1";
    $rs = $con->query($sql_auth);
    
    //verificação de integridade
    if (!empty($rs)) {
        
        $row = $rs->fetch(PDO::FETCH_ASSOC);
        
            //verificação de status
            if( ($row['status'] == "A") )
            {   
                if(password_verify($senhahash,$row['senha']) == true)
                {
                    //Preenchimento da sessão do usuário logado
                
                $_SESSION['id'] = $row['id'];
                $_SESSION['nome'] = $row['nome'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['foto'] = $row['foto'];
                $_SESSION['nivel'] = $row['nivel'];
                $_SESSION['status'] = $row['status'];
                $_SESSION['telefone'] = $row['telefone'];
                $_SESSION['cpf'] = $row['cpf'];
                
                $_SESSION['logado'] = true;
                $_SESSION['welcome'] = true;
                
                echo "<script language='javascript'>location.href = 'loja/?msg=welcome';</script>";
                
                } else { header("Location: login.php?msg=password_erro"); }
                    
            }  else { header("Location: login.php?msg=userinative"); }
        
    } else {  header("Location: login.php?msg=notfound"); }
}


//Função de Autenticação de Usuários com o Google via ajax
function loginUserGoogle($email)
{
    $con = conectar();
    
    $sql_auth = "SELECT * FROM usuarios WHERE email = '".$email."'";
    $rs = $con->query($sql_auth);
    
    //verificação de integridade
    if (!empty($rs)) { //email encontrado na base de dados
        
        //recepção e tratamento dos dados
        $row = $rs->fetch(PDO::FETCH_ASSOC);
        
            //verificação de status
            if( $row['status'] == "A" )
            {
                //Preenchimento da sessão do usuário logado
                $_SESSION['id'] = $row['id'];
                $_SESSION['nome'] = $row['nome'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['foto'] = $row['foto'];
                $_SESSION['nivel'] = $row['nivel'];
                $_SESSION['telefone'] = $row['telefone'];
                $_SESSION['cpf'] = $row['cpf'];
                
                $_SESSION['logado'] = true;
                $_SESSION['welcome'] = true;
                
                //usuário válido e autenticado
                return 200;
                    
            }  else { return 2; } //usuário está sem acesso, status inválido
    } else { return 1; } //usuário solicitado não existe na base de dados
}


//Função que finaliza a sessão do usuário
function logoutUser() 
{
    session_destroy();    
    return 200;
}

//Função de Auto Cadastro pelo usuário
function autoCadastro($nome,$email,$senha,$telefone,$cpf,$termos)
{
    $con = conectar();
    
    //verificação se  o usuário já existe
    $sql_verify = "SELECT * FROM usuarios WHERE email = '".$email."' OR cpf = '".$cpf."' ";
    $rs = $con->query($sql_verify);
    
    
    if( $rs->rowCount() >= 1 )
    {  
       header("Location: register.php?msg=founded");
        
    } else { 
       
       $senhahash = password_hash($senha, PASSWORD_DEFAULT);
       
       //não  ha no banco, logo registre -o
        $sql_insert = "INSERT INTO usuarios (nome,email,senha,foto,nivel,status,telefone,cpf) 
        VALUES('".$nome."','".$email."','".$senhahash."',null,'C','A','".$telefone."','".$cpf."')";
        
        $stmt = $con->prepare($sql_insert);
        $stmt->execute();
        
        header("Location: login.php?msg=success");
    }
    
    
    
}




// Função que Busca os Artigos do Banco de Dados
function buscarArtigos() 
{
    $con = conectar();
    
    //montagem da query
    $sql_select = "SELECT   a.*, 
                            u.nome as autor, 
                            u.foto,
                            c.*
                            
    FROM artigos a, usuarios u ,comentarios c
    
    WHERE a.idautor = u.id";
    
    $rs = $con->query($sql_select);
	
	$listaArtigos = array();
    
    //verificação de integridade
    if (!empty($rs)) {
        
        while($row = $rs->fetch(PDO::FETCH_ASSOC))
        { 
    		$arraynovo = Array( "id"=>$row['id'],
    		                    "autor"=>$row['autor'],
    		                    "foto"=>$row['foto'],
                        		"titulo"=>$row['titulo'],
                        		"subtitulo"=>$row['subtitulo'],
                        		"autor"=>$row['autor'],
                        		"dtAtualizacao"=>$row['dtAtualizacao'],
                        		"texto"=>$row['texto']
            );
    		array_push($listaArtigos,$arraynovo);
        }
    }

   return $listaArtigos;
}

?>