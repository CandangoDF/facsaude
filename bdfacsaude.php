
<?php
  /*Só funciona se incluir o arquivo conect.php que é o arquivo que faz onexão com o servidor*/
include_once 'conecta.php';

      /*criar banco de dados*/
$sql = "CREATE DATABASE bdfacsaude";	  
	  
	  /*Executa a instrução SQL*/
if(mysqli_query($conn, $sql)){
	echo "A instrução $sql foi executada com sucesso"; 
}	  


	 /*seleciona banco de dados*/
mysqli_select_db($conn, 'bdfacsaude')	or die('Erro ao selecinar banco de dados'); 

      /*criando tabela*/ 
$sqlTabela = "CREATE TABLE Usuario(
       id int(11) PRIMARY KEY AUTO_INCREMENT,
	   nome varchar (60),
	   email varchar(60),
	   Comentario varchar(500),
	    )";

	  /*Executa a instrução SQL*/
if(mysqli_query($conn, $sqlTabela)){
	echo "A instrução $sqlTabela foi executada com sucesso<hr>"; 
}
