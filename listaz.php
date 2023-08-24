<?php require "connect.php"?>

<?php
    $resultkiir = $kapcsolat ->query("SELECT * FROM adatok");

    $tabla = $resultkiir -> fetch_all();

?>            
    <table>
        <tr>
            <th>Sorszám</th>
            <th>Időpont</th>
            <th>Leírás</th>                
        </tr>

<?php
    foreach ($tabla as $ertekek)
    {
        print("<tr>");
        foreach ($ertekek as $ertek)
        {
            print("<td>");
            print($ertek);
            print("</td>");
        }

        print("<td>");
        ?>

        <a href="update.php?upid=<?php print($ertekek[0])?>"><button type="button" value="frissites">Frissítés</button></a>

        <?php
        print("</td>");

        print("</tr>");
    }
    print("</table>");
?>