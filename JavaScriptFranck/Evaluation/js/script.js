function afficherJour () {
    
     let myOption=document.createElement("option");
    myOption.value="";
    myOption.textContent="Choisir jour";
document.querySelector("#jour").appendChild(myOption);
for (let i =1 ; i <=31; i++) {
    let monOption = document.createElement("option");
    monOption.value=i;
    monOption.textContent=(i<10 ) ? "0"+i : i;
    document.getElementById("jour").appendChild(monOption);
}
} 


var tabmois = ["janvier","fevrier","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","decembre"]
document.ge
myOptionMois.value="";
myOptionMois.textContent="Choisir mois";



afficherJour() ;

