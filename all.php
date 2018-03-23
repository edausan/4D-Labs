<?php  
    define('TITLE', 'Home');

    // passing array to $nav variable for adding 'navbar-active' class to navbar links
    $nav = array('','','','','','');

    // including header-2.php 
    include('header-2.php');

    // including banner.php
    include('include/banner.php');

    // including highlights.php
    include('include/highlights.php');

    // including quick0links.html
    include('include/quick-links.html');

    // including thumbnails.php
    include('include/thumbnails.php');

    // including appnotes-home.php
    include('include/appnotes-home.php');

    // including news.php
    include('include/news.php');

    // including footer-3.php
    include('footer-3.php');
?>