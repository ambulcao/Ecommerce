<?php 

require_once("vendor/autoload.php");
require_once("./conexao.php");
require_once("./class/Page.php");
//require_once("./vendor/slim");

/*use \Slim\Slim;*/

/*use \Ecommerce\class\Page.html;*/

$app = new \Slim\slim();

$app->config('debug', true);

$app->get('/', function() {
	$conexao = new PDO('mysql:host=localhost;dbname=db_ecommerce','root','');
    
	/*$result = $conexao->query("SELECT * FROM tb_products")->fetchAll();

  foreach ($result as $item) {
    echo $item['desproduct'] . ' - ' . $item['vlprice'] . '<br />';
  }

});*/

	$page = new Page();

	$page->setTpl("index");

});

$app->run();

 ?>