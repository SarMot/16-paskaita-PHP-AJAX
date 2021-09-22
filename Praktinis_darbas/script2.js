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
    var vardas = document.querySelector("#vardas").value;
    var slapyvardis = document.querySelector("#slapyvardis").value;
    var slaptazodis = document.querySelector("#slaptazodis").value;
    var teises_id = document.querySelector("#teises_id").value;

    var xhttp = new XMLHttpRequest(); //objektas

    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            document.querySelector("#alert-space").innerHTML = this.responseText; // 
        }
    };
    
    xhttp.open("GET", "addUsers.php?vardas=" + vardas + "&slapyvardis=" + slapyvardis + "&teises_id=" + teises_id, true);
    xhttp.send();
    
    showUsers();
});