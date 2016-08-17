<html>
<body>

Welcome, <?php echo $_POST["firstname"]; ?> 
<?php echo $_POST["lastname"]; ?> <br>
Favorite color is:  <?php echo $_POST["favoritecolor"]; ?>

<br>
<br>
<br>
This was written in PHP


<body style="background-color:<?php echo $_POST["favoritecolor"]; ?>">

</body>
</html>
