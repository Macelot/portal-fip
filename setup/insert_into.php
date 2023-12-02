<meta charset="UTF-8">
<?php
$vData_ = date("Y-m-dH:i:s");
$time_start = microtime(true);

echo "<br> inicio:".$vData_;
echo " ".$time_start;

//$mysqli = new mysqli("localhost","root","usbw","test",3307);
$mysqli = new mysqli("localhost","root",'jl!$aiNZ16_',"",3306);

if($mysqli->connect_errno){
	echo "<br>Erro na conexão";
}else{
	echo "<br>Deu certo a conexão";
}
//$comando="CREATE database loja;";
//$mysqli->query($comando);

$comando="use loja;";
$mysqli->query($comando);

$comando="Truncate table produtos";
$mysqli->query($comando);

$comando="CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` longblob,
  `descricao` varchar(30) NOT NULL,
  `preco` decimal(7,2) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `fabricante` varchar(20) NOT NULL,
  `datafabricacao` date NOT NULL,
  `origem` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8  AUTO_INCREMENT=1 ;";

$mysqli->query($comando);

//https://stackoverflow.com/questions/18069054/mysql-load-file-loads-null-values/23618521
//mysql> SELECT hex(LOAD_FILE('/var/lib/mysql/upload_data/i1.jpg')); --FAIL
//mysql> \! chmod o+x /var/lib/mysql/upload_data
//mysql> \! ls -ld `dirname /var/lib/mysql/upload_data/i1.jpg`
//chown mysql:mysql /var/lib/mysql/upload_data/*
//chmod go+rw /var/lib/mysql/upload_data/*
//mysql> select hex(LOAD_FILE('/var/lib/mysql/upload_data/i1.jpg'));


//$image1 = array(".\images\i1.jpg","/images/i2.jpg","/images/i3.jpg","/images/i4.jpg");
$iphone = array("/System/Volumes/Data/Users/marcelojtelles/Sites/gerDados/aula1/images/i1.jpg","/images/i2.jpg","/images/i3.jpg","/images/i4.jpg");
$android = array("/images/a1.jpg","/images/a2.jpg","/images/a3.jpg","/images/a4.jpg");
$windows = array("/images/w1.jpg","/images/w2.jpg");
$black = array("/images/b1.jpg","/images/b2.jpg","/images/b3.jpg");
$nokia = array("/images/n1.jpg","/images/n2.jpg","/images/n3.jpg");
$descricao = array("iOS","Android","Windows Phone","Black Berry","Nokia S40");
$preco = array("1999.00","2500.00","3999.50","5999.00","2199.90");
$marca = array("Apple","Samsung","Windows","Sun","Nokia");
$fabricante = array("Manaus","California","Taiwan","Italy","Finlândia");
$datafabricacao = array("2023-01-04","2023-12-01","2023-12-15","2022-01-10","2022-02-05");
$origem = array("Nacional","Importado");


//11 iphone
for($i=0;$i<11;$i++){
	$comando="INSERT into produtos ".
			" (imagem,descricao,preco,marca,fabricante,datafabricacao,origem) VALUES (LOAD_FILE('".
			$iphone[rand(0,3)]."'),'".
			$descricao[rand(0,0)]."','".
			$preco[rand(0,4)]."','".
			$marca[rand(0,0)]."','".
			$fabricante[rand(0,4)]."','".
			$datafabricacao[rand(0,4)]."','".
			$origem[rand(0,1)]."');";
	if($mysqli->query($comando)){
		echo "<br>Deu certo a inserção";
	}else{
		echo "<br>Erro na inserção".$mysqli->error;
	}
	echo "<br>".$comando;
}

//11 Android
for($i=0;$i<11;$i++){
	$comando="INSERT into produtos ".
			" (imagem,descricao,preco,marca,fabricante,datafabricacao,origem) VALUES (LOAD_FILE('".
			$android[rand(0,3)]."'),'".
			$descricao[rand(1,1)]."','".
			$preco[rand(0,4)]."','".
			$marca[rand(1,1)]."','".
			$fabricante[rand(0,4)]."','".
			$datafabricacao[rand(0,4)]."','".
			$origem[rand(0,1)]."');";
	if($mysqli->query($comando)){
		echo "<br>Deu certo a inserção";
	}else{
		echo "<br>Erro na inserção".$mysqli->error;
	}
	echo "<br>".$comando;
}

//11 Windows
for($i=0;$i<11;$i++){
	$comando="INSERT into produtos ".
			" (imagem,descricao,preco,marca,fabricante,datafabricacao,origem) VALUES (LOAD_FILE('".
			$windows[rand(0,1)]."'),'".
			$descricao[rand(2,2)]."','".
			$preco[rand(0,4)]."','".
			$marca[rand(2,2)]."','".
			$fabricante[rand(0,4)]."','".
			$datafabricacao[rand(0,4)]."','".
			$origem[rand(0,1)]."');";
	if($mysqli->query($comando)){
		echo "<br>Deu certo a inserção";
	}else{
		echo "<br>Erro na inserção".$mysqli->error;
	}
	echo "<br>".$comando;
}

//11 black
for($i=0;$i<11;$i++){
	$comando="INSERT into produtos ".
			" (imagem,descricao,preco,marca,fabricante,datafabricacao,origem) VALUES (LOAD_FILE('".
			$black[rand(0,2)]."'),'".
			$descricao[rand(4,4)]."','".
			$preco[rand(0,4)]."','".
			$marca[rand(4,4)]."','".
			$fabricante[rand(0,4)]."','".
			$datafabricacao[rand(0,4)]."','".
			$origem[rand(0,1)]."');";
	if($mysqli->query($comando)){
		echo "<br>Deu certo a inserção";
	}else{
		echo "<br>Erro na inserção".$mysqli->error;
	}
	echo "<br>".$comando;
}

//11 Nokia
for($i=0;$i<11;$i++){
	$comando="INSERT into produtos ".
			" (imagem,descricao,preco,marca,fabricante,datafabricacao,origem) VALUES (LOAD_FILE('".
			$nokia[rand(0,2)]."'),'".
			$descricao[rand(4,4)]."','".
			$preco[rand(0,4)]."','".
			$marca[rand(4,4)]."','".
			$fabricante[rand(0,4)]."','".
			$datafabricacao[rand(0,4)]."','".
			$origem[rand(0,1)]."');";
	if($mysqli->query($comando)){
		echo "<br>Deu certo a inserção";
	}else{
		echo "<br>Erro na inserção".$mysqli->error;
	}
	echo "<br>".$comando;
}

//imprimindo os times finais
$vData_ = date("Y-m-dH:i:s");
$time_end = microtime(true);
echo "<br>fim".$vData_;
echo " fim microtme ".$time_end;

//calculando o tempo total
$time = $time_end - $time_start;
echo "<br> tempo de processamento do Insert=>".$time;

?>
