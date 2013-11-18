<?php

class model_parsecsv extends lib_model {

    function __construct() {
        parent::__construct();
    }
    
    
    function convert_to_array(){
        // Request file
        
            
    }
    
    function _confirm_file(){
        if(!isset($_FILES["csv_file"])){
            // File is not set
            return false;
        }
        if ($_FILES["csv_file"]["type"] !== 'csv'){
            return false;
        }
        else{
            return true;
        }
    }
    

}
