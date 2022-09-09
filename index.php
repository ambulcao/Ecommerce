<?php 

require_once("vendor/autoload.php");
require_once("./conexao.php");



$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
	$conexao = new PDO('mysql:host=localhost;dbname=db_ecommerce','root','');
    
	$result = $conexao->query("SELECT * FROM tb_products")->fetchAll();

  foreach ($result as $item) {
    echo $item['desproduct'] . ' - ' . $item['vlprice'] . '<br />';
  }

});

$app->run();

 ?>