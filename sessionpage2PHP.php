<strong> Session Test </strong><br><br>
<?php
   session_start();
?>

<?php
     if (empty($_POST['Save'])) {
        echo "Howdy, please go to page 1 and enter in your info!";
    }
?>

<!DOCTYPE html>
<html>
<body>

<br>
<br>
<br>
<br>

<strong><?php echo "Hello, ";?></strong>
<strong><?php echo $_SESSION['username'];?></strong>
<strong><?php echo " how's it going?";?></strong>

<?php
    session_destroy();
?>

<a href="sessionpage1PHP.php">clear</a>
</body>
</html>