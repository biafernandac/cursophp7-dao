<?php 

require_once('config.php');

#$sql = new Sql();

#$usuarios = $sql->select("SELECT * FROM tb_usuarios");

#echo json_encode($usuarios);
//carrega 1 usuário
#$root = new Usuario();
#$root->loadById(3);
#echo $root;

//Carrega uma lista de usuários
#$lista = Usuario::getList();
#echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
#$search = Usuario::search("jo");
#echo json_encode($search);

//Carrega um usuário usando o login e a senha
#$usuario = new Usuario();
#$usuario->login("root", "!@#$");
#echo $usuario;
 
$aluno = new Usuario("aluno", "@lun0");

#$aluno->setDeslogin("aluno");
#$aluno->setDessenha("@lun0");
$aluno->insert();

echo $aluno;
 ?>