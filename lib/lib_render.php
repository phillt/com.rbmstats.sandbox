<?php

class lib_render extends lib_frontendauto {

    function __construct() {
        parent::__construct($this->_view);
    }

    function render_header() {

// Render header
        include SITE_ROOT . "/view/header_footer/header.php";
    }

    function render_body() {
        // Render view
        include SITE_ROOT . "/view/" . $this->_view . "/index.php";
    }

    function render_footer() {

// Render footer
        include SITE_ROOT . "/view/header_footer/footer.php";
    }

}
