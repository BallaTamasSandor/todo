<?php
    require "connect.php"
?>

<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ToDo</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Az első "todo" appom</h1>

        <form action="" method="post">
            <table>
                <tr>
                    <th>Ideje</th>
                    <th>Tevékenység</th>
                </tr>
                <tr>
                    <td><input type="datetime" name="ido" id="" placeholder="Tevékenység ideje"></td>
                    <td><input type="text" name="leiras" id="" placeholder="Tevékenység leírása"></td>                    
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="new" id="buttons" value="Hozzáad"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="list" id="buttons" value="Kilistáz"></td>
                </tr>              
            </table>
        </form>

            <!--Hozzáadás-->
            <?php
                if (isset($_POST['new'])) 
                {
                    if (!empty($_POST['leiras']) and !empty($_POST['ido'])) {
                        print("Adatbevitel rendben!" . "<br>");
                        $ido = $_POST['ido'];
                        $leiras = $_POST['leiras'];
                        

                        $resultadatbe = $kapcsolat -> query("INSERT INTO adatok (idopont, leiras) VALUES ('$ido', '$leiras')");

                        if ($resultadatbe)
                        {
                            print("Az adat bekerült az adatbázisba!");
                        }
                        else
                        {
                            print("Nem sikerült az adatbevitel!");
                        }
                    }
                    else
                    {
                        print("Rossz vagy hiányos adat!");
                    }                    
                }
            ?>

            <!--Listázás+Törlés-->
            <?php
                if (isset($_POST['list'])) 
                {
                    $resultkiir = $kapcsolat -> query("SELECT * FROM adatok");

                    $tabla = $resultkiir -> fetch_all();

                    ?>
                    <table>
                        <tr>
                            <th>Sorszám</th>
                            <th>Idopont</th>
                            <th>Leírás</th>
                            <th>Törlés</th>  
                        </tr>
                    

                    <?php

                    $a = 0;
                    foreach ($tabla as $ertekek)
                    {
                        $a = $a + 1;

                        print("<tr>");
                        
                        print("<td>");
                        print($a);
                        print("</td>");

                        print("<td>");
                        print($ertekek[1]);
                        print("</td>");

                        print("<td>");
                        print($ertekek[2]);
                        print("</td>");
                        

                        print("<td>");
                        ?>

                        <a href="torles.php?delid=<?php print($ertekek[0])?>"><button type="button" value="torles">Törlés</button></a>

                        <?php
                        print("</td>");

                        print("</tr>");
                    }
                    print("</table>");
                }
                
            ?>
        </div>
    </body>
</html>