
function couleur() {

    let chainecouleur = document.getElementById("txtrouge").value +  document.getElementById("txtvert").value + document.getElementById("txtbleu").value ;

    document.body.setAttribute("style","background-color:#"+chainecouleur);    
    }

let tabelements=document.querySelectorAll("input[type=text]");

tabelements.forEach(item=>{item.addEventListener("blur",function(){couleur();})})