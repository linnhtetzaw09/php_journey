<?php

require_once '../libraries/SystemController.php';

class ArticlesController extends SystemController
{
    private $mainModel;

    public function __construct()
    {
        // echo "I am article controller";
        $this->mainModel = $this->model('Article');
    }

    public function index()
    {
        // echo "I am Article Index Page.";

        // return $this->view('articles/index');
        // return $this->view('articles/index', ['greeting'=>"Hello Sir"]);

        $articles = $this->mainModel->getarticles();
        $datas = [
            "greeting" => "Have a nic day",
            'articles' => $articles
        ];
        return $this->view('articles/index',$datas);

    }

    public function create()
    {
        echo "I am Article create Page. <br/>";
    }

    public function show($id)
    {
        echo " i am article show page = id is $id <br/>";
    }

    public function edit($id)
    {
        echo " i am article edit page = id is $id <br/>";
    }

    public function update($id)
    {
        echo " i am article update page = id is $id <br/>";
        
    }

    public function destroy($id)
    {
        echo " i am article destroy page = id is $id <br/>";
        
    }
}

// Create an instance of the controller to execute the constructor
// new ArticlesController();

?>
