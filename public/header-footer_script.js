/* création de variables récupérant la sous partie de la bare de navigation de notre header */
var list_pages = document.querySelector(".list_pages");
var sous_nav = document.querySelector(".sous_nav");

/* Fonction permettant d'afficher ou non, notre sous nav dans notre header */
function sidebar() {
    if(list_pages.style.display == "none") {
        list_pages.style.display = "block";
        sous_nav.style.display = "flex";
    }
    else {
        list_pages.style.display = "none";
        sous_nav.style.display = "none";
    }
};

