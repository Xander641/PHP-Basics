<!doctype html>

<html lang="en">
  <head>
    <title>Pages</title>
    <meta charset="utf-8">
  </head>

  <body>
<?php require_once('../../../private/initialize.php'); ?>

<?php $pages = [
  ['id' => '1', 'position' => '1', 'visible' => true, 'menu_name' => 'About BNG'],  
  ['id' => '2', 'position' => '2', 'visible' => true, 'menu_name' => 'Consumer'],
  ['id' => '3', 'position' => '3', 'visible' => true, 'menu_name' => 'SMB'],
  ['id' => '4', 'position' => '4', 'visible' => true, 'menu_name' => 'Enterprise/Commercial']
]; 
?>

<?php 
  $page_title = 'Pages'; 
  include(SHARED_PATH . '/staff_header.php');
?>


<?php include(SHARED_PATH . '/staff_footer.php'); ?>

  </body>
</html>
