<?php

require_once('classes/classe_bancodados.inc');

$bd = new mysql('localhost','root','','cake');

$insert = $bd->insert('articles', array('title','body'), array('aluno 06','fanfarrão'));

if($insert){
	echo "inserido com sucesso";
	
}
else	
{
	echo "no,no,no";
}





?>