<?php

    require_once 'controller/blog.controller.php';
    //require_once 'controller/admin.controller.php';

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {

        $page = 'home';
    }

    ob_start();



    if ($page === 'home') {

        home();


    } else if ($page === 'blog') {

        blog();


    } else if ($page === 'post') {

        post();

    }

    $content = ob_get_clean();

    require 'pages/blog/view.php';




