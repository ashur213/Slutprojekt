 <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="meny.css">
<html lang="en">
<head>
    <meta charset="UTF-8">
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
     <section><h1 class="bokabord">BOKA BORD</h1>
        <form class="boka" action="bokning.php" method="POST">

            Namn: <input type="text" name="name"><br>
            datum: <input type="date" name="date"><br>
            tid: <input type="time" name="time"><br>
            personer: <input type="number" name="people">
            <input type="submit"> </section>
            
            
        

    </form>
</body>
<body>

</body>
</html>
