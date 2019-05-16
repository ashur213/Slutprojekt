<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <?php
		include("Templates/nav.php")
	?>
</head>

<body>
   <?php
    session_start();
    // ANVÄNDS FÖR ATT VISA FORMULÄREN I SLUTET ELLER INTE
    $show_form = true ;
    
    // OM DET FINNS ERROR MESSAGE
    if(isset($_SESSION['error_msg'])){
        // Skriv ut error_msg
        echo $_SESSION['error_msg'] . "<br>";
       
        // TA BORT ERROR_MSG
        unset($_SESSION['error_msg']);
    }
    
    // KOLLA OM MAN HAR BESÖKT SIDAN FÖRUT
    if(isset($_SESSION['login'])){
        // har besökt sidan
        
        // OM MAN ÄR INLOGGAD
        if($_SESSION['login'] == "INLOGGAD"){
            $show_form = false; // VISA INTE FORMULÄREN
            echo "Välkommen   ".$_SESSION['name'] . " du är inloggad!"; // VISA VÄLKOMSTTEXT
      
            
            ?>
    

            <!-- Utloggningsformulär -->
            <form action="logout.php">
                <input type="submit" value="Logga ut">
            </form>

            <?php
        }
    }    
?>
<div class="booking">
        <div class="booking-title">
            <h1>Boka Bord</h1>
        </div>
        <div class="booking-form">
            <p>Namn</p>
            <input type="text" name="name" placeholder="Namn">
            <p>Datum</p>
            <input type="date" name="date">
            <p>Tid</p>
            <input type="time" name="time">
            <p>Personer</p>
            <input type="number" name="people" placeholder="Antal Personer"><br>
            <input type="submit" name="" value="Boka" >
        </div>
    </div>

    </form>
</body>
<body>

</body>
</html>
