<?php


class ArticlesController extends SystemController
{
    private $articleModel;
    private $statusModel;
    private $userModel;
    private $categoryModel;

    public function __construct()
    {
        if(!authcheck()){
            redirect('users/login');
        }else{
            $this->articleModel = $this->model('Article');
            $this->statusModel = $this->model('Status');
            $this->categoryModel = $this->model('Category');
            $this->userModel = $this->model('User');
        }
    }

    public function index()
    {
        $articles = $this->articleModel->allarticles();

        $datas = [
            'articles' => $articles
        ];
        return $this->view('articles/index',$datas);

    }

    public function create()
    {
        if($_SERVER['REQUEST_METHOD'] == "POST"){

            // to prevent cross-site scription xss attacks by html and js code
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);  

            $statuses = $this->statusModel->allstatuses();
            $categories = $this->categoryModel->allcategories();


            $datas = [
                'image' => $_FILES['image']['name'],
                'title' => textfilter($_POST['title'] ?? ''),
                'content' => textfilter($_POST['content'] ?? ''),
                'category_id' => textfilter($_POST['category_id'] ?? ''),
                'status_id' => textfilter($_POST['status_id'] ?? ''),
                'user_id' => $_SESSION('user_id'),
                "imageerr" => "",
                "titleerr" => "",
                "contenterr" => "",
                "categories" => $categories,
                "category_iderr" => "",
                "statuses" => $statuses,
                "status_iderr" => "",
            ];

            // validate name
            if(empty($datas['image'])){
                $datas["imageerr"] = "Please insert image.";
            }

            if(empty($datas['title'])){
                $datas["titleerr"] = "Please enter title.";
            }

            if(empty($datas['content'])){
                $datas["contenterr"] = "Please enter content.";
            }

            if(empty($datas['category_id'])){
                $datas["category_iderr"] = "Please choose category.";
            }

            if(empty($datas['status_id'])){
                $datas["status_iderr"] = "Please choose status.";
            }

            // no errors
            if(empty($datas['imageerr']) && empty($datas['titleerr']) && empty($datas['contenterr']) && empty($datas['category_iderr']) && empty($datas["status_iderr"])){

                // upload single image
                $getroot = dirname(dirname(dirname(__FILE__)));      //  /phplessons/part5
                $uploaddir = $getroot. "public/assets/images";      //   /phplessons/part5/public/assets/images
                $newfilename = $datas["user_id"].time().basename($_FILES['image']['name']);
                $uploadfile = $uploaddir.$newfilename;

                if(move_uploaded_file($_FILES['image']['tmp_name'],$uploadfile)){
                    $datas["image"] = $newfilename;
                } else{
                    echo "Upload failed.";
                }

               if($this->articleModel->createarticle($datas)){
                flash("article_succcess","New article created");
                redirect("articles");
               }else{
                die("Something went wrong");
               }
            } else{
                // load the view with validation errors
                return $this->view('articles/create',$datas);
            }

        } else{

            $statuses = $this->statusModel->allstatuses();
            $categories = $this->categoryModel->allcategories();

            $datas = [
                "image" => "",
                "title" => "",
                "content" => "",
                "category_id" => "",
                "categories" => $categories,
                "statuses" => $statuses
            ];
            return $this->view('articles/create',$datas);
        }
    }

    public function show($id)
    {
        $article = $this->getarticlebyid($id);
        $user = $this->userModel->getuserbyid($articles['user_id']);
        $status = $this->statusModel->getstatusbyid($articles['user_id']);
        $category = $this->categoryModel->getcategorybyid($articles['user_id']);

            $datas = [
                "article" => $article,
                "category" => $category,
                "statuses" => $status,
                "user" => $user
            ];
            return $this->view('articles/show',$datas);
    }

    public function edit($id)
    {
        if($_SERVER['REQUEST_METHOD'] == "POST"){

            // to prevent cross-site scription xss attacks by html and js code
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);  

            $statuses = $this->statusModel->allstatuses();
            $categories = $this->categoryModel->allcategories();


            $datas = [
                'id' => $id,
                'image' => $_FILES['old_image']['name'],
                'title' => textfilter($_POST['title'] ?? ''),
                'content' => textfilter($_POST['content'] ?? ''),
                'category_id' => textfilter($_POST['category_id'] ?? ''),
                'status_id' => textfilter($_POST['status_id'] ?? ''),
                'user_id' => $_SESSION('user_id'),
                "imageerr" => "",
                "titleerr" => "",
                "contenterr" => "",
                "categories" => $categories,
                "category_iderr" => "",
                "statuses" => $statuses,
                "status_iderr" => "",
            ];

            
            if(empty($datas['title'])){
                $datas["titleerr"] = "Please enter title.";
            }

            if(empty($datas['content'])){
                $datas["contenterr"] = "Please enter content.";
            }

            if(empty($datas['category_id'])){
                $datas["category_iderr"] = "Please choose category.";
            }

            if(empty($datas['status_id'])){
                $datas["status_iderr"] = "Please choose status.";
            }

            // no errors
            if(empty($datas['titleerr']) && empty($datas['contenterr']) && empty($datas['category_iderr']) && empty($datas["status_iderr"])){

                // upload singl{e image
                if(!empty($_FILES['image']['name'])){

                    $getroot = dirname(dirname(dirname(__FILE__)));      //  /phplessons/part5
                    $uploaddir = $getroot. "public/assets/images";      //   /phplessons/part5/public/assets/images
                    $newfilename = $datas["user_id"].time().basename($_FILES['image']['name']);
                    $uploadfile = $uploaddir.$newfilename;

                    // remove old image
                    $getoldimage = $uploaddir.$datas["image"];

                    if(file_exists($getoldimage)){
                        unlink($getoldimage);
                    }

                    // upload new image
                    if(move_uploaded_file($_FILES['image']['tmp_name'],$uploadfile)){
                        $datas["image"] = $newfilename;
                    } else{
                        echo "Upload failed.";
                    }

                }else{
                    // get old image
                    $datas["image"] = $datas["image"];
                }

                

               if($this->articleModel->updatearticle($datas)){
                flash("article_succcess","New article updated");
                redirect("articles");
               }else{
                die("Something went wrong");
               }
            } else{
                // load the view with validation errors
                return $this->view('articles/edit',$datas);
            }

        } else{

            $article = $this->articleModel->getarticlebyid($id);
            $statuses = $this->statusModel->allstatuses();
            $categories = $this->categoryModel->allcategories();

            // check article owner
            if($article['user_id'] != $_SESSION["user_id"]){
                redirect("articles");
            }

            $datas = [
                "id" => $id,
                "image" => $article["image"],
                "title" => $article["title"],
                "content" => $article["content"],
                "category_id" => $article["category_id"],
                "status_id" => $article["status_id"],
                "categories" => $categories,
                "statuses" => $statuses
            ];
            return $this->view('articles/edit',$datas);
        }
    }

    public function update($id)
    {
        echo " i am article update page = id is $id <br/>";
        
    }

    public function destroy($id)
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $article = $this->articleModel->getarticlebyid($id);

            // check status owner
            if($article['user_id'] != $_SESSION['user_id']){
                redirect('articles');
            }

            // remove old image
            $getroot = dirname(dirname(dirname(__FILE__)));      //  /phplessons/part5
            $uploaddir = $getroot. "public/assets/images";      //   /phplessons/part5/public/assets/images
            $getoldimage = $uploaddir.$article["image"];

            if(file_exists($getoldimage)){
                unlink($getoldimage);
            }

            if($this->categoryModel->deletearticle($id)){
                flash("article_success"," Deleted Successfully");
                redirect("articles");
            } else{
                die("Something went wrong");
            }

        } else{
            redirect("articles");
        }
        
    }
}

?>
