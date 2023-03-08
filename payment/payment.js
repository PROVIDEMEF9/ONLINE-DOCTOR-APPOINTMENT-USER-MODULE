$(function() {
    $('[data-toggle="tooltip"]').tooltip()
})


function debitCard() {
    var c = document.getElementById("debit");
    var x = document.getElementById("myDiv");
    var z = document.getElementById("apaypal");
    var y = document.getElementById("aupi");
    var a = document.getElementById("cash");
    if (c.style.display === "none") {
        c.style.display = "block";
        x.style.display = "none";
        y.style.display = "none";
        a.style.display = "none"
        z.style.display = "none";
    } else {
        c.style.display = "none";
    }
}

function Cash() {
    var c = document.getElementById("debit");
    var x = document.getElementById("myDiv");
    var z = document.getElementById("apaypal");
    var y = document.getElementById("aupi");
    var a = document.getElementById("cash");
    if (a.style.display === "none") {
        a.style.display = "block";
        y.style.display = "none";
        z.style.display = "none";
        x.style.display = "none";
        c.style.display = "none";
    } else {
        a.style.display = "none";
    }
}
function myFunction() {
    var x = document.getElementById("myDiv");
    var c = document.getElementById("debit");
    var z = document.getElementById("apaypal");
    var y = document.getElementById("aupi");
    var a = document.getElementById("cash");

    if (x.style.display === "none") {
        x.style.display = "block";
        c.style.display = "none";
        z.style.display = "none";
        a.style.display = "none"
        y.style.display = "none";
    } else {
        x.style.display = "none";
    }
}




function PayPal() {
    var c = document.getElementById("debit");
    var x = document.getElementById("myDiv");
    var z = document.getElementById("apaypal");
    var y = document.getElementById("aupi");
    var a = document.getElementById("cash");
    if (z.style.display === "none") {
        z.style.display = "block";
        x.style.display = "none";
        c.style.display = "none";
        a.style.display = "none"
        y.style.display = "none";
    } else {
        z.style.display = "none";
    }
}

function UPI() {
    var c = document.getElementById("debit");
    var x = document.getElementById("myDiv");
    var z = document.getElementById("apaypal");
    var y = document.getElementById("aupi");
    var a = document.getElementById("cash");
    if (y.style.display === "none") {
        y.style.display = "block";
        z.style.display = "none";
        x.style.display = "none";
        c.style.display = "none";
        a.style.display = "none"
    } else {
        y.style.display = "none";
    }
}

