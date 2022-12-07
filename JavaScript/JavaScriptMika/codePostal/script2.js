class CodePostaux 
{
    constructor()
    {
        this.url = "zipcodes.json";
        this.json = [];
        this.resultats = [];
    }

    async telechargerJson()
    {
        let response = await fetch(this.url);
        this.json = await response.json();
        console.log(this.json);
    }

    rechercherParCodePostal(valeurARechercher)
    {
        // valeur à rechercher
        for(let i = 0; i < this.json.length; i++) {
            let ville = this.json[i];
        
            /**
             * Recherher toutes les villes dont le nom contient "valeurARechercher"
             */
            if(valeurAChercher === ville.codePostal) {
                console.log(ville.nomCommune + " " + ville.codePostal);
            }
           }
    }

    rechercherParNom()
    {

    }

} // fin classe


var monObjet = new CodePostaux();

await monObjet.telechargerJson();

const btn = document.getElementById("btnValid");
const input = document.getElementById("toto");

btn.addEventListener("click", function() {
    monObjet.rechercherParCodePostal(input.value);
});