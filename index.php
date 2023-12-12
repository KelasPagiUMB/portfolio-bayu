<?php
include "komponen/header.php";
if (isset($_GET['page'])) {
    //jalan klo ada get
    if ($_GET['page'] == 'home') {
        include "komponen/pages/home.php";
    } else if ($_GET['page'] == 'about') {
        include "komponen/pages/about.php";
    } else if ($_GET['page'] == 'quality') {
        include "komponen/pages/quality.php";
    } else if ($_GET['page'] == 'skill') {
        include "komponen/pages/skill.php";
    } else if ($_GET['page'] == 'portfolio') {
        include "komponen/pages/portfolio.php";
    } else if ($_GET['page'] == 'contact') {
        include "komponen/pages/contact.php";
    }
} else {
    include "komponen/pages/home.php";
}

include "komponen/footer.php";








