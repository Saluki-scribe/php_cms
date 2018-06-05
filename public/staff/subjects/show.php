<?php require_once('../../../private/initialize.php'); ?>

<?php 

$id = $_GET['id'] ?? '1'; //PHP > 7.0

echo h('Subject Id: ' . $id);

?>