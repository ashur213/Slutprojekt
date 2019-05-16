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
                        <?php for($i = 0; $i< $row["mjölk"]; $i++){
        ?>
                        			<img src="bilder\mjölk.png" id="milk" height="22px" />
                        <?php
        
    } ?>     
                    </div>
                    <div class="gluten">
                        <?php for($i = 0; $i< $row["gluten"]; $i++){
                          ?>
                        			<img src="bilder\gluten.png" id="gluten" height="22px" />
                        <?php
        
    } ?>          
                    </div>
                    <div class="nuts">
                        <?php for($i = 0; $i< $row["nötter"]; $i++){
                          ?>
                        			<img src="bilder\nuts.png" id="nuts" height="22px" />
                        <?php
        
    } ?>     
                    </div>
                    <div class="spicy">
                        <?php for($i = 0; $i< $row["styrka"]; $i++){
        ?>
                        			<img src="bilder\chili.png" id="chili" height="20px" />

                        <?php
        
    } ?>                
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

