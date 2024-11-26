<?php

require_once '../libraries/SystemController.php';

class ArticlesController extends SystemController
{
    private $mainModel;

    public function __construct()
    {
        echo "I am article controller";
        $this->mainModel = $this->model('Article');
    }

    public function index()
    {
        echo "I am Article Index Page.";

        // return $this->view('articles/index');
    }

    public function create()
    {
        // Logic for creating an article
    }

    public function show()
    {
        // Logic for showing an article
    }

    public function update()
    {
        // Logic for updating an article
    }

    public function destroy()
    {
        // Logic for deleting an article
    }
}

// Create an instance of the controller to execute the constructor
new ArticlesController();

?>
