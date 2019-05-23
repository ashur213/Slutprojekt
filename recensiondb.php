<?php
		include("Templates/nav.php")
	?>

<?php
// ALLTID STARTA SESSION I BÖRJAN
session_start();
// KOLLA OM MAN VILL REGISTRERA SIG
if( isset($_POST['namn']) &&
    isset($_POST['kommentar'])){
    
    // CONNECTA TILL DATABASEN
    $dbc_form = mysqli_connect("localhost","root","","thai");
    // HÄMTA DATA FROM POST
    $namn = $_POST['namn'];
    $kommentar = $_POST['kommentar'];
    // FORMULERA INSERT FRÅGA
    $query = "INSERT INTO recension (namn,kommentar) VALUES ('$namn','$kommentar');";
    // OM FRÅGAN GÅTT BRA
    mysqli_query($dbc_form,$query);    
    

}
?>