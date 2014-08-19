<?php
/**
 * The index.php (required) serves as the front controller for the requested page, 
 * initializing the base resources needed to run the page
 */
$pageTitle = _t('Blog (AJAX List & Pagination)');

?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo _title($pageTitle); ?></title>
	<?php include( _i('inc/head.php') ); ?>         
</head>
<body>
	<?php include('view.php'); ?>
</body>
</html>
<script type="text/javascript">
$(function(){
	Page.Blog.init();
});
</script>