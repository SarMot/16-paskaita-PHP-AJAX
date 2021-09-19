
<?php require_once("connection.php"); ?>

<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX</title>

    <?php require_once("includes.php"); ?>
</head>
<body>

    <div class="container">
        
        <button id="create"> Create New Client </button>
        <div id="alert-space"></div>
        
        <div id="clientForm" class="d-none">
            
        
            <input  id="vardas" class="form-control" placeholder="Įveskita vardą" />
            <input id="pavarde" class="form-control" placeholder="Įveskita pavardę" />
            <input id="teises_id" class="form-control" placeholder="Įveskita teisės id" />
            <button id="createClient">Create</button>
        </div>
    

        <form action="index.php" method="POST">
            <button type="submit" name="submit">Show clients</button> 
        </form>




        <button id="show"> Show Clients AJAX</button>
        <div id="output"></div>

        

        <?php 
        //Pridesim i duomenu baze naujus klientus naudodami ajax.
        //
        
        ?>
    </div>


    <table >

    <?php 
        // if(isset($_POST["submit"])) {
        //     //siunciam uzklausa i duomenu baze
        //     //duomenis atvaizduojame

        //     $sql = "SELECT * FROM klientai
        //     WHERE 1
        //     LIMIT 50
        //     ";

        //     $result = $conn->query($sql);// uzklausos vykdymas

        //     while($clients = mysqli_fetch_array($result)) {
        //         echo "<tr>";
        //         echo "<td>". $clients["ID"]. "</td>";
        //         echo "<td>". $clients["vardas"]. "</td>";
        //         echo "<td>". $clients["pavarde"]. "</td>";
        //         echo "<td>". $clients["teises_id"]. "</td>";
        //         echo "</tr>";
        //     }
        // }
    
    ?>

    </table>
    <?php 
    //AJAX - duomenu siuntimo i serveri Javascript pagalba technika.

    // Mygtuko paspaudimu atvaizduoti 50 klientu (be puslapio persikrovimo).
    ?>



    <script src="script.js"></script>
</body>
</html>