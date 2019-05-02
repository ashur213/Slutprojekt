<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="meny.css">
<?php
		include("Templates/nav.php")
?> 

<section>
  
    <?php
//ansluter till databasen i mysql
$dbc = mysqli_connect("localhost","root","","thai");


//mysql command
$query = "SELECT * FROM meny";
//specialsymboler visas
mysqli_query($dbc,"SET NAMES utf8");

//frågar databasen och visar i result
$result = mysqli_query($dbc,$query);


//Skriv ut alla städer från $_result
while($row = mysqli_fetch_array($result)){
    ?>
    <div class="dish_container">

        <div class="img_container">
            <img src=<?php echo $row["bild"]; ?>>
        </div>
        
        <div class="info_container">
            <div class="name">
                <p><?php echo $row["namn"]; ?></p>
            </div>
            <div class="price">
                <p><?php echo $row["pris"]; ?>:-</p>                
            </div>
            <div class="desc_container">
                <div class="desc">
                    <p><?php echo $row["info"]; ?></p>
                </div>
                <div class="side_info">
                    <div class="milk">
                        <p><?php echo $row["mjölk"]; ?></p>                
                    </div>
                    <div class="gluten">
                        <p><?php echo $row["gluten"]; ?></p>                
                    </div>
                    <div class="nuts">
                        <p><?php echo $row["nötter"]; ?></p>                
                    </div>
                    <div class="spicy">
                        <p><?php echo $row["styrka"]; ?></p>                
                    </div>
                </div>
            </div>
        </div>
        
        
                
            </div>
        </div>
    </div>
    <?php
}
?>
    ?>
?>


</section>

