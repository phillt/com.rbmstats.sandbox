<?php

class lib_frontendauto {

    function __construct($_active) {
        // Set up active URL
        $this->view = $_active;
    }

    function _setup_js() {
        // Check for js folder in the $_active url
        if (file_exists(SITE_ROOT . "/view/" . $this->view . "/js")) {
            // Loop through them and echo js includsion
            $js_dir = new DirectoryIterator(SITE_ROOT . "/view/" . $this->view . "/js");
            foreach ($js_dir as $fileinfo) {
                if ($fileinfo->getFilename() !== "." AND $fileinfo->getFilename() !== ".." AND $fileinfo->getExtension () === "js") {
                    echo "<script type='text/javascript' src='" . SITE_URL . "view/" . $this->view . "/js/" . $fileinfo->getFilename() . "'></script>";
                }
            }
        }
    }

    function _setup_css() {

        // Check for js folder in the $_active url
        if (file_exists(SITE_ROOT . "/view/" . $this->view . "/css")) {
            // Loop through them and echo js includsion
            $js_dir = new DirectoryIterator(SITE_ROOT . "/view/" . $this->view . "/css");
            foreach ($js_dir as $fileinfo) {
                if ($fileinfo->getFilename() !== "." AND $fileinfo->getFilename() !== ".." AND $fileinfo->getExtension () === "css") {
                    echo '<link rel="stylesheet" type="text/css" href="' . SITE_URL . "view/" . $this->view . "/css/" . $fileinfo->getFilename() . '">';
                }   
            }
        }
    }
    
    function _setup_common(){
        if (file_exists(SITE_ROOT . "/view/common/css")) {
            // Loop through them and echo js includsion
            $js_dir = new DirectoryIterator(SITE_ROOT . "/view/common/css");
            foreach ($js_dir as $fileinfo) {
                if ($fileinfo->getFilename() !== "." AND $fileinfo->getFilename() !== ".." AND $fileinfo->getExtension () === "css") {
                    echo '<link rel="stylesheet" type="text/css" href="' . SITE_URL . "view/common/css/" . $fileinfo->getFilename() . '">';
                }
            }
        }
        
        if (file_exists(SITE_ROOT . "/view/common/js")) {
            // Loop through them and echo js includsion
            $js_dir = new DirectoryIterator(SITE_ROOT . "/view/common/js");
            foreach ($js_dir as $fileinfo) {
                if ($fileinfo->getFilename() !== "." AND $fileinfo->getFilename() !== ".." AND $fileinfo->getExtension () === "js") {
                    echo "<script type='text/javascript' src='" . SITE_URL . "view/common/js/" . $fileinfo->getFilename() . "'></script>";
                }
            }
        }
    }

}


