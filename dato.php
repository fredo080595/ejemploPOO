<?php 
class cifrar{
	public function encriptar($palabra)
	{
	$hola=sha1($palabra);
		

		return $hola;
	}

} 


$palabra=$_POST['palabra'];

$objeto = new cifrar();
 
 echo $objeto->encriptar($palabra);