let nom = document.querySelector("#nom");
let prenom = document.querySelector("#prenom");
let email = document.querySelector("#email");
let tel = document.querySelector("#tel");
let cni = document.querySelector("#cni");
let region = document.querySelector("#select2");
let pass = document.querySelector("#password");
let con = document.querySelector("#password2");

email.addEventListener("input", function () {
    if (/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/.test(email.value)) {
        email.style.borderColor = 'green';
        email.style.outline = 'green';
    }
    else {
        email.style.borderColor = 'red';
        email.style.outline = 'red';
    }
});

tel.addEventListener("input", function () {
    let numero = document.getElementById('tel').value;
    if (/^\b6[3|2|5|6|7|8|9][0-9]{7}$/.test(tel.value)) {
        tel.style.borderColor = 'green';
        tel.style.outline = 'green';
    }
    else {
        tel.style.borderColor = 'red';
        tel.style.outline = 'red';
    }
});

cni.addEventListener("input", function () {
    if (/^\b[0-9]{9}$/.test(cni.value)) {
        cni.style.borderColor = 'green';
        cni.style.outligne = 'green';
    }
    else {
        cni.style.borderColor = 'red';
        cni.style.outligne = 'red';
    }
});

con.addEventListener("input", function () {
    if (pass.value == con.value) {
        con.style.borderColor = 'green';
        con.style.outline = 'green';
    }
    else {
        con.style.borderColor = 'red';
        con.style.outline = 'red';
    }
});

document.querySelector("#valider").addEventListener("click", function () {
    console.log(nom.value.length);
    if (nom.value.length < 4) {
        nom.style.borderColor = "red"
        document.querySelector("#erNo").style.display = "block";
        return false;
    }
    if (prenom.value.length < 3) {
        nom.style.borderColor = "red"
        document.querySelector("#erPr").style.display = "block";
        return false;
    }
    if (!(/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/.test(email.value))) {
        email.style.borderColor = "red"
        document.querySelector("#erEm").style.display = "block";
        return false;
    }
    if (!(/^\b6[3|2|5|6|7|8|9][0-9]{7}$/.test(tel.value))) {
        // if (tel.value.length != 9) {
            tel.style.borderColor = "red"
            document.querySelector("#erTe").style.display = "block";
        // }
        return false;

    }
    if (cni.value.length != 9) {
        cni.style.borderColor = "red"
        document.querySelector("#erCn").style.display = "block";
        return false;
    }
    if (region.value == "") {
        region.style.borderColor = "red"
        document.querySelector("#erVi").style.display = "block";
        return false;
    }
    if (pass.value.length < 8) {
        if (!(/[0-9]/.test(pass.value))) {
            pass.style.borderColor = "red"
            document.querySelector("#erPa").style.display = "block";
            return false;
        }
        return false;
    }
})