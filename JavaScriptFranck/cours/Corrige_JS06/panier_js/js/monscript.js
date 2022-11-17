
function verifnombre(_idchampstext) 
{  
    let verif=false;
    let champtext= document.getElementById(_idchampstext).value;
    if (champtext !="" &&  !isNaN(champtext)==true ) 
    {
      //  console.log(" valeur numerique OK!!");
        verif=true;

    }
    else
    {
       // console.log("veuillez rentrer un nombre!!");
        document.getElementById(_idchampstext).value="";
        document.getElementById(_idchampstext).focus();
    }
    return verif;
 
}




function calculCA(_idchampstext)
{
    let verifnumber= verifnombre(_idchampstext);

   if (verifnumber==true) {
    let ca1=Number(document.querySelector("#pu1").value) * Number(document.querySelector("#qt1").value);
    document.querySelector("#ca1").value=ca1; 
    let ca2=Number(document.querySelector("#pu2").value) * Number(document.querySelector("#qt2").value);
    document.querySelector("#ca2").value=ca2;
    let total=ca1+ca2;
    console.log(total);
    document.querySelector("#total").value=total;
    
    
   } else
   {
  alert("veuiller saisir un nombre SVP!!");

   }
   
 
} 
document.querySelector("#pu1").addEventListener("blur", function () { calculCA("pu1");
    console.log("test2");
    } );

    document.querySelector("#qt1").addEventListener("blur", function () { calculCA("qt1");
    console.log("test2");
    } );
    document.querySelector("#pu2").addEventListener("blur", function () { calculCA("pu2");
    console.log("test2");
    } );
    document.querySelector("#qt2").addEventListener("blur", function () { calculCA("qt2");
    console.log("test2");
    } );

