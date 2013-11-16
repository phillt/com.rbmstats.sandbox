<?php


// Get uri
if(isset($_GET['url'])){
    // load appropriate page;
    $_url = $_GET['url'];
}else{
    // Not set, load index
    $_url = "index";
}

// Load $_url controller;
$_controller= "controller_" . $_url;
// Load controller
$_controller = new $_controller;
// Instantiate render class
$_render = new lib_render($_url);
// Render page

$_render->render_header();
$_render->render_body();
$_render->render_footer();
