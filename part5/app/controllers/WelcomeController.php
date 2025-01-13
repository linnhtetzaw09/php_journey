<?php

class WelcomeController extends SystemController
{
    private $mainModal;

    public function __construct()
    {
        // echo "I am WelcomeController";
        $this->mainModal = $this->model('Welcome');
    }

    public function index()
    {

        $datas = [
            "title" => "Welcome Page",
        ];
        return $this->view('welcomes/index', $datas);

    }

    public function create()
    {
        echo "I am Article create Page. <br/>";
    }

    public function about()
    {
        $datas = [
            "title" => "About",
        ];
        return $this->view('welcomes/about', $datas);

    }

    public function property()
    {
        echo " i am property page <br/>";
    }

    public function service()
    {
        echo " i am service page <br/>";
    }

    public function customer()
    {
        echo " i am customer page <br/>";
    }

    public function furniture()
    {
        echo " i am furniture page <br/>";
    }

    public function contact()
    {
        echo " i am contact page <br/>";
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
