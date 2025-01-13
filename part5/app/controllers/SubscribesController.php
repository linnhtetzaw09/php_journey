<?php


class SubscribesController extends SystemController
{
    private $subsrcibeModel;

    public function __construct()
    {
        if(!authcheck()){
            redirect('users/login');
        }else{
            $this->subsrcibeModel = $this->model('Subscribe');
        }
    }

    public function index()
    {
        $subscribes = $this->subsrcibeModel->allsubsribes();

        $datas = [
            'subscribes' => $subscribes
        ];
        return $this->view('subscribes/index',$datas);

    }



    public function create()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            // to prevent cross-site scripting (XSS)
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

            $datas = [
                "name" => textfilter($_POST['name'] ?? ''),
                "email" => textfilter($_POST['email']),
                "status_id" => textfilter($_POST['status_id']),
                "name_err" => "",
                "email_err" => "",
            ];

            if($this->subsrcibeModel->createsubscribe($datas)){
                flash('subscribe_success', 'You are subscribed successfully');
                redirect('welcomes/index');
            } else{
                die("Something went wrong, please try again!");
            }

        } else{
            $datas = [
                "name" => "",
                "email" => "",
                "status_id" => "",
                "name_err" => "",
                "email_err" => "",
            ];
        }

        return $this->view('welcomes/index',$datas);
    }

}

?>
