<?php session_start(); ?>
<?php include("header.php");?>
<h1>Home page</h1>

<?php
if (isset($_SESSION['username'])) {
    echo "<h2>Welcome ".$_SESSION['username']."</h2>";
}

?>
<?php include("footer.php"); ?>

