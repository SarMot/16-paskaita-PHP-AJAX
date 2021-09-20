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
            <input  id="vardas" class="form-control" placeholder="Įveskite vartotojo varda" />
            <input id="slapyvardis" class="form-control" placeholder="Įveskite vartotojo slapyvardi" />
            <input id="slaptazodis" class="password" placeholder="Įveskite vartotojo slaptazodi" />
            <input id="teises_id" class="form-control" placeholder="Įveskita teises_id" />
            
            <button id="createUser">Sukurti</button>
        </div>

        <div id="output">
            <table class="table table-striped">
                <?php 
                
                $sql = "SELECT uzsiregistrave_vartotojai.ID, uzsiregistrave_vartotojai.vardas AS uzsiregistrave_vartotojai_vardas,
                uzsiregistrave_vartotojai.slapyvardis AS uzsiregistrave_vartotojai_slapyvardis, 
                vartotojai_teises.pavadinimas AS vartotojai_teises_pavadinimas
                FROM uzsiregistrave_vartotojai 
                LEFT JOIN vartotojai_teises ON uzsiregistrave_vartotojai.teises_id = vartotojai_teises.ID
                WHERE 1
                ORDER BY uzsiregistrave_vartotojai.ID DESC";

                $result = $conn->query($sql);

                while($users = mysqli_fetch_array($result)) {
                    echo "<tr>";
                        echo "<td>".$users["ID"]."</td>";
                        echo "<td>".$users["uzsiregistrave_vartotojai_vardas"]."</td>";
                        echo "<td>".$users["uzsiregistrave_vartotojai_slapyvardis"]."</td>";
                        echo "<td>".$users["vartotojai_teises_pavadinimas"]."</td>";
                    echo "</tr>";
                }
                
                ?>

            </table>
        </div>
    </div>


    <script src="script2.js"></script>
</body>
</html>