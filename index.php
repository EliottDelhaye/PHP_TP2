<?php
define('SQLUSR', 'root');
define('SQLPWD', '');
require_once('./db.php');

if(!empty($_REQUEST['addStock'])) {
    // ajout stock 
}

if(!empty($_REQUEST['addSale'])) {
    // ajout vente
}



$stocks=getStocks();
$ventes=getSales();

var_dump($stocks);







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
            background-color: #e4f0f5;
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
        

    </style>

    </head>
    <body>
    <h1>Gestionnaire</h1>
        <p>Ce gestionnaire est un test réalisé par E.DELHAYE</p>

        <form>
            

                <fieldset>
                    <legend>Entrée d'un stock</legend>
            
                    <select name="- Marque -" id="- Marque -">
                    <option value="- Marque -">- Marque -</option>    
                    <option value="Tesla">Tesla</option>
                    <option value="Ford">Ford</option>
                    <option value="Peugeot">Peugeot</option>
                    <option value="Renault">Renault</option>
                    </select>

                    <select name="- Couleur -" id="- Couleur -">
                    <option value="- Couleur -">- Couleur -</option>    
                    <option value="Noir">Noir</option>
                    <option value="Blanc">Blanc</option>
                    <option value="Gris">Gris</option>
                    <option value="Argent">Argent</option>
                    <option value="Jaune">Jaune</option>
                    <option value="Rouge">Rouge</option>
                    <option value="Bleu">Bleu</option>
                    <option value="Vert">Vert</option>
                    </select>

                    <input type="number" min=0 placeholder="Prix d'achat" />

                    <input type="submit" value="Enregister" />
                    
                    
                
                </fieldset>
        </form>
       
        <details>
            <summary>Stocks</summary>
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
                                        //var_dump($info);
                                        echo "<tr>";
                                            echo "<td>";
                                                echo $info['id'];
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
            
                    <select name="- Voiture -" id="- Voiture -">
                    <option value="- Voiture -">- Voiture -</option>    
                    
                    <input type="number" min=0 placeholder="Prix de vente" />

                    <input type="submit" value="Enregister" />
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
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            
                    </tbody>
                </table>
        </details>
        
        
      

        <footer>Copyright <a title="DELHAYE Eliott">E.DELHAYE</a> </footer>
    </body>
    
</html>