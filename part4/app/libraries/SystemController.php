<?php

class SystemController
{
    public function view($blade, $datas = [])
    {
        echo "I am View from Libraries > Controller.<br>";

        // Check if the view file exists
        if (file_exists('../app/views/' . $blade . '.php')) {
            echo "View file exists.<br>";
            require_once '../app/views/' . $blade . '.php';
        } else {
            die("View file does not exist.");
        }
    }

    public function model($model)
    {
        echo "I am Model from Libraries > Controller.<br>";

        // Check if the model file exists
        if (file_exists('../app/models/' . $model . '.php')) {
            echo "Model file exists.<br>";
            require_once '../app/models/' . $model . '.php';
            return new $model();
        } else {
            die("Model file does not exist.");
        }
    }
}

?>
