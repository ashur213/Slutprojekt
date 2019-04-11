<?php
		include("Templates/nav.php")
	?>
<link rel="stylesheet" href="style.css">
<h1>DU HAR NU BOKAT TID</h1>
<?php
// ALLTID STARTA SESSION I BÖRJAN
session_start();
// KOLLA OM MAN VILL REGISTRERA SIG
if( isset($_POST['name']) &&  isset($_POST['date']) &&
    isset($_POST['time']) && isset($_POST['people'])){
    
    // CONNECTA TILL DATABASEN
    $dbc_form = mysqli_connect("localhost","root","","thai");
    // HÄMTA DATA FROM POST
    $name = $_POST['name'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $people = $_POST['people'];
    // FORMULERA INSERT FRÅGA
    $query = "INSERT INTO boka (name,datum,tid,personer) VALUES ('$name','$date','$time','$people');";
    // OM FRÅGAN GÅTT BRA
    mysqli_query($dbc_form,$query);    
    

}
?>