<?php
$arquivo = fopen('alunos.csv','r');
$linha = fgets($arquivo);
while($linha) {
    echo $linha."<br>";
    $linha = fgets($arquivo);
}

fclose($arquivo);

?>