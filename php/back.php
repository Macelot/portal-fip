<?php
date_default_timezone_set("America/Sao_Paulo");
require_once("Conn_mysql.php");

$dados = new Conn_mysql();
//definir a base de dados
$dados->getDB("fip");

if(isset($_POST['op'])){
    $op = $_POST['op'];
    if($op=='insert'){
        $projeto = $_POST['dados'];
        if($projeto['titulo']==""){
            $resultado['status'] = false;
            $resultado['message'] = "Preencha o título";
            $resultado['result'] = "erro";
            echo json_encode($resultado);  
            exit();
        }          
        $resultado = $dados->insert($projeto,'projetos');
        echo json_encode($resultado);
    }

    if($op=='delete'){
        $condicao = array(
            "where"=> array(
                "id"=> $_POST['id'],
            )    
        );
        $resultado = $dados->delete($condicao,'projetos');
        echo json_encode($resultado);
    }

    if($op=='update'){
        $condicao = array(
            "where"=>array(
                "id"=> $_POST['id'],
            ),
            "return_type"=>'single'
        );
        $projeto = $_POST['dados']; 
        $resultado = $dados->update(
            $projeto,$condicao,"projetos");
        
        echo json_encode($resultado);
    }

    if($op=='select'){
        $dados = new Conn_mysql();
        // $filtro = array(
        //     "select"=>"marca"
        // );
        $resultado = $dados->getRows("projetos");
        echo json_encode($resultado);
    }
    if($op=='selectFiltro'){
        $dados = new Conn_mysql();
        $filtro = array(
            "select"=>"Nome",
            "return_type"=>"object"
        );
        $resultado = $dados->getRows($_POST['tabela'],$filtro);
        echo json_encode($resultado);
    }
    if($op=='filtro'){
        $dados = new Conn_mysql();
        $filtro = array(
            "where"=>array(
                'id' => $_POST['id'],
            )
        );
        $resultado = $dados->getRows("projetos",$filtro);
        //echo $resultado ;
        echo json_encode($resultado);
    }
}