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


