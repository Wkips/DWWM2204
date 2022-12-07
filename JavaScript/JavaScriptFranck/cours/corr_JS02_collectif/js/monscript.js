function afficherDate ()
{
     let maDate=new Date();
     let jmois= maDate.getDate();
     let mois= maDate.getMonth()+1;
     let annee= maDate.getFullYear();
    //  if (jmois<10) {

    //     jmois="0"+jmois;}
        jmois=(jmois<10)? "0"+jmois : jmois;
        mois= (mois<10)?"0"+mois :mois;
        let datejour=jmois+'/'+mois+ '/'+ annee;
      return datejour;  
}


var monbtndate=document.querySelector("#btndate");
monbtndate.addEventListener("click", function () { let machaine=afficherDate();
    document.getElementById("txtdate").value=machaine;
});
function afficherHeure()
{
    let monheure= new Date();
    let heure= monheure.getHours();
    let minute =monheure.getMinutes();
    let seconde= monheure.getSeconds();
    heure =(heure<10)?"0"+heure : heure;
    minute= (minute<10)?"0" +minute :minute;
    seconde =(seconde<10)?"0"+seconde:seconde; 

    let chaineheure= heure+ ":" + minute + ":" +seconde;
    document.querySelector("#txtheure").value= chaineheure;   
setInterval(afficherHeure, 1000);

}

document.querySelector("#btnheure").addEventListener("click", afficherHeure);