<?php

require_once('../../../private/initialize.php'); 

$test = $_GET['test'] ?? '';

if($test == '404') {
    error_404();
} else if($test == '500') {
    error_500();
} else if($test == 'redirect') {
    redirect_to(url_for('/staff/subjects/index.php'));
}
?>

<?php $page_title = 'Create Subject'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

    <a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>

</div>