<?php

      /*Estabelece conexão com o servidor*/
$conn = mysqli_connect('localhost','root','',false,'3306',false,)
      or die('Erro ao tentar conexão com o servidor');
	  
	 /*seleciona banco de dados*/
mysqli_select_db($conn, 'bdfacsaude')	or die('Erro ao selecinar banco de dados');

      