<?php

class UsersController extends SystemController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST data to prevent XSS
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

            // Initialize data array
            $datas = [
                "fullname" => trim($_POST['fullname'] ?? ''),
                "email" => trim($_POST['email'] ?? ''),
                "password" => trim($_POST['password'] ?? ''),
                "cfmpassword" => trim($_POST['cfmpassword'] ?? ''),
                "fullname_err" => "",
                "email_err" => "",
                "password_err" => "",
                "cfmpassword_err" => "",
            ];

            // Validate input
            $this->validateRegister($datas);

            // Check for validation errors
            if (empty($datas['fullname_err']) && empty($datas['email_err']) && empty($datas['password_err']) && empty($datas['cfmpassword_err'])) {
                // Hash the password
                $datas['password'] = password_hash($datas['password'], PASSWORD_DEFAULT);

                // Register the user
                if ($this->userModel->register($datas)) {
                    flash('register_success', 'You have successfully registered! You can now log in.');
                    redirect('users/login');
                } else {
                    die("Something went wrong while registering. Please try again.");
                }
            } else {
                // Return errors to the view
                return $this->view('users/register', $datas);
            }
        } else {
            // Load empty form
            $datas = [
                "fullname" => "",
                "email" => "",
                "password" => "",
                "cfmpassword" => "",
                "fullname_err" => "",
                "email_err" => "",
                "password_err" => "",
                "cfmpassword_err" => "",
            ];

            return $this->view('users/register', $datas);
        }
    }

    public function login(){
        // Check if the form is submitted
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Process the login data
            $email = $_POST['email'];
            $password = $_POST['password'];
    
            // Initialize the data array
            $data = [
                'email' => $email,
                'password' => $password,
                'email_err' => '',
                'password_err' => ''
            ];
    
            // Validate the email and password
            if(empty($data['email'])){
                $data['email_err'] = 'Please enter your email.';
            }
    
            if(empty($data['password'])){
                $data['password_err'] = 'Please enter your password.';
            }
    
            // If there are no errors, attempt login
            if(empty($data['email_err']) && empty($data['password_err'])){
                $this->userModel->login($data['email'], $data['password']);
            }
    
            // Load the view and pass the data array to it
            $this->view('users/login', $data);
        } else {
            // If the request is not POST, just load the login view
            $data = [
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => ''
            ];
            $this->view('users/login', $data);
        }
    }
    

    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_name']);
        unset($_SESSION['user_email']);

        // Destroy session
        session_destroy();
        redirect('users/login');
    }

    public function createusersession($user)
    {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_email'] = $user->email;
        $_SESSION['user_name'] = $user->name;

        redirect('welcomes/index');
    }

    // Helper functions for validation

    private function validateRegister(&$datas)
    {
        // Validate fullname
        if (empty($datas['fullname'])) {
            $datas['fullname_err'] = "Full name is required.";
        }

        // Validate email
        if (empty($datas['email'])) {
            $datas['email_err'] = "Email is required.";
        } elseif (!filter_var($datas['email'], FILTER_VALIDATE_EMAIL)) {
            $datas['email_err'] = "Invalid email format.";
        } elseif ($this->userModel->checkuniqueemail($datas['email'])) {
            $datas['email_err'] = "Email is already registered.";
        }

        // Validate password
        if (empty($datas['password'])) {
            $datas['password_err'] = "Password is required.";
        } elseif (strlen($datas['password']) < 6) {
            $datas['password_err'] = "Password must be at least 6 characters.";
        }

        // Validate confirm password
        if (empty($datas['cfmpassword'])) {
            $datas['cfmpassword_err'] = "Confirm password is required.";
        } elseif ($datas['password'] !== $datas['cfmpassword']) {
            $datas['cfmpassword_err'] = "Passwords do not match.";
        }
    }

    private function validateLogin(&$datas)
    {
        // Validate email
        if (empty($datas['email'])) {
            $datas['email_err'] = "Email is required.";
        } elseif (!filter_var($datas['email'], FILTER_VALIDATE_EMAIL)) {
            $datas['email_err'] = "Invalid email format.";
        }

        // Validate password
        if (empty($datas['password'])) {
            $datas['password_err'] = "Password is required.";
        }
    }
}

?>
