<?php
/**
 * This lib_model should be available in all models
 */
class lib_model {

    function __construct() {
        $this->db = new factory_db();
    }
    
    public function _submit_file($_file_name, $_file_path){
        $this->db->_insert('files', ["file_name"=>$_file_name, "file_path" => $_file_path]);
    }

}
