
<?php

session_start();


class StatusesController extends SystemController
{
    private $statusModel;
    private $userModel;

    public function __construct()
    {
        // Check if user is logged in before accessing this page
        if (!authcheck()) {
            redirect('users/login');
        }

        $this->statusModel = $this->model('Status');
        $this->userModel = $this->model('User');
    }

    public function index()
    {
        $statuses = $this->statusModel->allstatuses();

        $datas = [
            'statuses' => $statuses
        ];
        return $this->view('statuses/index', $datas);
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);  

            $datas = [
                'name' => textfilter($_POST['name'] ?? ''),
                'user_id' => $_SESSION['user_id'], // Fix: Correct session usage
                "nameerr" => ""
            ];

            // Validate name
            if (empty($datas['name'])) {
                $datas["nameerr"] = "Please enter status name.";
            }

            // If no errors, create status
            if (empty($datas['nameerr'])) {
                if ($this->statusModel->createstatus($datas)) {
                    flash("status_success", "New status created");
                    redirect("statuses");
                } else {
                    die("Something went wrong");
                }
            } else {
                return $this->view('statuses/create', $datas);
            }

        } else {
            $datas = [
                "name" => ""
            ];
            return $this->view('statuses/create', $datas);
        }
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);  

            $datas = [
                "id" => $id,
                'name' => textfilter($_POST['name'] ?? ''),
                'user_id' => $_SESSION['user_id'], // Fix: Correct session usage
                "nameerr" => ""
            ];

            // Validate name
            if (empty($datas['name'])) {
                $datas["nameerr"] = "Please enter status name.";
            }

            // If no errors, update status
            if (empty($datas['nameerr'])) {
                if ($this->statusModel->updatestatus($datas)) {
                    flash("status_success", "Status Updated");
                    redirect("statuses");
                } else {
                    die("Something went wrong");
                }
            } else {
                return $this->view('statuses/edit', $datas);
            }

        } else {
            $status = $this->statusModel->getstatusbyid($id);

            // Check if the logged-in user is the owner of the status
            if ($status["user_id"] != $_SESSION['user_id']) {
                redirect("statuses");
            }

            $datas = [
                "id" => $id,
                "name" => $status['name']
            ];
            return $this->view('statuses/edit', $datas);
        }
    }

    public function destroy($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $status = $this->statusModel->getstatusbyid($id);

            // Check if the logged-in user is the owner of the status
            if ($status['user_id'] != $_SESSION['user_id']) {
                redirect('statuses');
            }

            if ($this->statusModel->deletestatus($id)) {
                flash("status_success", "Status Deleted Successfully");
                redirect("statuses");
            } else {
                die("Something went wrong");
            }

        } else {
            redirect("statuses");
        }
    }
}

?>
