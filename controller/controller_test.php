<?php

class controller_test extends lib_controller {

    function __construct($_view) {
        parent::__construct($_view);
        //render index
    }

    

    function add_record() {
        // Check form issset
        if ((isset($_POST['file_name']) AND $_POST['file_name'] !== "") AND
            (isset($_POST['file_path'])AND $_POST['file_path'] !== "")) {
            $this->_model->_submit_file($_POST['file_name'], $_POST['file_path']);
            echo "Check db to see if it went int.";
            
        }else{
            // Reroute to form
           // header("header: " . SITE_URL . "/test");
            echo "Not set";
        }
      
    }

}
