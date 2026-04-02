<?php
session_start();

require_once "php/data.php";

if(!isset($_SESSION["books"])){
    $_SESSION["books"] = $books;
}

session_destroy();