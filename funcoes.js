function redirecionar(destino) { 
    window.location = destino;
}

function limpamsg(idmsg) {
    setTimeout(function () {
        document.getElementById(idmsg).innerHTML = "";
    }, 5000);
}