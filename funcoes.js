function confirmaexcluir(destino,msg,codigo) {
    if (window.confirm(msg)) {
        redirecionar(destino+'\?codigo='+codigo);
    }

}


function redirecionar(destino) { 
    window.location = destino;
}

function limpamsg(idmsg) {
    setTimeout(function () {
        document.getElementById(idmsg).innerHTML = "";
    }, 5000);
}