<html>
    <head>
    <title><?php echo getShortcode("title"); ?></title>
    <link rel="stylesheet" type="text/css" href="../includes/css/style.css">
    </head>
    <body>
<?php 
if (isset($_GET['type'])) {
    $type = $_GET['type'];
} else {
    $type = "content";
}
if (isset($_GET['action']) or isset($_GET['item'])) {
    $action = $_GET['action'];
    $item = $_GET['item'];
} else {
    $action = "";        
    $item = "";
}
if (isset($_SESSION['role'])) {
    $role = $_SESSION['role'];
    
}
if (isset($_GET['view_category'])) {
    $category = $_GET['view_category'];
} else {
    $category = "";
}
if(isset($_GET['access_control'])) { 
    $access_control = $_GET['access_control'];
    if ($access_control == "logout") {
        logout();
    }
}
getView("nav","$role","$category","$action","$item"); 


