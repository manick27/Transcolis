var requete = new XMLHttpRequest();
var t2 = false;
    document.querySelector("#message").addEventListener("input", function () {
        if (document.querySelector("#message").value.trim().length > 0) {
            t2 = true;
            document.querySelector("#message").setAttribute('style', 'border: 1px solid green');
        } else {
            document.querySelector("#message").setAttribute('style', 'border: 1px solid red');
            t2 = false;
        }
    })
    document.querySelector('form').addEventListener('submit', function (event) {
        event.preventDefault();
        if (t2 == true) {
            // alert("j'envoie le message");
            var corps = encodeURI(document.querySelector('#message').value);
            requete.open('GET', './chat.php?envoye=1&message=' + corps, true);
            requete.onreadystatechange = null;
            requete.send(null);
            document.querySelector("#message").value='';
        }
    });
    // document.querySelector('#env').addEventListener('change', function () {
    //     document.querySelector('#message').innerHTML='';  
    // })
    function have_send() {
        if (requete.status == 200 && requete.readyState == 4) {
            document.querySelector("#reception").innerHTML = requete.responseText;
            // document.querySelector('#a').click();
            setTimeout(load_message, 500);
        }
    }
    window.onload = load_message;
    function load_message() {
        requete.open('GET', './chat.php?read=1', true);
        requete.onreadystatechange = have_send;
        requete.send(null);
    }