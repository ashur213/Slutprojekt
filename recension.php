
<html lang="en">
<head>
    <meta charset="UTF-8">
 <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <?php
		include("Templates/nav.php")
	?>
</head>

<body>   <?php
$dbc = mysqli_connect("localhost","root","","thai");
$query = "SELECT * FROM recension"

;?>

    
       <form action="recensiondb.php" method="POST">
        
    <form action="recension.php" method="POST">
    Namn:<br> <input class="namn" type="text" name="namn"><br>
    recension:<br><input size="40px" class="namn"type="text" name="kommentar">
    <input type="submit">
            
            
            
        

    </form>
</body>
<body>

</body>
</html>
