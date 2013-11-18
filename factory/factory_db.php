<?php

/**
 * factory_db
 * 
 * This class available, to all models, can access the db specified in the config.
 */
class factory_db extends PDO {

    /**
     * __construct
     * 
     * Builds out the settings
     */
    function __construct() {
        parent::__construct(DB_TYPE . ":host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
    }

    /**
     * _insert
     * 
     * Inserts into $table the $data provided in a n assciative array.
     * 
     * @param type $table The name of the table to insert values into.
     * @param type $data The associative array of data
     */
    function _insert($table, $data) {
        // Sort by key and alphabetical order
        ksort($data);
        // Prepare data for insertion
        $fieldNames = implode("`, `", array_keys($data));
        $fieldValues = ":" . implode(", :", array_keys($data));
        // Prepare statement
        $sth = $this->prepare("INSERT INTO $table (`$fieldNames`) VALUES($fieldValues)");
        // Bind statement
        foreach ($data as $key => $value) {
            $sth->bindValue(":$key", $value);
        }
        // Execute
        $sth->execute();
    }

    /**
     * Fetches entry
     */
    function _get() {
        
    }

    /**
     * Deletes Entry
     */
    function _remove() {
        
    }

}
