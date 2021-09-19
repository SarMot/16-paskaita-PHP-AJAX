<?php require_once("../connection.php"); ?>

<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vartotojai</title>

    <?php require_once("../includes.php"); ?>

</head>
<body>
    <div class="container">

        <?php 
        //sukurti mygtuka, kuris iskleistu imoniu pridejimo forma ir ta forma naudodama AJAX pridetu nauja imone
        //bei ja parodytu lenteleje
        ?>


        <div id="alert-space">

        </div>

        <button id="user_create">Sukurti nauja Vartotoja</button>
        
        <div class="companyForm d-none">
            <input  id="Vardas" class="form-control" placeholder="Įveskite vartotojo varda" />
            <input id="slapyvardis" class="form-control" placeholder="Įveskite vartotojo slapyvardi" />
            <input id="slaptazodis" class="password" placeholder="Įveskite vartotojo slaptazodi" />
            <input id="teises_id" class="form-control" placeholder="Įveskita teises_id" />
            
            <button id="createUser">Sukurti</button>
        </div>

        <div id="output">
            <table class="table table-striped">
                <?php 
                
                $sql = "SELECT uzsiregistrave_vartotojai.ID, uzsiregistrave_vartotojai.Vardas AS imones_pavadinimas, imones.aprasymas AS imones_aprasymas, imones_tipas.pavadinimas AS imones_tipas_pavadinimas, imones_tipas.aprasymas AS imones_tipas_aprasymas 
                FROM `uzsiregistrave_vartotojai` 
                LEFT JOIN vartotojai_teises ON uzsiregistrave_vartotojai.teises_id = vartotojai_teises.pavadinimas 
                WHERE 1 
                ORDER BY uzsiregistrave_vartotojai.ID DESC";

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
                
                ?>

            </table>
        </div>
    </div>


    <script src="script2.js"></script>
</body>
</html>