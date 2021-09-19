<?php require_once("connection.php"); ?>

<?php 

echo '<table class="table table-striped">';
              
                
    $sql = "SELECT imones.ID, imones.pavadinimas AS imones_pavadinimas, imones.aprasymas AS imones_aprasymas, imones_tipas.pavadinimas AS imones_tipas_pavadinimas, imones_tipas.aprasymas AS imones_tipas_aprasymas 
    FROM `imones` 
    LEFT JOIN imones_tipas ON imones.tipas_ID = imones_tipas.ID 
    WHERE 1 
    ORDER BY imones.ID DESC";

    $result = $conn->query($sql);

    while($companies = mysqli_fetch_array($result)) {
        echo "<tr>";
            echo "<td>".$companies["ID"]."</td>";
            echo "<td>".$companies["imones_pavadinimas"]."</td>";
            echo "<td>".$companies["imones_aprasymas"]."</td>";
            echo "<td>".$companies["imones_tipas_pavadinimas"]."</td>";
            echo "<td>".$companies["imones_tipas_aprasymas"]."</td>";
        echo "</tr>";
    }
                
            

echo '</table>';

?>