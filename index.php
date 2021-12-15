<?php
define('SQLUSR', 'root');
define('SQLPWD', '');
require_once('./db.php');

if(!empty($_REQUEST['addStock'])) {
    addStock($_REQUEST['couleurs'], $_REQUEST['marques'],  $_REQUEST['prix_achat'] ) ;
}

if(!empty($_REQUEST['addSale'])) {
    sellCar($_REQUEST['info_voiture'],$_REQUEST['price'] ) ;
}





$stocks=getStocks();
$ventes=getSales();
$marques=getModels();
$couleurs=getColors();






/**var_dump($stocks);
var_dump($ventes);
*/

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf8" />
        <title>[ADMIN] Autos Management</title>
    <style>    
        details {
            border: 1px solid #aaa;
            border-radius: 4px;
            padding: .5em .5em 0;
        }

        summary {
            font-weight: bold;
            margin: -.5em -.5em 0;
            padding: .5em;
        }

        details[open] {
            padding: .5em;
        }

        details[open] summary {
            border-bottom: 1px solid #aaa;
            margin-bottom: .5em;
        }
        thead,
        tfoot {
            background-color: #3f87a6;
            color: #fff;
        }

        tbody {
            background-color: #606060;
        }

        caption {
            padding: 10px;
            caption-side: bottom;
        }

        table {
            border-collapse: collapse;
            border: 2px solid rgb(200, 200, 200);
            letter-spacing: 1px;
            font-family: sans-serif;
            font-size: .8rem;
        }

        td,
        th {
            border: 1px solid rgb(190, 190, 190);
            padding: 5px 10px;
        }

        td {
            text-align: center;
        }
        label,
        footer {
            font-family: sans-serif;
        }

        label {
            font-size: 1rem;
            padding-right: 10px;
        }

        select {
            font-size: .9rem;
            padding: 2px 5px;
        }

        footer {
            font-size: .8rem;
            position: absolute;
            bottom: 30px;
            left: 30px;
        }

        .output {
            background: center/cover no-repeat url('/media/cc0-images/hamster.jpg');
            position: relative;
        }
        

    .gestionnaire {
	font-size: x-large;
	text-align: center;
	font-weight: bold;
	font-family: "Lucida Console", Monaco, monospace;
}
    .Ce {
	text-align: center;
}
    body {
	background-repeat: repeat;
}
</style>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
    <body bgcolor="#606060" background="Sans titre (1).png" text="#FFFFFF">
<h1 class="gestionnaire">Gestionnaire</h1>
<p class="Ce">Ce gestionnaire est un test réalisé par E.DELHAYE</p>
<hr>

        <form>
            

              <fieldset>
                    <legend>Entrée d'un stock </legend>
            
                    <select name="marques" required>
                    <?php
                        foreach($marques as $info)
                            {
                                echo "<option>";
                                    echo ''.$info;
                                        
                                    
                                echo "</option>";
                            } 
                    ?>
                    </select>

                    <select name="couleurs" required>
                    <?php
                        foreach($couleurs as $info)
                            {
                                echo "<option>";
                                    echo ''.$info;
                                        
                                    
                                echo "</option>";
                            } 
                    ?>
                    </select>

                    <input type="number" min=0 placeholder="Prix d'achat" name="prix_achat" required />

                    <input type="submit" value="Enregister" name="addStock"   />
                    
                    
                    
                    
                
          </fieldset>
        </form>
       
        <details>
            <summary>Stocks </summary>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Couleur</th>
                            <th>Marque</th>
                            <th>Prix</th>
                            <th>Date d'entrée</th>

                        </tr>
                    </thead>
                    <tbody>
                            <?php
                                foreach($stocks as $info)
                                    {
                                        echo "<tr>";
                                            echo "<td>";
                                                echo $info['id'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $info['color'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $info['model'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $info['price'];
                                            echo "</td>";
                                            echo "<td>";
                                                echo $info['entry'];
                                            echo "</td>";
                                        echo "</tr>";
                                    } 
                            ?>
                        
                    </tbody>
                </table>
        </details>
    <form>
            

                <fieldset>
                    <legend>Entrée d'une vente </legend>
            
                    <select name="info_voiture" required >
                    <?php
                        foreach($stocks as $info)
                            {
                                echo ' <option value="'.$info['id'].'"> ';
                                   
                                    
                                        echo $info['model'];
                                        echo ' ';
                                        echo $info['color'];
                                        echo ' ';
                                        echo $info['price'];
                                        echo ' $';
                                    
                                            
                                echo '</option>';
                                
                                   
                                        
                                    
                                
                            } 
                    ?>
                    </select>    
                    
                    <input type="number" min=0 placeholder="Prix de vente" name="price" required />

                    <input type="submit" value="Enregister" name="addSale" />
                </fieldset>
    </form>
    <details>
            <summary>Ventes</summary>
                <table>
                    <thead>
                        <tr>
                            <th>Date de vente</th>
                            <th>Couleur</th>
                            <th>Marque</th>
                            <th>Bénéfice</th>
                            

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                    foreach($ventes as $info)
                                        {
                                            echo "<tr>";
                                                echo "<td>";
                                                    echo $info['soldDate'];
                                                echo "</td>";
                                                echo "<td>";
                                                    echo $info['color'];
                                                echo "</td>";
                                                echo "<td>";
                                                    echo $info['model'];
                                                echo "</td>";
                                                echo "<td>";
                                                    echo $benefice= $info['soldPrice'] - $info['price'];
                                                echo "</td>";

                                                echo "<td>";
                                                 if (($info['soldPrice'] - $info['price'])<=0)
                                                 { 
                                                     
                                                    echo "❗";
                                                    
                                                 }
                                                echo "</td>";

                                                
                                                
                                            echo "</tr>";
                                        } 
                                ?>
                            
                    </tbody>
                </table>
    </details>
        
        
      

        <p>Copyright <a title="DELHAYE Eliott">E.DELHAYE</a> </p>
</body>
    
</html>