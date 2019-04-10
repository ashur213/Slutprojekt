<?php
// ALLTID STARTA SESSION I BÖRJAN
session_start();
// KOLLA OM MAN VILL REGISTRERA SIG
if( isset($_POST['name']) &&  isset($_POST['mail']) &&
    isset($_POST['address']) && isset($_POST['password'])){
    
    // CONNECTA TILL DATABASEN
    $dbc_form = mysqli_connect("localhost","root","","thai");
    // HÄMTA DATA FROM POST
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    // FORMULERA INSERT FRÅGA
    $query = "INSERT INTO register (name,mail,address,pass) VALUES ('$name','$mail','$address','$password');";
    // OM FRÅGAN GÅTT BRA
    if(mysqli_query($dbc_form,$query)){
        // SKICKAS TILL INDEX
        $_SESSION['register_msg'] = "Du är nu registrerad";
        header("Location: index.php");
    }else{ // NÅGOT GICK FEL
        
        $_SESSION['error_msg'] = "Upptagen mail!";
        header("Location: index.php");
    }
}
else{ // FELAKTIG DATA FRÅN $_POST
    $_SESSION['error_msg'] = "Felaktig information";
    $_SESSION['register_msg'] = "Felaktig information";
    header("Location: index.php");
}
?>