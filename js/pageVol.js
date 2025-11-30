

var btn = document.getElementById("clickdet");
var divdet = document.getElementById("detailVol");
var escale = document.getElementById("nbrescales");
var divscale = document.getElementById("headlessui-disclosure-panel-53");
var prixbtn = document.getElementById("headlessui-disclosure-button-54");
var divprix = document.getElementById("headlessui-disclosure-panel-55");
var btncompagnie = document.getElementById("headlessui-disclosure-button-56");
var divcompagnie = document.getElementById("headlessui-disclosure-panel-57");
var btndepart = document.getElementById("headlessui-disclosure-button-58");
var divdepart = document.getElementById("headlessui-disclosure-panel-59");

btn.addEventListener("click", function () {
    if (divdet.style.display === "none") {
        divdet.style.display = "block";
    } else {
        divdet.style.display = "none";
    }
});
escale.addEventListener("click", function () {
    if (divscale.style.display === "none") {
        divscale.style.display = "block";
    } else {
        divscale.style.display = "none";
    }
});
prixbtn.addEventListener("click", function () {
    if (divprix.style.display === "none") {
        divprix.style.display = "block";
    } else {
        divprix.style.display = "none";
    }
});
btncompagnie.addEventListener("click", function () {
    if (divcompagnie.style.display === "none") {
        divcompagnie.style.display = "block";
    } else {
        divcompagnie.style.display = "none";
    }
});
btndepart.addEventListener("click", function () {
    if (divdepart.style.display === "none") {
        divdepart.style.display = "block";
    } else {
        divdepart.style.display = "none";
    }
});

var detprix = document.getElementById("detailprix");
var detvol = document.getElementById("headlessui-tabs-panel-52");
var btnpri = document.getElementById("headlessui-tabs-tab-51");
var btnvol = document.getElementById("headlessui-tabs-tab-50");

btnpri.addEventListener("click", function () {
    if (detprix.style.display === "none" && detvol.style.display === "block") {
        detprix.style.display = "block";
        detvol.style.display = "none"
    } else {
        detprix.style.display = "none";
        detvol.style.display = "block";
    }
})


btnvol.addEventListener("click", function () {
    if (detprix.style.display === "block" && detvol.style.display === "none") {
        detvol.style.display = "block"
        detprix.style.display = "none";
    } else {
        detvol.style.display = "none";
        detprix.style.display = "block";
    }
})


var list = document.getElementById("headlessui-listbox-options-84");
var btndep = document.getElementById("headlessui-listbox-button-50");

btndep.addEventListener("click", function () {
    if (list.style.display === "none") {
        list.style.display = "block";
    } else {
        list.style.display = "none";
    }
})


// Sélection du bouton de réinitialisation
const resetButton = document.getElementById('resetbtn');

// Ajout d'un écouteur d'événements pour le clic sur le bouton
resetButton.addEventListener('click', function () {
    // Recharger la page
    location.reload();
});


