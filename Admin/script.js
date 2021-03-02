var vistan=1;
function vista(n){
    if(!$("#vis"+n).hasClass("active")){
        vistan=n;
        classishow(n)
        $("#vis"+n).toggleClass("active")
        $("#menu"+n).show()
        for(i=1;i<=3;i++)
        {
            if(i!=n && $( "#vis"+i ).hasClass("active"))
            {
                $("#vis"+i).toggleClass("active")
                $("#menu"+i).hide()
            }
                
        }
        
    }
    
}
function classihide(){
    for(var i=1;i<=3;i++)
    {
        document.getElementsByName("cat"+i)[0].style.display="none";
        document.getElementsByName("cat"+i)[1].style.display="none";
    }
}
function classishow(n){
    classihide()
    document.getElementsByName("cat"+n)[0].style.display="";
    document.getElementsByName("cat"+n)[1].style.display="";
}

function jsUcfirst(string) 
{
    return string.charAt(0).toUpperCase() + string.slice(1);
}

function Aggiorna(){
    var mess=jsUcfirst(document.getElementById("input").value);
    Tutti()
    if(mess!=""){
        for(i=1;i<=3;i++)
        {
            for(k=0;k<document.getElementsByName("linea"+i).length;k++)
            {
                if(document.getElementsByName("nome"+i)[k].innerHTML.search(mess) < 0)
                {
                    document.getElementsByName("linea"+i)[k].style.display="none";
                }
                    
            }
        }
    }
}

function Tutti(){
    for(i=1;i<=3;i++)
    {
        for(k=0;k<document.getElementsByName("linea"+i).length;k++)
        {
            document.getElementsByName("linea"+i)[k].style.display="";
        }
    }
}

$(document).keyup(function(event) {
    if ($("input").is(":focus") && event.key == "Enter") {
        $('input').blur();
    }
});
$(document).keydown(function(event) {
    if ($("input").is(":focus") && event.key == " ") {
        $('input').blur();
    }
});

function azzera(){
    for(var i=0;i<9;i++){
        document.getElementsByName("categoria"+(i+1))[0].checked=false;
        document.getElementsByName("categoria"+(i+1))[1].checked=false;
    }
}
function modifica(ID){
    document.getElementById("ID").value=ID;
    document.getElementById("nome").value=tabella[ID]["Nome"];
    document.getElementById("descrizione").value=tabella[ID]["Ingredienti"];
    azzera();
    if(!Array.isArray(tabella[ID]["ID_Categorie"])){
        document.getElementById("categoria"+tabella[ID]["ID_Categorie"]).checked=true;
    }else{
        for(var k=0;k<tabella[ID]["ID_Categorie"].length;k++)
        {
            document.getElementById("categoria"+tabella[ID]["ID_Categorie"][k]).checked=true;
        }
    }
    
    document.getElementById("costo").value=tabella[ID]["Costo"];
    if(tabella[ID]["Usata"]==0)
        document.getElementById("attiva").checked=false;
    else
        document.getElementById("attiva").checked=true;
    $('#modaleM').modal('toggle')
}

function AggiungiM(){
    azzera();
    if(vistan==1)
    {
        document.getElementsByName("categoria9")[1].checked=true;
    }
    if(vistan==3)
    {
        document.getElementsByName("categoria8")[1].checked=true;
    }
    $('#modaleA').modal('toggle');
}