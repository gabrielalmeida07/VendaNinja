<?php

class db {

	//host
	private $host = 'us-cdbr-iron-east-03.cleardb.net';

	//usuario
	private $usuario = 'b55df536184480';

	//senha
	private $senha = '10c929a6';

	//banco de dados
	private $database = 'heroku_05033bcdb36596e';

	public function conecta_mysql(){

		//criar a conexao
		$con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

		//ajustar o charset de comunicação entre a aplicação e o banco de dados
		mysqli_set_charset($con, 'utf8');

		//verficar se houve erro de conexão
		if(mysqli_connect_errno()){
			echo 'Erro ao tentar se conectar com o BD MySQL: '.mysqli_connect_error();	
		}

		return $con;
	}

}

?>