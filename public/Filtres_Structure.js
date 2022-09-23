const showName = () => {
    let nom = document.getElementsByClassName("nom");
    let email = document.getElementsByClassName("email");
    let options = document.getElementsByClassName("options");

    for(i=0; i < nom.length; i++) {
        nom[i].style.fontSize = "1.1em";
    }
        for(i=0; i < email.length; i++) {
            email[i].style.fontSize = "0em";
        }
        for(i=0; i < options.length; i++) {
            options[i].style.fontSize = "0em";
        }
}

const showEmail = () => {
    let email = document.getElementsByClassName("email");
    let nom = document.getElementsByClassName("nom");
    let options = document.getElementsByClassName("options");

    for(i=0; i < email.length; i++) {
        email[i].style.fontSize = "1.1em";
    }
        for(i=0; i < nom.length; i++) {
            nom[i].style.fontSize = "0em";
        }
        for(i=0; i < options.length; i++) {
            options[i].style.fontSize = "0em";
        }
}

const showOptions = () => {
    let options = document.getElementsByClassName("options");
    let email = document.getElementsByClassName("email");
    let nom = document.getElementsByClassName("nom");

    for(i=0; i < options.length; i++) {
        options[i].style.fontSize = "1.1em";
    }
        for(i=0; i < nom.length; i++) {
            nom[i].style.fontSize = "0em";
        }
        for(i=0; i < email.length; i++) {
            email[i].style.fontSize = "0em";
        }
}

const showAll = () => {
    let options = document.getElementsByClassName("options");
    let email = document.getElementsByClassName("email");
    let nom = document.getElementsByClassName("nom");

    for(i=0; i < options.length; i++) {
        options[i].style.fontSize = "1em";
    }
    for(i=0; i < nom.length; i++) {
        nom[i].style.fontSize = "1em";
    }
    for(i=0; i < email.length; i++) {
        email[i].style.fontSize = "1em";
    }
}

let buttonName = document.getElementById("name");
buttonName.addEventListener("click", showName);

let buttonEmail = document.getElementById("mail");
buttonEmail.addEventListener("click", showEmail);

let buttonOptions = document.getElementById("option");
buttonOptions.addEventListener("click", showOptions);

let buttonAll = document.getElementById("all");
buttonAll.addEventListener("click", showAll);