function afficherJour() {

    let myOption = document.createElement("option");
    myOption.value = "";
    myOption.textContent = "Choisir jour";
    document.querySelector("#jour").appendChild(myOption);
    for (let i = 1; i <= 31; i++) {
        let monOption = document.createElement("option");
        monOption.value = i;
        monOption.textContent = (i < 10) ? "0" + i : i;
        document.getElementById("jour").appendChild(monOption);
    }
}

afficherJour();

var tabmois = ["janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre"];

function afficherMois() {


    let listemois = document.getElementById("mois");
    let myOptionMois = document.createElement("option");
    myOptionMois.value = "";
    myOptionMois.textContent = "Choisir mois";
    listemois.appendChild(myOptionMois);
    for (let i = 0; i < 12; i++) {
        let myOptionMois = document.createElement("option");
        myOptionMois.value = i + 1;
        myOptionMois.textContent = tabmois[i];
        listemois.appendChild(myOptionMois);
    }

}



afficherMois();


function afficherAnnee() {
    let myDate =new Date();
    let AnneeCourante = myDate.getFullYear();  let myOptionYear = document.createElement("option");
    myOptionYear.value = "";
    myOptionYear.textContent = "Annee naissance";
    document.getElementById("annee").appendChild(myOptionYear);
for (let i = AnneeCourante-70; i < AnneeCourante-18; i++) {
  let optionYear = document.createElement("option");
  optionYear.value=i;
  optionYear.textContent = i;
  document.getElementById("annee").append(optionYear);

}
      

}
afficherAnnee();


//EXercice 2 fonction valNum

function valNum(maChaine) {

    let maSomme=0;
    maChaine=maChaine.toUpperCase();
    for (let i = 0; i < maChaine.length; i++) {
     let position= maChaine.charCodeAt(i)-64;

        maSomme+=position;
    }
    return Number(maSomme);
}



document.querySelector('#UserLastName').addEventListener('blur',function(){console.log(valNum(this.value))});

var tabSigne = ['Capricorne','Verseau','Poisson','Belier','Taureau','Gémaux','Cancer','Lion','Vierge','Balance','Scorpion','Sagittaire'];

function calculSigne(mois){
    return tabSigne[mois-1];
}


function formOK(){
    let verif=false;

    let varNom=document.getElementById("UserFirstName");
    let varPrenom=document.getElementById("UserLastName");
    let varmois=document.getElementById("mois");
    let varJour=document.getElementById('jour');
    let varAnnee=document.getElementById('annee');

    if (varNom.value!="" && varPrenom.value!="" && varmois.value!="" && varJour.value!="" && varAnnee.value!="") {
       
verif=true;

    
    
    }

    return verif;
}  

function calculPseudo(){
     if (formOK()==true)
    { 
     
    let varNom=document.getElementById("UserFirstName");
    let varPrenom=document.getElementById("UserLastName");
    let varmois=document.getElementById("mois");  
        let monPseudo = calculSigne(varmois.value)+((valNum(varNom.value)+valNum(varPrenom.value)));
        document.getElementById("Pseudo").value=monPseudo;
        document.getElementById("Valider").disabled=false;

    }
    else {
        console.log("veuillez remplir tous les champs");
    }

}
let tabtext= document.querySelectorAll("input[type=text]");

tabtext.forEach( element => {element.addEventListener("blur",function(){ 
    console.log("test");
    calculPseudo();
}) } )

let tabSelect = document.querySelectorAll("select");
tabSelect.forEach(item =>{item.addEventListener("change",function(){
    console.log("test2");
    calculPseudo();
})  } )


//cookie
function setCookie(nom, valeur, expiration)
{
//durée vie du Cookie 1heure
document.cookie = 'monCookie=testcookie; ';

}




