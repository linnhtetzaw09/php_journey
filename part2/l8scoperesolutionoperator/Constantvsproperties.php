<?php

class Constantvsproperties{

    const ARTICLE = "This is new article for sport";
    const TOPIC = "This is new topic for sport";

    public $post = "This is new post for sport";

    public function Contentone(){
        echo self::ARTICLE ."<br/>";
        echo static::TOPIC ."<br/>";

        echo $this->post. "<br/>";
    }
}

class Baby1 extends Constantvsproperties{

    const ARTICLE = "This is new article for science";
    const TOPIC = "This is new topic for science";

    public $post = "This is new post for science";

    public function Contenttwo(){
        echo self::ARTICLE ."<br/>";
        echo static::TOPIC ."<br/>";

        echo $this->post. "<br/>";
    }

}

echo "This is Constantvsproperties  <br/>";

$obj = new Constantvsproperties();
echo $obj::ARTICLE ."<br/>";
echo $obj::TOPIC ."<br/>"."<hr/>";
$obj->Contentone();
// This is new article for sport
// This is new topic for sport
// This is new post for sport

echo "<hr/>";
echo "<hr/>";

$obj2 = new Baby1();
echo $obj2::ARTICLE ."<br/>";
echo $obj2::TOPIC ."<br/>"."<hr/>";
$obj2->Contentone();
// This is new article for sport
// This is new topic for science
// This is new post for science
$obj2->Contenttwo();
// This is new article for science
// This is new topic for science
// This is new post for science

echo "<hr/>";
echo "<hr/>";

?>