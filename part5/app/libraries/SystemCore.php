<?php

class SystemCore
{
    protected $curController = "ArticlesController";
    protected $currentMethod = "index";
    protected $params = [];

    public function __construct()
    {
        // Parse the URL
        $url = $this->getRoute();

        // Determine the controller
        $classurl = isset($url[0]) && !empty($url[0]) ? ucwords($url[0]) : "Articles";
        // echo "Controller: $classurl <br/>";

        $controllerPath = APPURL . "/controllers/" . $classurl . "Controller.php";

        if (file_exists($controllerPath)) {
            $this->curController = $classurl . "Controller";
            unset($url[0]); // Remove the used segment
        } else {
            die("Error: Controller '$classurl' does not exist.<br/>");
        }

        // Include the controller file
        require_once $controllerPath;

        // Instantiate the controller
        if (class_exists($this->curController)) {
            $this->curController = new $this->curController;
        } else {
            die("Error: Controller class '{$this->curController}' not found.<br/>");
        }

        // Determine the method
        if (isset($url[1])) {
            if (method_exists($this->curController, $url[1])) {
                // echo "Method exists: {$url[1]}<br/>";
                $this->currentMethod = $url[1];
                unset($url[1]); // Remove the used segment
            } else {
                die("Error: Method '{$url[1]}' does not exist in controller '{$this->curController}'.<br/>");
            }
        }

        // Get any remaining parameters
        $this->params = $url ? array_values($url) : [];
        // echo "Parameters: " . print_r($this->params, true) . "<br/>";

        // Call the controller method with parameters
        call_user_func_array([$this->curController, $this->currentMethod], $this->params);
    }

    private function getRoute()
    {
        $url = isset($_GET['url']) ? rtrim($_GET['url'], "/") : "";
        $url = filter_var($url, FILTER_SANITIZE_URL);
        return $url ? explode('/', $url) : [];
    }
}

?>
