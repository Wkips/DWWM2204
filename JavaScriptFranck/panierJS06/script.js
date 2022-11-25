
function calculPanier() {

    document.getElementById("prix1").value= Number(document.getElementById("qt1").value)*Number(document.getElementById("pu1").value);
    document.getElementById("prix2").value= Number(document.getElementById("qt2").value)*Number(document.getElementById("pu2").value);
    document.getElementById("stotal").value= Number(document.getElementById("prix1").value)+Number(document.getElementById("prix2").value)
    
    }
    function verifNumber(maChaine){
        let maRegex=/^[0-9]+([.][0-9]+)?$/
        if (maRegex.test(maChaine)) { 
            return true;
        } else {
            return false;
         }
    }
    
    
    var tabelements=document.querySelectorAll("input[type=text]");
    
    tabelements.forEach( (item) => { item.addEventListener ("blur",function (){ if (verifNumber(item.value)==true){calculPanier()}
    else {item.value="";item.focus()}
    }) ;
    } )
    
    tabelements.forEach( (item)=> { if (item.className=="forbidden") {
     item.setAttribute("style","background-color:#ccc");
    }})