<?php
include "PAGES/db_connect.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Il Ghiottone</title>
        <link rel="icon" href="IMG/ico.png" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital@1&family=Lobster&family=Pacifico&family=Rajdhani:wght@600&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="script.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body onload="sfondo();Aggiorna()" onresize="sfondo()">
        <img id="sfondino" src="./IMG/nero.png" class="sfondino">
        <img src="./IMG/logo.svg" style="width: 70%; max-width: 600px; filter: brightness(0%);" alt="logo"><br>
        <hr style="height:4px;border-width:0;color:black;background-color:black;width:100%;max-width: 1000px;">
        <p style="font-family:'Segoe';font-size: min(8vw, 60px); font-weight: bold; line-height:1vw;">MEN&Ugrave</p>
        <hr style="height:4px;border-width:0;color:black;background-color:black;width:100%;max-width: 1000px;">
        <br><br>
        <div class="search-form">
            <input type="search" value="" placeholder="Search" id="input" name="input" class="search-input" onblur="Aggiorna();">
            <button type="button" class="search-button">
                <svg aria-hidden="true" style="filter: invert(100%)"focusable="false" data-prefix="fas" data-icon="search" class="svg-inline--fa fa-search fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path></svg>
            </button>
        </div>
        <p class='notizia rainbow-text' id="arcobaleno"></p>
        <hr style="width:100%;max-width: 1050px;height:1px;border-width:0;color:black;background-color:black">

        <div id="intero">

            <div name="categoria">
                <div class="container centraimg">
                    <img src="./IMG/linea.svg" class="freccia" style="filter: invert(29%) sepia(40%) saturate(3317%) hue-rotate(353deg) brightness(91%) contrast(97%);" alt="border" onclick="mostra(1,0);"><br>
                    <div class="centered" onclick="mostra(1,0);">Le Specialità</div>
                    <svg onselectstart="return false" aria-hidden="true" id="bot1" focusable="false" data-prefix="fas" data-icon="angle-right" onclick="mostra(1,0);" class="centeredsvg svg-inline--fa fa-angle-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path></svg>
                </div>
                <div name="lista" style="display:none;">

                </div>
            </div>

            <div name="categoria">
                <div class="container centraimg">
                    <img src="./IMG/linea.svg" class="freccia" style="filter: invert(25%) sepia(21%) saturate(3911%) hue-rotate(344deg) brightness(91%) contrast(95%);" alt="border" onclick="mostra(2,0);"><br>
                    <div class="centered" onclick="mostra(2,0);">Le Classiche</div>
                    <svg onselectstart="return false" aria-hidden="true" id="bot2" focusable="false" data-prefix="fas" data-icon="angle-right" onclick="mostra(2,0);" class="centeredsvg svg-inline--fa fa-angle-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path></svg>
                </div>
                <div name="lista" style="display:none;">

                </div>
            </div>

            <div name="categoria">
                <div class="container centraimg">
                    <img src="./IMG/linea.svg" class="freccia" style="filter: invert(100%) sepia(0%) saturate(0%) hue-rotate(93deg) brightness(103%) contrast(103%);" alt="border" onclick="mostra(3,0);"><br>
                    <div class="centered" onclick="mostra(3,0);">Le Bianche</div>
                    <svg onselectstart="return false" aria-hidden="true" id="bot3" focusable="false" data-prefix="fas" data-icon="angle-right" onclick="mostra(3,0);" class="centeredsvg svg-inline--fa fa-angle-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path></svg>
                </div>
                <div name="lista" style="display:none;">

                </div>
            </div>

            <div name="categoria">
                <div class="container centraimg">
                    <img src="./IMG/linea.svg" class="freccia" style="filter: invert(54%) sepia(94%) saturate(7304%) hue-rotate(136deg) brightness(98%) contrast(84%);" alt="border" onclick="mostra(4,0);"><br>
                    <div class="centered" onclick="mostra(4,0);">L'Orto</div>
                    <svg onselectstart="return false" aria-hidden="true" id="bot4" focusable="false" data-prefix="fas" data-icon="angle-right" onclick="mostra(4,0);" class="centeredsvg svg-inline--fa fa-angle-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path></svg>
                </div>
                <div name="lista" style="display:none;">

                </div>
            </div>

            <div name="categoria">
                <div class="container centraimg">
                    <img src="./IMG/linea.svg" class="freccia" style="filter: invert(13%) sepia(64%) saturate(3969%) hue-rotate(349deg) brightness(97%) contrast(93%);" alt="border" onclick="mostra(5,0);"><br>
                    <div class="centered" onclick="mostra(5,0);">Il Fuoco</div>
                    <svg onselectstart="return false" aria-hidden="true" id="bot5" focusable="false" data-prefix="fas" data-icon="angle-right" onclick="mostra(5,0);" class="centeredsvg svg-inline--fa fa-angle-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path></svg>
                </div>
                <div name="lista" style="display:none;">

                </div>
            </div>

            <div name="categoria">
                <div class="container centraimg">
                    <img src="./IMG/linea.svg" class="freccia" style="filter: invert(55%) sepia(38%) saturate(7466%) hue-rotate(204deg) brightness(89%) contrast(86%);" alt="border" onclick="mostra(6,0);"><br>
                    <div class="centered" onclick="mostra(6,0);">Il Mare</div>
                    <svg onselectstart="return false" aria-hidden="true" id="bot6" focusable="false" data-prefix="fas" data-icon="angle-right" onclick="mostra(6,0);" class="centeredsvg svg-inline--fa fa-angle-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path></svg>
                </div>
                <div name="lista" style="display:none;">

                </div>
            </div>

            <div name="categoria">
                <div class="container centraimg">
                    <img src="./IMG/linea.svg" class="freccia" style="filter: invert(71%) sepia(87%) saturate(380%) hue-rotate(10deg) brightness(89%) contrast(86%);" alt="border" onclick="mostra(7,0);"><br>
                    <div class="centered" onclick="mostra(7,0);">I Formaggi</div>
                    <svg onselectstart="return false" aria-hidden="true" id="bot7" focusable="false" data-prefix="fas" data-icon="angle-right" onclick="mostra(7,0);" class="centeredsvg svg-inline--fa fa-angle-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path></svg>
                </div>
                <div name="lista" style="display:none;">

                </div>
            </div>

            <div name="categoria">
                <div class="container centraimg">
                    <img src="./IMG/linea.svg" class="freccia" style="filter: invert(41%) sepia(4%) saturate(0%) hue-rotate(209deg) brightness(93%) contrast(79%);" alt="border" onclick="mostra(8,0);"><br>
                    <div class="centered" onclick="mostra(8,0);">I Fritti</div>
                    <svg onselectstart="return false" aria-hidden="true" id="bot8" focusable="false" data-prefix="fas" data-icon="angle-right" onclick="mostra(8,0);" class="centeredsvg svg-inline--fa fa-angle-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path></svg>
                </div>
                <div name="lista" style="display:none;">

                </div>
            </div>

            <div name="categoria">
                <div class="container centraimg">
                    <img src="./IMG/linea.svg" class="freccia" style="filter: invert(44%) sepia(23%) saturate(2742%) hue-rotate(259deg) brightness(88%) contrast(84%);" alt="border" onclick="mostra(9,0);"><br>
                    <div class="centered" onclick="mostra(9,0);">Le Limited</div>
                    <svg onselectstart="return false" aria-hidden="true" id="bot9" focusable="false" data-prefix="fas" data-icon="angle-right" onclick="mostra(9,0);" class="centeredsvg svg-inline--fa fa-angle-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path></svg>
                </div>
                <div name="lista" style="display:none;">

                </div>
            </div>

        </div>
        <p style="font-family: 'Rajdhani', sans-serif; font-size: min(3vw, 20px); ">© 2020 Lozza Andrea</p>
        <script>
        var tabella=JSON.parse('<?php
        $json;
        $sql = 'SELECT Alimenti.ID,Alimenti.Nome,Alimenti.Ingredienti,Alimenti.Costo,Alimenti.Usata,CategorieAlimenti.ID_Categorie FROM CategorieAlimenti INNER JOIN Alimenti ON CategorieAlimenti.ID_Alimenti=Alimenti.ID WHERE Alimenti.Usata="1";';
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if(!isset($json[$row["ID"]]))
                {
                    $json[$row["ID"]]=$row;
                }
                else{
                    if(!is_array($json[$row["ID"]]["ID_Categorie"]))
                    {
                        $fantoccio=explode(" ",$json[$row["ID"]]["ID_Categorie"]);
                        array_push($fantoccio,$row["ID_Categorie"]);
                        $json[$row["ID"]]["ID_Categorie"]=$fantoccio;
                    }else{
                        array_push($json[$row["ID"]]["ID_Categorie"],$row["ID_Categorie"]);
                    }
                        
                }
                    
            }
        }
        echo str_replace(array("\\r","\\n","'")," ",json_encode($json));
        ?>');
        arcobaleno=false;
        Object.keys(tabella).forEach(function(key) {
            for(rey=0;rey<tabella[key]["ID_Categorie"].length;rey++){
                document.getElementsByName("lista")[tabella[key]["ID_Categorie"][rey]-1].innerHTML+='<div name="categoria'+tabella[key]["ID_Categorie"][rey]+'" class="container centraimg"> <img src="./IMG/border.svg" style="width:100%;" alt="border" ><br> <div class="nome" name="alimento'+tabella[key]["ID_Categorie"][rey]+'">'+tabella[key]["Nome"]+'</div> <div class="ingredienti" name="ingredienti'+tabella[key]["ID_Categorie"][rey]+'">'+tabella[key]["Ingredienti"]+'</div> <div class="prezzo" name="prezzo'+tabella[key]["ID_Categorie"][rey]+'">€ '+tabella[key]["Costo"]+'</div> </div>';
                if(tabella[key]["ID_Categorie"][rey]==9)
                    arcobaleno=true;
            }
        });
        if(arcobaleno)
            document.getElementById("arcobaleno").innerHTML="-SONO PRESENTI DELLE PIZZE LIMITED-<br>Scorri in fondo per saperne di più"
    </script>
    </body>
</html>