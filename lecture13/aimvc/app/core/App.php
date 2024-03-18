<?php
    class App{
        public $controller = "";
        public $method = "";
        public $parameter = "";
        public function __construct(){
            $this->initDefaultController("Home", "index", "");
            $url = $this -> parseURL();
            //var_dump($url);

            if(file_exists('../app/controller/'.$url[0].'.php')) {
                $this->controller = $url[0];
                unset($url[0]);
                //var_dump($url);
            }

            require_once '../app/controller/'.$this->controller.'.php';
            $this->controller = new $this->controller;

            if(isset($url[1])){
                $name_method = $url[1];
                if(!$this->starts_with($name_method, "_")){
                    if(method_exists($this->controller, $name_method)){
                        $this->method = $name_method;
                        unset($url[1]);
                        //var_dump($url);
                    }
                }else{
                    unset($url);
                }
            }

            if(!empty($url)){
                $this->parameter = array_values($url);
            }else{
                $this->parameter = array();
            }

            call_user_func_array([$this->controller, $this->method], $this->parameter);
        }

        private function starts_with($str, $prefix){
            return  strpos($str, $prefix) === 0;
        }


        private function initDefaultController($controller, $method, $param){
            $this->controller = $controller;
            $this->method = $method;
            $this->parameter = $param;
        }

        public function parseURL(){
            if(isset($_GET['url'])){
                $url = rtrim($_GET['url'], '/');

                $url = filter_var($url, FILTER_SANITIZE_URL);

                $url = explode('/', $url);

                return $url;
            }
        }
    }

?>