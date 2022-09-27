/* Création de notre fonction showContrat */
const showContrat = () => {
    /* On va chercher ici nos élément de notre DOM html */
    let contract = document.getElementsByClassName("contract");
    let email = document.getElementsByClassName("email");
    let adresse = document.getElementsByClassName("adresse");

    /* Mise en place de notre boucle pour récupérer toutes les lettres des mots 
    et ainsi les faire disparaîtres / apparaîtres (selon la condition) */
    for(i=0; i < contract.length; i++) {
        contract[i].style.fontSize = "1.5em";
    }
        for(i=0; i < email.length; i++) {
            email[i].style.fontSize = "0em";
        }
        for(i=0; i < adresse.length; i++) {
            adresse[i].style.fontSize = "0em";
        }
}

/* Même principe qu'au dessus sauf que l'on change l'élément que l'on va afficher (ici l'email) */
const showEmail = () => {
    let email = document.getElementsByClassName("email");
    let contract = document.getElementsByClassName("contract");
    let adresse = document.getElementsByClassName("adresse");

    for(i=0; i < email.length; i++) {
        email[i].style.fontSize = "1.5em";
    }
        for(i=0; i < contract.length; i++) {
            contract[i].style.fontSize = "0em";
        }
        for(i=0; i < adresse.length; i++) {
            adresse[i].style.fontSize = "0em";
        }
}

const showAdress = () => {
    let adresse = document.getElementsByClassName("adresse");
    let email = document.getElementsByClassName("email");
    let contract = document.getElementsByClassName("contract");

    for(i=0; i < adresse.length; i++) {
        adresse[i].style.fontSize = "1.5em";
    }
        for(i=0; i < contract.length; i++) {
            contract[i].style.fontSize = "0em";
        }
        for(i=0; i < email.length; i++) {
            email[i].style.fontSize = "0em";
        }
}

const showAll = () => {
    let adresse = document.getElementsByClassName("adresse");
    let email = document.getElementsByClassName("email");
    let contract = document.getElementsByClassName("contract");

    for(i=0; i < adresse.length; i++) {
        adresse[i].style.fontSize = "1em";
    }
    for(i=0; i < contract.length; i++) {
        contract[i].style.fontSize = "1em";
    }
    for(i=0; i < email.length; i++) {
        email[i].style.fontSize = "1em";
    }
}

/* On récupère les éléments du DOM html popur ici les définir comme bouton */
let buttonContrat = document.getElementById("contrat");
/* On place une écoute d'évènement qui réagira au clique de la souris et qui (une fois cliqué) 
nous donnera accès à la fonction indiqué dans les parenthèses */
buttonContrat.addEventListener("click", showContrat);

let buttonEmail = document.getElementById("mail");
buttonEmail.addEventListener("click", showEmail);

let buttonAdress = document.getElementById("address");
buttonAdress.addEventListener("click", showAdress);

let buttonAll = document.getElementById("all");
buttonAll.addEventListener("click", showAll);
