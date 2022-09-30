var list_pages = document.querySelector(".list_pages");
var sous_nav = document.querySelector(".sous_nav");

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

