"use strict";


//tas mygtukas paspaudimo metu isvestu informacija 
//i console log


// document.querySelector("#show").addEventListener("click", function() {
    // console.log("Mygtukas paspaustas");
function showClients() {
    var xhttp = new XMLHttpRequest(); //objektas

    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            document.querySelector("#output").innerHTML = this.responseText; // 
        }
    };

    xhttp.open("POST", "action.php", false);
    xhttp.send();
}

showClients();

// });

document.querySelector("#create").addEventListener("click", function() {

var clientForm = document.querySelector("#clientForm");
clientForm.classList.toggle("d-none");
// jeigu paslepta - atsiranda
// jeigu matoma - pasislepia

document.querySelector("#vardas").value = "";
document.querySelector("#pavarde").value = "";
document.querySelector("#teises_id").value = "";

});

document.querySelector("#createClient").addEventListener("click", function() {
    var vardas = document.querySelector("#vardas").value;
    var pavarde = document.querySelector("#pavarde").value;
    var teises_id =  document.querySelector("#teises_id").value;
    
    //ajax uzklausa
    var xhttp = new XMLHttpRequest(); //objektas

    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            document.querySelector("#alert-space").innerHTML = this.responseText; // 
        }
    };
    //???????
    xhttp.open("GET", "addClient.php?vardas=" + vardas + "&pavarde=" + pavarde + "&teises_id=" + teises_id, true);

    xhttp.send();    

    //paims ir atliks atvaizdavimo uzklausa?
    
    showClients();

    
    // document.querySelector("#output").innerHTML = vardas + " " + pavarde + " " + teises_id;
});    

console.log("Script failas veikia");