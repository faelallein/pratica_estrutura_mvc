<?php

class Core
{
    private $controller;
    private $method;
    private $parameters = array();

    function __construct()
    {
        $this->VerifyUri();
    }

    public function run()
    {
        $currentController = $this->getController();

        $c = new $currentController;

        call_user_func_array(
            array($c, $this->getMethod()),
            $this->getParameters()
        );
    }

    public function VerifyUri()
    {
        $url = explode("index.php", $_SERVER["PHP_SELF"]);
        $url = end($url);

        if ($url != "") {
            $url = explode("/", $url);
            array_shift($url);

            //preenche o controller
            $this->controller = ucfirst($url[0]) . "Controller";
            array_shift($url);
            if (isset($url[0])) {
                //preenche o method
                $this->method = $url[0];
                array_shift($url);
            }

            if (isset($url[0])) {
                //preenche o parameters
                $this->parameters = array_filter($url);
            }
        } else {
            $this->controller = ucfirst(CONTROLLER_DEFAULT) . "Controller";
        }
    }


    function getController()
    {
        if (class_exists(NAMESPACE_CONTROLLER . $this->controller)) {
            return NAMESPACE_CONTROLLER . $this->controller;
        }

        return NAMESPACE_CONTROLLER . ERROR404;
    }

    function setController($controller)
    {
        $this->controller = $controller;
    }

    function getMethod()
    {
        if (method_exists(NAMESPACE_CONTROLLER . $this->controller, $this->method)) {
            return $this->method;
        }
        return METHOD_DEFAULT;
    }

    function setMethod($method)
    {
        $this->method = $method;
    }

    function getParameters()
    {
        return $this->parameters;
    }

    function setParameters($parameters)
    {
        $this->parameters = $parameters;
    }
}
