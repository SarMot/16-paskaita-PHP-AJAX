<?php require_once("connection.php"); ?>

<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Companies</title>

    <?php require_once("includes.php"); ?>

</head>
<body>
    <div class="container">

        <?php 
        //sukurti mygtuka, kuris iskleistu imoniu pridejimo forma ir ta forma naudodama AJAX pridetu nauja imone
        //bei ja parodytu lenteleje
        ?>


        <div id="alert-space">

        </div>

        <button id="company_create">Create New Company</button>
        
        <div class="companyForm d-none">
            <input  id="pavadinimas" class="form-control" placeholder="Įveskite pavadinimą" />
            <input id="aprasymas" class="form-control" placeholder="Įveskite aprašymą" />
            <input id="tipas_id" class="form-control" placeholder="Įveskita tipo ID" />
            
            <button id="createCompany">Create</button>
        </div>

        <form action="companies.php" method="POST">
            <button type="submit" name="submit">Rodyti įmones</button> 
        </form>




        <button id="show"> Show Clients AJAX</button>
        <div id="output"></div>


        <div id="output">
            <table class="table table-striped">
                <?php 
                
                $sql = "SELECT imones.ID, imones.pavadinimas AS imones_pavadinimas,  imone_tipas.pavadinimas AS imone_tipas_pavadinimas, imone_tipas.aprasymas AS imone_tipas_aprasymas 
                FROM `imones` 
                LEFT JOIN imone_tipas ON imones.tipas_ID = imone_tipas.ID 
                WHERE 1 
                ORDER BY imones.ID DESC";

                $result = $conn->query($sql);

                while($companies = mysqli_fetch_array($result)) {
                    echo "<tr>";
                       echo "<td>".$companies["ID"]."</td>";
                       echo "<td>".$companies["imones_pavadinimas"]."</td>";
                       echo "<td>".$companies["imone_tipas_pavadinimas"]."</td>";
                       echo "<td>".$companies["imone_tipas_aprasymas"]."</td>";
                            echo    "<button class='deleteCompany' data-company-id='".$companies["ID"]."' >Delete</button>";
                        echo "</td>";
                   echo "</tr>";
                }
                
                ?>

            </table>
        </div>
    </div>


    <script src="script1.js"></script>
</body>
</html>