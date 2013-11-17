<?php
/**
 * This lib_model should be available in all models
 */
class lib_model {

    function __construct() {
        $this->db = new factory_db();
    }

}
