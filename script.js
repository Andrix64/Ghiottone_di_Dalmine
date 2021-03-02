function sfondo(){
    var element=document.getElementById("sfondino");
    var w = window.innerWidth;
    if(w>1050){
        element.style.left=((w-1050)/2-9)+"px";
    }else{
        element.style.left="0px"
    }
    element.style.height=(document.body.scrollHeight+25)+"px"
    
}

function jsUcfirst(string) 
{
    return string.charAt(0).toUpperCase() + string.slice(1);
}
function Aggiorna(){
    var mess=jsUcfirst(document.getElementById("input").value).split(" ")[0];
    Tutti()
    if(mess!=""){
        for(i=1;i<=9;i++)
        {
            var t=0;
            for(k=0;k<document.getElementsByName("categoria"+i).length;k++)
            {
                if(document.getElementsByName("alimento"+i)[k].innerHTML.search(mess)<0 && document.getElementsByName("ingredienti"+i)[k].innerHTML.search(mess.toLowerCase())<0 && document.getElementsByName("alimento"+i)[k].innerHTML.search(mess.toLowerCase())<0)
                {
                    document.getElementsByName("categoria"+i)[k].style.display="none";
                    t++;
                }
                if(document.getElementsByName("categoria"+i).length==t)
                {
                    document.getElementsByName("categoria")[i-1].style.display="none";
                }
                
            }
            if(document.getElementsByName("categoria"+i).length==0)
            {
                document.getElementsByName("categoria")[i-1].style.display="none";
            }
            mostra(i,1)
        }
    }else{
        for(i=1;i<=9;i++)
        {
            if(document.getElementsByName("categoria"+i).length == "0")
            {
                document.getElementsByName("categoria")[i-1].style.display="none";
            }
            mostra(i,-1)
        }
    }
}

function Tutti(){
    for(i=1;i<=9;i++)
    {
        for(k=0;k<document.getElementsByName("categoria"+i).length;k++)
        {
            document.getElementsByName("categoria"+i)[k].style.display="";
        }
        document.getElementsByName("categoria")[i-1].style.display="";
    }
}
function mostra(r,tutti){
    var elem=document.getElementsByName("lista")[r-1];
    if(tutti>=0){
        if(elem.style.display=="none")
        {
            elem.style.display="";
            $('#bot'+r).addClass('rotate')
            $('#bot'+r).removeClass('return')
        }else{
            if(tutti==0){
                elem.style.display="none";
                $('#bot'+r).addClass('return')
                $('#bot'+r).removeClass('rotate')
            }
        }
    }else{
        if(elem.style.display!="none")
        {
            elem.style.display="none";
            $('#bot'+r).addClass('return')
            $('#bot'+r).removeClass('rotate')
        }
    }
    
    sfondo()
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