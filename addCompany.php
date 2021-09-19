<?php require_once("connection.php"); ?>

<?php 

$pavadinimas = $_GET["pavadinimas"];
$aprasymas = $_GET["aprasymas"];
$tipas_id = intval($_GET["tipas_id"]);


//MEs galime daryt ka norim t.y vykdyti INSERT sql uzklausa

$sql = "INSERT INTO `imones`(`pavadinimas`, `aprasymas`, `tipas_id`) VALUES ('$pavadinimas','$aprasymas',$tipas_id)";
if(mysqli_query($conn, $sql)) {

    echo '<div class="alert alert-success" role="alert">';
        echo "Imone ".$pavadinimas." pridėta sėkmingai";        
    echo '</div>';
} else {
    echo '<div class="alert alert-danger" role="alert">';
        echo "Kazkas ivyko negerai. Uzklausa nesekminga";
    echo '</div>';    
}

?>
