const showContrat = () => {
    let contract = document.getElementsByClassName("contract");
    let email = document.getElementsByClassName("email");
    let adresse = document.getElementsByClassName("adresse");

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

let buttonContrat = document.getElementById("contrat");
buttonContrat.addEventListener("click", showContrat);

let buttonEmail = document.getElementById("mail");
buttonEmail.addEventListener("click", showEmail);

let buttonAdress = document.getElementById("address");
buttonAdress.addEventListener("click", showAdress);

let buttonAll = document.getElementById("all");
buttonAll.addEventListener("click", showAll);