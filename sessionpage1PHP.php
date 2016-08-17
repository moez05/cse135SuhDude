<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
<body>

<strong>Test Form</strong>
   
    <form action="sessionpage1PHP.php" method="POST">
    Please enter your username:
        <input type="text" name="username"/>
        
        <input type="submit" name="Save" value="Save!" />
    </form>

<?php 
    if (isset($_POST['Save'])) { 
        $_SESSION['username'] = $_POST['username'];
    } 
?> 

<a href="sessionpage2PHP.php">session2</a>


</body>
</html>
