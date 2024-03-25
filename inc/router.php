<?php

if(empty($_GET)) {
    $content='home';
} else {
    if(isset($_GET['page'])) {
        $content=$_GET['page'];
    }
}