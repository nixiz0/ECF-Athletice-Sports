const showEmail = () => {
    let email = document.getElementsByClassName("email");
    let name = document.getElementsByClassName("name");
    let adress = document.getElementsByClassName("adress")
    let not_in_filtre = document.getElementsByClassName("not_in_filtre")

    for(i=0; i < email.length; i++) {
        email[i].style.fontSize = "1.5em";
    }
        for(i=0; i < name.length; i++) {
            name[i].style.fontSize = "0em";
        }
        for(i=0; i < adress.length; i++) {
            adress[i].style.fontSize = "0em";
        }
        for(i=0; i < not_in_filtre.length; i++) {
            not_in_filtre[i].style.fontSize = "0em";
        }
}

const showName = () => {
    let name = document.getElementsByClassName("name");
    let email = document.getElementsByClassName("email");
    let adress = document.getElementsByClassName("adress")
    let not_in_filtre = document.getElementsByClassName("not_in_filtre")

    for(i=0; i < name.length; i++) {
        name[i].style.fontSize = "1.5em";
    }
        for(i=0; i < email.length; i++) {
            email[i].style.fontSize = "0em";
        }
        for(i=0; i < adress.length; i++) {
            adress[i].style.fontSize = "0em";
        }
        for(i=0; i < not_in_filtre.length; i++) {
            not_in_filtre[i].style.fontSize = "0em";
        }
}

const showAdress = () => {
    let adress = document.getElementsByClassName("adress")
    let name = document.getElementsByClassName("name");
    let email = document.getElementsByClassName("email");
    let not_in_filtre = document.getElementsByClassName("not_in_filtre")

    for(i=0; i < adress.length; i++) {
        adress[i].style.fontSize = "1.5em";
    }
        for(i=0; i < name.length; i++) {
            name[i].style.fontSize = "0em";
        }
        for(i=0; i < email.length; i++) {
            email[i].style.fontSize = "0em";
        }
        for(i=0; i < not_in_filtre.length; i++) {
            not_in_filtre[i].style.fontSize = "0em";
        }
}

const showAll = () => {
    let not_in_filtre = document.getElementsByClassName("not_in_filtre")
    let adress = document.getElementsByClassName("adress")
    let name = document.getElementsByClassName("name");
    let email = document.getElementsByClassName("email");

    for(i=0; i < not_in_filtre.length; i++) {
        not_in_filtre[i].style.fontSize = "1em";
    }
        for(i=0; i < adress.length; i++) {
            adress[i].style.fontSize = "1em";
        }
        for(i=0; i < email.length; i++) {
            email[i].style.fontSize = "1em";
        }
        for(i=0; i < name.length; i++) {
            name[i].style.fontSize = "1em";
        }
}

let buttonEmail = document.getElementById("mail");
buttonEmail.addEventListener("click", showEmail);

let buttonName = document.getElementById("nom");
buttonName.addEventListener("click", showName);

let buttonAdress = document.getElementById("address");
buttonAdress.addEventListener("click", showAdress);

let buttonAll = document.getElementById("all");
buttonAll.addEventListener("click", showAll);