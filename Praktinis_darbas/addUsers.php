<?php require_once("../connection.php"); ?>

<?php 

$vardas = $_GET["vardas"];
$slapyvardis= $_GET["slapyvardis"];
$slaptazodis= $GET["slaptazodis"];
$teises_id = intval($_GET["teises_id"]);


//MEs galime daryt ka norim t.y vykdyti INSERT sql uzklausa

$sql = "INSERT INTO `uzsiregistrave_vartotojai`(`vardas`, `slapyvardis`, `slaptazodis`,`teises_id`) VALUES ('$vardas','$slapyvardis', '$slaptazodis',$teises_id)";
if(mysqli_query($conn, $sql)) {

    echo '<div class="alert alert-success" role="alert">';
        echo "Vartotojas".$vardas." ".$pslapyvardis." pridėtas sėkmingai";       
    echo '</div>';
} else {
    echo '<div class="alert alert-danger" role="alert">';
        echo "Kazkas ivyko negerai. Uzklausa nesekminga";
    echo '</div>';    
}

?>