<?php


class CategoriesController extends SystemController
{
    private $statusModel;
    private $userModel;
    private $categoryModel;

    public function __construct()
    {
        if(!authcheck()){
            redirect('users/login');
        }else{
            $this->statusModel = $this->model('Status');
            $this->categoryModel = $this->model('Category');
            $this->categoryModel = $this->model('User');
        }
    }

    public function index()
    {
        $categories = $this->categoryModel->allcaategories();

        $datas = [
            'categories' => $categories
        ];
        return $this->view('categories/index',$datas);

    }

    public function create()
    {
        if($_SERVER['REQUEST_METHOD'] == "POST"){

            // to prevent cross-site scription xss attacks by html and js code
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);  

            $statuses = $this->statusModel->allstatuses();

            $datas = [
                'name' => textfilter($_POST['name'] ?? ''),
                'status_id' => textfilter($_POST['status_id'] ?? ''),
                'user_id' => $_SESSION('user_id'),
                "nameerr" => "",
                "status_iderr" => "",
                "nameerr" => "",
                "statuses" => $statuses
            ];

            // validate name
            if(empty($datas['name'])){
                $datas["nameerr"] = "Please enter category name.";
            }

            if(empty($datas['status_iderr'])){
                $datas["status_iderr"] = "Please choose status.";
            }

            // no errors
            if(empty($datas['nameerr']) && empty($datas["status_iderr"])){

               if($this->categoryModel->createcategory($datas)){
                flash("category_succcess","New category created");
                redirect("categories");
               }else{
                die("Something went wrong");
               }
            } else{
                // load the view with validation errors
                return $this->view('categories/create',$datas);
            }

        } else{

            $statuses = $this->statusModel->allstatuses();

            $datas = [
                "name" => "",
                "statuses" => $statuses
            ];
            return $this->view('categories/create',$datas);
        }
    }

    public function show($id)
    {
        echo " i am article show page = id is $id <br/>";
    }

    public function edit($id)
    {
        if($_SERVER['REQUEST_METHOD'] == "POST"){

            // to prevent cross-site scription xss attacks by html and js code
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);  

            $statuses = $this->statusModel->allstatuses();

            $datas = [
                'id' => $id,
                'name' => textfilter($_POST['name'] ?? ''),
                'status_id' => textfilter($_POST['status_id'] ?? ''),
                'user_id' => $_SESSION('user_id'),
                "nameerr" => "",
                "status_iderr" => "",
                "nameerr" => "",
                "statuses" => $statuses
            ];

            // validate name
            if(empty($datas['name'])){
                $datas["nameerr"] = "Please enter category name.";
            }

            if(empty($datas['status_iderr'])){
                $datas["status_iderr"] = "Please choose status.";
            }

            // no errors
            if(empty($datas['nameerr']) && empty($datas["status_iderr"])){

               if($this->categoryModel->createcategory($datas)){
                flash("category_succcess","Category Updated");
                redirect("categories");
               }else{
                die("Something went wrong");
               }
            } else{
                // load the view with validation errors
                return $this->view('categories/edit',$datas);
            }

        } else{
            
            $category = $this->categoryModel->getcategorybyid($id);
            $statuses = $this->statusModel->allstatuses();

            // check status owner
            if($category["user_id"] != $_SESSION['user_id']){
                redirect("categories");
            }

            $datas = [
                "id" => $id,
                "name" => $category['name'],
                "status_id" => $category['status_id'],
                "statuses" => $statuses
            ];

            return $this->view('categories/edit',$datas);
        }
    }

    public function update($id)
    {
        echo " i am article update page = id is $id <br/>";
        
    }

    public function destroy($id)
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $status = $this->categoryModel->getcategorybyid($id);

            // check status owner
            if($status['user_id'] != $_SESSION['user_id']){
                redirect('categories');
            }

            if($this->categoryModel->deletecategory($id)){
                flash("category_success"," Deleted Successfully");
                redirect("categories");
            } else{
                die("Something went wrong");
            }

        } else{
            redirect("categories");
        }
        
    }
}

?>
