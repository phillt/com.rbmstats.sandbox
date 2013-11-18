<?php

class controller_parsecsv extends lib_controller {

    function __construct($_view) {
        parent::__construct($_view);
        $this->_file = $this->_model->_confirm_file();
        
    }
    
    function process_file(){
        if (!$this->_file){
            header( 'Location: ' . SITE_URL) ;
        }
        // send file to model for analize
    }
}
