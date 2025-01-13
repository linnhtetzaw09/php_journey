<?php


class ArticlesController extends SystemController
{
    private $mainModal;

    public function __construct()
    {

        if(!authcheck()){
            redirect('users/login');
        }else{
            $this->mainModal = $this->model('Article');
        }
    }

    public function index()
    {
        $articles = $this->mainModal->getarticles();

        $datas = [
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

?>
