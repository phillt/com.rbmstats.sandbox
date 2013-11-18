<!DOCTYPE html>
<html>

    <head>
        <title><?php echo $this->_view?></title>

        <?php
        // Manage front-end file includes
        $this->_setup_common();
        $this->_setup_js();
        $this->_setup_css();
        ?>

    </head>
    <body>
        
            <div id="main-wrapper">

