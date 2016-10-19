        
<?php
$username = trim($_POST['username']);
$password = trim($_POST['password']);
$success = 0;
if (($username!='eval')||($password!='eval'))
    echo "login error";
else
{
    echo "successful";
    $success = 1;
    header("Location: process.php"); /* Redirect browser */
    exit();
} 

?>

