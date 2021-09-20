<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vartotoju generavimas</title>
</head>
<body>
    <form action="" method="get">
        <button type="submit" name="submit">Sukurti vartotoja</button>
    </form>
    <?php 

    require_once("../connection.php");

    if(isset($_GET["submit"])) {
        for ($i=0; $i<50; $i++) {

            $vardas = "vardas".$i;
            $slapyvardis = "slapyvardis".$i;
            $slaptazodis = "slaptazodis".rand(11, 999);
            $teises_id = rand(1, 5);

            $sql = "INSERT INTO `uzsiregistrave_vartotojai`(`vardas`, `slapyvardis`, `slaptazodis`, `teises_id`) 
            VALUES ('$vardas','$slapyvardis','$slaptazodis','$teises_id')";

            if(mysqli_query($conn, $sql)) {
                echo "Vartotojas sukurtas sekmingai";
                echo "<br>";
            } else {
                echo "Kazkas ivyko negerai";
                echo "<br>";
            }
        }
    }

?>
</body>
</html>