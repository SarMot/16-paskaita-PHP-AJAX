"use strict";

//Kompanijoms

function showUsers() {
    var xhttp = new XMLHttpRequest(); //objektas

    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            document.querySelector("#output").innerHTML = this.responseText; // 
        }
    };

    xhttp.open("POST", "actionUsers.php", true);
    xhttp.send();
}


document.querySelector("#user_create").addEventListener("click", function() {
    //pasirinkti elementa kuri norime slepti/parodyti
    //uzteti funkcija togle, kur mums uzdeda/prideda "d-none" klase
    
    var userForm = document.querySelector(".userForm");
    userForm.classList.toggle("d-none");

});

document.querySelector("#createUser").addEventListener("click", function() { 
    var pavadinimas = document.querySelector("#pavadinimas").value;
    var aprasymas = document.querySelector("#aprasymas").value;
    var tipas_id = document.querySelector("#tipas_id").value;

    var xhttp = new XMLHttpRequest(); //objektas

    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            document.querySelector("#alert-space").innerHTML = this.responseText; // 
        }
    };
    
    xhttp.open("GET", "addUsers.php?pavadinimas=" + pavadinimas + "&aprasymas=" + aprasymas + "&tipas_id=" + tipas_id, true);
    xhttp.send();
    
    showUsers();
});