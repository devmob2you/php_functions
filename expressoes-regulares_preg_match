<?php
header('Content-Type: text/html; charset=utf-8');
/* EXPRESSÕES REGULARES E VALIDAÇÕES SERVER-SIDE COM preg_match() */

/*
SIMBOLOGIAS:
? = {0,1}  => A interrogação informa que pode não ter ("0") ou pode ter 1 expressão ("1")
* = {0,}   => O asterisco informa que pode não ter ("0") ou pode ter qualquer coisa (" em branco ")
+ = {1,}   => O sinal de mais informa que pode ter 1 expressão ("1") ou pode ter qualquer coisa

EXPRESSÕES:
INICIAR EXPRESSÃO  = /^$/
VALIDAR EMAIL      = [a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\.\-]+\.[a-z]{2,4}
VALIDAR DATA       = [0-9]{2}\/[0-9]\/[0-9]{4}        para formato dd/mm/YYYY
VALIDAR TELEFONE   = \([0-9]{2}\) [0-9]{4}\.[0-9]{4}  para formato (00) 0000.0000
VALIDAR CEP        = [0-9]{2}\.[0-9]{3}\-[0-9]{3}     para formato 00.000-000
VALIDAR CPF        = [0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}
VALIDAR URL        = http(s)?:\/\/(www.)?[a-z0-9_\.\-]*[a-z0-9_\.\-]+\.[a-z]{2,4}

*/

//USANDO EXPRESSÕES REGULARES
function validMail($email){
	if(preg_match('/^[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\.\-]+\.[a-z]{2,4}$/',$email)){
		return true;
	}else{
		return false;
	}
}

if(!validMail('contato@mob2you.com.br')){
	echo 'Informe um e-mail válido!';
}else{
	echo 'E-mail válido!';
}

?>
