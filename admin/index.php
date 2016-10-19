
<html>
<head>

<title>Welcome to My Home page</title>




<?php

  include_once('./classes/CMS.php');
  $obj = new CMS();
  $obj->host = 'localhost';
  $obj->username = 'root';
  $obj->password = 'root';
  $obj->database = 'cmsdb';
	
  $obj->connect();

  if ( $_POST )
    $obj->write($_POST);

  echo ( $_GET['admin'] == 1 ) ? $obj->display_admin() : $obj->display_public();

?>
</html> 
