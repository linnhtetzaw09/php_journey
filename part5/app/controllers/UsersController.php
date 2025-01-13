<?php

class UsersController extends SystemController
{
    private $usermodal;

    public function __construct()
    {
        $this->usermodal = $this->model('User');
    }

    public function register()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            // to prevent cross-site scripting (XSS)
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

            $datas = [
                "fullname" => textfilter($_POST['fullname'] ?? ''),
                "email" => textfilter($_POST['email']),
                "password" => textfilter($_POST['password']),
                "cfmpassword" => textfilter($_POST['cfmpassword']),
                "fullname_err" => "",
                "email_err" => "",
                "password_err" => "",
                "cfmpassword_err" => "",
            ];

            // validate fullname
            if(empty($datas['fullname'])){
                $datas['fullname_err'] = "Please enter your fullname";
            }

            // validate email
            if(empty($datas['email'])){
                $datas['email_err'] = "Please enter your email";
            } elseif(!filter_var($datas['email'], FILTER_VALIDATE_EMAIL) == false){
                $datas['email_err'] = "Please enter a valid email";
            } else{
                // check if email already exist
                if($this->usermodal->checkuniqueemail($datas['email'])){
                    $datas['email_err'] = "Email already exist";
                }
            }

            // validate password
            if(empty($datas['password'])){
                $datas['password_err'] = "Please enter your password";
            }elseif(strlen($datas['password']) < 6){
                $datas['password_err'] = "Password must be at least 6 characters";
            }

            // validate confirm password
            if(empty($datas['cfmpassword'])){
                $datas['cfmpassword_err'] = "Please enter your confirm password";
            } else{
                if($datas['password'] != $datas['cfmpassword']){
                    $datas['cfmpassword_err'] = "Password does not match";
                }
            }

            // check if there is no error
            if(
                empty($datas['fullname_err']) &&
                empty($datas['email_err']) &&
                empty($datas['password_err']) &&
                empty($datas['cfmpassword_err'])
            ){

                // hash password
                $datas['password'] = password_hash($datas['password'], PASSWORD_DEFAULT);

                // register the user
                if($this->usermodal->register($datas)){
                    flash('register_success', 'You are registered and can log in');
                    redirect('users/login');
                }else{
                    die('Something went wrong while registering');
                }

            }else{
                // Error sending back to the view
                return $this->view('users/register',$datas);
            }


        } else{
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
        }

        return $this->view('users/register',$datas);
    }

    public function login()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            // to prevent cross-site scripting (XSS)
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

            $datas = [
                "email" => textfilter($_POST['email']),
                "password" => textfilter($_POST['password']),
                "email_err" => "",
                "password_err" => "",
            ];

            // validate email
            if(empty($datas['email'])){
                $datas['email_err'] = "Please enter your email";
            } elseif(!filter_var($datas['email'], FILTER_VALIDATE_EMAIL) == false){
                $datas['email_err'] = "Please enter a valid email";
            } elseif(!$this->usermodal->checkuniqueemail($datas['email'])){
                // check if email already exist
                $datas['email_err'] = "No user found";
            }

            // validate password
            if(empty($datas['password'])){
                $datas['password_err'] = "Please enter your password";
            }

            // check if there is no error
            if(empty($datas['email_err']) && empty($datas['password_err'])){

                $loginuser = $this->usermodal->login($datas['email'], $datas['password']);

                if($loginuser){
                    // successful login
                    $this->createusersession($loginuser);
                }else{
                    // invalid credentials
                    $datas['password_err'] = "Password incorrect";
                    return $this->view('users/login',$datas);
                }

            }else{
                // Error sending back to the view
                return $this->view('users/login',$datas);
            }


        } else{
            $datas = [
                "email" => "",
                "password" => "",
                "email_err" => "",
                "password_err" => "",
            ];

            return $this->view('users/login',$datas);
        }
    }

    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_name']);
        unset($_SESSION['user_email']);

        // set offline status
        

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

}


?>
