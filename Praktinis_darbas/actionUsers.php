<?php require_once("../connection.php"); ?>

<?php


    $sql = "SELECT * FROM uzsiregistrave_vartotojai
    WHERE 1
    ORDER BY uzsiregistrave_vartotojai.ID DESC
    LIMIT 50
    ";

    $result = $conn->query($sql);// uzklausos vykdymas
    echo "<table class='table table-striped'>";
    while($clients = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>". $users["ID"]. "</td>";
        echo "<td>". $users["vardas"]. "</td>";
        echo "<td>". $users["slapyvardis"]. "</td>";
        echo "<td>". $users["slaptazodis"]. "</td>";
        echo "<td>". $users["teises_id"]. "</td>";
        echo "</tr>";
    }
    echo "</table>";
    
?>