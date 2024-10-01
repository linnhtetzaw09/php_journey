<?php

require_once("Article.php");

$articleobj = new Article();

// => Read 
// echo "<pre>".print_r($articleobj->getarticles(),true)."</pre>";
// var_dump($articleobj->getarticles());

// var_dump($articleobj->getarticlebyid(1));
// var_dump($articleobj->getarticlebyid(3));
// var_dump($articleobj->getarticlebyid(4));
// var_dump($articleobj->getarticlebyid(14));


// => Insert
// $data = ["title"=>"this is new article 10","content"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry","user_id"=>10];
// $articleobj->insertarticle($data);
// var_dump($articleobj->getarticles());


// => Update
// $data = ["id"=>6,"title"=>"this is new article 6","content"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry","user_id"=>6];
// $articleobj->updatearticle($data);
// var_dump($articleobj->getarticles());


// => Delete
$articleobj->deletearticle(8);
var_dump($articleobj->getarticles());



?>