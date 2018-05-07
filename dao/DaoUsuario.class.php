                                                                                                                                                                                                                         <?php 
	include_once ("model/usuario.class.php");
	include_once ("includes/Conexao.class.php");
		public class DaoUsuario {
			public function buscarUsuarioPorLogin($Login){
				$sql = "SELECT * FROM tb_administrador WHERE login = :login";
				$sqlPreparado = Conexao::meDeAConexao ()-> prepare ($sql);
				$sqlPreparado->bindValue("login",$login);
				$resposta = $sqlPreparado->execute();
				$usuario = $this->transformaUsuarioDoBancoEmObjeto($resposta->fetch(PDO::FETCH_ASSOC));
				return $usuario;

				public function transformaUsuarioDoBancoEmObjeto ($dadosDoBanco){
					$usuario = new Usuario();
					$usuario->setIsUsuario($dadosDoBanco ['id_administrador']);
					$usuario->setNome($dadosDoBanco ['nome']);
					$usuario->setLogin($dadosDoBanco ['login']);
					$usuario->setSenha($dadosDoBanco ['senha']);
					return $usuario;
				}

		}

	}


?>