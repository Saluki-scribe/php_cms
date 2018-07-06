<?php 

require_once('../../../private/initialize.php'); 

if(is_post_request()) {

// Handle form values sent by new.php

$menu_name = $_POST['menu_name'] ?? '';
$position = $_POST['position'] ?? '';
$visible = $_POST['visible'] ?? '';

$sql = "INSERT INTO subjects ";
$sql .= "(menu_name, position, visible) ";
$sql .= "VALUES (";
$sql .= "'" . $menu_name . "',";
$sql .= "'" . $position . "',";
$sql .= "'" . $visible . "'";
$sql .= ")";
$result = mysqli_query($db, $sql);
// For INSERT statements, $result is true/false
if($result) {
    $new_id = mysqli_insert_id($db);
    redirect_to(url_for('/staff/subjects/show.php?id=' . $new_id));
} else {
    //INSERT failed
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
}

} else {
    redirect_to(url_for('/staff/subjects/new.php'));
}



?>