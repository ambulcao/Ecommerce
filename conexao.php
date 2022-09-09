<?php

try {
  $conexao = new PDO('mysql:host=localhost;dbname=db_ecommerce','root','');
  $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //$result = $conexao->query("SELECT * FROM tb_products")->fetchAll();

  /*foreach ($result as $item) {
    echo $item['desproduct'] . ' - ' . $item['vlprice'] . '<br />';
  }*/
  
} catch (PDOException $error) {
  echo "ERRO => " . $error->getMessage();
}

?>