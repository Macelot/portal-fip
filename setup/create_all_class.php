<?php
/**
 * @license GPLv3 (http://www.gnu.org/licenses/gpl-3.0.html)
 * @version 1.0.0_20130220000000
 */

require_once('db_code_generator.php');
require_once('./Conn_mysql.php');

$username = 'root2';;
$password = 'usbw';
$host = 'localhost';
$type = 'mysql';
$database = 'loja';
$table = array();
$folder = '../../src/Model/';

$db = new Conn_mysql(); 
$query = $db->select('show tables');

//var_dump($query);

$quant=1;
foreach ($query as $key => $value) {
    try{ 
        $object = new db_code_generator($database, $value[0], $username, $password, $host, $type);
        
        //create class file
        //remove _ 
        $className1 = $value[0];
        $className2 = str_replace("_", " ",$className1);
        //ucfirst
        $className3 = ucwords($className2);
        //add _
        $className4 = str_replace(" ", "_",$className3);
        
        $myfile = fopen($folder.$className4.".php", "w");
        
        //print_r(error_get_last());

        fwrite($myfile,  $object->get_code());
        //echo "fffffdddd";
        //die();
        fclose($myfile);
        echo " ".$quant." - PHP Class ".$folder.$className4.".php <br>";
        
        $quant++;
    }catch(PDOException $e){ 
        die("Erro----: " . $e->getMessage()); 
    }      
}   
    
echo "ok Passo 2/4 Class <br> ";

echo "passo 1: Estrutura<br> ";
echo "passo 2: Class<br> ";
echo "passo 3: account(1), country(10), regional(5), company(37), outsorced(12), geocode(29386), driving_distance(215889), quadrant(25)<br> ";
echo "passo 4: account(4), people account_type(8)<br> ";
 
?>