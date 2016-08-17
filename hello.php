<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello World, suh dude</p>'; ?> 
<?php
date_default_timezone_set("America/San_Francisco");
echo "The time is " . date("h:i:sa");
?>
<?php
$background_colors = array('#DC143C', '#F0FFFF', '#00FFFF');

$rand_background = $background_colors[array_rand($background_colors)];
?>
<body style="background: <?php echo $rand_background; ?>;">
 </body>
</html>
