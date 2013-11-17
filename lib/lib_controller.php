<?php

// Parent controller_class for all sub controllers
class lib_controller extends lib_render{
    function __construct($_view) {
        $this->_view = $_view;
        parent::__construct();
        $this->check_for_model();
    }
    
    function check_for_model () {
        if(file_exists(SITE_ROOT . "/model/model_". $this->_view . ".php")){
            $model = "model_" . $this->_view;
            $this->_model = new $model;
        }else{
            $this->_model = null;
        }
    }
    
   
        
}