<?php

class lib_bootstrap {

    function __construct() {

        // Get URL
        $_page_params = $this->curPageURL();

        // Get uri
        if (isset($_page_params[0]) AND $_page_params !== "") {
            // load appropriate page;
            $_url = $_page_params[0];
        } else {
            // Not set, load index
            $_url = "index";
        }

        // Load $_url controller;
        $_controller_name = "controller_" . $_url;
        if (!file_exists(SITE_ROOT . '/controller/' . $_controller_name . ".php")) {
            $_url = "error";
            $_controller_name = "controller_" . $_url;
        }


        // Load controller
        $_controller = new $_controller_name($_url);
        // Call action if action is set

        if (isset($_page_params[1])) {
            // Check if method exists
            if (method_exists($_controller, $_page_params[1])) {
                $_method = $_page_params[1];
                if (isset($_page_params[2])) {
                    unset($_page_params[0]);
                    unset($_page_params[1]);

                    call_user_method($_controller, $_method, arra_values($_page_params));
                } else {
                    $_controller->$_method();
                }
            } else {
                // Handle page not found.
                header("Location: " . SITE_URL . "error");
            }
        } else {
            $_controller->_index();
        }
    }

    /**
     * curPageURL
     * 
     * Handles URL Params and
     * 
     * @return array
     */
    function curPageURL() {
        $pageURL = 'http';
        if (isset($_SERVER["HTTPS"]) && strtolower($_SERVER["HTTPS"]) == "on") {
            $pageURL .= "s";
        }
        $pageURL .= "://";
        if ($_SERVER["SERVER_PORT"] != "80") {
            $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
        } else {
            $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
        }
        // get rid of trailing slash
        $pageURL_trimmed = rtrim($pageURL, "/");
        $pre_params = explode('/', $pageURL_trimmed);
        unset($pre_params[0]);
        unset($pre_params[1]);
        unset($pre_params[2]);
        if (isset($pre_params[3]) AND $pre_params[3] === "") {
            unset($pre_params[3]);
        }
        // Remove the first three

        return array_values($pre_params);
    }

}

