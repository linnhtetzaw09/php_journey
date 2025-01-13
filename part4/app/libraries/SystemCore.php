<?php

class SystemCore{

    protected $curController = "ArticlesController";
    protected $currentMethod = "index";
    protected $params = [];

    public function __construct()
    {
        // echo "i am system core <br/>";

        $url = $this->getruote();
        // echo "<pre>".print_r($url,true)."</pre>";

        // => get className by first value
        $classurl = ucwords($url[0]);
        echo "$classurl <br/>";

        if (file_exists("../app/controllers/" . $classurl . "Controller.php")) {
            // echo "Controller exists. <br/>";
            $this->curController = $classurl . "Controller";
        
            // echo "<pre>" . print_r($url, true) . "</pre>";
            unset($url[0]); // unset index 0 after used for as classname
            // echo "<pre>" . print_r($url, true) . "</pre>";
        } else {
            echo "Controller doesn't exist. <br/>";
        }

        // echo "$this->curController <br/>";    // ArticlesController
        
        // => require controller
        require_once("../app/controllers/" . $classurl . "Controller.php");
        
        // => Instantiate Controller
        $this->curController = new $this->curController;
        

        // => get Method by second value
        if(isset($url[1])){
            if(method_exists($this->curController,$url[1])){
                echo "Method exits <br/>";

                $this->currentMethod = $url[1];

            // echo "<pre>" . print_r($url, true) . "</pre>";
            unset($url[1]);     // unset index 0 after used for as classname
            // echo "<pre>" . print_r($url, true) . "</pre>";

            } else{
                echo "Method does not exists <br/>";
            }
        }

        // echo $this->currentMethod;

        // => get Parameter by third value
        $this->params = $url ? array_values($url) : [];  // reset index number 2 to 0
        // echo "<pre>" . print_r($params, true) . "</pre>";

        // call_user_func_array([class,method],[argument])
        call_user_func_array([$this->curController,$this->currentMethod],$this->params);

    }

    public function getruote()
    {
        echo "i am getruote <br/>";
        // https://localhost/phplessons/part4/articles/show/12/

        // $url = "i am get route";

        // $url = $_GET['url'];   // articles/show/12/

        $url = isset($_GET['url']) ? rtrim($_GET['url'],"/") : "";      // articles/show/12

        // filter_var(string,filter) for remove charref as 
        $url = filter_var($url,FILTER_SANITIZE_URL);

        $url = explode('/',$url);

        return $url;
    }

}

// new SystemCore();


?>