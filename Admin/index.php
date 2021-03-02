<?php
    include "./PAGES/db_connect.php";
    session_start();
    if(!isset($_SESSION["esiste"]))
        header('Location: ./visual.php');

?>
<!doctype html>
<html lang="it">
  <head>

    <link rel="icon" href="../IMG/ico.png" type="image/x-icon">
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Gestione Menù</title>
  </head>
  <body onload="Aggiorna()">
    <div class="container" style="top:10%;">
        <div class="row text-center" >
            <div class="col">
                <h1 style="text-align: center;font-family:'Segoe';font-size: min(8vw, 60px); font-weight: bold;">Gestione Menù</h1>
            </div>
        </div>
        
        <div class="row text-center">
            <div class="col pagina">
                <ul class="list-group list-group-horizontal" style="width: 100%;">
                    <li onclick="vista(1)" id="vis1" class="list-group-item list-group-item-action active" style="width: 33.33%;">Modifica<br>Limited</li>
                    <li onclick="vista(2)" id="vis2" class="list-group-item list-group-item-action" style="width: 33.33%;">Modifica<br>Pizze</li>
                    <li onclick="vista(3)" id="vis3" class="list-group-item list-group-item-action" style="width: 33.33%;">Modifica<br>Fritti</li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center" >
            <div class="col-6">
                <input id="input" type="search" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1" onblur="Aggiorna();">
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-success" onclick="AggiungiM()"><svg width="20px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" class="svg-inline--fa fa-plus fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg></button>
            </div>
        </div>
        <div class="row" >
            <div class="col pagina">
                <div id="menu1">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" style="width:15%">Nome</th>
                                <th scope="col" style="width:65%">Ingredienti</th>
                                <th scope="col" style="white-space: nowrap;width:10%">Prezzo €</th>
                            </tr>
                        </thead>
                        <tbody id="body1">
                            
                        </tbody>
                    </table>
                </div>

                <div id="menu2" style="display: none;">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" style="width:15%">Nome</th>
                                <th scope="col" style="width:65%">Ingredienti</th>
                                <th scope="col" style="white-space: nowrap;width:10%">Prezzo €</th>
                            </tr>
                        </thead>
                        <tbody id="body2">
                            
                        </tbody>
                    </table>
                </div>
                
                <div id="menu3" style="display: none;">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" style="width:15%">Nome</th>
                                <th scope="col" style="width:65%">Dettagli</th>
                                <th scope="col" style="white-space: nowrap;width:10%">Prezzo €</th>
                            </tr>
                        </thead>
                        <tbody id="body3">
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modale Modifica -->
    <div class="modal fade" id="modaleM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modifica</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="PAGES/modifica.php" method="post">
                    <div class="modal-body">
                        <input type="hidden" id="ID" name="ID" value="">
                        <div class="form-group">
                            <label for="nome" class="col-form-label" style="font-weight: bold;">Nome:</label>
                            <input name="nome" type="text" class="form-control" id="nome" required>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="descrizione" class="col-form-label" style="font-weight: bold;">Descrizione:</label>
                            <textarea name="descrizione" class="form-control" id="descrizione" required></textarea>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="costo" class="col-form-label" style="font-weight: bold;">Costo:</label>
                            <input name="costo" type="text" class="form-control" id="costo" required>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label class="col-form-label" style="font-weight: bold;">Categorie:</label><br>
                            <div name="cat2" style="display:none">
                                <input name="categoria1" type="checkbox" class="col-form-label" id="categoria1">
                                <label class="form-check-label" for="categoria1">Le specialità&ensp;</label><br>
                                <input name="categoria2" type="checkbox" class="col-form-label" id="categoria2">
                                <label class="form-check-label" for="categoria2">Le classiche&ensp;</label><br>
                                <input name="categoria3" type="checkbox" class="col-form-label" id="categoria3">
                                <label class="form-check-label" for="categoria3">Le bianche&ensp;</label><br>
                                <input name="categoria4" type="checkbox" class="col-form-label" id="categoria4">
                                <label class="form-check-label" for="categoria4">L'orto&ensp;</label><br>
                                <input name="categoria5" type="checkbox" class="col-form-label" id="categoria5">
                                <label class="form-check-label" for="categoria5">Il fuoco&ensp;</label><br>
                                <input name="categoria6" type="checkbox" class="col-form-label" id="categoria6">
                                <label class="form-check-label" for="categoria6">Il mare&ensp;</label><br>
                                <input name="categoria7" type="checkbox" class="col-form-label" id="categoria7">
                                <label class="form-check-label" for="categoria7">I formaggi&ensp;</label><br>
                            </div>
                            <div name="cat3" style="display:none">
                                <input name="categoria8" type="checkbox" class="col-form-label" id="categoria8">
                                <label class="form-check-label" for="categoria8">I fritti&ensp;</label><br>
                            </div>
                            <div name="cat1" style="display:">
                                <input name="categoria9" type="checkbox" class="col-form-label" id="categoria9">
                                <label class="form-check-label" for="categoria9">Le limited&ensp;</label><br>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <input name="attiva" type="checkbox" class="col-form-label" id="attiva">
                            <label class="form-check-label" for="attiva" style="font-weight: bold;">Attiva</label>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
                        <button type="submit" class="btn btn-primary">Modifica</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modale Modifica Fine-->

    <!-- Modale Aggiungi -->
    <div class="modal fade" id="modaleA" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Aggiungi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="PAGES/aggiungi.php" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nomeA" class="col-form-label" style="font-weight: bold;">Nome:</label>
                            <input name="nome" type="text" class="form-control" id="nomeA" required>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="descrizioneA" class="col-form-label" style="font-weight: bold;">Descrizione:</label>
                            <textarea name="descrizione" class="form-control" id="descrizioneA" required></textarea>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="costoA" class="col-form-label" style="font-weight: bold;">Costo:</label>
                            <input name="costo" type="text" class="form-control" id="costoA" required>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label class="col-form-label" style="font-weight: bold;">Categorie:</label><br>
                            <div name="cat2" style="display:none">
                                <input name="categoria1" type="checkbox" class="col-form-label">
                                <label class="form-check-label" for="categoria1">Le specialità&ensp;</label><br>
                                <input name="categoria2" type="checkbox" class="col-form-label">
                                <label class="form-check-label" for="categoria2">Le classiche&ensp;</label><br>
                                <input name="categoria3" type="checkbox" class="col-form-label">
                                <label class="form-check-label" for="categoria3">Le bianche&ensp;</label><br>
                                <input name="categoria4" type="checkbox" class="col-form-label">
                                <label class="form-check-label" for="categoria4">L'orto&ensp;</label><br>
                                <input name="categoria5" type="checkbox" class="col-form-label">
                                <label class="form-check-label" for="categoria5">Il fuoco&ensp;</label><br>
                                <input name="categoria6" type="checkbox" class="col-form-label">
                                <label class="form-check-label" for="categoria6">Il mare&ensp;</label><br>
                                <input name="categoria7" type="checkbox" class="col-form-label">
                                <label class="form-check-label" for="categoria7">I formaggi&ensp;</label><br>
                            </div>
                            <div name="cat3" style="display:none">
                                <input name="categoria8" type="checkbox" class="col-form-label">
                                <label class="form-check-label" for="categoria8">I fritti&ensp;</label><br>
                            </div>
                            <div name="cat1" style="display:">
                                <input name="categoria9" type="checkbox" class="col-form-label">
                                <label class="form-check-label" for="categoria9">Le limited&ensp;</label><br>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <input name="attiva" type="checkbox" class="col-form-label" id="attivaA">
                            <label class="form-check-label" for="attivaA" style="font-weight: bold;">Attiva</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
                        <button type="submit" class="btn btn-primary">Aggiungi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modale Aggiungi Fine-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
        var tabella=JSON.parse('<?php
        $json;
        $sql = 'SELECT Alimenti.ID,Alimenti.Nome,Alimenti.Ingredienti,Alimenti.Costo,Alimenti.Usata,CategorieAlimenti.ID_Categorie FROM CategorieAlimenti INNER JOIN Alimenti ON CategorieAlimenti.ID_Alimenti=Alimenti.ID ;';
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

        Object.keys(tabella).forEach(function(key) {
            if(tabella[key]["ID_Categorie"][0]==9)
            {
                numero=1;
            }else{
                if(tabella[key]["ID_Categorie"][0]<8){
                    numero=2;
                }else{
                    numero=3;
                }
            } 
            
            if(tabella[key]["Usata"]==0)
                document.getElementById("body"+numero).innerHTML+='<tr onclick="modifica('+key+')" style="display:none;" name="linea'+numero+'" class="table-danger" ><th scope="row" name="nome'+numero+'" >'+tabella[key]["Nome"]+'</th><td>'+tabella[key]["Ingredienti"]+'</td><td>€ '+tabella[key]["Costo"]+'</td></tr>';
            else
                document.getElementById("body"+numero).innerHTML+='<tr onclick="modifica('+key+')" style="display:none;" name="linea'+numero+'"><th scope="row" name="nome'+numero+'" >'+tabella[key]["Nome"]+'</th><td>'+tabella[key]["Ingredienti"]+'</td><td>€ '+tabella[key]["Costo"]+'</td></tr>';


        });
        
    </script>
    <script src="script.js"></script>
  </body>
</html>