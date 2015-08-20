<?php

require_once('classes/classe_bancodados.inc');

$bd = new mysql('localhost','root');

$bd->startTransaction();

$houveErro = false;


$bd->executaSQL("use cake;");





$execRet = $bd->executaSQL("insert into articles(title, body) values ('aluno 01', 'Rafael Pomar');");

if(!$execRet){
	$houveErro = true;
}

$execRet = $bd->executaSQL("insert into articles(title, body) values ('aluno 02', 'Rafael garcia');");

if(!$execRet){
	$houveErro = true;
}

$execRet = $bd->executaSQL("insert into articles(title, body) values ('aluno 03', 'carlos');");

if(!$execRet){
	$houveErro = true;
}

$execRet = $bd->executaSQL("insert into articles(title, body) values ('aluno 04', 'Deise');");

if(!$execRet){
	$houveErro = true;
}

if($houveErro){
	echo "houve um erro";
	$bd->ROLLBACK();
} else {
	echo "sucesso, vamos gravar";
	$bd->commit();
}








?>