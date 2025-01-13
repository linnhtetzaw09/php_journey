<?php


class StatusesController extends SystemController
{
    private $statusModel;
    private $userModel;

    public function __construct()
    {
        if(!authcheck()){
            redirect('users/login');
        }

        if(!authcheck()){
            redirect('users/login');
        }else{
            $this->statusModel = $this->model('Status');
            $this->userModel = $this->model('User');
        }
    }

    public function index()
    {
        $statuses = $this->statusModel->allstatuses();

        $datas = [
            'statuses' => $statuses
        ];
        return $this->view('statuses/index',$datas);

    }



    public function create()
    {

        if($_SERVER['REQUEST_METHOD'] == "POST"){

            // die("form submitted");
            // to prevent cross-site scription xss attacks by html and js code
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);  

            $datas = [
                'name' => textfilter($_POST['name'] ?? ''),
                'user_id' => $_SESSION('user_id'),
                "nameerr" => ""
            ];

            // validate name
            if(empty($datas['name'])){
                $datas["nameerr"] = "Please enter status name.";
            }

            // no errors
            if(empty($datas['nameerr'])){
               if($this->statusModel->createstatus($datas)){
                flash("status_succcess","New status created");
                redirect("statuses");
               }else{
                die("Something went wrong");
               }
            } else{
                // load the view with validation errors
                return $this->view('users/register',$datas);
            }

        } else{
            $datas = [
                "name" => ""
            ];
            return $this->view('statuses/create',$datas);
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

            $datas = [
                "id" => $id,
                'name' => textfilter($_POST['name'] ?? ''),
                'user_id' => $_SESSION('user_id'),
                "nameerr" => ""
            ];

            // validate name
            if(empty($datas['name'])){
                $datas["nameerr"] = "Please enter status name.";
            }

            // no errors
            if(empty($datas['nameerr'])){
               if($this->statusModel->updatestatus($datas)){
                flash("status_succcess","Status Updated");
                redirect("statuses");
               }else{
                die("Something went wrong");
               }
            } else{
                // load the view with validation errors
                return $this->view('statuses/edit',$datas);
            }

        } else{
            $status = $this->statusModel->getstatusbyid($id);

            // check status owner
            if($status["user_id"] != $_SESSION['user_id']){
                redirect("statuses");
            }

            $datas = [
                "id" => $id,
                "name" => $status['name']
            ];
            return $this->view('statuses/edit',$datas);
        }

    }

    public function update($id)
    {
        echo " i am article update page = id is $id <br/>";
        
    }

    public function destroy($id)
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $status = $this->statusModel->getstatusbyid($id);

            // check status error
            if($status['user_id'] != $_SESSION['user_id']){
                redirect('statuses');
            }

            if($this->statusModel->deletestatus($id)){
                flash("status_success"," Deleted Successfully");
                redirect("statuses");
            } else{
                die("Something went wrong");
            }

        } else{
            redirect("statuses");
        }
    }
}

?>
